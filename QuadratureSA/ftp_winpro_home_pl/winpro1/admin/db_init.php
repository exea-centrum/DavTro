<?php
echo "
<html>

 <head>
  <title>winpro</title>

  <meta http-equiv='Content-Type'  content='text/html' name='Author'>

  <link href='../css/style.css' rel='stylesheet' type='text/css'>
 </head>

 <body  marginwidth='0' marginheight='0' topmargin='0' leftmargin='0'>

  <table width='100%' border='0' cellspacing='0' cellpadding='0'>
   <tr valign='middle' class='pageheader' >
    <td align='center'>
     <table width='768' border='0' cellspacing='4' align='center'>
      <tr valign='middle'>
       <td width='222' align='left'>
        <img src='../pictures/winpro.png' alt='winpro' width='80' height='80' border='0' >

       </td>
       <td width='336' align='center' class='warning'>
        <h2>Site initialisation !</h2>
       </td>
<td width='188'>
     </table>

     </td>
      </tr>
	 </td>
   </tr>
   <tr valign='bottom'><td height='2' bgcolor='#FFFFFF'></td></tr>
   <tr valign='top'>
    <td>
     <table width='600' height='623' border='0' align='center' cellspacing='8'>
      <tr valign='top'>

       <td height='60%'>
";
if (!file_exists("../includes/db.inc.php")) {
	$init_db_login = $_POST['firstlogin'];
	$init_db_password = $_POST['firstpassword'];
	$init_db_host = $_POST['firsthost'];
	$init_db_db = $_POST['firstdb'];

	$connectioncli = mysql_connect($init_db_host, $init_db_login, $init_db_password) or die(mysql_error());
	
	
	if ($_POST['myacces'] == 'newdb') {
		$sql = 'CREATE DATABASE ' . $init_db_db ;
		mysql_query($sql, $connectioncli);
		
	}

	$db_selected = mysql_select_db($init_db_db, $connectioncli);
	if (!$db_selected) {
		die ('Impossible de sélectionner la base de données : ' . mysql_error());
	} 
	
	else {
		if($_POST['myacces'] == 'newdb' || $_POST['myacces'] == 'existingdb') {
			$creattable = 'CREATE TABLE IF NOT EXISTS user (
											 user varchar(30) NOT NULL,
											 customer varchar(80) NOT NULL ,
											 type tinyint NOT NULL default 1,
											 language varchar(25) default "",
											 password varchar(100) NOT NULL,
											 PRIMARY KEY  (user,customer)
											 ) TYPE=MyISAM';
			if (mysql_query($creattable, $connectioncli)) {
				echo 'table user created <br>';
			} else {
				echo 'impossible de créer la table user : ' . mysql_error(), '<br>';
			}
			$creattable = 'CREATE TABLE IF NOT EXISTS id_translation (
											 id_text varchar(30) NOT NULL,
											 polish varchar(150),
											 french varchar(150),
											 english varchar(150),
											 PRIMARY KEY  (id_text)
											 ) TYPE=MyISAM';
			if (mysql_query($creattable, $connectioncli)) {
				echo 'table id_translation created <br>';
			} else {
				echo 'impossible de créer la table user : ' . mysql_error(), '<br>';
			}
			$creattable = 'CREATE TABLE IF NOT EXISTS planning (
											 numorder varchar(16),
											 reference varchar(80),
											 customer varchar(80),
											 dateorder date,
											 dateproduction date,
											 datedelivery date,
											 productionlength float(8,2),
											 deliveryinstruction mediumtext,
											 PRIMARY KEY  (numorder)
											 ) TYPE=MyISAM ';
			if (mysql_query($creattable, $connectioncli)) {
				echo 'table order created <br>';
			} else {
				echo 'impossible de créer la table order : ' . mysql_error(), '<br>';
			}
			$creattable = 'CREATE TABLE IF NOT EXISTS sessions (
							  id_session varchar(40) NOT NULL default "",
							  login varchar(10) NOT NULL default "",
							  temps_limite decimal(10,0) NOT NULL default "0",
							  PRIMARY KEY  (id_session)
							  ) TYPE=MyISAM';
			if (mysql_query($creattable, $connectioncli)) {
				echo 'table session created <br>';
			} else {
				echo 'impossible de créer la table session : ' . mysql_error(), '<br>';
			}
			$creattable = 'CREATE TABLE settings (
                                       section varchar(40) NOT NULL default "",
                                       sectionkey varchar(60) NOT NULL default "",
                                       i int(11) UNSIGNED default 0,
                                       c varchar(45) default"",
                                       PRIMARY KEY(section, sectionkey)
                                       )TYPE = MYISAM';
			if (mysql_query($creattable, $connectioncli)) {
				echo 'table settings created <br>';
			} else {
				echo 'impossible de créer la table settings : ' . mysql_error(), '<br>';
			}
	}
	}
	if ($_POST['myacces'] != 'updatesite'){
		$settings = 'insert into settings (section,sectionkey,i) values("user","customer",0)';
		$initsettings = mysql_query($settings, $connectioncli);
		$settings = 'insert into settings (section,sectionkey,i) values("user","employee",0)';
		$initsettings = mysql_query($settings, $connectioncli);
		$settings = 'insert into settings (section,sectionkey,i) values("user","admin",0)';
		$initsettings = mysql_query($settings, $connectioncli);
		$settings = 'insert into settings (section,sectionkey,i) values("max_point","max_day",200)';
		$initsettings = mysql_query($settings, $connectioncli);
		$settings = 'insert into settings (section,sectionkey,i,c) values("language","french",1,"fr.png")';
		$initsettings = mysql_query($settings, $connectioncli);
		$settings = 'insert into settings (section,sectionkey,i,c) values("language","polish",1,"pl.png")';
		$initsettings = mysql_query($settings, $connectioncli);
		$settings = 'insert into settings (section,sectionkey,i,c) values("language","english",1,"uk.png")';
		$initsettings = mysql_query($settings, $connectioncli);
		$settings = 'insert into settings (section,sectionkey,i,c) values("default_language","english",0,"")';
		$initsettings = mysql_query($settings, $connectioncli);

		$trans = fopen('./includes/init_translation.txt', 'a+');

		while ($tab = fgetcsv($trans, 800, "|")) {
			$InsTrans = 'Insert into id_translation ( id_text,polish,french,english) values("';
			$num = count($tab);
			for ($i = 0; $i < $num; $i++) {
				if ($i < $num - 1) {
					$InsTrans = $InsTrans . $tab[$i] . '","';
				} else {
					$InsTrans = $InsTrans . $tab[$i];
				}
			}
			$InsTrans = $InsTrans . '");';
			$InsTransQuery = mysql_query($InsTrans, $connectioncli);
			
		}
		fclose($trans);
	}

	if ($_POST['myacces'] == 'newdb') {
		$InitMyUser = "GRANT SELECT,UPDATE,INSERT,DELETE ON $_POST[firstdb].* TO \"WPDBPHP\"@\"%\" IDENTIFIED BY \"lB56HTGdq54qf9\"";
		$InitMyUserA = "GRANT ALTER ON $_POST[firstdb].id_translation TO \"OknoplastPHP\"@\"%\" IDENTIFIED BY \"lB56HTGdq54qf9\"";
		if (mysql_query($InitMyUser, $connectioncli) && mysql_query($InitMyUserA, $connectioncli)) {
			echo 'user for PHP created<br>';
		} else {
			echo 'erreur ' . mysql_error();
		}
		$createdbuser = "WPDBPHP";
		$createdbpassword = "lB56HTGdq54qf9";
	}
	else {
		$createdbuser = $init_db_login;
		$createdbpassword = $init_db_password;
	}

	$config = "<?php
