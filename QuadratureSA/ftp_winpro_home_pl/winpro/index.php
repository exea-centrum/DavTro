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
    include_once("includes/header.inc.php");
	echo '<h1 align="center" class="pagetitle">Welcome to OKNOPLAST !</h1>
          <br>
          <br>
          <p align="center" class="noinit">Page under construction</p>
          <br>
          <p align="center" class="noinit">In the future, with our new web interface you will can follow your order evolution.</p>';
	}
include_once("includes/footer.inc.php");
?>
