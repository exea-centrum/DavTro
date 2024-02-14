<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Dimensions Input Mode","Mode Daisie Dimensions"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?drmsaisiedimension.php"; }
else { parent.quicksync('a5.2.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Mode saisie dimensions</title>
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
        href="introduction.php">Top</a>� <a
        href="drmdescription.php">Previous</a>� <a
        href="drmsituationmaconnerie.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>�</p>

        <p>This page lets you define how the user can type the window dimensions when using this outer frame.</p>

        <p>�</p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip0126eng.jpg" width="483" height="358" border="0"
        alt="clip0126eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allow to
                input build dimensions</span>: If this box is checked, you can input the total dimensions for windows using this outer frame.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allow to input reveal dimensions</span>: If this box is checked, you can input the reveal dimensions (or
                wall dimensions) for windows using this outer frame.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allow only for reveals listed below</span>: If this box is checked, the reveals
                on the side of each window must be selected from the values listed below. However, in the <a href="drmsituationmaconnerie.php">Predefined Reveals</a> 
				page, you can define different measures, which need not match the ones authorised here.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Authorized masnery dimensions</span>: If the previous box is checked, you
                can enumerate the authorized values here; check the 'Zero' boxes if you want to allow 0 values. If the previous box is not
                checked, you can also type values here, which the user will be able to select, but he will also be allowed to type any other value.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p style="margin: 0px 0px 0px 4px;">�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Note</span>:
                </p>

                <p>For any case, only outer frame extensions for the bottom transom is considered for the dimensions input mode.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>
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
      <td align="left"><p>�</p>

        <p>Cet onglet vous permet de d�finir comment saisir les dimensions d'un
        ch�ssis comportant ce dormant.</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0126.gif" width="372"
        height="302" border="0" alt="clip0126"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Autoriser la saisie des
                dimensions de fabrication</span>: Si cette case � cocher, vous
                pourrez saisir les fen�tres comportant ce dormant en partie
                basse en cotes de fabrication.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Autoriser la saisie des
                cotes tableau</span>: Si cette case est coch�e, vous pourrez
                saisir les fen�tres comportant ce dormant en partie basse en
                cotes tableau. (Cotes tableau = Cotes ma�onnerie = Mesures
              jour)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">N'autoriser que les
                dimensions de batt�e �num�r�es ci-dessous</span>: Si cette case
                est coch�e, les cotes de p�n�tration ma�onnerie ne pourront pas
                �tre saisies librement, mais devront �tre choisies parmi les
                valeurs d�finies ici, pour chaque c�t�. Notez que vous pouvez
                d�finir dans l'onglet <a
                href="drmsituationmaconnerie.php">Situations Ma�onnerie</a> des
                cotes autres que celles �num�r�es ici. Si la case est coch�e,
                vous pouvez indiquer les diff�rentes corrections possibles dans
                les champs �i-dessous. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Cotes de batt�es autoris�es</span>: Si la pr�c�dente case est coch�e, listez les diff�rentes valeurs de 
			  corrections de batt�es ici, et cochez la case 'Z�ro' pour autoriser une saisie sans batt�e. Si la pr�c�ndente case est d�coch�e, vous pouvez 
			  tout de m�me saisir des corrections de batt�es qui pourront �tre s�lectionn�es en saisie, mais vous pourrez �galement saisir une valeur libre.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p style="margin: 0px 0px 0px 4px;">�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Remarque</span>:
                </p>

                <p>Dans tous les cas, seule la configuration du dormant utilis�
                en partie basse est prise en compte quant au mode de saisie des
                dimensions.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
