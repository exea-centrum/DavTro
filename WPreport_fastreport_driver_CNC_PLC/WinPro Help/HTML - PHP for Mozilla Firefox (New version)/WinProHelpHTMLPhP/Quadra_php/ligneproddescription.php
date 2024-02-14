<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Description","Description"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?ligneproddescription.php"; }
else { parent.quicksync('a7.21.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Description</title>
  <meta name="keywords"
  content="_WindowProductionLine,_RollerShutterProductionLine">
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
        href="ligneproduction.php">Previous</a>  <a
        href="ligneprodcharge.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This page sets the main technical characteristic of the production line.</p>

        <p style="text-align: center;"><img src="img/clip0578eng.jpg"
        width="347" height="115" border="0" alt="clip0578eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description of this production line.</td>
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
              <td><span style="font-weight: bold;">Numerical identifier</span>: This value identifies the production line. 
			  This value may be defined by rules using variables
                <span style="font-weight: bold;">_WindowProductionline</span>
                and/or <span style="font-weight: bold;">_RollerShutterproductionLine</span>, 
				in order to assign a window or roller shutter to a production line.</td>
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
              <td><span style="font-weight: bold;">Max. number of outer frames</span>: 
			  When creating a production batch, it is possible to divide the batch into sub-batches; each sub-batch 
			  will contain the maximum number of window or shutter box defined here. When left blank, no sub batches 
			  are generated for the outer frame or shutter box.</td>
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
              <td><span style="font-weight: bold;">Max. number of leaves</span>: When creating a production batch, 
			  it is possible to divide the batch into sub-batches; each sub-batch 
			  will contain the maximum number of leaves defined here. When left blank, no sub batches 
			  are generated for the sash frame.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-style: italic; text-decoration: underline;">Note</span><span
        style="font-style: italic;">: you may use both values simultaneously. The sub batch will then be generated by 
		the first counter (outer frame or leaves) reaching its maximum value.</span></p>

        <p> </p>

        <p>Refer to manual about production lines <span
        style="font-weight: bold;">GLP.chm</span> for more details about this module.</p>
      </td>
    </tr>
  </tbody>
</table>

</tbody>
</table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>Cette page définit les caractéristiques techniques
        générales de la ligne de production. </p>

        <p style="text-align: center;"><img src="img/clip0578.zoom89.gif"
        width="654" height="133" border="0" alt="clip0578"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description pour cette ligne de production.</td>
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
              <td><span style="font-weight: bold;">Identificateur
                numérique</span>: Cette valeur numérique identifies la ligne de
                production. Vous pouvez assigner cette valeur aux variables
                <span style="font-weight: bold;">_LigneProductionChassis</span>
                et/ou <span style="font-weight: bold;">_LigneProductionVolet
                </span>par formule afin d'affecter un châssis à une ligne de
                production donnée.</td>
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
              <td><span style="font-weight: bold;">Nombre maxi. de
                dormants</span>: Lors de la création d'un lot de production, il
                est possible de scindé ce lot en plusieurs sous-lots; chaque
                sous lot contiendra le nombre maximum de dormants ou de
                caissons de volet définit ici. Si ce champs est laissé vierge,
                aucun découpage en sous-lots ne sera effectué pour le dormant
                ou le caisson de volet.</td>
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
              <td><span style="font-weight: bold;">Nombre maxi. de
                d'ouvrants</span>: Lors de la création d'un lot de production,
                il est possible de scindé ce lot en plusieurs sous-lots; chaque
                sous lot contiendra le nombre maximum d'ouvrants. Si ce champs
                est laissé vierge, aucun découpage en sous-lots ne sera
                effectué pour l'ouvrant.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-style: italic; text-decoration: underline;">Remarque</span><span
        style="font-style: italic;">: vous pouvez utiliser ces 2 valeurs
        simultanément. Dans ce cas, le sous lot sera généré par le compteur
        (dormant ou ouvrant) qui atteindra son maximum le premier.</span></p>

        <p> </p>

        <p>Reportez vous au manuel sur les lignes de production <span
        style="font-weight: bold;">GLP.chm </span>pour plus de détails sur ce
        module.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
