<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Exponential","Exponentielle","Exponenten"];
WPlangInit(WinProHelpAvailableLanguages);
// Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?exponentielle.php"; }
else { parent.quicksync('a2.4.1.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"> </script>

<title>Exponentielle</title>
<meta name="keywords" content="Exponentielle">
<meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;"onload="AddTitleAndLangFlags();highlight();">

<div id="hmpopupDiv"style="visibility:hidden; position:absolute; z-index:1000;"></div>

<table width="100%" border="0" cellspacing="0" cellpadding="5"bgcolor="#FF8000">
    <tr valign="middle">
      <td align="left">
	    <p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;"> </span></p>
        <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
      </td>
      <td align="center">
        <div id="langflags">
        </div>
      </td>
      <td align="right"><span style="font-size: 9pt">
	    <a href="introduction.php">Top</a>  
	    <a href="carre.php">Previous</a>  
	    <a href="logarithme_decimal.php">Next</a> 
	    </span> 
	  </td>
    </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>The opposite function of the natural logarithm. It brings number <span style="font-style: italic;">e</span> to the power passed as parameter.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 36px;"><span class="f_Variables" style="font-weight: bold;">Exponential (value)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Exponential (1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># result is now </span><span class="f_Variables">2.718281828</span></p>
<p><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p></p>

        <p>Cette fonction est l'inverse du logarithme
        naturel. Elle élève le nombre e à la puissance donnée en
        paramètre.</p>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Syntaxe:</span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">Exponentielle (valeur)</span></p>

        <p class="p_Interligne"><span
        class="f_Interligne"> </span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Exemple:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">resultat := Exponentielle (1)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># resultat vaut 2.718281828</span></p>


        <p style="margin: 0px 0px 0px 24px;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</span>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>De tegenovergestelde functie van een natuurlijke logaritme. Het geeft het nummer <span style="font-style: italic;">e</span> tot de macht als parameter.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 36px;"><span class="f_Variables" style="font-weight: bold;">Exponential (waarde)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Exponential (1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultaat is </span><span class="f_Variables">2.718281828</span></p>
<p><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>
</body>
</html>
