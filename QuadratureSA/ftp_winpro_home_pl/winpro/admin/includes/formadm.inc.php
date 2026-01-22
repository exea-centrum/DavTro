<?php
include("./includes/db.inc.php");
include_once("../includes/classsql.inc.php");

function createuserform($typec, $typee, $typea, $user, $code, $password, $confpassword)
{
	echo "
	<form action='' method='post' enctype='multipart/form-data' name='datauser'>
	<table width='620' border='0' class='tabgen'>
	<tr>
    <td colspan='4' class='tabadmtitle'>" . idstr('id_0012') . "</td>
    </tr>
    <tr>
    <td width='115' class='tabbdl'><label>Type :</label></td>
    <td width='115'><input type='radio' name='typeuser' value='customer' $typec><label>" . idstr('id_0027') . "</label></td>
    <td width='115'><input type='radio' name='typeuser' value='employee' $typee><label>" . idstr('id_0028') . "</label></td>
    <td width='202'><input type='radio' name='typeuser' value='admin' $typea><label>" . idstr('id_0029') . "</label></td>
    </tr>
    <tr>
    <td colspan='2' class='tabbdl'><label>" . idstr('id_0004') . ":</label>&nbsp;</td>
    <td colspan='2'><input type='text' name='user' value=\"$user\" size='60'></td>
    </tr>
    <tr>
    <td colspan='2' class='tabbdl'>" . idstr('id_0021') . " :</td>
    <td colspan='2'><input type='text' name='code' value=\"$code\" size='60'></td>
    </tr>
	<tr>
    <td colspan='2' class='tabbdl'>" . idstr('id_0022') . ":</td>
    <td colspan='2'><select name='language' class='lstuser'>
	<option value=''></option>";
	$flink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);	
    $request = ("select sectionkey from settings where section='language';");
    $result = mysql_query($request,$flink->sqllinkid);
    unset($flink);
    while ($row = mysql_fetch_assoc($result)) {
        echo "<option value=$row[sectionkey]>$row[sectionkey]</option>";
    }
    mysql_free_result($result);
	
    echo"</select>
	</td>
    </tr>
    <tr>
    <td colspan='2' class='tabbdl'>" . idstr('id_0005') . " :</td>
    <td colspan='2'><input type='password' name='password'  value=\"$password\" size='60'></td>
    </tr>
    <tr>
    <td colspan='2' class='tabbdl'>" . idstr('id_0023') . " :</td>
    <td colspan='2'><input type='password' name='confpassword' value=\"$confpassword\" size='60'></td>
    </tr>
    <tr>
    <td colspan='4' class='tabadmfooter'><input type='submit' name='Submit' value=" . idstr('id_0024') . ">
    <input type='submit' name='Reset' value=" . idstr('id_0025') . "></td>
    </tr>
	</form>
	<tr>
	<form action='index.php' method='post'>

    <td colspan='4' class='tabadmfooter'><input name='back' type='hidden' value='back' checked><input type='submit' name='Home' value=" . idstr('id_0026') . " ></td>
    </form>
	</tr>
	</table>";
    
}

