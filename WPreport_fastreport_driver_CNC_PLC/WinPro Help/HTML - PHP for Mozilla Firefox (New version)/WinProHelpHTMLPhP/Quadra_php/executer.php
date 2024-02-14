<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Call","Executer","Uitvoeren"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?executer.php"; }
else { parent.quicksync('a2.5.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Executer</title>
  <meta name="keywords" content="Executer,Routine">
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
        href="introduction.php">Top</a>  <a href="cadre.php">Previous</a>  <a
        href="manipulation_de_formes.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>WinPro lets you define sub-routines, which are formulas that you can
        call from other formulas.</p>

        <p>First, you need to define sub-routines in the <a
        href="routines.php">sub-routine table</a>; then, you simply need to use
        the <span class="f_Variables">Call</span> instruction, followed by the
        sub-routine's code.</p>

        <p>This ability lets you significantly reduce the number of lines you
        need to write and maintain.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Syntax:</span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">Call
        (ROUTINE_CODE)</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remark</span><span
                style="text-decoration: underline;">s:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>All variables accessible from the calling formula are
                        also accessible from the called sub-routine. This
                        implies the called sub-routine can change and even
                        create variables, and the changes will be available to
                        the calling formula. Actually, the calling formula and
                        the sub-routine share the same variable space.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>A sub-routine may call another sub-routine. Beware
                        however of recursive calls (directly or indirectly):
                        with any programming language supporting this feature,
                        you must make sure that the recursive calls eventually
                        end, otherwise they will go on forever (which means, in
                        computer language, until the internal stack space is
                        full and the progam crashes).</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Example:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">handleHeight := 420</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">leafHeight := 1040</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Call
        (HANDLE_MILLING)</span></p>

        <p><span style="color: #000000;"> </span></p>
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

        <p>WinPro vous autorise à définir des routines, c'est à dire des
        formules qui seront appelées à partir d'autres formules.</p>

        <p>Pour cela, vous devez d'abord définir vos routines dans la <a
        href="routines.php">table des routines</a> ; ensuite, il vous suffit
        d'utiliser la fonction <span class="f_Variables">Executer</span>,
        suivie du code de la routine à appeler.</p>

        <p>Cette notion de routine permet de réduire considérablement le nombre
        de lignes de formules à écrire et surtout à maintenir.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="text-decoration: underline;">Syntaxe:</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables"
        style="font-weight: bold;">Executer (ROUTINE_CODE)</span></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="text-decoration: underline;">Exemple:</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">hpoignee
        := 420</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">hvantail
        := 1040</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">Executer
        (USG_POIGNEE)</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
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
                      <td>Toutes les variables accessibles depuis la formule
                        appelante sont accessibles et modifiables depuis la
                        routine appelée. Toutes les variables créées dans la
                        routine appelée sont disponibles dans la formule
                        appelante, après exécution de la routine. En fait,
                        routine appelée et formule appelante partagent la même
                        zone de mémoire contenant les variables.</td>
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
                      <td>Une routine peut en appeler une autre. Attention
                        toutefois aux appels récursifs (directs ou indirects):
                        comme dans tout langage de programmation, il faut
                        s'assurer qu'à un moment ou un autre, les appels
                        récursifs cessent, afin d'éviter qu'ils se poursuivent
                        à l'infini.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
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

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>WinPro staat u toe om sub-routines te bepalen, welke eigenlijk
        formules zijn welke terug opgeroepen kunnen worden vanuit andere
        formules.</p>

        <p>Eerst dient u de sub-routines te bepalen in de <a
        href="routines.php">Routine tabel</a>; waarna, u eenvoudig de
        instructie <span class="f_Variables">Uitvoeren</span> oproept, gevolgd
        door de code van de routine.</p>

        <p>Deze toepassing verminderd sterk het aantal wederkerende lijnen
        welke u steeds weer dient te schrijven en dient te onderhouden.</p>

        <p></p>

        <p>Bijvoorbeeld voor het beslag, kan je éénmaal een routine schrijven
        (voor de bewerkingen) en deze oproepen in de verschilende
        vleugeltypes.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Syntax:</span></p>

        <p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">Uitvoeren
        (ROUTINE_CODE)</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Opmerking</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Alle variabelen welke opgeroepen worden vanuit de
                        start formule zijn tevens beschikbaar vnuit de
                        opgeroepen routine.Dit betekend dat in de routine
                        wijzigingen kunnen toegevoegd worden welke direct
                        leesbaar zijn in de start formules.De start formule en
                        de routine delen dezelfde variabelen.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Een routine kan tevens een andere routine
                        oproepen.Let wel op dat je niet in een wederkerige
                        functie terechtkomt: met alle programmeertalen welke
                        deze toepassing dekt, dien je er zeker van te zijn dat
                        een herhaling op een gegeven moment stopt, anders zal
                        dit eeuig doorgaan (in computertaal,tot de interne
                        stackruimte vol is en de computer of het programma
                        crashed)</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Voorbeeld:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">krukHoogte := 420</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">vleugelHoogte := 1040</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Uitvoeren (KRUK_BEWERKING)</span></p>

        <p><span style="color: #000000;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
