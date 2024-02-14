<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.4.6x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn646.php"; }
else { parent.quicksync('a11.8.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.4.6x</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Winpro.ini" />
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
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="rn650x.php">Previous</a>&nbsp;
     <a href="rn645x.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.62</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/4/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d&#8217;un champ</span><span class="f_Textestd"> &#171; CodePro &#187; dans la table Client.dbf</span><span class="f_Textestd">. Si le client a &#233;t&#233; cr&#233;&#233; &#224; partir d&#8217;un prospect, ce champ contient le code d&#8217;origine du prospect.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouveau module : PDFMail (PDF):</span><span class="f_Textestd"> Ce module vous permet d</span><span class="f_Textestd">&#8217;</span><span class="f_Textestd">envoyer vos offres et confirmations par e-mail, en format PDF. Vous devez en outre acquérir des licences du logiciel PDF-Mail (voyez le site <a href="www.pdfmail.com" target="_blank" class="weblink">www.pdfmail.com</a>).</span><br>
<span class="f_Textestd">Détails des fonctionnalités:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Envoi par email en format PDF</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Envoi par fax, via un serveur fax supporté par PDF-Mail</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Choix automatique du mode d'envoi pour chaque client</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Envoi groupé des mails ou fax en une seule opération</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Il est nécessaire de configurer ce module via le fichier Winpro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[PdfMail]</span></p>
<p class="p_Textestd"><span class="f_Winproini">PDFmailIniDir &nbsp; &nbsp; &nbsp; &nbsp;= c:\Windows\pdfmail.ini </span><span class="f_Textestd" style="font-size: 8pt;">(il s'agit d'un exemple)</span> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">Vous devez donner le chemin d</span><span class="f_Textestd">&#8217;</span><span class="f_Textestd">accès au fichier PDFMail.ini </span></p>
<p class="p_Textestd"><span class="f_Winproini">TempDir &nbsp; &nbsp; &nbsp; &nbsp;= c:\Tmp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">On note le chemin d</span><span class="f_Textestd">&#8217;</span><span class="f_Textestd">accès au répertoire ou seront enregistré les pdf.</span></p>
<p class="p_Textestd"><span class="f_Textestd">; Domaine fax = Vous devez écrire le nom de votre serveur fax. Ex : @Quadrafax</span></p>
<p class="p_Textestd"><span class="f_Winproini">Domaine fax = @Quadrafax &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Vous devez écrire le nom de votre serveur fax tel qu'il a été nommé lors de l'installation sur le serveur et doit être précédé du caractère @.</span></p>
<p class="p_Textestd"><span class="f_Winproini">FileMode &nbsp; &nbsp; &nbsp; &nbsp;= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Pour autant que MailMode=1, le PDF sera généré et supprimer automatiquement après l'envoi. </span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Le nom du document pdf est demandé à l</span><span class="f_Textestd">&#8217;</span><span class="f_Textestd">utilisateur, et le PDF est conservé dans le répertoire de destination.</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 2 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Le nom du fichier est généré automatiquement à partir du nom du document original, et le PDF est conservé dans le répertoire de destination.</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 3 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Le nom du fichier est généré automatiquement à partir du nom du document original, et écrase l'éventuel fichier déjà existant.</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 4 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Le nom du fichier est généré automatiquement à partir du nom du document original, et ajoute les nouvelles pages à l'éventuel fichier </span></p>
<p class="p_Textestd"><span class="f_Winproini">MailMode  &nbsp; &nbsp; &nbsp; &nbsp;= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Le document pdf ne doit pas être envoyé par messagerie.</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1</span> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">Le document pdf doit être envoyé par messagerie (valeur conseillée)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Il est nécessaire de configurer le fichier pdfmail.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[PDFmail]</span></p>
<p class="p_Textestd"><span class="f_Winproini">QuickMail = QuickPDFmail</span></p>
<p class="p_Textestd"><span class="f_Winproini">Protect = ""</span></p>
<p class="p_Textestd"><span class="f_Winproini">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">[QuickPDFmail]</span></p>
<p class="p_Textestd"><span class="f_Winproini">View = 0</span></p>
<p class="p_Textestd"><span class="f_Winproini">FileMode = 2</span></p>
<p class="p_Textestd"><span class="f_Winproini">DefaultDir = </span></p>
<p class="p_Textestd"><span class="f_Winproini">MailMode = 1</span></p>
<p class="p_Textestd"><span class="f_Winproini">SendMail = 1</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Et enfin,</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour chaque client, vous avez la possibilité de choisir si WinPro doit envoyer un fax au client ou un mail via PDFMail. Une fois que vous avez modifié vos clients, vous n</span><span class="f_Textestd">&#8217;</span><span class="f_Textestd">avez plus qu</span><span class="f_Textestd">&#8217;</span><span class="f_Textestd">à préparer vos commandes et les imprimer en choisissant comme imprimante PDFMail.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.60</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/4/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Acc&#232;s &#224; WPReport:</span><span class="f_Textestd"> Un nouveau droit utilisateur vous permet d&#8217;interdire l&#8217;acc&#232;s au param&#233;trage WPReport &#224; certains utilisateurs.</span></p>

</td></tr></table>
</div>

</body>
</html>
