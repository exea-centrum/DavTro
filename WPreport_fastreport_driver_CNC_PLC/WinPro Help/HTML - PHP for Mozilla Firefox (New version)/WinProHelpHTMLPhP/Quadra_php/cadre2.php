<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Frame","Cadre","Omkadering"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?cadre2.php"; }
else { parent.quicksync('a2.6.7'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Cadre</title>
  <meta name="keywords" content="Cadre">
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
        href="introduction.php">Top</a>  <a href="brosse.php">Previous</a>  <a
        href="cercle.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Interligne"><span
        style="color: #000000;">Draws the outline of a rectangle, using the
        current pen.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Syntax:</span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">Frame
        (left, bottom, width, height)</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" border="1"
        style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Parameter</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="font-weight: bold; color: #000000;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">left</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="color: #000000;">Horizontal position of the left
                side</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">bottom</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="color: #000000;">Vertical position of the bottom
                side</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">width</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="color: #000000;">Width of the rectangle</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">height</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="color: #000000;">Height of the rectangle</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Example:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">PenColour (red)
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">Frame (100, 300,
        50, 200)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0045.jpg"
        width="311" height="173" border="0" alt="clip0045"></p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>
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

        <p>Traçage du contour d'un rectangle, avec un trait dont les
        caractéristiques ont été définies préalablement.</p>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Syntaxe:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">Cadre (gauche, bas, largeur,
        hauteur)</span></p>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="151"
                style="width: 151px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Paramètres</span></p>
              </td>
              <td width="454"
                style="width: 454px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151"
                style="width: 151px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">gauche</span></p>
              </td>
              <td width="454"
                style="width: 454px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Position horizontale du coin
                inférieur gauche</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151"
                style="width: 151px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">bas</span></p>
              </td>
              <td width="454"
                style="width: 454px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Position verticale du coin
                inférieur gauche</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151"
                style="width: 151px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">largeur</span></p>
              </td>
              <td width="454"
                style="width: 454px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Largeur du rectangle</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151"
                style="width: 151px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">hauteur</span></p>
              </td>
              <td width="454"
                style="width: 454px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur du rectangle</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Exemple:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">CouleurTrait (Rouge)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cadre
        (100, 300, 200, 50)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0045.jpg"
        width="311" height="173" border="0" alt="clip0045"></p>
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
      <td align="left"><p class="p_Interligne"><span
        style="color: #000000;">Tekent de buitenrand van een rechthoek,
        gebruikmakend van de huidige pen.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Syntax:</span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">Frame
        (left, bottom, width, height)</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" border="1"
        style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Parameter</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="font-weight: bold; color: #000000;">Beschrijving</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">left</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="color: #000000;">Horizontale positie vanaf de
                linkerzijde</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">bottom</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="color: #000000;">Verticale positie vanaf de
                onderzijde</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">width</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="color: #000000;">Breedte van de rechthoek</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">height</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="color: #000000;">Hoogte van de rechthoek</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Voorbeeld:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">PenColour (red)
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">Frame (100, 300,
        50, 200)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0045.jpg"
        width="311" height="173" border="0" alt="clip0045"></p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