function selectuserform($typeaction, $buttonaction)
{
    echo "
	<form action='' method='post' enctype='multipart/form-data' name='datauser'>
	<table width='600' border='0' class='tabgen'>
	<tr>
    <td  class='tabadmtitle'>$typeaction</td>
    </tr>
	<tr>
    <td class='tabbdl'><label>" . idstr('id_0004') . " :</label>
	<select name='userlogin' class='lstuser' >
	<option value=''></option>";
    $flink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);	
    $request = ("select user from user;");
    $result = mysql_query($request,$flink->sqllinkid);
    while ($row = mysql_fetch_assoc($result)) {
        echo "<option value=$row[user]>$row[user]</option>";
    }
    mysql_free_result($result);
    unset($flink);
    echo "
	</select>
	</td>
    </tr>

	<tr>
    <td  class='tabadmfooter'><input type='submit' name='Submit' value=$buttonaction>
    </td>
    </tr>
	</form>
	<tr>
	<form action='index.php' method='post'>
	<td colspan='2' class='tabadmfooter'><input name='back' type='hidden' value='back' checked><input type='submit' name='Home' value=" . idstr('id_0026') . " ></td>
    </form>
    </table>
    </form>";
}
function updateuserform($typec, $typee, $typea, $user, $code, $language, $inputtype)
{
    echo "
	<form action='' method='post' enctype='multipart/form-data' name='datauser'>
	<table width='600' border='0' class='tabgen'>
	<tr>
    <td colspan='4' class='tabadmtitle'>" . idstr('id_0014') . "</td>
    </tr>
    <tr>
    <td width='115' class='tabbdl'><label>Type :</label></td>
    <td width='115'><input type='radio' name='typeuser' value='customer'  $typec><label>" . idstr('id_0027') . "</label></td>
    <td width='115'><input type='radio' name='typeuser' value='employee' $inputtype $typee><label>" . idstr('id_0028') . "</label></td>
    <td width='202'><input type='radio' name='typeuser' value='admin'  $inputtype $typea><label>" . idstr('id_0029') . "</label></td>
    </tr>
    <tr>
    <td colspan='2' class='tabbdl'><label>" . idstr('id_0004') . " :</label>&nbsp;</td>
    <td colspan='2'><input type='text' name='user' value=\"$user\" readonly='true' size='60'></td>
    </tr>
    <tr>
    <td colspan='2' class='tabbdl'>" . idstr('id_0021') . " :</td>
    <td colspan='2'><input type='text' name='code' value=\"$code\" readonly='true' size='60'></td>
    </tr>
	<tr>
    <td colspan='2' class='tabbdl'>" . idstr('id_0022') . ":</td>
    <td colspan='2'><select name='language' class='lstuser'>
	<option value=\"$language\">$language</option>";
	$flink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);	
    $request = ("select sectionkey from settings where section='language';");
    $result = mysql_query($request,$flink->sqllinkid);
    unset($flink);
    while ($row = mysql_fetch_assoc($result)) {
        echo "<option value=$row[sectionkey]>$row[sectionkey]</option>";
    }
    mysql_free_result($result);
	
    echo"</select>
	</td>
    </tr>
    <tr>
    <td colspan='2' class='tabbdl'>" . idstr('id_0005') . " :</td>
    <td colspan='2'><input type='password' name='password'  value='' size='60'></td>
    </tr>
    <tr>
    <td colspan='2' class='tabbdl'>" . idstr('id_0023') . " :</td>
    <td colspan='2'><input type='password' name='confpassword' value='' size='60'></td>
    </tr>
    <tr>
    <td colspan='4' class='tabadmfooter'><input type='submit' name='Submit' value=" . idstr('id_0032') . ">
    </td>
    </tr>
	</table>";
}
function createlanguageform()
{
    echo "
	<form action='' method='post' enctype='multipart/form-data' name='datalg'>
	<table width='600' border='0' class='tabgen'>
	<tr>
    <td colspan='2' class='tabadmtitle'>" . idstr('id_0015') . "</td>
    </tr>
    <tr>
    <td  class='tabbdl'><label>" . idstr('id_0022') . " :</label></td>
    <td ><input type='text' name='lang' value='' size='60'></td>
    </tr>
    <tr>
    <td  class='tabbdl'>" . idstr('id_0033') . " :</td>
    <td >
	<select name='flag' class='lstuser' >
	<option value='none'></option>";
    $dir = dir('../pictures/flags/');
    while ($file = $dir->read()) {
        if ($file != '.' && $file != '..') {
            echo "<option value=\"$file\" style=\"background-image:url(../pictures/flags/$file); background-repeat:no-repeat;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$file</option>";
        }
    }
    $dir->close();
    echo "
	</select>
	</td>
    </tr>
	<tr>
    <td colspan='4' class='tabadmfooter'><input type='submit' name='Submit' value=" . idstr('id_0024') . ">
    <input type='submit' name='Reset' value=" . idstr('id_0025') . "></td>
    </tr>
	</form>
	<tr>
	<form action='index.php' method='post' '>

    <td colspan='4' class='tabadmfooter'><input name='back' type='hidden' value='back' checked><input type='submit' name='Home' value=" . idstr('id_0026') . " ></td>
    </form>
	</tr>
	</table>";
}

function updatelanguageform()
{
    echo"<table width='500' border='0' class='tabgen'>

    <tr>
      <td colspan='3' class='tabadmtitle'>" . idstr('id_0016') . "</td>
    </tr>
    <tr >
      <td class='tabsubtitle'>" . idstr('id_0022') . "</td>
      <td class='tabsubtitle'>" . idstr('id_0034') . "</td>
      <td class='tabsubtitle'>" . idstr('id_0033') . "</td>

    </tr>
	<form action='' method='post' name='langgen'>";
    $flink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);	
    $request = ("select * from settings  where section='language';");
    if ($result = mysql_query($request,$flink->sqllinkid)) {
    	unset($flink);
        while ($row = mysql_fetch_assoc($result)) {
            echo "
		<tr align='center' valign='middle'>
		<td><label>$row[sectionkey]</label></td>
		<td ><input name=\"active_$row[sectionkey]\" type='checkbox' value='1'";
            if ($row['i'] == 1) {
                echo"checked";
            }
            echo"
		></td>
		<td>
		<select name=\"flag_$row[sectionkey]\" >";
            $dir = dir('../pictures/flags/');
            while ($file = $dir->read()) {
                if ($file != '.' && $file != '..') {
                    echo "<option value=\"$file\" style=\"background-image:url(../pictures/flags/$file); background-repeat:no-repeat;\"";
                    if ($file == $row['c']) echo "selected";
                    echo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$file</option>";
                }
            }
            $dir->close();
            echo "
	    </select><img src=\"../pictures/flags/$row[c]\">
		</td>
		</tr>";
        }
    }
    mysql_free_result($result);
	
    echo"
	<tr>
    <td colspan='3' class='tabadmfooter'>
	<input name='updlg' type='hidden' value='majlg'>
	<input type='submit' name='reclg' value=" . idstr('id_0032') . ">
    </td>
    </tr>
	</form>
    <tr>
	<form action='index.php' method='post'>
	  <td colspan='3' class='tabadmfooter'>
	    <input name='back' type='hidden' value='back' checked>
	    <input type='submit' name='Home' value=" . idstr('id_0026') . " >
	  </td>
    </form>
	</tr>
    </table>";
}