\$adm_login=\"$createdbuser\";
\$adm_pwd=\"$createdbpassword\";
\$adm_server=\"$_POST[firsthost]\";
\$adm_db =\"$_POST[firstdb]\";
?>";
	$fileconf = fopen("../includes/db.inc.php", "w");
	fwrite($fileconf, $config);
	fclose($fileconf);
	$fileconfa = fopen("./includes/db.inc.php", "w");
	fwrite($fileconfa, $config);
	fclose($fileconfa);
	
	if ($_POST['myacces'] != 'updatesite'){

		echo'You must create now an administrator account for this site<br>';
		echo 'Enter a new login and password : <br><br>';
		echo'<form  method="post">
		<table width="318" border="0" align="center" >
		<tr>
		<td width="126" height="37">Login : </td>
		<td width="175"><input name="loginwpc" type="text" class="enter" ></td>
		</tr>
		<td width="126" height="37">Language : </td>
		<td width="175"><select name="language">
	    <option value=""></option>
		<option value="polish">Polish</option>
		<option value="french">French</option>
		<option value="english">English</option>
		</select>
	    </td>
		</tr>
		<tr>
		<td height="37">Password  : </td>
		<td><input name="confpasswordwpc" type="password" class="enter"></td>
		</tr>
		<tr>
		<td height="37">Confirm password : </td>
		<td><input name="passwordwpc" type="password" class="enter"></td>
		</tr>
		<tr>
		<td height="68" align="right"><input name="Login" type="submit" value="Create">
		</td>
		<td align="left"><input name="Login" type="reset" value="Reset">
		</td>
		</tr>
		</table>
		</form>';
	}
	else{
		echo "Site updated <br /><br />";
		echo '<form  method="post" action="index.php">
		<input name="start" type="submit" value="Begin a session">';
	}
}

else {
	if (isset($_POST[loginwpc], $_POST[passwordwpc], $_POST[passwordwpc]) && ($_POST[passwordwpc] == $_POST[passwordwpc])) {
		$NewAdminPwd = md5($_POST[passwordwpc]);
		include_once("../includes/db.inc.php");
		include_once("../includes/classsql.inc.php");
		$dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
		$CreateAdmin = ("insert into user (user,customer,type,language,password)
	                values (\"$_POST[loginwpc]\",\"Aokpl-1\",3,\"$_POST[language]\",\"$NewAdminPwd\")");
		if ($resultat = mysql_query($CreateAdmin,$dlink->sqllinkid)) {
			$updsettings = ("update settings set i = i + 1 where section ='user' and sectionkey ='admin';");
			$resultat = mysql_query($updsettings,$dlink->sqllinkid);
			echo 'user ' . $_POST[loginwpc] . ' créé.<br><br>';
			echo '<form  method="post" action="index.php">
		<input name="start" type="submit" value="Begin a session">';
		}
		unset($dlink);
		#mysql_close($Link1);
	}
}

?>

<?php
include_once("includes/footeradm.inc.php");

?>