<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Message","Message","Berichten"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?message.php"; }
else { parent.quicksync('a2.5.6'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Message</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Message" />
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="reduireforme.php">Previous</a>&nbsp;
     <a href="remplacerpar.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>The Message instruction lets you tell text to the user, the factory, and/or the customer. These messages will be printing or displayed, depending on the context.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Message Message text</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Message #MESSAGE_CODE</span> </p>
<p>&nbsp;</p>
<p>The first syntax lets you define the message directly.</p>
<p>&nbsp;</p>
<p>The second syntax references a message stored in the <a href="messages.php">message table</a>. This way, you can translate the message in several languages, and also decide whom is to see the message (user, customer, factory).</p>
<p style="background: #fffff2;"><span style="font-size: 11pt; color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>L'instruction Message vous permet de fournir à l'utilisateur, l'atelier et/ou le client des informations complémentaires, sous forme de texte. Ces messages seront affichés ou imprimés, selon le cas.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Message Texte du message</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Message #CODE_MESSAGE</span></p>
<p>&nbsp;</p>
<p>La première syntaxe vous permet de définir directement le message. </p>
<p>&nbsp;</p>
<p>La deuxième syntaxe fait référence à un message stocké dans la <a href="messages.php">table des messages</a>. Cette table permet d'avoir une version du message pour chaque langue, et aussi de définir à qui le message est destiné (utilisateur, client, atelier).</p>
<p><span style="font-size: 11pt;">&nbsp;</span></p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>De berichten instructie geeft u de mogelijkheid om informatie weer te geven aan de gebruiker, de werkplaats en/of de klant. Deze berichten worden afgedrukt of weergegeven, afhankelijk van de context waarin ze gebruikt worden.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Message Berichten tekst</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Message #BERICHT_CODE</span> </p>
<p>&nbsp;</p>
<p>De eerste syntax staat u toe het bericht direct te definiëren.</p>
<p>&nbsp;</p>
<p>De tweede syntax verwijst naar een Berichten code welke opgeslagen is in de  <a href="messages.php">berichten tabel</a>. Op deze manier, bent u in de mogelijkheid om he bericht in meerdere talen te vertalen,en kan u bepalen voor wij het bericht bestemd is (gebruiker, klant, werkplaats).</p>
<p style="background: #fffff2;"><span style="font-size: 11pt; color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>
</body>
</html>
