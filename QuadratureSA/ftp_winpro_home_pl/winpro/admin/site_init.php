<?php
echo "
<html>

 <head>
  <title>WINPRO</title>

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
        <img src='../pictures/winpro.png' alt='WINPRO' width='250' height='80' border='0' >

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
if ($_POST['initchoice'] == "Continue") {
    echo'
	<br>
	<br>

	<form action="db_init.php" method="post" name="firstlog"><table width="551" border="1">
	  <tr>
		<td width="269">Login :</td>
		<td width="266"><input name="firstlogin" type="text" value=""></td>
	  </tr>
	  <tr>
		<td>Password :</td>
		<td><input name="firstpassword" type="password" value=""></td>
	  </tr>
	  <tr>
		<td>Host :</td>
		<td><input name="firsthost" type="text" value=""></td>
	  </tr>
	  <tr>
		<td>Database :</td>
		<td><input name="firstdb" type="text" value=""></td>
	  </tr>
	  <tr>
		<td>I\'ve total control of server, I can create new database and MySQL User </td>
		<td><input type="radio" name="myacces" value="newdb"></td>
	  </tr>
	  <tr>
		<td>I\'m using an existing database and user </td>
		<td><input type="radio" name="myacces" value="existingdb"></td>
	  </tr>
	  <tr>
		<td>Update </td>
		<td><input type="radio" name="myacces" value="updatesite" checked></td>
	  </tr>
	  <tr>
		<td colspan="2" align="center"><input name="Send" type="submit" value="Ok"></td>
		</tr>
	</table>
	</form>';
} else {
    echo "<br><br><br><div align='center><h3>See you later!</h3></div>";
}

?>

<?php
include_once("includes/footeradm.inc.php");

?>