<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>	
<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Transitional//EN">  
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.2.8x","7.2.8x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?7_2_8x.php"; }
else { parent.quicksync('a11.4.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.2.8x</title>
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
        href="introduction.php">Top</a>  <a href="8_0_0_x.php">Previous</a>  <a
        href="7_2_7x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.82</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Impression de cintres à
        l</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">échelle 1:1 :</span> WinPro vous permet
        d&rsquo;imprimer la partie cintrée d&rsquo;un châssis à l&rsquo;échelle
        1:1 depuis l&rsquo;onglet Dessin de la commande (pour une impression
        sur imprimante adaptée, type table traçante).</p>

        <p style="text-align: center;"><img src="img/embim78.jpg" width="143"
        height="46" vspace="1" hspace="1" border="0" alt=""></p>

        <p>De nouvelles clefs dans WinPro.ini permettent maintenant de
        contrôler plus finement l&rsquo;épaisseur des traits.</p>

        <p> </p>

        <p><span style="font-family: 'Tahoma'; font-weight: bold;">[Bow
        Drawing]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">Frame big pen
                width</span></td>
              <td><span
                style="font-family: 'Courier New'; font-weight: bold;">=  
                </span><span style="font-family: 'Courier New';">Epaisseur du
                trait fort pour le cadre dormant (défaut 0.5)</span><span
                style="font-family: 'Courier New'; font-weight: bold;">.</span></td>
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
              <td width="188"><span class="f_Winproini">Frame small pen
                width</span></td>
              <td><span
                style="font-family: 'Courier New'; font-weight: bold;">=  
                </span><span style="font-family: 'Courier New';">Epaisseur du
                trait fin pour le cadre dormant (défaut 0.2)</span><span
                style="font-family: 'Courier New'; font-weight: bold;">.</span></td>
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
              <td width="188"><span class="f_Winproini">Sash big pen
                width</span></td>
              <td><span
                style="font-family: 'Courier New'; font-weight: bold;">=  
                </span><span style="font-family: 'Courier New';">Epaisseur du
                trait fort pour le cadre ouvrant (défaut 0.5)</span><span
                style="font-family: 'Courier New'; font-weight: bold;">.</span></td>
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
              <td width="188"><span class="f_Winproini">Sash small pen
                width</span></td>
              <td><span
                style="font-family: 'Courier New'; font-weight: bold;">=  
                </span><span style="font-family: 'Courier New';">Epaisseur du
                trait fin pour le cadre ouvrant (défaut 0.2)</span><span
                style="font-family: 'Courier New'; font-weight: bold;">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.80</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Correction de la
        variable</span><span class="f_Variables">_FormeDormant</span><span
        class="f_Textestd"></span>dans le cas d'un faux-cintre de type 2 ou 3,
        cette variable vaudra toujours<span class="f_Textestd"></span><span
        class="f_Variables">_Rectangle</span><span
        class="f_Textestd">.</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.82</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Afdrukken van centers op een
        schaal</span><span class="f_TitreReleaseNote">1:1 :</span> WinPro laat
        u toe een gecenteert deel van een raam af te drukken op een schaal 1:1
        vanuit het tabblad van de klantorder (voor afdruk op een aangepaste
        printer).</p>

        <p style="text-align: center;"><img src="img/embim78.jpg" width="143"
        height="46" vspace="1" hspace="1" border="0" alt=""></p>

        <p>Nieuwe sleutels in het WinPro.ini bestand laten nu toe om nog fijner
        de dikte van de lijnen te controleren.</p>

        <p> </p>

        <p><span style="font-family: 'Tahoma'; font-weight: bold;">[Bow
        Drawing]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">Frame big pen
                width</span></td>
              <td><span
                style="font-family: 'Courier New'; font-weight: bold;">=  
                </span><span style="font-family: 'Courier New';">Dikke
                lijndikte voor de buitenkader (standaard 0.5)</span><span
                style="font-family: 'Courier New'; font-weight: bold;">.</span></td>
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
              <td width="188"><span class="f_Winproini">Frame small pen
                width</span></td>
              <td><span
                style="font-family: 'Courier New'; font-weight: bold;">=  
                </span><span style="font-family: 'Courier New';">Fijne
                lijndikte voor de buitenkader (standaard 0.2)</span><span
                style="font-family: 'Courier New'; font-weight: bold;">.</span></td>
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
              <td width="188"><span class="f_Winproini">Sash big pen
                width</span></td>
              <td><span
                style="font-family: 'Courier New'; font-weight: bold;">=  
                </span><span style="font-family: 'Courier New';">Dikke
                lijndikte voor de vleugelkader (standaard 0.5)</span><span
                style="font-family: 'Courier New'; font-weight: bold;">.</span></td>
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
              <td width="188"><span class="f_Winproini">Sash small pen
                width</span></td>
              <td><span
                style="font-family: 'Courier New'; font-weight: bold;">=  
                </span><span style="font-family: 'Courier New';">Fijne
                lijndikte voor de vleugelkader (standaard 0.2)</span><span
                style="font-family: 'Courier New'; font-weight: bold;">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.80</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Correctie van de
        variabele</span><span class="f_Variables">_(FormeDormant)
        VormKader</span><span class="f_Textestd"> in het geval van een valse
        opdek (schijnboog) van het type 2 of 3</span>, deze variabele geeft
        steeds<span class="f_Textestd"></span><span
        class="f_Variables">(_Rectangle) _Rechthoekig</span><span
        class="f_Textestd">.</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
