<?php

if (file_exists("./includes/db.inc.php")) {
    // include_once('../includes/db.inc.php');
    include("./includes/id.inc.php");
    include("./includes/loginadm.php");

    controlAccess($login, $password, $id_session);
    include_once("includes/headeradm.inc.php");
    if (isset($_POST['back'])) unset($_SESSION['sendaction']);
    echo"
	<br>
	<div align='center'>
	<table width='400' border='0' class='tabgen'>
	<form action='site_admin.php' method='post'>
	  <tr>
		<td colspan='2' class='tabadmtitle'>" . idstr('id_0011') . "</td>
	  </tr>
	  <tr>
		<td width='54'><input name='choice' type='radio' value='AU'></td>
		<td width='285'>" . idstr('id_0012') . "</td>
	  </tr>
	  <tr>
		<td><input name='choice' type='radio' value='SU'></td>
		<td>" . idstr('id_0013') . "</td>
	  </tr>
	  <tr>
		<td><input name='choice' type='radio' value='MU'></td>
		<td>" . idstr('id_0014') . "</td>
	  </tr>
	  <tr>
		<td colspan='2' class='tabmiddle'>" . idstr('id_0010') . "</td>
	  </tr>
	  <tr>
		<td><input name='choice' type='radio' value='AL'></td>
		<td>" . idstr('id_0015') . "</td>
	  </tr>

	  <tr>
		<td><input name='choice' type='radio' value='ML'></td>
		<td>" . idstr('id_0016') . "</td>
	  </tr>
	  <tr>
		<td><input name='choice' type='radio' value='MT'></td>
		<td>" . idstr('id_0017') . "</td>
	  </tr>
	  <tr>
		<td><input name='choice' type='radio' value='MP'></td>
		<td>" . idstr('id_0018') . "</td>
	  </tr>
	  <tr>
		<td colspan='2' class='tabadmfooter'><input name='sendadm' type='submit' value=" . idstr('id_0019') . "></td>
	  </tr>
	  </form>
	</table>
	</div>
	";
} else {
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
    echo '<h1 align="center" class="pagetitle">First use!</h1>
	      <br>
		  <p class="attention">For using this site, you need to initialize it!</p>
		  <p class="attention">Would you agree to do that now?</P>

		  <form action="site_init.php" method="post" name="siteinit">
		  <table width="500" border="0">
          <tr>
          <td width="242">
		  <label>
          <input type="radio" name="initchoice" value="Continue" checked>
          Continue</label>
		  </td>
          <td width="242" rowspan="2" valign="middle">
		  <input name="Initalize" type="submit" value="Ok">
		  </td>
          <tr>
          <td>
		  <label>
          <input type="radio" name="initchoice" value="Later">
          Later</label></td>
          </tr>
          </table>
          </form>';
}

?>
<?php
include_once("includes/footeradm.inc.php");

?>