<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Filling Thickness","Epaisseur des Remplissages"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?moduletheprempl.php"; }
else { parent.quicksync('a7.11.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Coefficient thermique</title>
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;"
onload=" AddTitleAndLangFlags();highlight();">

<div id="hmpopupDiv"
style="visibility:hidden; position:absolute; z-index:1000;">
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="5"
bgcolor="#FF8000">
  <tbody>
    <tr valign="middle">
      <td align="left"><p class="p_Heading1"><span id="titlepage"
        class="f_Heading1"></span></p>
      </td>
      <td align="center">
        <div id="langflags">
        </div>
      </td>
      <td align="right"><span style="font-size: 9pt"><a
        href="introduction.php">Top</a>  <a
        href="modulethermique.php">Previous</a>  <a
        href="modulethkalt.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd">This dialog is only available for users of the <span style="font-weight: bold;">Thermic 
	  Module</span>, as described into <a href="8_1_0_x.php">release note version 8.1</a>.</p>

        <p class="p_Textestd">Specify here the glazing or panel thicknesses in use. It also allows specifying, for each filling thickness, 
		the <span style="font-style: italic; font-weight: bold;">Ug</span> (glazing thermic coefficient) or 
		<span style="font-style: italic; font-weight: bold;">Up</span> (panel thermic coeficient) values that should be considered, 
		in order to limit the input of detailled <span style="font-style: italic; font-weight: bold;">&Psi;</span> values (peripheral 
		thermic coefficient for fillings).</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"
        style="text-align: center; margin: 0px 0px 0px 24px;"><img
        src="img/clip0436eng.jpg" width="444" height="316" border="0"
        alt="clip0436eng"></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Thickness</span>: Filling thickness to consider.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Minimum Ug</span>: <span style="font-style: italic;">Ug</span> minimum value for 
			  this filling thickness.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Maximum Ug</span>: <span style="font-style: italic;">Ug</span> maximum value for 
			  this filling thickness.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Ug step</span>: <span style="font-style: italic;">Ug</span> step to increase for this 
			  filling thickness.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="450"
                style="width: 450px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;">If a filling with medium value is used, WinPro will select, 
				for computation needs, the value related to the thickness immediately lower. 
				<span style="color: #ff0000;">If the glass thickness used is lower than the lowest valued defined, WinPro will 
				generate a computation error for the <span style="font-style: italic;">Uw</span> value.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd">Ce dialogue n'est accessible que
        si vous disposez du <span style="font-weight: bold;">Module
        Thermique</span>, tel que décrit dans la <a href="8_1_0_x.php">note de
        version 8.1</a>.</p>

        <p class="p_Textestd">Il permet de spécifier
        les épaisseurs de vitrage ou de panneau que vous utilisez. Il permet
        également de définir, pour chaque épaisseur, les valeurs <span style="font-style: italic; font-weight: bold;">Ug</span> 
		(coefficient thermique du vitrage) ou <span style="font-style: italic; font-weight: bold;">Up</span> 
		(coefficient thermique du panneau) que vous souhaitez prendre en compte, afin de limiter l'encodage des valeurs 
		<span style="font-style: italic; font-weight: bold;">&Psi;</span> détaillées (coefficient thermique périphérique des remplissages).</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"
        style="text-align: center; margin: 0px 0px 0px 24px;"><img
        src="img/clip0436.zoom89.gif" width="379" height="284" border="0"
        alt="clip0436"></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Epaisseur</span>: Epaisseur
                du remplissage à considérer.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Ug minimum</span>: Valeur
                <span style="font-style: italic;">Ug</span> minimum pour cette
                épaisseur de remplissage.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Ug maximum</span>: Valeur
                <span style="font-style: italic;">Ug</span> maximum pour cette
                épaisseur de remplissage.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Incrément Ug</span>:
                Incrément de la valeur <span
                style="font-style: italic;">Ug</span> pour cette épaisseur de
                remplissage.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="450"
                style="width: 450px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                style="text-decoration: underline;">:</span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd">Si vous utilisez un remplissage
                d'épaisseur intermédiaire, WinPro sélectionnera, pour les besoins du calcul, la valeur liée à
                l'épaisseur immédiatement inférieure. <span style="color: #ff0000;">Si lépaisseur de vitrage utilisée est inférieure 
				à la plus petite épaisseur déclarée, WinPro générera une erreur de calcul pour la valeur 
				<span style="font-style: italic;">Uw</span>.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
