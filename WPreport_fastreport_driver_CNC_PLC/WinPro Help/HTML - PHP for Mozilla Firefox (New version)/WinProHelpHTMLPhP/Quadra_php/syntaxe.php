<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","ESP","POL","NED"];
var WinProHelpPageName=["Syntax","Syntaxe","Sintaxis","Skladnia","Syntax"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?syntaxe.php"; }
else { parent.quicksync('a2.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Syntaxe</title>
  <meta name="keywords" content="Syntaxe,Accent">
  <meta http-equiv="Content-Type"
  content="application/xhtml+xml; charset=iso-8859-1">
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
        href="introduction.php">Top</a>  <a href="langage.php">Previous</a>  <a
        href="nombres.php">Next</a> </span> </td>
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

        <p class="p_Textestd"><span class="f_Textestd">The syntax defines a
        number of aspects of the <a href="langage.php">integrated programming
        language</a>: how to use <a href="operateurs.php">operators</a> and
        functions, how to <a href="flowcontrolinstructions.php">control the
        execution flow</a>, how to call <a
        href="routines.php">sub-routines</a>. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Each line in a formula
        must have at most one instruction.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Blank spaces</span><span
        class="f_Textestd">are generally non significant. You can add several
        spaces at the beginning of each line, or between the elements of the
        line.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
              style="width: 605px; height: 45px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note:</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Some keywords have a space inside them.
                In that case, you cannot multiply the number of spaces inside
                those keyword (example: </span><span
                style="font-family: 'Courier New'; color: #0000ff;">end
                if</span><span style="color: #000000;">must have one and only
                one space between 'end' and 'if').</span><span
                style="font-style: italic; font-weight: bold; color: #000000;"></span>
                       </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="color: #000000;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">You may have one or more
        blank lines between instructions. This lets you write clearer, easier
        to read code.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro will
        automatically </span><span class="f_Textestd"><a
        href="indentation_style.php">indent</a></span><span
        class="f_Textestd">instructions in condition blocks and in loops, when
        you record the formula:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"
        style="text-decoration: underline;">Example:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        length &gt; 1000</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">quantity
        := 3</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p>Observe that the line <span class="f_Variables">quantity := 3</span>
        has been indented relatively to other lines. This outlines the
        structure of the formula. This layout has absolutely no impact on the
        meaning of the formula, but it significantly eases the understanding
        for the human reader.</p>

        <p> </p>

        <p>Also note that WinPro makes absolutely no difference between upper
        and lower case. Also, no accented character can be used in keywords and
        variable names. In the following example, every line have the same
        meaning.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">quantity :=
        1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">QUANTITY :=
        1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">Quantity :=
        1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>
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
      <td align="left"><p class="p_Textestd"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La syntaxe défini
        différents aspects du <a href="langage.php">langage de programmation
        intégré</a>; comment utiliser les <a
        href="operateurs.php">opérateurs</a> et fonctions arithmétiques,
        comment <a href="flowcontrolinstructions.php">contrôler l'exécution de
        chaque ligne</a>, comment exécuter certaines instructions dites <a
        href="routines.php">'externes' (routines)</a>.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Chaque ligne du langage
        intégré doit comporter une instruction au plus.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les espaces sont
        généralement non significatifs.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque:</span><span
                style="font-weight: bold;"></span></p>

                <p style="margin: 0px 0px 0px 13px;">Certains mots clés
                contiennent un espace. Dans ce cas, il n'est pas question de
                multiplier le nombre d'espaces à l'intérieur de ces mots clés
                (exemple: <span class="f_Variables">fin si</span> doit
                comporter un et un seul espace entre le 'fin' et le 'si').    
                   </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p>Vous pouvez laisser une plusieurs lignes vides entre chaque ligne
        d'instruction. Cela permet d'aérer le code, et de le rendre plus
        lisible.</p>

        <p> </p>

        <p>Nous vous conseillons également d'<a
        href="indentation_style.php">indenter</a> le code, en mettant en
        retrait de manière systématique les lignes conditionnelles.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Exemple:</span></p>

        <p>       <span class="f_Variables">Si Longueur &gt; 1000</span></p>

        <p>       <span class="f_Variables">  Quantite := 3</span></p>

        <p>       <span class="f_Variables">Fin Si</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p>Notez que la ligne <span class="f_Variables">quantite := 3</span> a
        été mise en retrait par rapport aux autres lignes. Cela fait mieux
        ressortir la structure de la formule. Notez que cette pratique n'a
        aucune influence sur la signification de la formule, mais permet au
        lecteur de mieux comprendre la signification.</p>

        <p> </p>

        <p>Notez également que WinPro ne fait aucune différence entre
        majuscules et minuscules. Par contre, les caractères accentués sont
        bannis des mots clés et des noms de variables. Dans les exemples
        suivants, les trois premiers sont strictement équivalents; par contre,
        <span style="color: #ff0000; text-decoration: underline;">le quatrième
        est erroné</span> (il comporte une lettre accentuée):</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">quantite
        := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">QUANTITE
        := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Quantite
        := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        class="f_Variables">Quantit</span><span
        style="font-family: 'Courier New'; font-weight: bold; color: #ff0000;">é</span><span
        class="f_Variables">:= 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;"> </span></p>

        <p><span style="font-size: 11pt;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="ESP">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La sintaxis define un
        número de aspectos del <a href="langage.php">lenguaje de programación
        integrado</a>;: cómo utilizar los <a
        href="operateurs.php">operadores</a> y las funciones, cómo <a
        href="flowcontrolinstructions.php">controlar el flujo de la
        ejecución</a>, cómo llamar las <a
        href="routines.php">subrutinas</a>.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cada línea en un fórmula
        debe tener como máximo una instrucción.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Los espacios en blanco
        no son generalmente significativos.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Observación:</span><span
                style="font-weight: bold;"></span></p>

                <p style="margin: 0px 0px 0px 13px;">Algunas palabras claves
                tienen un espacio entre ellas. En este caso, usted no puede
                multiplicar el número de espacios dentro de esas palabra clave
                (ejemplo: <span class="f_Variables">fin si</span> deben tener
                un y solamente un espacio entre 'Fin' y 'si').       </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p>Usted puede dejar una o varias líneas en blanco entre las
        instrucciones. Esto le permite escribir más claro, y es más fácil para
        leer el código.</p>

        <p> </p>

        <p>Despúes WinPro <a href="indentation_style.php">Indentará</a>
        automáticamente las instrucciones en bloques de condición y en bucles,
        cuando usted registre la fórmula:.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Ejemplo:</span></p>

        <p>       <span class="f_Variables">Si Longitud &gt; 1000</span></p>

        <p>       <span class="f_Variables">  Cantidad := 3</span></p>

        <p>       <span class="f_Variables">Fin Si</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p>Observe que la línea <span class="f_Variables">cantidad := 3</span>
        ha sido indentada con respecto a las otras líneas. Esto contornea la
        estructura de la fórmula. Esta disposición no tiene absolutamente
        ningún impacto en el significado de la fórmula, sino que facilita la
        comprensión para el lector humano.</p>

        <p> </p>

        <p>También observe que WinPro no hace ninguna diferencia entre
        mayusculas y minúsculas. Además, no se puede utilizar ningún carácter
        acentuado en las palabras claves ni en los nombres de variables. En el
        siguiente ejemplo, cada línea tiene el mismo significado.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">cantidad
        := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">CANTIDAD
        := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Cantidad
        := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;"> </span></p>

        <p><span style="font-size: 11pt;"> </span></p>
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
      <td align="left"><p class="p_Textestd"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Skladnia okresla szereg
        aspektów <a href="langage.php">langage de programmation intégré</a>:jak
        uzywac <a href="operateurs.php">operatorów</a> i funkcji, jak
        kontrolowac <a href="flowcontrolinstructions.php">wykonanie</a>, jak
        nazwac <a href="routines.php">pod-procedury</a>.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Kazda linia w formule
        musi miec co najwyzej jedna instrukcje.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Puste miejsca sa
        zazwyczaj nie istotne.Mozna dodac kilka spacji na poczatku kazdej linii
        lub pomiedzy elementami linii.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">uwaga:</span><span
                style="font-weight: bold;"></span></p>

                <p style="margin: 0px 0px 0px 13px;">Niektóre slowa kluczowe
                zawieraja w sobie spacje. W takim przypadku, nie mozesz
                zwiekszac liczby spacji w tym slowie kluczowym (przyklad: <span
                class="f_Variables">end if</span> musi miec jedna i tylko jedna
                spacje pomiedzy 'end' i 'if').        </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p>Mozesz miec jedna lub wiecej pustych linii pomiedzy instrukcjami.
        Pozwala to pisac bardziej przejrzyste, latwiejsze do odczytania
        kody.</p>

        <p> </p>

        <p>WinPro automatycznie <a href="indentation_style.php">wstawi</a>
        akapit w blokach, oraz w petli, podczas czytania wzoru</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Przyklad:</span></p>

        <p>       <span class="f_Variables">If length &gt; 1000</span></p>

        <p>       <span class="f_Variables">  quantity := 3</span></p>

        <p>       <span class="f_Variables">End If</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p>Zauwaz, ze linia <span class="f_Variables">quantity := 3</span>
        zostala wcieta w stosunku do innych linii. To przedstawia strukture
        formuly.Ten uklad nie ma absolutnie zadnego wplywu na sens formuly,ale
        znacznie ulatwia zrozumienie dla czytelnika.</p>

        <p> </p>

        <p>Zauwaz ze dla WinPro niema zadnej róznicy miedzy malymi i duzymi
        literami, równiez nie akcentowane znaki moga byc uzyte w slowach
        kluczowych oraz nazwach zmiennych. W nastepnym przykladzie kazda linia
        ma takie same znaczenie.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">quantity
        := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">QUANTITY
        := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Quantity
        := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;"> </span></p>

        <p><span style="font-size: 11pt;"> </span></p>
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

        <p class="p_Textestd"><span class="f_Textestd">De syntax definieert
        verschillende aspecten van Winpro zijn <a
        href="langage.php">geïntegreerde programmeertaal</a>: Hoe je <a
        href="operateurs.php">operatoren</a> en functies dient te gebruiken,
        hoe je de <a href="flowcontrolinstructions.php">controle van de
        uitvoering kan doen</a>, Hoe je <a href="routines.php">sub-routines kan
        oproepen</a>.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Elke lijn in een formule
        moet minstens een instructie bevatten.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Spaties</span><span
        class="f_Textestd">zijn in het algemeen niet belangrijk.Je kan meerdere
        spaties op het begin of tussen de elementen van een lijn
        voorzien.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
              style="width: 605px; height: 45px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note:</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Enkele kernwoorden hebben een spatie
                binnenin. In dat geval, kan een aantal spaties in deze
                kernwoorden niet gewijzigd worden(voorbeeld: </span><span
                style="font-family: 'Courier New'; color: #0000ff;">end
                if</span><span style="color: #000000;">mag enkel één spatie
                bevatten tussen 'end' en 'if').</span><span
                style="font-style: italic; font-weight: bold; color: #000000;"></span>
                       </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="color: #000000;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ook raden wij aan om één
        of meerdere lege lijnen tussen de instructies te voorzien. Dit maaakt
        het lezen ervan overzichtelijker.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro zal automatisch
        </span><span class="f_Textestd"><a href="indentation_style.php">de
        instructies</a></span><span class="f_Textestd">schikken in blokken van
        voorwaarden en loops, wanneer de formule opgeslagen word.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"
        style="text-decoration: underline;">Voorbeeld:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        length &gt; 1000</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">quantity
        := 3</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p>U zal opmerken dat de lijn <span class="f_Variables">quantity :=
        3</span> geschikt wordt naar de andere lijnen.Dit geeft eigenlijk de
        marges aan van de structuur van de formule.De layout heeft totaal geen
        impact op de inhoud van de formule, maar is duidelijk leesbaarder en
        verstaanbaar voor de gebruiker.</p>

        <p> </p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"
        style="text-decoration: underline;">Voorbeeld:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        Lengte &gt; 1000</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Hoeveelheid := 3</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p> </p>

        <p>U zal tevens opmerken dat Winpro geen onderscheid maakt tussen Hoofd
        -en kleine letters. Tevens, kunnen er geen vreemde karakters gebruikt
        worden in de kernwoorden en variabele benamingen.In volgend voorbeeld ,
        heeft elke lijn dezelfde betekenis.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">quantity :=
        1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">QUANTITY :=
        1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;">Quantity :=
        1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
