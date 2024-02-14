<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","POL"];
var WinProHelpPageName=["Thermic Coefficient","Coefficient Thermique","Wsp�lczynnik Przenikania Termicznego"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?modulethermique.php"; }
else { parent.quicksync('a7.11'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Coefficient thermique</title>
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
        href="introduction.php">Top</a>� <a
        href="coefficientsprix.php">Previous</a>� <a
        href="moduletheprempl.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu is designed to initialize values required
        for the thermic module, as defined into <a href="8_1_0_x.php">release
        note version 8.1</a>.</p>

        <p>This module computed the thermic dissipation coefficients of the
        various windows of the order and print those values onto customer
        documents (quotation, confirmation, invoice, ...).</p>

        <p>The module will compute the thermic values of windows and integrated
        roller shutters, and will also compute a global pounded value for the
        whole order, printed onto customer document footers.</p>

        <p>Resulting values may be seen within the <span
        style="font-style: italic;">Thermic computation</span> tab of the order
        or quote.</p>

        <p><span class="f_Textestd">Various basic values and settings need to
        be set up for the module to work properly, in particular at <a
        href="warmedge.php">warm edges</a>, <a
        href="categoriespanneaux.php">panels categories</a>, <a
        href="vitrages.php">glazings</a>, <a href="panneaudecouper.php">plain
        panels</a>, <a href="panneaudeco.php">decorative panels</a>, <a
        href="croisillons.php">glazing bars</a>, <a
        href="aerateurs.php">ventilators</a> or <a
        href="volettablier.php">roller shutter curtains</a> levels.</span></p>

        <p><span class="f_Textestd">This module has no consequence onto the
        components computation for the current window. When the thermic
        computation fails, WinPro will display an error into <span
        style="font-style: italic;">Thermic computation</span> tab for
        concerned window, and will also print an error onto customer document
        footers. Nevertheless, components and prices of the order won't be
        affected.</span></p>
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
      <td align="left"><p>Ce menu a pour objet de mettre en place les valeurs
        n�cessaires au module thermique, comme d�crit dans la <a
        href="8_1_0_x.php">note de version 8.1</a>.</p>

        <p>Ce module calcule les coefficients de dissipation thermique des
        diff�rentes menuiseries de la commande et imprime ces valeurs sur les
        documents commerciaux (devis, confirmation, facture, ...).</p>

        <p>Le module calculera les valeurs thermiques pour les ch�ssis et les
        volets incorpor�s � la menuiserie, et calculera �galement une valeur
        thermique globale pond�r�e pour la commande compl�te, imprim�e en bas
        de page des documents.</p>

        <p>Les r�sultats calcul�s par WinPro pourront �tre consult�s dans
        l'onglet <span style="font-style: italic;">Calcul thermique </span>de
        la commande ou du devis.</p>

        <p><span class="f_Textestd">Pour que ce module soit op�rationnel, il
        faut avoir mis en place un certains nombre de param�tres et valeurs
        thermiques, notamment au niveau des <a href="warmedge.php">warm
        edges</a>, des <a href="categoriespanneaux.php">cat�gories de
        panneaux</a>, des <a href="vitrages.php">vitrages</a>, des <a
        href="panneaudecouper.php">panneaux � d�couper</a>, des <a
        href="panneaudeco.php">panneaux d�coratifs</a>, des <a
        href="croisillons.php">croisillons</a>, des <a
        href="aerateurs.php">a�rateurs</a>, des <a
        href="volettablier.php">tabliers de volets</a>.</span></p>

        <p><span class="f_Textestd">Ce module n'a pas d'impact sur le calcul
        des composants de la menuiserie. Si le calcul thermique �choue, WinPro
        indiquera simplement une erreur dans l'onglet </span><span
        class="f_Textestd" style="font-style: italic;">Calcul
        thermique</span><span class="f_Textestd">pour le ch�ssis concern�, et
        imprimera �galement une erreur sur les documents clients. Pour autant,
        le calcul des composants et des prix ne sera pas affect�.</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="POL">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>To menu jest zaprojektowane do inicjalizacji wartosci
        niezbednych dla modu&#x142;u termicznego, tak jak zdefiniowano w <a
        href="8_1_0_x.php">wersji 8.1</a>.</p>

        <p>Modu&#x142; ten oblicza wsp�&#x142;czynnik przenikania ciep&#x142;a
        w r�&#x17c;nych konstrukcjach i drukuje wynik na dokumentach dla
        klienta. (oferty, potwierdzenia, faktury, ...).</p>

        <p>Modu&#x142; ten obliczy wartos&#x107; termiczn&#x105; okien oraz
        zintegrowanych rolet, oraz obliczy globalnie wartos&#x107;
        termiczn&#x105; dla calego zam�wienia, oraz wydrukuje wynik na
        dokumentach dla klienta.</p>

        <p>Wartosci wynikajace mog&#x105; by&#x107; widoczne w zak&#x142;adce
        <span style="font-style: italic;">Kalkulacja Termiczna</span> w
        zam�wieniu lub ofercie.</p>

        <p><span class="f_Textestd">R�&#x17c;ne podstawowe wartosci oraz
        ustawienia potrzebne do skonfigurowania modu&#x142;u tak aby
        dzia&#x142;a&#x142; w&#x142;asciwie, a w szczeg�lnosci <a
        href="warmedge.php">ciep&#x142;e ramki</a>, <a
        href="categoriespanneaux.php">kategorie paneli</a>, <a
        href="vitrages.php">szklenie</a>, <a href="panneaudecouper.php">panele
        p&#x142;askie</a>, <a href="panneaudeco.php">panele dekoracyjne</a>, <a
        href="croisillons.php">listwy przyszybowe</a>, <a
        href="aerateurs.php">nawietrzaki</a> or <a
        href="volettablier.php">kurtyny rolet</a> .</span></p>

        <p><span class="f_Textestd">Modul ten nie ma &#x17c;adnego wp&#x142;ywu
        na obliczenia element�w dla bie&#x17c;acego okna. W przypadku gdy
        modu&#x142; termiczny wygeneruje b&#x142;&#x105;d, WinPro wyswietli
        wiadomosc b&#x142;ad w zakladce <span
        style="font-style: italic;">Wsp�lczynnik Termiczny</span> aktualnie
        obliczanego okna, jak r�wniez wydrukuje b&#x142;ad w stopce dokumentu
        dla klienta. Niemniej jednak, sk&#x142;adniki oraz ceny danego
        zam�wienia nie zmini&#x105; si&#x119;.</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
