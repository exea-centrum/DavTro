<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["ReplaceWith","RemplacerPar","VervangDoor"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?remplacerpar.php"; }
else { parent.quicksync('a2.5.7'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>RemplacerPar</title>
  <meta name="keywords" content="RemplacerPar">
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
        href="introduction.php">Top</a>  <a href="message.php">Previous</a>  <a
        href="usinage.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p>When computing the components of a window's element (outer frame,
        sash, transom, fitting, roller shutter box, shutter blades, shutter
        slides), you might find out that the element being computed is
        inappropriate, and you should suggest another one to the user.</p>

        <p> </p>

        <p>This is what instruction <span
        class="f_Variables">ReplaceWith</span> does. When this instruction is
        met, a message is displayed to the user, suggesting to replace the
        chosen element with one more appropriate. The user has the option to
        accept or reject the replacement.</p>

        <p> </p>

        <p>If instruction <span class="f_Variables">ReplaceWith</span> is met
        while computing a price table, the replacement will systematically take
        place. If the instruction <span class="f_Variables">ReplaceWith</span>
        is met when launching a production, the replacement will never take
        place. In both cases, no message is generated.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Syntax:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">ReplaceWith
        (code, message)</span></p>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" border="1"
        style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="94" bgcolor="#fff7ef"
              style="width: 94px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Parameter</span></p>
              </td>
              <td width="510" bgcolor="#fff7ef"
              style="width: 510px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #000000;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="94" bgcolor="#fff7ef"
              style="width: 94px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">code</span></p>
              </td>
              <td width="510" bgcolor="#fff7ef"
              style="width: 510px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="color: #000000;">Code of the element that should replace
                the current element being computed.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="94" bgcolor="#fff7ef"
              style="width: 94px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">message</span></p>
              </td>
              <td width="510" bgcolor="#fff7ef"
              style="width: 510px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="color: #000000;">Message to show the user, explaining
                why he should change</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Example</span>:</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Propose to replace a transom with a stronger one</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># if
        length is over 2 meters</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        Dimension &gt; 2000</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   ReplaceWith (STRONGTRANSOM, You should use a
        stronger transom)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>
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

        <p>Pendant le calcul d'un des composants du châssis (dormant, ouvrant,
        traverse, quincaillerie, caisson, tablier, coulisse), il se peut que le
        paramétrage détermine que l'élément en cours de calcul n'est pas
        approprié, et qu'il faut en proposer un autre à l'utilisateur.</p>

        <p> </p>

        <p>L'instruction <span style="color: #0000ff;">RemplacerPar</span> sert
        à cela. Lorsque cette instruction est exécutée pendant le calcul,
        l'utilisateur verra apparaître un dialogue lui proposant de remplacer
        l'élément en cours de calcul par un autre élément plus approprié. </p>

        <p>L'utilisateur a le droit de choisir d'accepter ou pas la
        suggestion.</p>

        <p> </p>

        <p>Si l'instruction <span style="color: #0000ff;">RemplacerPar
        </span>est rencontrée pendant le calcul d'une grille de tarif, le
        remplacement se fera systématiquement, sur la cellule de grille en
        cours </p>

        <p>de calcul. </p>

        <p> </p>

        <p>Si l'instruction RemplacerPar est rencontrée lors d'un calcul de
        fabrication, le remplacement ne se fera jamais, de façon à respecter le
        choix de l'utilisateur.</p>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Syntaxe:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><strong><span
        style="color: #0000ff;">RemplacerPar</span><span
        class="f_Variables">(code, message)</span></strong></p>

        <p style="text-align: center;"><span style="font-size: 5pt;"></span>
        </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Paramètre</span></p>
              </td>
              <td width="510"
                style="width: 510px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">code</span></p>
              </td>
              <td width="510"
                style="width: 510px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Code de l'élément destiné à
                remplacer l'élément en cours de calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">message</span></p>
              </td>
              <td width="510"
                style="width: 510px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Il s'agît du message qui sera
                présenté à l'utilisateur, pour justifier le remplacement.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Exemple:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        proposer de remplacer une traverse par</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># une
        version plus large si la longueur</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        dépasse 2 mètres</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Si
        Dimension &gt; 2000</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   RemplacerPar (TRAVLARGE, Vous devriez utiliser
        la traverse large)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fin
        Si</span></p>
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
      <td align="left"><p><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p>Wanneer we de onderdelen van een raamelement berekenen
        (kader,vleugel,stijl,beslag,rolluikkast,rolluikblad,rolluikgeleiders),kan
        het voorkomen dat het onderdeel wat je op dat moment berekend niet
        geschikt is,en dan zou je een ander onderdeel willen voorstellen aan de
        gebruiker.</p>

        <p> </p>

        <p>Dat is wat de instructie <span class="f_Variables">ReplaceWith
        'VervangDoor'</span> doet. Wanneer de voorwaarde voldaan is, krijgt de
        gebruiker een meldig op het scherm,waarbij er geadviseerd wordt om het
        gekozen onderdeel te vervangen door een meer geschikt onderdeel.De
        gebruiker heeft dan de optie om dit te aanvaarden of te weigeren.</p>

        <p> </p>

        <p>Wanneer de instructie <span class="f_Variables">ReplaceWith of
        'VervangDoor'</span>gebruikt wordt tijdens het berekenen van een
        prijstabel,zal het vervangen systematisch gebeuren.Wanneer de </p>

        <p>instructie <span class="f_Variables">ReplaceWith of
        'VervangDoor'</span> gebruikt wordt bij het starten van de
        productie,zal de vervanging nooit plaatsvinden.</p>

        <p></p>

        <p>Let op !! In beide gevallen,wordt er geen bericht gegeven.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Syntax:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">ReplaceWith
        (code, bericht)</span></p>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" border="1"
        style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="94" bgcolor="#fff7ef"
              style="width: 94px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Parameter</span></p>
              </td>
              <td width="510" bgcolor="#fff7ef"
              style="width: 510px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #000000;">Beschrijving</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="94" bgcolor="#fff7ef"
              style="width: 94px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">code</span></p>
              </td>
              <td width="510" bgcolor="#fff7ef"
              style="width: 510px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="color: #000000;">Code van het element dat het huidig
                berekend element dient te vervangen.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="94" bgcolor="#fff7ef"
              style="width: 94px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">bericht</span></p>
              </td>
              <td width="510" bgcolor="#fff7ef"
              style="width: 510px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="color: #000000;">Bericht naar de gebruiker toe,met de
                verklaring waarom dit dient te gebeuren</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Voorbeeld</span>:</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Voorstel om een stijl te vervangen door een sterkere stijl</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        wanneer deze langer is dan 2 meters</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        Dimension &gt; 2000</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   ReplaceWith (STERKERESTIJL, U dient een bredere
        stijl te gebruiken)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p></p>

        <p style="margin-left:2em;">Voorbeeld:</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Voorstel om een stijl te vervangen door een sterkere stijl</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        wanneer deze langer is dan 2 meters</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        Afmeting &gt; 2000</span></p>

        <p style="margin-left:6em"><span class="f_Variables">   VervangDoor
        (STERKERESTIJL, U dient een bredere stijl te
        gebruiken)</span><span></span></p>

        <p style="margin-left:4em"><span><span style="color:#0000ff">End
        If</span></span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
