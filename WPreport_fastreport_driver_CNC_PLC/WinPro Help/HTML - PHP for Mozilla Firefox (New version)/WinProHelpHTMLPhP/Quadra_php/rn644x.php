<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.4.4x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn644x.php"; }
else { parent.quicksync('a11.8.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.4.4x</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="" />
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
     <a href="rn645x.php">Previous</a>&nbsp;
     <a href="rn643x.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.48 &amp; 49</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">4/2/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Normes de verre:</span><span class="f_Textestd"> 3 nouvelles variables globales, ainsi que deux nouvelles tables, vous permettent de calculer les limites d&#8217;utilisation de chaque vitrage. Les deux tables vous permettent de d&#233;finir les normes de r&#233;sistance de verre et de pressions de vent ; une valeur est associ&#233;e &#224; chaque norme, qui sera stock&#233;e dans une des nouvelles variables. De plus, vous pouvez lier &#224; chaque client une norme de chaque type. Pour chaque fen&#234;tre, par le bouton Info associ&#233; au remplissage g&#233;n&#233;ral de la fen&#234;tre (onglet ch&#226;ssis), vous pouvez red&#233;finir ces normes, ainsi que sp&#233;cifier la hauteur de la fen&#234;tre. Ces trois renseignements (norme de verre, norme de vent, hauteur) seront transmis aux formules de param&#233;trage par les variables globales </span><span class="f_Variables">_NormeVent</span><span class="f_Textestd">, </span><span class="f_Variables">_NormeVerre</span><span class="f_Textestd">, </span><span class="f_Variables">_HauteurConstruction</span><span class="f_Textestd">. Ces variables seront normalement utilis&#233;es dans les formules de vitrage, mais vous pouvez les utiliser dans toutes les autres formules si n&#233;cessaire.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">R&#233;organisation et extension de la fiche client:</span><span class="f_Textestd"> La fiche client a &#233;t&#233; modifi&#233;e, de mani&#232;re &#224; ce qu&#8217;elle contienne un nombre beaucoup plus important de renseignements, surtout pour les clients professionnels. Pour cela, 3 nouveaux onglets ont &#233;t&#233; ajout&#233;s : Financier, Commercial, Logistique. Ces onglets sont d&#233;sactiv&#233;s par d&#233;faut. Il faut cocher la case &#8216;Simplifi&#233;&#8217; en haut de la fiche client pour les activer. Certains des champs de la fiche signal&#233;tique principale sont alors transf&#233;r&#233;s sur ces onglets.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.47</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/1/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Contacts dans la fiche client:</span><span class="f_Textestd"> La fiche client disposait jusqu&#8217;ici d&#8217;une liste fixe de contacts. Cette liste a &#233;t&#233; modifi&#233;e, de mani&#232;re &#224; vous laisser d&#233;finir jusqu&#8217;&#224; 25 contacts par client, en sp&#233;cifiant le nom, le pr&#233;nom, la fonctions, et d&#8217;autres renseignements, pour chaque contact.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.46</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">20/1/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">R&#233;organisation de la fiche client:</span><span class="f_Textestd"> les 2 premiers onglets de la fiche client ont &#233;t&#233; rassembl&#233;s sur un seul.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.45</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">10/1/2003</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 8px;">&nbsp;</p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Usinages:</span><span class="f_Textestd"> WinPro rejette en principe les usinages qui ne se trouvent pas sur un profil, y compris les usinages qui se trouvent exactement &#224; chaque extr&#233;mit&#233; du profil. Une case &#224; cocher, &#8216;Autoriser l&#8217;usinage &#224; la position 0&#8217;, vous permet de d&#233;finir, pour chaque usinage, s&#8217;il peut se retrouver exactement &#224; un des bouts du profil (p.ex. fraisage traverse).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Assemblages de ch&#226;ssis:</span><span class="f_Textestd"> Une nouvelle variable globale vous permet de conna&#238;tre la situation d&#8217;un chassis dans un assemblage :</span></p>
<p class="p_Textestd"><span class="f_Variables">_AssemblageChassis</span><span class="f_Textestd"> vaut :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_ElementAssemblage</span><span class="f_Textestd"> s&#8217;il s&#8217;ag&#238;t d&#8217;un ch&#226;ssis compris dans un assemblage</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_StructureAssemblage</span><span class="f_Textestd"> s&#8217;il s&#8217;ag&#238;t de l&#8217;assemblage lui-m&#234;me, sans ses ch&#226;ssis</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_HorsAssemblage</span><span class="f_Textestd"> si le ch&#226;ssis ne fait pas partie d&#8217;un assemblage.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.43</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">7/1/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Gestion des prospects:</span><span class="f_Textestd"> Vous pouvez encoder vos prospects dans une table sp&#233;cifique, similaire &#224; une fiche client simplifi&#233;e. Ces prospects ne sont utilisables que pour les devis. Pour encoder un prospect dans un devis, vous devez d&#8217;abord cliquer le bouton &#8216;Prospect&#8217; en haut &#224; gauche de l&#8217;onglet principal de la saisie de commande.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Devis:</span><span class="f_Textestd"> Un nouveau champ &#8216;Limite de validit&#233;&#8217; a &#233;t&#233; ajout&#233; &#224; la saisie des devis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.41</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">18/12/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Profils pr&#233;d&#233;coup&#233;s:</span><span class="f_Textestd"> Gestion d&#8217;une surcote. Cette surcote est ajout&#233;e &#224; la longueur finie du profil pour d&#233;terminer la longueur de profil pr&#233;d&#233;coup&#233; &#224; utiliser. Vous d&#233;finissez la surcote dans une nouvelle colonne, sur l&#8217;onglet Pr&#233;d&#233;coupe des profils.</span></p>

</td></tr></table>
</div>

</body>
</html>
