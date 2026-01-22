<?php
session_save_path("../tmp");
session_start();

$id_session = session_id();
$login = $_POST['login'];
$password = $_POST['password'];

function search_user($login,$su_lna)
{
    include("../includes/db.inc.php");

    $requete = ("select * from user where user ='$login';");
    $resultat = mysql_query($requete,$su_lna) ;

    return mysql_fetch_object($resultat);
}

function seach_session($id_session,$ss_lna)
{
    include("../includes/db.inc.php");
    $requete = ("select id_session, login, temps_limite from sessions where id_session = '$id_session';");
    $resultat = mysql_query($requete,$ss_lna) ;

    return mysql_fetch_object($resultat);
}

function create_session($login, $password, $id_session,$cs_lna)
{
    $o_login = search_user($login,$cs_lna);
    $_SESSION['type'] = $o_login->type;
    $_SESSION['language'] = $o_login->language;

    if (!(is_object($o_login))) {
        displayFormAuth("<div class='message'>Unknown user !</div><br>");
        return false;
    }
    if ($o_login->type != 3) {
        $message = "Not an admin user";
        displayFormAuth("<div class='message'>Not an admin user !</div><br>");
        return false;
    }

    if (!(md5($password) == $o_login->password)) {
        displayFormAuth("<div class='message'>Invalid password !</div><br>");
    }

    if ($o_login->type == 3) {
        $temps_limite = date('U') + 1800;
        $requete = ("insert into sessions values (\"$id_session\",\".$o_login->user.\",$temps_limite);");
    }

    if (! mysql_query($requete,$cs_lna)) {
        echo "Erreur dans la requete : $requete";
        return false;
    }

    return true;
}

function check_session($id_session,$cs_lna)
{
    $o_id_session = seach_session($id_session,$cs_lna);

    if (!(is_object($o_id_session))) {
        return false;
    }

    if ($o_id_session->temps_limite < date('U')) {
        include("../includes/db.inc.php");
        session_destroy();
        unset($_SESSION);
        $requete = ("delete from sessions where id_session=\"$id_session\";");

        if (!mysql_query($requete,$cs_lna)) {
            echo "Erreur dans la requete : $requete !<br>";
        }
        return false;
    }

    return true;
}

function displayFormAuth($message)
{
    include_once("./includes/headeradm.inc.php");
    echo'<h3 align="center">' . idstr('id_0006') . '</h3>
	<br>' . $message . '
	<br>
	<form action="index.php" method="post">
	<table width="318" border="0" align="center" >
  	<tr>
    <td width="126" height="37">' . idstr('id_0004') . ': </td>
    <td width="175"><input name="login" type="text" class="enter" ></td>
  	</tr>
  	<tr>
    <td height="37">' . idstr('id_0005') . ' : </td>
    <td><input name="password" type="password" class="enter"></td>
  	</tr>
  	<tr>
    <td height="68" align="right"><input name="Login" type="submit" value="Login">
    </td>
	<td align="left"><input name="Login" type="reset" value="Reset">
    </td>
  	</tr>
	</table>
	</form>';
    exit;
}
function controlAccess($login, $password, $id_session)
{
	include("./includes/db.inc.php");
	include_once("../includes/classsql.inc.php");
	$logad_ln = new dbconnection($adm_login,$adm_pwd,$adm_server,$adm_db);
    if (check_session($id_session,$logad_ln->sqllinkid)and $_SESSION['type'] == 3){
    	unset($logad_ln);
    	return true;
    }
    else {
        if ($login and $password) {
            create_session($login, $password, $id_session,$logad_ln->sqllinkid);
        } 
        else {
        	unset($logad_ln);
            displayFormAuth('');
        }
    }
}

?>