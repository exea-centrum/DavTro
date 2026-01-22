<?php
$_SESSION['language']=$_GET['language'];
if(file_exists("includes/db.inc.php")){
    
	include("includes/login.php");
	include("includes/fct.inc.php");
	
    controlAccess($login,$password,$id_session);
	
	include_once("includes/header.inc.php");
	if ($_POST['back']) unset($_SESSION['sendaction']);
		if ($_SESSION['type']==1){
			selectdateform();
			calendar();
			}
		elseif ($_SESSION['type']==2 || $_SESSION['type']==3){
			selectdateform();
			calendar();
			}
    	}
else{
     echo"<html>

 <head>
  <title>WinPro</title>

  <meta http-equiv='Content-Type'  content='text/html' name='Author'>

  <link href='css/style.css' rel='stylesheet' type='text/css'>
 </head>

 <body  marginwidth='0' marginheight='0' topmargin='0' leftmargin='0'>

  <table width='100%' border='0' cellspacing='0' cellpadding='0'>
   <tr valign='middle' class='pageheader' >
    <td align='center'>
     <table width='768' border='0' cellspacing='4' align='center'>
      <tr valign='middle'>
       <td width='222' align='left'>
        <img src='./pictures/winpro.png' alt='winpro' width='150' height='100' border='0' >

       </td>
       <td width='336' align='center' class='pagetitle'>
        <h2>winpro</h2>
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

       <td height='60%'>";
    echo '<h1 align="center" class="pagetitle">Welcome to WINPRO !</h1>
          <br>
          <br>
          <p align="center" class="noinit">Page under construction</p>';
   	}
include_once("includes/footer.inc.php");
?>