function updatetrchoiceform()
{
    echo"<table width='500' border='0' class='tabgen'>

    <tr>
      <td colspan='2' class='tabadmtitle'>" . idstr('id_0017') . "</td>
    </tr>
    <tr >
      <td class='tabsubtitle'>" . idstr('id_0022') . "</td>
      <td class='tabsubtitle'>" . idstr('id_0038') . "</td>
    </tr>";
    $flink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);	
    $request = ("select * from settings  where section='language';");
    if ($result = mysql_query($request,$flink->sqllinkid)) {
    	unset($flink);
        while ($row = mysql_fetch_assoc($result)) {
            echo "
		<tr align='center' valign='middle'>
		<td><label>$row[sectionkey]</label></td>
		<td>
		<form action='' method='post' name='langtransl'>
		<input name='updtransl' type='hidden' value=$row[sectionkey]>
		<input name='transl' type='submit' value=" . idstr('id_0017') . ">
		</form>
		</td>
		</tr>";
        }
    }
    mysql_free_result($result);
	
    echo"
	<form action='index.php' method='post'>
	  <td colspan='4' class='tabadmfooter'>
	    <input name='back' type='hidden' value='back' checked>
	    <input type='submit' name='Home' value=" . idstr('id_0026') . " >
	  </td>
    </form>
	</tr>
    </table>";
}

function updatetranslationform()
{
    echo "<table width='800' border='0' class='tabgen'>
	<tr>
      <td colspan='2' class='tabadmtitle'>" . idstr('id_0017') . "</td>
    </tr>
    <tr >
      <td class='tabsubtitle'>$_SESSION[language]</td>
      <td class='tabsubtitle'>$_POST[updtransl]</td>
    </tr>
	<form action='' method='post'>";
    $userL = $_SESSION['language'];
    $totrans = $_POST['updtransl'];
    $flink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);	
    $request = ("select id_text,$_SESSION[language],$_POST[updtransl] from id_translation");
    if ($result = mysql_query($request,$flink->sqllinkid)) {
        $cptrow = 1;
        while ($row = mysql_fetch_assoc($result)) {
            echo"<tr>
			<td width='50%'><input name=\"$cptrow\" type='text' value=\"$row[$userL]\" readonly='true' size='60'></td>
			<td width='50%'><input name=\"$row[id_text]\" type='text' value=\"$row[$totrans]\" size='60'></td>
			</tr>";
            $cptrow++;
        }
        mysql_free_result($result);
        unset($flink);
    }

    echo"
	<tr>
    <td colspan='2' class='tabadmfooter'>
	<input name='maj' type='hidden' value=\"$totrans\" checked><input type='submit' name='Submit' value=" . idstr('id_0032') . ">
    </td>
    </tr>
	</form>
	<form action='index.php' method='post'>
	  <td colspan='4' class='tabadmfooter'>
	    <input name='back' type='hidden' value='back' checked>
	    <input type='submit' name='Home' value=" . idstr('id_0026') . " >
	  </td>
    </form>
	</table>";
}

function updatepointform()
{
    echo "
		<form action='' method='post' enctype='multipart/form-data' name='datauser'>
		<table width='600' border='0' class='tabgen'>
		<tr>
		<td  class='tabadmtitle'>" . idstr('id_0018') . "</td>
		</tr>
		<tr>
		<td align='center'><label>" . idstr('id_0044') . " :</label>	";
	$flink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);	
    $request = ("select i from settings where section='max_point' and sectionkey='max_day';");
    $result = mysql_query($request,$flink->sqllinkid);
    while ($row = mysql_fetch_assoc($result)) {
        echo "<input name='maxday' type='text' value=$row[i]>";
    }
    mysql_free_result($result);
    unset($flink);
    echo "
		</td>
		</tr>

		<tr>
		<td  class='tabadmfooter'><input type='submit' name='Submit' value=" . idstr('id_0032') . ">
		</td>
		</tr>
		</form>
		<tr>
		<form action='index.php' method='post'>
		<td class='tabadmfooter'><input name='back' type='hidden' value='back' checked><input type='submit' name='Home' value=" . idstr('id_0026') . " ></td>
		</tr>
		</form>
		</table>
		</form>";
}

?>