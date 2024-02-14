<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Millings","Usinages"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?sysmillings.php"; }
else { parent.quicksync('a4.4.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Usinages</title>
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
        href="syscouleurs.php">Previous</a>  <a href="sysformula.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p style="background: #fffff2;"><span
        style="color: #000000;">This page lets you define basic values for
        millings in this system.</span></p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip8eng.jpg" width="441" height="154" border="0"
        alt="clip8eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 14px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Welding loss</span><span
                style="color: #000000;">: Length loss on one end of the profile
                when a profile is welded (miter assembly). </span></td>
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
              <td><span style="font-weight: bold;">Transom
                correction</span><span style="color: #000000;">: millings on
                transoms will be automatically offset by this
              value  </span></td>
            </tr>
          </tbody>
        </table>

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Apply a correction for 90°
                assembling</span><span style="color: #000000;">: if you check
                this box, for 90° assembling, millings on the shortened part
                will be corrected as shown below. </span></td>
            </tr>
          </tbody>
        </table>

        <p style="text-align: center;"><img src="img/clip0120.jpg" width="204"
        height="142" border="0" alt="clip0120"></p>

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

                <p>You may also act on milling positions by changing the X0,
                Y0, X1, Y1 variables, that define the position of each end of
                each profile (see the various Variable pages).</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>		
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Fitting milling</span>: See <a href="8_0_4_x.php">release note 8.04.000</a>.  
			  This checkbox "Fitting milling" is now automatically checked for any new system created, it is recommended to leave the box checked. 
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
      <td align="left"><p> </p>

        <p>Cet onglet définit quelques règles de base utilisées pour les
        usinages des châssis de ce système.</p>

        <p style="text-align: center;"><img src="img/clip8fra.jpg" width="455"
        height="186" border="0" alt="clip8fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Retrait soudure</span>: Pour
                les profils principaux coupés à onglet et constituant les
                cadres dormant ou ouvrant, Winpro recalcule la position exacte
                des usinages en considérant la valeur du retrait de la
              soudure. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Correction traverse</span>: Les
                usinages sur les traverses seront automatiquement corrigés de
                cette valeur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Corrigé les usinages si
                assemblage droit</span>: Pour les assemblages droits, les
                usinages sur les morceaux de type "droit court" seront
                automatiquement corrigés de cette valeur. (voir croquis
                ci-dessous)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0120.jpg" width="204"
        height="142" border="0" alt="clip0120"></p>

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

                <p>Vous pouvez ne pas spécifier ces valeurs, et agir sur les
                variables X0, Y0, X1, Y1, qui définissent la position des
                extrémités de chaque profil.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Usinage quincaillerie</span>: Voir <a href="8_0_4_x.php">note de version 8.04.000</a>.  
			  Cette case à cocher "Usinage quincaillerie" est dorénavant automatiquement cochée lors de la création d'un nouveau système, il est conseillé de 
			  la laisser cochée pour tout nouveau système. 
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
