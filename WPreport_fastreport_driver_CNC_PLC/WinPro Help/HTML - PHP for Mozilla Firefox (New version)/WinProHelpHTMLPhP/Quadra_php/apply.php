<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Apply","Appliquer","Toepassen"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?apply.php"; }
else { parent.quicksync('a2.5.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Appliquer</title>
  <meta name="keywords" content="Appliquer">
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
      <td align="left"><p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 6pt; font-weight: normal;"> </span></p>

        <p class="p_Heading1"><span id="titlepage"
        class="f_Heading1"></span></p>
      </td>
      <td align="center">
        <div id="langflags">
        </div>
      </td>
      <td align="right"><span style="font-size: 9pt"><a
        href="introduction.php">Top</a>  <a
        href="commentaire.php">Previous</a>  <a href="cadre.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>This instruction is used only for profiles.</p>

        <p>Usually, a formula associated to a profile lets you generate one or
        more identical pieces (identical in length, angles and millings). In
        some cases however, it can be useful to generate several different
        pieces from the same formula (varying length, angles, and/or
        millings).</p>

        <p>For example, you might need to compute the profiles necessary to
        fill a panel, when the profiles are arranged with a 45° angle. Or you
        can use this instruction to generate the bits of profiles in a
        segmented frame.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Syntax:</span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">Apply</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Example:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"># Generate a list
        of profiles, each being </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"># 10mm longer than
        the previous one </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">l := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">length :=
        height/2</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">repeat while l &lt;
        length</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> quantity :=
        1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> apply</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> length +=
        10</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> l += 80</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">end
        repeat</span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">quantity :=
        0</span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span
        class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="511"
                style="width: 511px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-weight: bold; text-decoration: underline;">Remark:
                </span>It is important, when leaving the formula, to force the
                variable <span class="f_Variables">Quantity</span> (or variable
                <span class="f_Variables">Length</span>) to 0. Otherwise, a
                last profile will be generated after the formula.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p><span
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

        <p>Cette instruction ne s'applique qu'aux profils.</p>

        <p>En règle général, une formule associée à un profil permet de générer
        un ou plusieurs morceaux identiques (en terme de longueur comme en
        terme d'angles de coupe). Dans certaines conditions toutefois, il peut
        être utile de générer plusieurs profils de même nature, mais de
        longueur et/ou d'angles de coupe différents.</p>

        <p>Par exemple, vous pouvez calculer la liste des profils nécessaire à
        un remplissage à 45° d'un panneau. On peut aussi utiliser cette
        instruction pour générer les différents segments de dormant contenant
        un mélange de frappes extérieures et intérieures, ou encore contenant
        des traverses filantes.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Syntaxe:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">Appli</span><span
        style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">quer</span><span
        style="font-size: 5pt;"></span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Exemple:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Générer une liste de profils dont chacun</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># est
        10mm plus long que le précédent</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">l :=
        0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Longueur
        := Hauteur</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Repeter
        Tant Que l &lt; Largeur</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Quantite := 1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Appliquer</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Longueur += 10</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  l +=
        80</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fin
        Repeter</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Quantite
        := 0</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 2px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>

                <p style="margin: 0px 0px 0px 13px;">Il est important, avant de
                quitter la formule, de forcer la variable <span
                class="f_Variables">Quantite</span> (ou variable <span
                class="f_Variables">Longueur</span>) à <span
                class="f_Variables">0</span>. Sans quoi, un dernier profil sera
                généré en sortie de formule.</p>
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

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Deze instructie wordt enkel gebruikt bij profielen.</p>

        <p>In het algemeen ,laat een formule welke toegewezen is aan een
        profiel u toe om één of meerdere identieke stukken te genereren
        identiek in lengte,hoeken en bewerkingen). In bepaalde gevallen,kan het
        zinvol zijn om verschillende stukken vanuit dezelfde formule te
        genereren (verschil in lengte,hoeken en/of bewerkingen).</p>

        <p>Bijvoorbeeld, u dient de profielen te berekenen om een paneelvulling
        te vullen,wanneer de profielen gerangschikt zijn met een 45° hoek. Of u
        kan deze formule gebruiken om het antal stukken te berekenen in een
        gesegmenteerde kader.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Syntax:</span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">Apply</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Voorbeeld:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"># Genereert een
        lijst van profielen,elk </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"># 10mm langer dan
        de vorige </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">l := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">length :=
        height/2</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">repeat while l &lt;
        length</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> quantity :=
        1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> apply</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> length +=
        10</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> l += 80</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">end
        repeat</span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">quantity :=
        0</span></p>

        <p></p>

        <p></p>

        <p></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Voorbeeld:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"># Genereert een
        lijst van profielen,elk </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"># 10mm langer dan
        de vorige </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">l := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">lengte :=
        hoogte/2</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">repeat while l &lt;
        lengte</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> Hoeveelheid :=
        1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> apply</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> length +=
        10</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> l += 80</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">end
        repeat</span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">hoeveelheid :=
        0</span></p>
        <p></p>

        <p></p>
        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="511"
                style="width: 511px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-weight: bold; text-decoration: underline;">Opmerking:</span>
                Het is belangrijk dat wanneer de formule verlaten wordt, de
                variabele <span class="f_Variables">Quantity</span> (of de
                variabele <span class="f_Variables">Length</span>) geforceerd
                op 0 terug te zetten.Wanneer dit niet gebeurd,zal er nog een
                laatste profiel gegenereert worden na de formule.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
