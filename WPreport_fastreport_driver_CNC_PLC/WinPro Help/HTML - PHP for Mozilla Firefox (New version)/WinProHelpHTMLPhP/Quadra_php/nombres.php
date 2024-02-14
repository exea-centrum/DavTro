<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> <!--
var WinProHelpAvailableLanguages=["ENG","FRA","POL","NED","ESP"];
var WinProHelpPageName=["Numbers","Nombres","Liczby","Getallen", "Numeros"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?nombres.php"; }
else { parent.quicksync('a2.1.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script><title>Nombres</title>

<meta name="generator" content="Help &amp; Manual">
<meta name="keywords" content="Nombre,Décimale,Séparateur,Durée">
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility: hidden; position: absolute; z-index: 1000;"></div>
<table bgcolor="#ff8000" border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="middle">
<td align="left">
<p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
<p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
</td>
<td align="center">
<div id="langflags"></div>
</td>
<td align="right"> <span style="font-size: 9pt;">
<a href="introduction.php">Top</a>&nbsp; <a href="syntaxe.php">Previous</a>&nbsp; <a href="variables.php">Next</a> </span> </td>
</tr>
</tbody>
</table>
<div class="ENG">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>WinPro's integrated language would be useless without a
way to represent numbers...</p>
<p>You can use two number formats.</p>
<p>The first one is the classical <span style="font-weight: bold;">decimal notation</span>. It
uses the <span style="font-weight: bold;">dot</span>
as the <span style="font-weight: bold;">decimal separator</span>.</p>
<p>The second one lets you express <span style="font-weight: bold;">durations</span>, in the
form <span class="f_Variables">minutes:seconds</span>
or <span class="f_Variables">hours:minutes:seconds</span>.
The sign <span class="f_Variables">:</span>
separates the numbers of this notation. You can insert no space in this
kind of number. Also, in the notation <span class="f_Variables">minutes:seconds</span>,
the number of <span style="font-weight: bold;">seconds</span>
must be <span style="font-weight: bold;">strictly less
than 60</span> (but it can have a decimal part), and <span style="font-weight: bold;">greater than or equal to 0</span>.
</p>
<p>In the notation <span class="f_Variables">hours:minutes:seconds</span>,
the same rules applies to <span style="font-weight: bold;">seconds</span>,
and additionally, the number of <span style="font-weight: bold;">minutes</span>
must also be less than 60, must be greater than or equal to 0, and must
be an <span style="font-weight: bold;">integer number</span>.
</p>
<p>You can use the sign - (minus) in front of this kind of
number, to express a negative duration.</p>
<p style="margin: 0px 0px 0px 24px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 24px;">In Windows 32
and on Intel Pentium processors, numbers are stored in memory using a
64 bit floating point notation, complying to the IEEE 754 definition.
These kind of numbers, which are handled very efficiently by Intel
processors, have intrinsic limitations:</p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 8pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>smaller number greater than 0 : <span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">1.7
x 10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: rgb(0, 0, 255); vertical-align: super;">-308</span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 8pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>largest number :<span style="color: rgb(0, 0, 0);"> </span><span class="f_Variables">1.7 x 10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: rgb(0, 0, 255); vertical-align: super;">308</span><span style="color: rgb(0, 0, 0);"> </span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 8pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>maximum number of significant digits <span style="color: rgb(0, 0, 0);">: </span><span class="f_Variables">15</span><span style="color: rgb(0, 0, 0);"> </span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 8pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>the accuracy of some computation is limited, due
to the limited number of bits used to represent a number, along with
their binary notation. </td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 48px;">For instance :
0.5 (1/2) can be represented exactly, but not 0.333... (1/3)</p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="FRA">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p>&nbsp;</p>
<p>Le langage de programmation Winpro serait bien inutile
s'il ne pouvait représenter les nombres...<span style="font-size: 5pt;"> </span></p>
<p>Vous disposez de deux méthodes de représentation des
nombres.</p>
<p>La première est la très classique <span style="font-weight: bold;">notation décimale</span>, à
ceci près que le <span style="font-weight: bold;">séparateur
décimal </span>est le <span style="font-weight: bold;">point
</span>et non la virgule.</p>
<p>La seconde permet de représenter de manière naturelle
les <span style="font-weight: bold;">durées</span>,
sous la forme <span class="f_Variables">minutes:secondes</span>
ou <span class="f_Variables">heures:minutes:secondes</span>.
Le signe <span class="f_Variables">:</span> sépare
les nombres de ce type de notation. Vous ne pouvez pas insérer
d'espaces dans cette notation. </p>
<p>De plus, dans la notation <span class="f_Variables">minute:seconde</span>,
le nombre de <span style="font-weight: bold;">secondes</span>
doit être <span style="font-weight: bold;">strictement
inférieur à 60 </span>(mais il peut contenir une partie
décimale), et <span style="font-weight: bold;">supérieur
ou égale à 0</span>. </p>
<p>Dans la notation <span class="f_Variables">heures:minutes:secondes</span>,
le nombre de <span style="font-weight: bold;">minutes</span>
ne peut non plus atteindre 60, doit être supérieur ou égal à 0, il doit
être un <span style="font-weight: bold;">nombre entier</span>.
</p>
<p>Vous pouvez aussi utiliser le signe - (moins) devant ce
type de nombre, pour représenter une durée négative.</p>
<p>&nbsp;</p>
<p style="margin: 0px 0px 0px 24px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Remarque:</span></p>
<p style="margin: 0px 0px 0px 24px;">Sous Windows 32
et sur processeurs Intel Pentium , les nombres sont représentés en
mémoire par le système de nombres en virgule flottante codé sous 64
bits. Ce type de représentation implique un certain nombre de
limitations, énumérées ci-dessous :<span style="font-size: 5pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial';">
</span></p>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="24"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>Plus petit nombre différent de 0 : <span class="f_Variables">1.7 x 10</span><span class="f_Variables" style="font-family: 'ADMUI3Lg';">^</span><span class="f_Variables">-308</span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="24"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>Plus grand nombre : <span class="f_Variables">1.7
x 10</span><span class="f_Variables" style="font-family: 'ADMUI3Lg';">^</span><span class="f_Variables">308</span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="24"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>Nombre maximum de chiffres significatifs : <span class="f_Variables">15</span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="24"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>L'exactitude de certains calculs est limitée, due
au nombre fini de bits utilisés pour représenter les nombres, et à leur
notation binaire.</td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 72px; text-indent: -24px;">Par
exemple: 0.5 (1/2) peut être représenté exactement, mais pas 0,<span style="text-decoration: underline;">3</span>333...
(1/3)</p>
<p>&nbsp;</p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="POL">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p>&nbsp;</p>
<p>Zintegrowany jezyk WinPro byloby bezuzyteczny bez
mozliwosci przedstawiania liczb...<span style="font-size: 5pt;">
</span></p>
<p>Mozesz uzywac dwóch formatów liczb.</p>
<p>Pierwszy z nich to klasyczny uklad dziesietny, uzywa
kropki jako separatora dziesietnego</p>
<p>Drugi pozwala wyrazic czas trwania, w formach <span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">minutes:seconds</span><span style="color: rgb(0, 0, 0);"> lub </span>
<span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">hours:minutes:seconds</span>
<span style="color: rgb(0, 0, 0);">. Znak </span><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">:</span><span style="color: rgb(0, 0, 0);"> oddziela liczby w danym
zapisie. W tego rodzaju wpisach mozna nie wstawiac &nbsp;spacji.
Równiez w zapisie</span>
<span style="font-weight: bold; color: rgb(0, 0, 0);">
</span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">minutes:seconds</span><span style="color: rgb(0, 0, 0);">, liczba sekund musi bys
mniejsza niz </span>
<span style="font-weight: bold; color: rgb(0, 0, 0);">60</span><span style="color: rgb(0, 0, 0);"> (ale moze miec czesci
dziesietne), i wieksze lub równe</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> 0</span><span style="color: rgb(0, 0, 0);">. W zapisie </span>
<span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">hours:minutes:seconds</span><span style="color: rgb(0, 0, 0);">, te same reguly sa dla</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> sekund</span><span style="color: rgb(0, 0, 0);">, oraz dodatkowo,liczba minut
musi byc mniejsza niz</span>
<span style="font-weight: bold; color: rgb(0, 0, 0);">
60</span><span style="color: rgb(0, 0, 0);">, oraz
wieksza lub równa </span><span style="font-weight: bold; color: rgb(0, 0, 0);">0</span><span style="color: rgb(0, 0, 0);">, i musi byc liczba calkowita.
Mozna równiez uzyc znaku </span><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">-</span><span style="color: rgb(0, 0, 0);"> (minus) na poczatku tego
rodzaju wpisów aby wyrazic ujemny czas trwania.</span></p>
<p style="margin: 0px 0px 0px 24px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">UWAGA:</span></p>
<p style="margin: 0px 0px 0px 24px;">W przypadku
Windows 32 oraz procesorach Intel Pentium, numery zapisane sa w pamieci
za pomoca 64-bitowej notacji zmienno przecinkowej, zgodny z definicja
IEEE 754. Tego typu numery, które sa obslugiwane bardzo skutecznie
przez procesory Intela, maja ograniczenia<span style="font-size: 5pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial';">
</span></p>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="24"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>mniejsze liczby wieksze od 0 : <span class="f_Variables">1.7 x 10</span><span class="f_Variables" style="font-family: 'ADMUI3Lg';">^</span><span class="f_Variables">-308</span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="24"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>wieksze liczby : <span class="f_Variables">1.7
x 10</span><span class="f_Variables" style="font-family: 'ADMUI3Lg';">^</span><span class="f_Variables">308</span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="24"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>maksymalna liczba znacz1cych cyfr : <span class="f_Variables">15</span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="24"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>the accuracy of some computation is limited, due
to the limited number of bits used to represent a number, along with
their binary notation.</td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 72px; text-indent: -24px;">For
instance : 0.5 (1/2) can be represented exactly, but not 0.<span style="text-decoration: underline;">3</span>333...
(1/3)</p>
<p>&nbsp;</p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>WinPro's programmeertaal zou waardeloos zijn zonder dat
er een manier zou zijn om getallen weer te geven...</p>
<p>U kan 2 formaten voor getallen gebruiken.</p>
<p>De eerste is de klassieke <span style="font-weight: bold;">decimale notatie</span>.
Het gebruikt de <span style="font-weight: bold;">punt</span>
als <span style="font-weight: bold;">decimale
scheidingsteken</span>.</p>
<p>De tweede laat u toe om een <span style="font-weight: bold;">duur</span>, uit te drukken
in de vorm van <span class="f_Variables">minuten:seconden</span>
of <span class="f_Variables">uren:minuten:seconden</span>.
Het teken <span class="f_Variables">:</span> scheid
de getallen van deze notatie.Je kan geen spatie toevoegen in dit geval.
Tevens, in deze notatie <span class="f_Variables">minuten:seconden</span>,
het aantal <span style="font-weight: bold;">seconden</span>
moet altijd <span style="font-weight: bold;">minder zijn
dan 60</span> (maar kan een decimaal gedeelte hebben), en <span style="font-weight: bold;">groter dan of gelijk zijn aan 0</span>.
</p>
<p>In de notatie <span class="f_Variables">uren:minuten:seconden</span>,
wordt dezelfde regel toegepast <span style="font-weight: bold;">seconden</span>,
en bijkomend, het aantal <span style="font-weight: bold;">minuten</span>
dient ook minder dan 60 e zijn, maar groter of gelijk aan 0,en moet een
<span style="font-weight: bold;">integer nummer zijn
</span>. </p>
<p>U kan het - teken gebruiken vóór dit getal,om een
negatieve duur aan e duiden.</p>
<p style="margin: 0px 0px 0px 24px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Nota:</span></p>
<p style="margin: 0px 0px 0px 24px;">In Windows 32
en bij Intel Pentium processors, worden getallen opgeslagen in het
geheugen gebruikmakend van een 64 bit floating point notatie, volgens
de IEEE 754 definitie. Dit soort van getallen, welke zeer efficient
behandeld worden door de Intel processors, hebben intrinsieke limieten:</p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 8pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>kleiner getal groter dan 0 : <span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">1.7
x 10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: rgb(0, 0, 255); vertical-align: super;">-308</span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 8pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>grootste getal :<span style="color: rgb(0, 0, 0);"> </span><span class="f_Variables">1.7 x 10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: rgb(0, 0, 255); vertical-align: super;">308</span><span style="color: rgb(0, 0, 0);"> </span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 8pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>maximum aantal van beduidende digits <span style="color: rgb(0, 0, 0);">: </span><span class="f_Variables">15</span><span style="color: rgb(0, 0, 0);"> </span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 48px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 8pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>de nauwkeurigheid van sommige berekeningen is
gelimiteerd, dit komt door de limiet van het aantal bits welke gebruikt
wordt om een getal weer te geven,samen met hun binaire notatie. </td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 48px;">Voorbeeld : 0.5
(1/2) kan correct weergegeven worden, maar 0.333... (1/3) niet </p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="ESP">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">El lenguaje integrado de WinPro sería inútil sin una manera de representar números...</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">Usted puede utilizar dos formatos de número.</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">El primero es la notación </span><span style="font-weight: bold; color: rgb(0, 0, 0);">decimal clásica</span><span style="color: rgb(0, 0, 0);">. Se utiliza el </span><span style="font-weight: bold; color: rgb(0, 0, 0);">punto</span><span style="color: rgb(0, 0, 0);"> como </span><span style="font-weight: bold; color: rgb(0, 0, 0);">separador decimal</span><span style="color: rgb(0, 0, 0);">. (ej.: 3.1416)</span><span style="font-weight: bold; color: rgb(0, 0, 0);">.</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">El segundo formato permite expresar </span><span style="font-weight: bold; color: rgb(0, 0, 0);">duraciones</span><span style="color: rgb(0, 0, 0);">, en forma </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">minutos:segundos </span><span style="color: rgb(0, 0, 0);">o </span><span style="color: rgb(0, 0, 255);">horas:minutos:segundos</span><span style="color: rgb(0, 0, 0);">. &nbsp;El &nbsp;símbolo </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">: </span><span style="color: rgb(0, 0, 0);">separa los números de esta notación. Usted no puede insertar ningún espacio en esta clase de número. Además, en la </span><span style="font-weight: bold; color: rgb(0, 0, 0);">notación</span><span style="color: rgb(0, 0, 0);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">minutos:segundos</span><span style="color: rgb(0, 0, 0);">, el número de segundos debe ser </span><span style="font-weight: bold; color: rgb(0, 0, 0);">estrictamente menor de 60</span><span style="color: rgb(0, 0, 0);"> (pero puede tener una parte decimal), y ser </span><span style="font-weight: bold; color: rgb(0, 0, 0);">mayor que o igual a 0</span><span style="color: rgb(0, 0, 0);">. En la notación </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">horas:minutos:segundos</span><span style="color: rgb(0, 0, 0);">, las mismas reglas se aplican a los segundos, y además, el número de </span><span style="font-weight: bold; color: rgb(0, 0, 0);">minutos</span><span style="color: rgb(0, 0, 0);"> debe también </span><span style="font-weight: bold; color: rgb(0, 0, 0);">ser menor de 60</span><span style="color: rgb(0, 0, 0);">, &nbsp;debe ser </span><span style="font-weight: bold; color: rgb(0, 0, 0);">mayor&nbsp;o igual a 0</span><span style="color: rgb(0, 0, 0);">, y debe ser un </span><span style="font-weight: bold; color: rgb(0, 0, 0);">número entero</span><span style="color: rgb(0, 0, 0);">. Usted puede utilizar el simbolo </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-</span><span style="color: rgb(0, 0, 0);"> (menos) delante de esta clase de número para expresar una duración negativa.</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0); text-decoration: underline;">Observación:</span></p>
<p><span style="color: rgb(0, 0, 0);">En Windows 32 y en los
procesadores Intel Pentium, los números se almacenan en memoria usando
notación en coma flotante de 64 bit, conforme a la definición de IEEE
754. Este tipo de números, que son manejados muy eficientemente por los
procesadores de Intel, tiene limitaciones intrínsecas:</span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">. El número más pequeño mayor de 0 : </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">1.7 x 10-308</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">. El número más grande : </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">1.7 x 10308</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">. El número máximo de cifras significativas : </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">15</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">La precison de
algunos tipos de cálculos es limitada, debido al número finito de bits
empleado para representar los números, y su notación binaria: 0.5 (1/2)
puede representarse exactamente, pero no 1/3, por ejemplo.</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="color: rgb(0, 0, 0);"></span></p>
<span style="color: rgb(0, 0, 0);"></span></td></tr></tbody></table></div>

</body></html>