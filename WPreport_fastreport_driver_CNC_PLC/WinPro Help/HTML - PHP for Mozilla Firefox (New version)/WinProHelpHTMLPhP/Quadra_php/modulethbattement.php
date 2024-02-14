<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["French Mullion","Battement"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?modulethbattement.php"; }
else { parent.quicksync('a7.11.7'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>French mullion</title>
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
        href="modulethtf.php">Previous</a>  <a
        href="ModuleThBasPorte.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd">This dialog is similar to dialog sash + frame but for french mullions. 
	  You may create here a line for each sash profile combination along with its reinforcement profile, as well as for 
	  french mullion and its reinforcement profile, in order to avoid ambiguous cases.
	  See <a href="8_1_0_x.php">release note version 8.1</a> for more details.</p>

        <p class="p_Textestd">The reinforcement profile code should be defined as a same profile may use different reinforcement profiles. 
		Values for profiles when not reinforced may also be set if required.</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd">For every french mullion / sash / reinforcement(s) combination, a thermic value should be set according 
		filling thickness.</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span style="font-style: italic; color: #ff0000; text-decoration: underline;">If a value is left null, 
		WinPro will consider that it is not set and will generate an error when this value is required.</span></p>


        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"
        style="text-align: center; margin: 0px 0px 0px 24px;"><img
        src="img/clip0015bteng.jpg" width="1225" height="154" border="0"
        alt="clip0015bteng"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Filter</span>: Random value used to filter the list of values displayed when the 
			  dialog is called.</td>
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
              <td><span style="font-weight: bold;">Sash</span>: Code of the sash frame profile to consider for this profile 
			  combination.</td>
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
              <td><span style="font-weight: bold;">Sash reinf.</span>: Code of the reinforcement profile for sash frame to consider for 
			  this profile combination.</td>
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
              <td><span style="font-weight: bold;">French mullion</span>: Code of the french mullion profile to consider for this profile 
			  combination.</td>
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
              <td><span style="font-weight: bold;">Fr. mull. reinf.</span>: Code of the reinforcement profile for french mullion to consider for 
			  this profile combination.</td>
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
              <td><span style="font-weight: bold;">2nd Fr. mull.</span>: Code of the second french mullion profile to consider for this profile 
			  combination.</td>
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
              <td><span style="font-weight: bold;">Fr. mull. reinf. 2</span>: Code of the reinforcement profile for the second french 
			  mullion to consider for this profile combination.</td>
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
              <td><span style="font-weight: bold;">2nd Sash reinf.</span>: Code of the reinforcement profile for the second sash frame 
			  to consider for this profile combination.</td>
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
              <td><span style="font-weight: bold;">Density</span>: Random value of density for this profile combination, for wood 
			  systems mainly. See <a href="8_1_0_x.php">release note version 8.1.0.039</a>.</td>
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
              <td><span style="font-weight: bold;">x mm</span>: <span style="font-style: italic;">Uf</span> basic thermic value for 
			  this group of profiles and this filling thickness.</td>
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
              <td><span style="font-weight: bold;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">&Psi;</span> button</span>:
                This gives an access to the optional dialog of detailled 
				<span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> peripheral values for fillings.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 48px;"><img
        src="img/clip0014beng.jpg" width="529" height="278" border="0"
        alt="clip0014beng"></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 52px;"><span
        style="font-weight: bold;">Glazings</span>: Table of detailled 
		<span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> values for glazings, by warmedge.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 52px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Def.</span>: Default  
			  <span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> peripheral value, for this glazing thickness, 
			  this warmedge and this profile combination. This value will be used when a detailled value is missing into the table 
			  for this warmedge.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 52px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Ug</span>: Glazing's  
			  <span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> peripheral value for this thickness and 
			  <span style="font-style: italic;">Ug</span> value, this warmedge and this profile combination. When this value is not set, 
			  the default value for this line will be used.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 52px;"><span
        style="font-weight: bold;">Panels</span>: Table of detailled 
		<span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> values for panels, by panel category.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 52px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Def.</span>: Default  
			  <span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> peripheral value, for this panel thickness, 
			  this panel category and this profile combination. This value will be used when a detailled value is missing into the table 
			  for this panel category.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 52px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Up</span>: Panel's  
			  <span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> peripheral value for this thickness and 
			  <span style="font-style: italic;">Up</span> value, this panel category and this profile combination. When this value is not set, 
			  the default value for this line will be used.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="727"
                style="width: 727px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Important note</span>:</p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 12px;"><span
                class="f_Textestd">The definition of a  
				<span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> value for each case represents a lot of work. 
				Anyway, this remains optional. Indeed, as soon as a default
				<span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> value is defined at warmedges and panel 
				categories levels, WinPro is able to compute the thermic dissipation coefficient of the windows. You might then set nothing 
				into the table, or else set only the cases that are the most often met. Attention anyway, the default  
				<span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> value is generally the less affordable; 
				if it is the only value set, the computation result will be the worst possible!</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>
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
      <td align="left"><p class="p_Textestd">Ce dialogue fonctionne sur le même principe que le dialogue dormant + ouvrant, 
	  mais pour les battements. Il faut renseigner l'ouvrant et son renfort éventuel, ainsi que le profil de battement qui y 
	  est associé et son renfort éventuel, pour toutes les combinaisons de profils possibles ouvrant + battement, afin de lever 
	  toutes les ambiguïtés. Voir <a href="8_1_0_x.php">note de version 8.1</a> pour plus de détails.</p>

        <p class="p_Textestd">Il permet également de
        tenir compte de la présence de renforts (pour les châssis PVC), ainsi
        que de leur nature, les renforts ayant une influence non négligeable
        sur la performance thermique des profils.</p>

        <p class="p_Textestd">Le code des renforts
        doit être renseigné, car on peut avoir plusieurs types de renfort pour
        un même profil. Il faut également renseigner les valeurs des profils
        non renforcés, s'il y a lieu.</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd">Pour chaque combinaison
        battement / ouvrant / renfort(s), il faudra définir une valeur thermique
        en fonction de l'épaisseur du remplissage.</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span style="font-style: italic; color: #ff0000; text-decoration: underline;">Si
        une valeur est laissée à 0, WinPro considérera qu'elle n'est pas renseignée, et générera une erreur s'il
        a besoin de cette valeur.</span></p>


        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"
        style="text-align: center; margin: 0px 0px 0px 24px;"><img
        src="img/clip0015btfra.jpg" width="1228" height="138" border="0"
        alt="clip0015btfra"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Filtre</span>: Valeur
                arbitraire servant à filtrer la liste des valeurs affichée lors
                de l'appel du menu.</td>
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
              <td><span style="font-weight: bold;">Ouvrant</span>: Code du
                profil d'ouvrant à considérer pour cette combinaison de
                profil.</td>
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
              <td><span style="font-weight: bold;">Renf. ouvr.</span>: Code du
                profil de renfort ouvrant à considérer pour cette combinaison
                de profil.</td>
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
              <td><span style="font-weight: bold;">Battement</span>: Code du
                profil de battement à considérer pour cette combinaison de
                profil.</td>
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
              <td><span style="font-weight: bold;">Renf. batt.</span>: Code du
                profil de renfort de battement à considérer pour cette combinaison
                de profil.</td>
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
              <td><span style="font-weight: bold;">Battement 2</span>: Code du
                second profil de battement à considérer pour cette combinaison de
                profil.</td>
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
              <td><span style="font-weight: bold;">Renf. batt. 2</span>: Code du
                profil de renfort du second battement à considérer pour cette combinaison
                de profil.</td>
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
              <td><span style="font-weight: bold;">Renf. ouvr. 2</span>: Code du
                profil de renfort du second ouvrant à considérer pour cette combinaison
                de profil.</td>
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
              <td><span style="font-weight: bold;">Densité</span>: Valeur
                arbitraire de densité pour cette combinaison de profil, pour le
                bois principalement. Voir <a href="8_1_0_x.php">note de version
                8.1.0.039</a>.</td>
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
              <td><span style="font-weight: bold;">x mm</span>: Valeur
                thermique <span style="font-style: italic;">Uf</span> de base pour ce groupe de profil et cette épaisseur de remplissage.</td>
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
              <td><span style="font-weight: bold;">Bouton </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">&Psi;</span>:
                Ce bouton donne accès au dialogue optionnel des valeurs 
				<span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> périphériques
                détaillées des remplissages. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 48px;"><img
        src="img/clip0014.zoom57.jpg" width="509" height="306" border="0"
        alt="clip0014"></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 52px;"><span
        style="font-weight: bold;">Vitrages</span>: Tableau des valeurs <span
        style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> détaillées pour les vitrages, par warmedge.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 52px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Déf.</span>: Valeur 
			  <span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> périphérique par
                défaut, pour cette épaisseur de vitrage, ce warmedge et cette combinaison de profils. Cette valeur sera utilisée 
				chaque fois qu'il manque une valeur détaillée dans le tableau pour ce warmedge.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 52px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Ug</span>: Valeur 
			  <span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> périphérique du vitrage pour
                cette épaisseur et valeur <span style="font-style: italic;">Ug</span> de vitrage, ce warmedge et cette combinaison
                de profils. Si cette valeur n'est pas renseignée, c'est la valeur par défaut de la ligne qui sera utilisée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 52px;"><span
        style="font-weight: bold;">Panneaux</span>: Tableau des valeurs 
		<span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> détaillées pour les panneaux, 
		par catégorie de panneau.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 52px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Déf.</span>: Valeur 
			  <span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> périphérique par
                défaut, pour cette épaisseur de panneau, cette catégorie de panneau et cette combinaison de profils. Cette valeur
                sera utilisée chaque fois qu'il manque une valeur détaillée dans le tableau pour cette catégorie de panneau.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 52px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Up</span>: Valeur 
			  <span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> périphérique du panneau pour
                cette épaisseur et valeur <span style="font-style: italic;">Up</span> de panneau, cette catégorie de panneau et
                cette combinaison de profils. Si cette valeur n'est pas renseignée, c'est la valeur par défaut de la ligne qui sera utilisée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="727"
                style="width: 727px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque
                importante</span>:</p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 12px;"><span
                class="f_Textestd">La définition d'une valeur 
				<span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> pour chaque cas de figure représente un très
                gros volume de travail. Cette définition est cependant tout à fait optionnelle. En effet, du moment qu'une valeur 
				<span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> par défaut a été renseignée au niveau des
                warm edges et des catégories de panneaux, WinPro est en mesure de calculer le coefficient de dissipation thermique de la
                fenêtre. Vous pouvez donc ne rien renseigner dans ce tableau, ou encore ne renseigner que les cas de figure que vous
                rencontrez le plus souvent. Attention toutefois, la valeur 
				<span style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span> par défaut est généralement la
                valeur la moins favorable; si vous vous en contentez, le résultat du calcul sera moins favorable!</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
