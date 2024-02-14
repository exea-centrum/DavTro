<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Systems","Syst&#232;mes"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?systemes.php"; }
else { parent.quicksync('a4.4'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Syst&#232;mes</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Syst&#232;me" />
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
     <a href="coloursfilter.php">Previous</a>&nbsp;
     <a href="sysdescription.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">This table describes the systems used in WinPro.</span></p>
<p style="background: #fffff2;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">A system is a set of elements that can be grouped together to create a single window. Defining systems allows WinPro to guide the user when selecting components, by providing only choices which are compatible with the system.</span></p>
<p style="text-align: center; margin: 14px 0px 14px 0px;"><img src="img/clip2eng.jpg" width="945" height="529" border="0" alt="clip2eng"></p>
<p style="background: #fffff2;"><span style="font-weight: bold; color: #000000;">System code</span><span style="color: #000000;">: the system's code. This information must be different for each system.</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette table décrit la liste des systèmes utilisés dans WinPro.</p>
<p>Un système réunit l'ensemble des composants qui peuvent entrer dans la fabrication d'une seule et même fenêtre. La définition de systèmes permet à WinPro de guider l'utilisateur dans le choix de ces composants, en ne lui proposant que les choix possibles (p.ex., WinPro ne vous proposera pas de traverses ALU dans un système PVC).</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="img/clip0296.gif" width="762" height="436" border="0" alt="clip0296"></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Code</span>: le code du système. Cette information doit être différente pour chaque système.</p>
</td></tr></table></div>
</td></tr></table>
</div>

</body>
</html>
