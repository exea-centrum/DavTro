<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Duplicate a colour","Dupliquer une couleur"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utildupliquercouleur.php"; }
else { parent.quicksync('a9.17'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Dupliquer une couleur</title>
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
        href="utilmodifierclef.php">Previous</a>  <a
        href="utilmodifieretatcommande.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This tool is suitable to add a  <a href="couleur.php">colour</a> into WinPro data set up. You must 
	  anyway create the colour code first, and enable it into the concerned system records. You will then be able to run 
	  the feature with indicating the colour to duplicate, and the colour to be duplicated.</p>

        <p> </p>

        <p>The tool is reached through menu <span style="font-weight: bold;">Tools | Duplicate a colour</span>.</p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"><img src="img/clip0768eng.jpg"
        width="512" height="429" border="0" alt="clip0768eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Previous colour</span>:
                Code of the colour to duplicate.</td>
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
              <td><span style="font-weight: bold;">New colour</span>:
                Code of the new colour.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -15px; margin: 0px 0px 0px 15px;"> </p>

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
                style="font-weight: bold; text-decoration: underline;">Notes</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>This tool is only selecting the colour code for yourself into data set up rules. No creation is done 
					  at this stage, this implying that the data set up should be adapted to the usage context, in particular
					  regarding colour management (stadard colours with a pricing by groups).</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>If you just need to rename an existing colour, please use instead the feature to 
					  <a href="utilmodifierclef.php">Change a record's code</a>.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -15px; margin: 0px 0px 0px 15px;"> </p>

        <p style="text-indent: -15px; margin: 0px 0px 0px 15px;"><span
        style="font-style: italic; text-decoration: underline;">Usage sample:</span></p>

        <p></p>

        <p style="text-indent: -15px; margin: 0px 0px 0px 15px;">We consider a list of colour codes into WinPro.</p>

        <p style="text-indent: -15px; margin: 0px 0px 0px 15px;"> </p>

        <p
        style="text-align: center; text-indent: -15px; margin: 0px 0px 0px 15px;"><img
        src="img/clip0769eng.jpg" width="251" height="201" border="0"
        alt="clip0769eng"></p>

        <p> </p>

        <p>A new standard colour is created into the supplier's price list, with code <span style="font-weight: bold;">1015 SAT
		</span>. This colour has the same price as colour of code <span style="font-weight: bold;">1015</span> (same usage
		conditions).</p>

        <p>The user first create the colour into menu <span style="font-weight: bold;">Data | Basic data | Colours</span>.</p>

        <p>Then, the data set up should be adapted.</p>

        <p>Instead of reviewing the whole set of rules where colour <span style="font-weight: bold;">1015</span> is selected into
		the list of colours to be evaluated for the formulas, to select also the new colour code 
		<span style="font-weight: bold;">1015 SAT</span>, the tool may be used.</p>

        <p><span style="text-decoration: underline;"> </span></p>

        <p><span style="text-decoration: underline;">Before usage of the tool (fittings frame rule, the </span><span
        style="font-weight: bold; text-decoration: underline;">1015 SAT</span><span style="text-decoration: underline;"> 
		colour code is not selected):</span></p>

        <p style="text-align: center;"><span
        style="text-decoration: underline;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0770eng.jpg" width="629"
        height="283" border="0" alt="clip0770eng"></p>

        <p style="text-align: center;"><span
        style="text-decoration: underline;"> </span></p>

        <p><span style="text-decoration: underline;">Tool usage:</span></p>

        <p><span style="text-decoration: underline;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0771eng.jpg" width="512"
        height="430" border="0" alt="clip0771eng"></p>

        <p><span style="text-decoration: underline;"> </span></p>

        <p><span style="text-decoration: underline;">After usage of the tool (fittings frame rule, colour code </span><span
        style="font-weight: bold; text-decoration: underline;">1015 SAT
        </span><span style="text-decoration: underline;">is now selected):</span></p>

        <p style="text-align: center;"><span
        style="text-decoration: underline;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0773eng.jpg" width="538"
        height="205" border="0" alt="clip0773eng"></p>

        <p style="text-align: center;"><span
        style="text-decoration: underline;"> </span></p>

        <p style="text-align: center;"><span
        style="text-decoration: underline;"> </span></p>

        <p style="text-indent: -17px; margin: 0px 0px 0px 17px;"> </p>

        <p style="text-indent: -17px; margin: 0px 0px 0px 17px;"> </p>
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
      <td align="left"><p>Cet outil permet de rajouter une <a
        href="couleur.php">couleur</a> dans le paramétrage de WinPro. Vous
        devez toutefois créer la nouvelle couleur au préalable dans la table
        des couleurs, et autoriser cette couleur dans les systèmes concernés.
        Vous pourrez ensuite lancer cet outil et lui indiquer quelle est la
        couleur qui est dupliquée, ainsi que la couleur à dupliquer.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | </span><span
        class="f_Heading1">Dupliquer une couleur</span>.</p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"><img src="img/clip0768.zoom77.gif"
        width="394" height="353" border="0" alt="clip0768"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Ancienne couleur</span>:
                Code de la couleur à dupliquer.</td>
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
              <td><span style="font-weight: bold;">Nouvelle couleur</span>:
                Code de la nouvelle couleur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -15px; margin: 0px 0px 0px 15px;"> </p>

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
                style="font-weight: bold; text-decoration: underline;">Remarques</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Cet outil ne fait que sélectionner les couleurs pour
                        vous dans les formules de paramétrage. Il ne fait
                        aucune création, ce qui implique que le paramétrage
                        doit être adapté à ce contexte d'utilisation, en
                        particulier la gestion des couleurs (teintes standards
                        avec une tarification par groupe). </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Si vous devez simplement renommer une couleur
                        existante, utilisez l'utilitaire <a
                        href="utilmodifierclef.php">Modifier la clef d'un
                        enregistrement</a>.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -15px; margin: 0px 0px 0px 15px;"> </p>

        <p style="text-indent: -15px; margin: 0px 0px 0px 15px;"><span
        style="font-style: italic; text-decoration: underline;">Exemple
        d'utilisation:</span></p>

        <p style="text-indent: -15px; margin: 0px 0px 0px 15px;"><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p style="text-indent: -15px; margin: 0px 0px 0px 15px;">Soit une liste
        de couleurs WinPro.</p>

        <p style="text-indent: -15px; margin: 0px 0px 0px 15px;"> </p>

        <p
        style="text-align: center; text-indent: -15px; margin: 0px 0px 0px 15px;"><img
        src="img/clip0769.gif" width="258" height="233" border="0"
        alt="clip0769"></p>

        <p> </p>

        <p>Une nouvelle couleur standard arrive au tarif du fournisseur, de
        code <span style="font-weight: bold;">RAL 3012</span>. Cette teinte a
        le même tarif que la teinte <span style="font-weight: bold;">RAL
        3011</span> (les mêmes conditions d'utilisation).</p>

        <p>L'utilisateur créé la couleur dans le menu<span
        style="font-weight: bold;">Données | Données de base | Couleurs</span>
        au préalable.</p>

        <p>Ensuite, il faut adapter le paramétrage. </p>

        <p>Plutôt que de passer en revue toutes les fiches pour lesquelles on a
        sélectionné la couleur<span style="font-weight: bold;">RAL 3011</span>
        dans la liste des couleurs valables pour la formule, afin de cocher la
        couleur <span style="font-weight: bold;">RAL 3012</span>, on utilisera
        cet utilitaire.</p>

        <p><span style="text-decoration: underline;"> </span></p>

        <p><span style="text-decoration: underline;">Avant l'utilisation de
        l'outil (formule de quincaillerie, la teinte </span><span
        style="font-weight: bold; text-decoration: underline;">RAL
        3012</span><span style="text-decoration: underline;">n'est pas
        sélectionnée):</span></p>

        <p style="text-align: center;"><span
        style="text-decoration: underline;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0770.gif" width="491"
        height="334" border="0" alt="clip0770"></p>

        <p style="text-align: center;"><span
        style="text-decoration: underline;"> </span></p>

        <p><span style="text-decoration: underline;">Utilisation de
        l'outil:</span></p>

        <p><span style="text-decoration: underline;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0771.gif" width="511"
        height="356" border="0" alt="clip0771"></p>

        <p><span style="text-decoration: underline;"> </span></p>

        <p><span style="text-decoration: underline;">Après utilisation de
        l'outil (formule de quincaillerie, la teinte </span><span
        style="font-weight: bold; text-decoration: underline;">RAL 3012
        </span><span style="text-decoration: underline;">est maintenant
        </span></p>

        <p><span style="text-decoration: underline;">sélectionnée):</span></p>

        <p style="text-align: center;"><span
        style="text-decoration: underline;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0773.gif" width="440"
        height="334" border="0" alt="clip0773"></p>

        <p style="text-align: center;"><span
        style="text-decoration: underline;"> </span></p>

        <p style="text-align: center;"><span
        style="text-decoration: underline;"> </span></p>

        <p style="text-align: center;"><span
        style="text-decoration: underline;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
