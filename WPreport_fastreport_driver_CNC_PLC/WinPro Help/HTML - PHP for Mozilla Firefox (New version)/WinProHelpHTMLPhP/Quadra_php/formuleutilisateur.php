<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["User Formula","Formule utilisateur"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?formuleutilisateur.php"; }
else { parent.quicksync('a3.6'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Formule utilisateur</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Utilisateur" />
   <meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
   <meta http-equiv="Content-Style-Type" content="text/css" />
   <link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload=" AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="formuledesite.php">Previous</a>&nbsp;
     <a href="formuleclient.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>
<p>You can define a formula for each WinPro user. This formula is defined in the user definition dialog.</p>
<p>You can use these formulas to grant or revoke each user some specific rights. E.g., you could define a variable which allows or not the user to go beyond the standard dimension limits.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Normal user formula:</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">_DimensionBeyondStandard := False()</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Super user formula:</span></p>
<p style="margin: 0px 0px 0px 57px;"><span class="f_Variables">_DimensionBeyondStandard := True()</span></p>
<p style="margin: 0px 0px 0px 57px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Fitting formula:</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">if width &gt; 1200 </span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">  &nbsp;if _DimensionBeyondStandard</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">  &nbsp; &nbsp; Message Fitting beyond dimension</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">  &nbsp;else</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">  &nbsp; &nbsp; Fail Fitting beyond dimension</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">  &nbsp;end if</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">end if</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Notes</span><span style="text-decoration: underline;">:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="color: #000000;">This is a simplified example. For complete functionality, you will also need to use question formulas, to store an identifier for the user.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="color: #000000;">The user formula is executed at the start of the window computation, immediately after the site formula. See the page on  <a href="ordrecalcul.php">Computation order</a> for more information.</span></p>
</td></tr></table></div></td>
</tr>
</table>
</div>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Vous pouvez définir une formule utilisateur pour chaque utilisateur de WinPro. </p>
<p>Cette formule se définit au niveau du dialogue de définition des utilisateurs.</p>
<p>On définit généralement dans cette formule des variables globales qui seront utilisées pour permettre ou non à chaque utilisateur certains droits. </p>
<p>P.ex., il peut être utile de définir une variable autorisant le dépassement des limites normales de dimension. Les utilisateurs ordinaires ne pourront pas valider une menuiserie dépassant les dimensions autorisées, mais un utilisateur technique pourra lui outrepasser cette contrainte.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule utilisateur saisie:</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">_DepassementDimension := Faux()</span></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule utilisateur responsable technique:</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">_DepassementDimension := Vrai()</span></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule de quincaillerie:</span></p>
<p style="margin: 0px 0px 0px 57px;"><span class="f_Variables">si largeur &gt; 1200</span></p>
<p style="margin: 0px 0px 0px 57px;"><span class="f_Variables"> &nbsp; si _DepassementDimension</span></p>
<p style="margin: 0px 0px 0px 57px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp; Message Quincaillerie hors limite largeur</span></p>
<p style="margin: 0px 0px 0px 57px;"><span class="f_Variables"> &nbsp; sinon</span></p>
<p style="margin: 0px 0px 0px 57px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp; Echec Quincaillerie hors limite largeur</span></p>
<p style="margin: 0px 0px 0px 57px;"><span class="f_Variables"> &nbsp; fin si</span></p>
<p style="margin: 0px 0px 0px 57px;"><span class="f_Variables">fin si</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarques</span><span style="text-decoration: underline;">:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Ceci est un exemple simple. Pour une exploitation plus complète de cette fonctionnalité, vous pouvez aussi utiliser les formules de question afin de mémoriser un identifiant de l'utilisateur.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>La formule utilisateur est exécutée en début de calcul, juste après la formule de site. Voyez la page <a href="ordrecalcul.php">Ordre de calcul</a> pour plus de précisions.</p>
</td></tr></table></div></td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
