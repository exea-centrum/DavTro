<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Generate & examine the cutting","G&#233;n&#233;rer &amp; consulter le d&#233;coupage"," Genereren en controleren van het verzagen"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?generer_le_decoupage.php"; }
else { parent.quicksync('a2.4.5.2.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Générer &amp; consulter le découpage</title>
  <meta name="keywords" content="DecArcInfoTrapeze">
  <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;"
onload="AddTitleAndLangFlags();highlight();">

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
        href="decarcdecider.php">Previous</a>  <a
        href="commentaire.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="color: #000000;"> </span></p>

        <p><span style="color: #000000;">The mapping is generated as soon as
        the </span><span
        style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">BowCutGetInfosTrapezium
        </span><span style="color: #000000;">instruction is used.</span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; text-decoration: underline;">Generate
        the mapping with checking its validity</span></p>

        <p>The mapping is generated with running the below instruction with all
        parameters set to <span class="f_Variables">-1</span>.</p>

        <p>The function returns:</p>

        <p>       <span class="f_Variables">-10 </span>in case of
        initialization error</p>

        <p>       <span class="f_Variables">-1 </span>in case of undefined
        problem</p>

        <p>       <span class="f_Variables">1 </span>in case of correct
        calculation.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Syntax:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">a := BowCutGetInfosTrapezium (-1, -1,
        -1)</span></p>

        <p class="p_Interligne"><span class="f_Interligne"
        style="font-weight: bold;"> </span></p>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="542"
                style="width: 542px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Note:
                </span> This stage is optional and have an interest when you
                wish to check the validity of a mapping computation.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables"
        style="font-weight: bold;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; text-decoration: underline;">Examine
        the mapping result</span></p>

        <p><span style="color: #000000;">You may look at the result using the
        same function as above.</span></p>

        <p><span style="color: #000000;">It returns </span><span
        style="font-family: 'Courier New'; color: #0000ff;">-1 </span><span
        style="color: #000000;">or</span><span
        style="font-family: 'Courier New'; color: #0000ff;">-10 </span><span
        style="color: #000000;">in case of error, otherwise it returns the
        required value into the third setting of the function.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"
        style="font-size: 10pt; text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Syntaxe:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">a := BowCutGetInfosTrapezium (0, n° du
        trapeze, InfoType)</span></p>

        <p class="p_Interligne"><span class="f_Interligne"
        style="font-weight: bold;"> </span></p>

        <p><span style="font-weight: bold;">InfoType</span> may be one of above
        values:</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">1</span>
        = Length of the bottom edge</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">2</span>
        = Length of the top edge</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">3</span>
        = Left angle</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">4</span>
        = Right angle </p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">5</span>
        = Top left angle</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">6</span>
        = Top right angle</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">7</span>
        = Offset of the left peak (from the top) - <span
        style="color: #ff0000;">Always returns 0 currently, feature not
        developped until now.</span></p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">8</span>
        = Offset of the right peak (from the top) - <span
        style="color: #ff0000;">Always returns 0 currently, feature not
        developped until now.</span></p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">9</span>
        = Total length</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">10</span> = Section</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">11</span> = Holds 1 if With left peak, 0
        otherwise - <span style="color: #ff0000;">Always returns 0 currently,
        feature not developped until now.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">12</span> = Holds 1 if With right peak, 0
        otherwise - <span style="color: #ff0000;">Always returns 0 currently,
        feature not developped until now.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">13</span> = x coordinate of the top left
        point</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">14</span> = y coordinate of the top left
        point</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">15</span> = x coordinate of the top right
        point</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">16</span> = y coordinate of the top right
        point</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">17</span> = x coordinate of the right peak -
        <span style="color: #ff0000;">Always returns 0 currently, feature not
        developped until now.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">18</span> = y coordinate of the right peak -
        <span style="color: #ff0000;">Always returns 0 currently, feature not
        developped until now.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">19</span> = x coordinate of the bottom right
        point</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">20
        </span>= y coordinate of the bottom right point</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">21</span> = x coordinate of the bottom left
        point</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">22
        </span>= y coordinate of the bottom left point</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">23</span> = x coordinate of the left peak -
        <span style="color: #ff0000;">Always returns 0 currently, feature not
        developped until now.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">24</span> = y coordinate of the left peak -
        <span style="color: #ff0000;">Always returns 0 currently, feature not
        developped until now.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;"> </span></p>
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
      <td align="left"><p><span style="color: #000000;"> </span></p>

        <p><span style="color: #000000;">Le découpage est généré dés que
        l</span><span style="color: #000000;">&rsquo;</span><span
        style="color: #000000;">on utilise l</span><span
        style="color: #000000;">&rsquo;</span><span
        style="color: #000000;">instruction </span><span
        style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">DecArcInfoTrapeze.</span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; text-decoration: underline;">Générer
        le découpage tout en vérifiant sa faisabilité</span></p>

        <p>Le découpage sera généré après avoir exécuter la fonction ci-dessous
        avec les paramètres à <span class="f_Variables">-1</span>.</p>

        <p>La fonction renvoie :</p>

        <p>       <span class="f_Variables">-10 </span>en cas d'erreur dans la
        procédure d'initialisation</p>

        <p>       <span class="f_Variables">-1 </span>en cas d'erreur
        indéfinie</p>

        <p>       <span class="f_Variables">1 </span>en cas de bon
        fonctionnement.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Syntaxe:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">a := DecArcInfoTrapeze (-1, -1,
        -1)</span></p>

        <p class="p_Interligne"><span class="f_Interligne"
        style="font-weight: bold;"> </span></p>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="542"
                style="width: 542px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque:
                </span> Cette étape est facultative et n'a d'intérêt que si
                vous souhaitez vérifier la faisabilité du découpage.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables"
        style="font-weight: bold;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; text-decoration: underline;">Consulter
        les résultats du découpage</span></p>

        <p><span style="color: #000000;">La consultation du découpage est alors
        disponible à l'aide de la même fonction.</span></p>

        <p><span style="color: #000000;">La fonction renvoie </span><span
        style="font-family: 'Courier New'; color: #0000ff;">-1 </span><span
        style="color: #000000;">ou</span><span
        style="font-family: 'Courier New'; color: #0000ff;">-10 </span><span
        style="color: #000000;">en cas d'erreur, sinon elle renvoie la valeur
        demandée correspondant au 3</span><span
        style="font-size: 5pt; color: #000000; vertical-align: super;">e</span><span
        style="color: #000000;">paramètre de la fonction.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"
        style="font-size: 10pt; text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Syntaxe:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">a := DecArcInfoTrapeze (0, n° du trapeze,
        TypeInfo)</span></p>

        <p class="p_Interligne"><span class="f_Interligne"
        style="font-weight: bold;"> </span></p>

        <p><span style="font-weight: bold;">TypeInfo</span> peut prendre l'une
        de ces valeurs:</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">1</span>
        = Longueur du coté bas</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">2</span>
        = Longueur du côté haut</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">3</span>
        = Angle gauche</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">4</span>
        = Angle droite</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">5</span>
        = Angle haut gauche</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">6</span>
        = Angle haut droite</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">7</span>
        = Décalage de la pointe gauche (à partir du haut) - <span
        style="color: #ff0000;">Renvoie toujours 0 en ce moment, fonctionnalité
        non développée à ce jour.</span></p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">8</span>
        = Décalage de la pointe droite (à partir du haut) - <span
        style="color: #ff0000;">Renvoie toujours 0 en ce moment, fonctionnalité
        non développée à ce jour.</span></p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">9</span>
        = Longueur totale</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">10</span> = Section</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">11</span> = Vaut 1 si Avec pointe gauche,
        sinon renvoie 0 - <span style="color: #ff0000;">Renvoie toujours 0 en
        ce moment, fonctionnalité non développée à ce jour.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">12</span> = Vaut 1 si Avec pointe droite,
        sinon renvoie 0 - <span style="color: #ff0000;">Renvoie toujours 0 en
        ce moment, fonctionnalité non développée à ce jour.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">13</span> = Position en x du point haut
        gauche</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">14</span> = Position en y du point haut
        gauche</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">15</span> = Position en x du point haut
        droite</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">16</span> = Position en y du point haut
        droite</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">17</span> = Position en x de la pointe
        droite - <span style="color: #ff0000;">Renvoie toujours 0 en ce moment,
        fonctionnalité non développée à ce jour.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">18</span> = Position en y de la pointe
        droite - <span style="color: #ff0000;">Renvoie toujours 0 en ce moment,
        fonctionnalité non développée à ce jour.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">19</span> = Position en x du point bas
        droite</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">20</span> = Position en y du point bas
        droite</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">21</span> = Position en x du point bas
        gauche</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">22</span> = Position en y du point bas
        gauche</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">23</span> = Position en x de la pointe
        gauche - <span style="color: #ff0000;">Renvoie toujours 0 en ce moment,
        fonctionnalité non développée à ce jour.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">24</span> = Position en y de la pointe
        gauche - <span style="color: #ff0000;">Renvoie toujours 0 en ce moment,
        fonctionnalité non développée à ce jour.</span></p>

        <p style="text-indent: 18px;"> </p>
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
      <td align="left"><p><span style="color: #000000;"> </span><span
        style="color: #000000;">De mapping wordt uitgevoerd van zodra de
        </span><span
        style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">BowCutGetInfosTrapezium
        </span><span style="color: #000000;">instructie gebruikt is.</span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; text-decoration: underline;">Genereren
        van de mapping met controle van uitvoerbaarheid</span></p>

        <p>De mapping wordt uitgevoerd door het uitvoeren van onderstaande
        instructie met alle parameters op <span
        class="f_Variables">-1</span>.</p>

        <p>De functie geeft dan:</p>

        <p>       <span class="f_Variables">-10 </span>in geval van een
        initialisatie fout</p>

        <p>       <span class="f_Variables">-1 </span>in geval van een
        onverklaarbaar probleem</p>

        <p>       <span class="f_Variables">1 </span>in geval van een correcte
        berekening.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Syntax:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">a := BowCutGetInfosTrapezium (-1, -1,
        -1)</span></p>

        <p class="p_Interligne"><span class="f_Interligne"
        style="font-weight: bold;"> </span></p>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="542"
                style="width: 542px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Opmerking:</span>
                Deze stap is optioneel en is enkel van belang wanneer je de
                uitvoerbaarheid wil testen van de mapping berekening.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables"
        style="font-weight: bold;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; text-decoration: underline;">Controleren
        van het mapping resultaat</span></p>

        <p><span style="color: #000000;">U kan het resultaat bekijken
        gebruikmakend van dezelfde functie als hierboven.</span></p>

        <p><span style="color: #000000;">Deze geeft </span><span
        style="font-family: 'Courier New'; color: #0000ff;">-1 </span><span
        style="color: #000000;">of </span><span
        style="font-family: 'Courier New'; color: #0000ff;">-10 </span><span
        style="color: #000000;">in gevl van een storing, anders geeft ie de
        benodigde waarde in de derde parameter van de functie.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"
        style="font-size: 10pt; text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Syntaxe:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">a := BowCutGetInfosTrapezium (0, n° du
        trapeze, InfoType)</span></p>

        <p class="p_Interligne"><span class="f_Interligne"
        style="font-weight: bold;"> </span></p>

        <p><span style="font-weight: bold;">InfoType</span> mag één van
        volgende waardes zijn::</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">1</span>
        = Lengte van de rand onderaan</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">2</span>
        = Lengte van de rand bovenaan</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">3</span>
        = Linker hoek</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">4</span>
        = Rechter hoek </p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">5</span>
        = Boven Linker hoeke</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">6</span>
        = Boven rechter hoek</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">7</span>
        = Offset van de linker spits (vanaf boven) - <span
        style="color: #ff0000;">Geeft momenteel steeds 0,toepassing is nog niet
        ontwikkeld.</span></p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">8</span>
        = Offset of the right peak (vanaf boven) - <span
        style="color: #ff0000;">Geeft momenteel steeds 0,toepassing is nog niet
        ontwikkeld.w.</span></p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">9</span>
        = Totale lengte</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">10</span> = Sectie</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">11</span> = Bevat 1 wanneer linker spits, 0
        indien andersom - <span style="color: #ff0000;">Geeft momenteel steeds
        0,toepassing is nog niet ontwikkeld..</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">12</span> = Bevat 1 wanneer rechter spits, 0
        indien andersom - <span style="color: #ff0000;">Geeft momenteel steeds
        0,toepassing is nog niet ontwikkeld.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">13</span> = x coordinate van het bovenste
        linker punt</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">14</span> = y coordinate van het bovenste
        linker punt</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">15</span> = x coordinate van het bovenste
        rechter punt</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">16</span> = y coordinate van het bovenste
        rechter punt</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">17</span> = x coordinate van het rechter
        punt - <span style="color: #ff0000;">Geeft momenteel steeds
        0,toepassing is nog niet ontwikkeld..</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">18</span> = y coordinate van het rechter
        punt - <span style="color: #ff0000;">Geeft momenteel steeds
        0,toepassing is nog niet ontwikkeld.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">19</span> = x coordinate van het onderste
        rechter punt</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">20
        </span>= y coordinate van het onderste rechter punt</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">21</span> = x coordinate van het onderste
        linker punt</p>

        <p style="text-indent: 18px;"><span style="font-weight: bold;">22
        </span>= y coordinate van het onderste linker punt</p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">23</span> = x coordinate linker spits -
        <span style="color: #ff0000;">Geeft momenteel steeds 0,toepassing is
        nog niet ontwikkeld.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;">24</span> = y coordinate linker spits -
        <span style="color: #ff0000;">Geeft momenteel steeds 0,toepassing is
        nog niet ontwikkeld.</span></p>

        <p style="text-indent: 18px;"><span
        style="font-weight: bold;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
