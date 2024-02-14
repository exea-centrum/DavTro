<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Peripheral Profile","Profil p&#233;riph&#233;rique"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?varprofilperipherique.php"; }
else { parent.quicksync('a3.10.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Profil périphérique</title>
  <meta name="keywords"
  content="NumeroProfil,_NPeriph,_PeriphPos [ ],_PeriphType [ ],_SeuilPorte [ ],_SeuilChassis [ ],_PeriphCat [ ],_PeriphEp [ ],_PeriphDeduit [ ],_PeriphLong [ ],_TypeSeuil [ ],_CouleurPeriphRal [ ]">
  <meta http-equiv="Content-Type"
  content="application/xhtml+xml; charset=iso-8859-1">
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
        href="vartraverse.php">Previous</a>  <a
        href="varouvrantetquincaillerie.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p></p>

        <p>The index number of the peripheral profile computed is stored into
        variable : <span class="f_Variables">ProfileIndex</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="630"
                style="width: 630px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;">It is not recommended,
                into particular cases, to use the variable <span
                class="f_Variables">ProfileIndex</span> for the question code,
                as the variable is only initialized when the profile is input
                and validated into the window.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_NPeriph</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Number of peripheral
                profiles.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_PeriphPos[]</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Position of each peripheral profile:
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Top</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Bottom</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Left</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Right</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_TopLeft</span><span
                style="color: #000000;">or </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_TopRight</span><span
                style="color: #000000;">. Variables <span
                style="font-family: 'Courier New'; color: #0000ff;">_BottomLeft</span> and <span
                style="font-family: 'Courier New'; color: #0000ff;">_BottomRight</span> are also available, <span
                style="color: #ff0000;">but using versions 9.0 and upper only.</span></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_PeriphType[]</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Type of each peripheral profile:
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Profile</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_DoorSill</span><span
                style="color: #000000;">or </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_WindowSill</span><span
                style="color: #000000;">.</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">The ProfilIndex variable is always
                worth 1 for such sills, door or window, input from the "Outer
                frame" tab of the order.</span></p>

                <p class="p_Textestd" style="text-align: center;"><img
                src="img/clip0014eng.jpg" width="248" height="67" border="0"
                alt="clip0014"></p>

                <p style="margin: 0px 0px 0px 13px;">Refer to the FAQ chapter
                about input method for sills for more details.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_PeriphCat[]</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Category of each peripheral
                profile.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_PeriphThickness</span><span
                class="f_Variables">[]</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Thickness of each peripheral
                profile.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_PeriphDeduced</span><span
                class="f_Variables">[]</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Holds 1 if the profile thickness is to
                be deduced from the typed dimensions, 0 otherwise.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_PeriphLength</span><span
                class="f_Variables">[]</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Length of each profile as computed by
                WinPro. Corresponds to the </span><span
                class="f_Variables">Dimension </span>variable  for each
                profile</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_SillType</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns a numerical value
                corresponding to the configuration of the door sill, which may
                be either user defined, using the extended sill feature:</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"> </span></p>

                <p style="text-align: center;"><img src="img/clip0015eng.jpg"
                width="398" height="271" border="0" alt="clip0015"></p>

                <p style="margin: 0px 0px 0px 13px;"> </p>

                <p style="margin: 0px 0px 0px 13px;">Or through the door sill
                set up, when extended sill feature is disabled:</p>

                <p style="margin: 0px 0px 0px 13px;"> </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none border-spacing:0px;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="208" style="width: 208px;"><p
                        style="margin: 0px 0px 0px 13px;"><img
                        src="img/clip0016eng.jpg" width="121" height="48"
                        border="0" alt="clip0016"></p>
                      </td>
                      <td valign="middle" width="183"
                        style="width: 183px;"><p><span
                        class="f_Variables">_SillType = 0</span></p>
                      </td>
                    </tr>
                    <tr valign="top" align="left">
                      <td width="208" style="width: 208px;"><p
                        style="margin: 0px 0px 0px 13px;"><img
                        src="img/clip0017eng.jpg" width="121" height="50"
                        border="0" alt="clip0017"></p>
                      </td>
                      <td valign="middle" width="183"
                        style="width: 183px;"><p><span
                        class="f_Variables">_SillType = - 1</span></p>
                      </td>
                    </tr>
                    <tr valign="top" align="left">
                      <td width="208" style="width: 208px;"><p
                        style="margin: 0px 0px 0px 12px;"><img
                        src="img/clip0018eng.jpg" width="121" height="52"
                        border="0" alt="clip0018"></p>
                      </td>
                      <td valign="middle" width="183"
                        style="width: 183px;"><p><span
                        class="f_Variables">_SillType = - 2</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_PeriphRalColour</span><span
                class="f_Variables">[]</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Returns a value depending on
                the type of colour selected for the peripheral profile, among
                values:<br>
                <span class="f_Variables">0</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span> Not a RAL colour<br>
                <span class="f_Variables">1</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Standard Mono-colour RAL
                <br>
                <span class="f_Variables">2</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span> Standard Bi-colour
                RAL<br>
                <span class="f_Variables">3</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Non Standard Mono-colour
                RAL <br>
                <span class="f_Variables">4</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Non Standard Bi-colour
                RAL </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_ExtPerimeterFinishing</span><span
                class="f_Variables">[]</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the category of
                outside <a href="finition.php">finishing</a> of the peripheral
                profile.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_IntPerimeterFinishing</span><span
                class="f_Variables">[]</span></p>
              </td>
              <td width="629"
                style="width: 629px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the category of
                inside <a href="finition.php">finishing</a> of the peripheral
                profile.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>
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

        <p>Le numéro du profil périphérique en cours de calcul est stocké dans
        la variable : <span class="f_Variables">NumeroProfil</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="630"
                style="width: 630px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;">Il est déconseillé, dans
                certains cas, d'utiliser la variable <span
                class="f_Variables">NumeroProfil</span> dans les formules de
                question car la variable n'est seulement initialisée une fois
                que la saisie du profil est validée.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_NPeriph</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Nombre total de profils
                périphériques</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_PeriphPos[]</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Position de chaque profil
                périphérique: <span class="f_Variables">_Haut</span>, <span
                class="f_Variables">_Bas</span>, <span
                class="f_Variables">_Gauche</span>, <span
                class="f_Variables">_Droite</span>, <span
                class="f_Variables">_HautGauche</span> ou <span
                class="f_Variables">_HautDroite</span>. Les variables <span
                style="font-family: 'Courier New'; color: #0000ff;">_BasGauche</span> et <span
                style="font-family: 'Courier New'; color: #0000ff;">_BasDroite</span> son également disponibles, <span
                style="color: #ff0000;">mais avec les versions 9.0 et supérieures uniquement.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_PeriphType[]</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Type de chaque profil
                périphérique: <span class="f_Variables">_Profil</span>, <span
                class="f_Variables">_SeuilPorte</span> ou <span
                class="f_Variables">_SeuilChassis</span>.</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">La variable NumeroProfil vaut toujours
                1 pour les seuils saisis via un des deux champs spécifique se
                trouvant dans l'onglet "Dormant" de la commande
                client.</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 13px;"><img
                src="img/clip0350.gif" width="199" height="67" border="0"
                alt="Clip0350"></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;"><a href="faq2.php">Consultez la FAQ
                traitant de la saisie des seuils.</a></span></p>

                <p class="p_Textestd"><span class="f_Textestd"> </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_PeriphCat[]</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de chaque profil
                périphérique.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_PeriphEp[]</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Epaisseur de chaque profil
                périphérique.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_PeriphDeduit[]</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Indique si chaque profil est
                déduit ou pas.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_PeriphLong[]</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Longueur de chaque profil
                périphérique telle qu'elle a été déterminée par Winpro. La
                valeur correspond donc à la variable <span
                class="f_Variables">Dimension</span> de chaque profil
                périphérique.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_TypeSeuil</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable renvoie une
                valeur numérique correspondant à la configuration du seuil de
                porte qui peut être soit définie par l'utilisateur lorsque la
                notion de seuil étendu est activée:</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"> </span></p>

                <p style="text-align: center;"><img src="img/clip00180.jpg"
                width="407" height="220" border="0" alt="Clip00180"></p>

                <p style="margin: 0px 0px 0px 13px;"> </p>

                <p style="margin: 0px 0px 0px 13px;">Ou soit par le paramétrage
                du seuil, lorsque la notion de seuil étendu est désactivée:</p>

                <p style="margin: 0px 0px 0px 13px;"> </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none border-spacing:0px;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="208" style="width: 208px;"><p
                        style="margin: 0px 0px 0px 13px;"><img
                        src="img/clip0385.jpg" width="182" height="45"
                        border="0" alt="Clip0385"></p>
                      </td>
                      <td valign="middle" width="183"
                        style="width: 183px;"><p><span
                        class="f_Variables">_TypeSeuil = 0</span></p>
                      </td>
                    </tr>
                    <tr valign="top" align="left">
                      <td width="208" style="width: 208px;"><p
                        style="margin: 0px 0px 0px 13px;"><img
                        src="img/clip0386.jpg" width="182" height="45"
                        border="0" alt="Clip0386"><span
                        class="f_ImageCaption"></span></p>
                      </td>
                      <td valign="middle" width="183"
                        style="width: 183px;"><p><span
                        class="f_Variables">_TypeSeuil = - 1</span></p>
                      </td>
                    </tr>
                    <tr valign="top" align="left">
                      <td width="208" style="width: 208px;"><p
                        style="text-align: center;"><img src="img/clip0387.jpg"
                        width="182" height="44" border="0" alt="Clip0387"></p>
                      </td>
                      <td valign="middle" width="183"
                        style="width: 183px;"><p><span
                        class="f_Variables">_TypeSeuil = - 2</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_CouleurPeriphRal[]</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 24px;">Renvoie une de ces valeurs en
                fonction du type de teinte saisie du profil périphérique:<br>
                <span class="f_Variables">0</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span> Teinte non Ral<br>
                <span class="f_Variables">1</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Teinte Ral Mono
                Standard<br>
                <span class="f_Variables">2</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span> Teinte Ral Bicolor
                Standard<br>
                <span class="f_Variables">3</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Teinte Ral Mono Hors
                Standard<br>
                <span class="f_Variables">4</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Teinte Ral Bicolor Hors
                Standard</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_PeriphFinition[]</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la catégorie de la <a
                href="finition.php">finition</a> extérieure associée aux
                profils périphériques</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="174"
                style="width: 174px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 3px; margin: 0px 0px 0px 5px;"><span
                class="f_Variables">_PeriphFinitionInt[]</span></p>
              </td>
              <td width="671"
                style="width: 671px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la catégorie de la <a
                href="finition.php">finition</a> intérieure associée aux
                profils périphériques</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
