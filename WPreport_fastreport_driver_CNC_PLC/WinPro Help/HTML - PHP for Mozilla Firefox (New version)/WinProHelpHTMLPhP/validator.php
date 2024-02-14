<?php
	Session_Start(); 
		
	if ($_GET['p']=='destroy') { unset($_SESSION['validate']);}

	if (!isset($_SESSION['validate']))
	{
	    if (isset($_GET['active'])){ ;fnConfirmAccount($_GET['active']); die('');} // Active account..
		if (isset($_POST['username'])){ fncCheckLogin(0);} else { fncFormLogin(); die();}			
	} 

 function fnConfirmAccount($user)
 {	
	$dbHost = 'db457679328.db.1and1.com'; $dbUser = 'dbo457679328'; $dbPass = 'e18blas'; $dbName = 'db457679328';
	$link = mysql_connect($dbHost, $dbUser, $dbPass) or die('error db connexion'); 
	mysql_select_db($dbName) or die('');
	
	$sql = 'UPDATE users SET active = 1 WHERE user = "'.$user.'";';
	$result = mysql_query($sql) or die('error en consulta');
	unset($_GET['active']);
	fncFormLogin(3);
 }
	
 function fncCheckLogin($param)
 {
        $dbHost = 'db457679328.db.1and1.com'; $dbUser = 'dbo457679328'; $dbPass = 'e18blas'; $dbName = 'db457679328';
		$link = mysql_connect($dbHost, $dbUser, $dbPass) or die('error db connexion'); 
		mysql_select_db($dbName) or die('');			  	  

		if ( $param == 0 ) {
			$user = mysql_real_escape_string($_POST["username"]);
			$pass = mysql_real_escape_string($_POST["password"]);
		}
		
		if ( $param == 1 ) {
			$user = mysql_real_escape_string($_GET["u"]);
			$pass = mysql_real_escape_string($_GET["p"]);
			unset($_GET["u"]); unset($_GET["p"]);
		}
		
		$sql = 'SELECT * FROM users WHERE user = "'.$user.'" and pass = "'.$pass.'";';
		$result = mysql_query($sql) or die('error en consulta');//fncFormLogin(1);	
		
		if (mysql_affected_rows() > 0) 
		{
		
		  $f = mysql_fetch_assoc($result);
		  if ($f['active'] == 1) 
		  {		
			  $_SESSION['validate'] = 1;		 	
			  if ($param == 0) { header ("Location: http://www.winpro.fr/winprohelp/secrethelp/index.php");  }
		  } else { fncFormLogin(2); die(); }
	
		}	else { fncFormLogin(1); die();}
	
  }


function fncFormLogin($param)
  {
	echo '
	<title>Winpro Help</title>
	<style type="text/css">
	html {overflow: auto}
	body {background: transparent}
	.error {color: red !important}
	body {margin: 0}
	.frm label {clear: left; float: left; width: 180px; text-align: right; margin: 4px; padding: 2px}
	.frm input {float: left; margin: 4px}
	div#tnc {padding: 2px; line-height: 25px}
	#tnc input {margin: 4px}
	.frm button {margin: 2px 40px}
	.spacer {clear: both}
	h3 {margin: 3px 2px 6px 2px}
	.font {font-family: Verdana; font-size: 14pt; color: #ff6600}
	.font2 {font-family: Verdana; font-size: 8pt; color: #000000}
	.font3 {font-family: Verdana; font-size: 8pt; color: #000000}
	.font4 {font-family: Verdana; font-size: 8pt; color: #ff6600}
	.border {border: 0px solid #000000}
	.centrar {
	background-color: #FF9;
	overflow: hidden;
	position: absolute;
	height: 200px;
	width: 300px;
	left: 50%;
	top: 50%;
	margin-top: -100px;
	margin-left: -150px;
	}
	</style>
	</head>
	<body>
	';
	
	
	
	echo '<div class="centrar" style="width:400px; height:280px; border:1px solid; border-radius:15px;">
	<img src="http://www.winpro.fr/winprohelp/img/logo.png"/ style="padding:20px">
	<form action="index.php" method="post" style="margin: 0">
	<div class="border" style="padding: 12px; width: 80%; margin: 0">';
	
	if ($param == 0) { echo '<h3 class="font">Access</h3>';}
	if ($param == 1) { echo '<h3 class="font">Access error...</h3>'; } 
	if ($param == 2) { echo '<h3 class="font4">Email activation has not been confirmed...</h3>'; }
	if ($param == 3) { echo '<h3 class="font4">Account as been activated.</h3>'; }
	
	echo '
	<label class="font2" style="display: block" for="username">Login:</label>
	<input class="font2" name="username" tabindex="1" id="username" style="width: 100%; color: black">
	<label class="font2" style="display: block" for="password">Password:</label>
	<input class="font2" type="password" name="password" tabindex="2" id="password" style="width: 100%">
	<div style="padding-top: 0px">
	<!-- 
	<a class="font2" target="_top" href="">S\'inscrire</a> |
	<a class="font2" href="">Rétablir le mot de passe</a> 
	--><br> 
	<input type="submit" value="Connexion" class="font3 button" tabindex="3">
	</div>
	</div>
	</form>
	</div>
	</body>';
	}

	
?>	