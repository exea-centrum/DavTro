<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","ESP","POL","NED"];
var WinProHelpPageName=["Programming language","Langage","Lenguaje de programación","Jezyk programowania","Programmeertaal"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?langage.php"; }
else { parent.quicksync('a2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Langage</title>
  <meta name="keywords" content="Langage,Formule,Syntaxe">
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
        href="introduction.php">Previous</a>  <a href="syntaxe.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p>WinPro integrates its own programming language. This language is
        used to describe the set of operations that define how to use each
        window component. In WinPro, a set of instructions that defines this
        kind of computation is called a formula.</p>

        <p> </p>

        <p>You will find several kind of formulas in WinPro: component
        formulas, question formulas, discount formulas, drawing formulas,
        ...</p>

        <p> </p>

        <p>Like any other programming language, the one in WinPro has set of <a
        href="syntaxe.php">syntax rules</a> and a precise vocabulary. These
        rules and vocabulary are described in the next pages.</p>

        <p> </p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="text-decoration: underline;">Formula
        example:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        --------------------------------- #</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># This
        formula defines a quantity,  #</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        depending On a length:            #</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        --------------------------------- #</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        length &lt; 500</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   quantity := 1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Else If
        length &lt; 1500</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   quantity := 2</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Else
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   quantity := 3</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p><span
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
      <td align="left"><p class="p_Textestd"> </p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro intègre son
        propre langage de programmation. Ce langage est utilisé pour décrire la
        suite des opérations qui définissent les conditions d'utilisation de
        divers éléments. L'ensemble des instructions qui définissent un calcul
        est appelé, dans WinPro, une formule.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Vous trouverez des
        formules pour plusieurs types d'éléments de WinPro: formules de calcul
        des composants, formules de contrôle des questions, formules de remise
        client, formules de dessin, ...</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Comme tout langage de
        programmation, celui de WinPro obéit à des <a href="syntaxe.php">règles
        de syntaxe</a> et de vocabulaire très strictes. Nous décrivons ces
        règles dans les pages ci-après.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="text-decoration: underline;">Exemple de
        formule: </span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 5pt; font-family: 'Courier New'; color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        ----------------------------------------------- #</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Cette
        formule détermine une certaine quantité,  #</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># en
        fonction d'une longueur :                    #</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        ----------------------------------------------- #</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si
        Longueur &lt; 500</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"> 
        Quantite := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Sinon Si
        Longueur &lt; 1500</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"> 
        Quantite := 2</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        class="f_Variables">Sinon</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"> 
        Quantite := 3</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Fin
        Si</span></p>
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
      <td align="left"><p class="p_Textestd"> </p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro integra su propio
        lenguaje de programación. Este lenguaje se utiliza para describir el
        conjunto de operaciones que definen como se utiliza cada componente de
        la ventana. En WinPro, un sistema de instrucciones que define esta
        clase de cómputo se llama fórmula.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Usted encontrará varias
        clases de fórmulas en WinPro: fórmulas de componentes, fórmulas de
        pregunta, fórmulas de descuento, fórmulas de diseño... </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Como cualquier otro
        lenguaje de programación, el de WinPro ha fijado <a
        href="syntaxe.php">reglas de sintaxis</a> y un vocabulario preciso.
        Estas reglas y este vocabulario se describen en las siguientes
        páginas.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="text-decoration: underline;">Exemple de
        formule: </span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 5pt; font-family: 'Courier New'; color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        ----------------------------------------------- #</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Esta
        fórmula define una cantidad,               </span><span
        class="f_Variables">#</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        dependiendo de una longitud:                    #</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        ----------------------------------------------- #</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si
        Longitud &lt; 500</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"> 
        Cantidad := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Sinon Si
        Longitud &lt; 1500</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"> 
        Cantidad := 2</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        class="f_Variables">Sinon</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"> 
        Cantidad := 3</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Fin
        Si</span></p>
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
      <td align="left"><p class="p_Textestd"> </p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro integruje swój
        wlasny jezyk programowania. Jezyk ten jest uzywany do okreslenia
        zestawu dzialan, dzieki którym mozna okreslic sposób korzystania z
        kazdej czesci okna. W WinPro, zestaw instrukcji, który okresla tego
        rodzaju obliczenia nazywa sie formula.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">W WinPro znajdziesz
        kilka rodzajów formul: wyrazenia skladowe, formuly pytania,formuly
        znizki, formuly rysunków, ... </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Jak kazdy inny jezyk
        programowania w WinPro jest zbiór <a href="syntaxe.php">Skladnia</a> i
        slownictwa precyzyjnego. Te zasady i slownictwo sa opisane na
        nastepnych stronach.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="text-decoration: underline;">przyklad
        formuly:</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 5pt; font-family: 'Courier New'; color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        ----------------------------------------------- #</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># This
        formula defines a quantity,                #</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        depending On a length:                          #</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        ----------------------------------------------- #</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">If
        length &lt; 500</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"> 
        quantity := 1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Else If
        length &lt; 1500</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"> 
        quantity := 2</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        class="f_Variables">Else</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"> 
        quantity := 3</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">End
        If</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p>WinPro integreert zijn eigen programmeertaal. Deze taal wordt
        gebruikt om het geheel van handelingen te bepalen welke nodig zijn om
        een raamonderdeel te gebruiken.Deze set van instructies worden formules
        genoemd.</p>

        <p> </p>

        <p>U vindt verschillende wijze van formules in WinPro: Onderdelen
        formules, vraag formules, korting formules, tekening formules, ...</p>

        <p> </p>

        <p>Zoals in elk ander programmeertaal , bestaat deze in Winpro uit een
        set van <a href="syntaxe.php">syntax regels</a> en nauwkeurige en
        precieze woordenschat. Deze regels en woordenschat worden beschreven in
        de volgende pagina's.</p>

        <p> </p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="text-decoration: underline;">Formule
        voorbeeld:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        --------------------------------- # </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Deze
        formule bepaald een hoeveelheid,  #</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        afhankelijk van de lengte:            #</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        --------------------------------- #</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        length &lt; 500</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   quantity := 1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Else If
        length &lt; 1500</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   quantity := 2</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Else
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   quantity := 3</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        --------------------------------- #</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Deze
        formule bepaald een hoeveelheid,  #</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        afhankelijk van de lengte:            #</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        --------------------------------- #</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        Lengte &lt; 500</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   Hoeveelheid := 1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Else If
        Lengte &lt; 1500</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   Hoeveelheid := 2</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Else
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">   Hoeveelheid := 3</span></p>

        <p>End If</p>

        <p><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
