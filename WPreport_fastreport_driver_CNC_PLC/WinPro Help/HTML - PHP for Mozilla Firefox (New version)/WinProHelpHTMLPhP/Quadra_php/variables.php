<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","POL","ESP"];
var WinProHelpPageName=["Variables","Variables","Variabelen","Zmienne","Variabels"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?variables.php"; }
else { parent.quicksync('a2.1.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Variables</title>
  <meta name="keywords" content="Existe,Variable,Globale,Locale,Simple,Tableau">
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
        href="introduction.php">Top</a>  <a href="nombres.php">Previous</a>  <a
        href="operateurs.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="color: #000000;"> </span></p>

        <p>A variable is a memory area in which a value is stored. This area
        gets a name, from which the value can be handled.</p>

        <p> </p>

        <p>Variables are used in WinPro in several ways:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Some variables are created by WinPro to provide the user with
                parameters about the running computation </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The user must create variables to provide computation results
                to WinPro </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The user may create variables for his own usage</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>A <span style="font-weight: bold;">variable name</span> must follow
        some strict rules:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>It must start with a letter (A to Z, no accent!) or one of
                the 3 following characters:<span
                style="font-family: 'Courier New'; font-weight: bold;">_, @, $
                </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>From the 2nd character on, it can also contain digits </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The minimum length is 1 character; the maximum length is 31
                characters </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>You can use upper or lower case indifferently. WinPro will
                handle an upper or lower case character as the same character
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Furthermore, WinPro recognises several types of variables: first
        there are <span style="font-weight: bold;">global</span> and <span
        style="font-weight: bold;">local</span> variables, second there are
        <span style="font-weight: bold;">simple</span> and <span
        style="font-weight: bold;">array</span> variables. These two categories
        can be combined: local simple, local array, global simple, global
        array.</p>

        <p> </p>

        <p>Global variables are used in window (or roller shutter)
        computations. They can be accessed form the moment of their creation
        until the end for the window or shutter computation. This makes them
        handy to transfer information throughout the computation, or to
        pre-define information that describes the configuration of the window.
        However, it is important to distinguish global variables set by the
        user, and global variables computed by WinPro, as the availability of
        customized global variables depends on the <a
        href="ordrecalcul.php">computation sequence</a> of components.</p>

        <p>Here are two samples:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The user creates a global variable within a fittings frame.
                When this fittings frame is used into a window, the content of
                the variable may be fetched into the outer frampe rules or
                peripheral profile rules (for instance), when it is not the
                case for a global variable set into a roller shutter guide or
                curtain rule.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The user create a global variable into the outer frame. When
                this outer frame is used into a window, the variable will only
                be available at peripheral profile level (or door sill).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Please note that user defined global variables are not available for
        use into a question set up code.</p>

        <p>To define a global variable, you just need to use the sign _ as the
        first character of its name. Otherwise, there are no specific rules to
        use them - just handle them the way you would hadle a local
        variable.</p>

        <p>There is however an important difference between local and global
        variables: if you use a local variable which has not been created,
        WinPro will generate an error message, and will stop the computation.
        But if you use an undefined global variable, you will get no error
        message; instead WinPro will consider that the variable exists and has
        a value of 0. This lets you test a global variable, even if you are not
        sure it exists. This is because a global variable can be created in a
        window component and used in another one. Since the composition of a
        window can vary widely, there is no guarantee that the element that
        creates the global variable is used in the window (e.g., you could
        create a global variable in a fitting, and test it in the outer frame.
        If the fitting is not use, it is useful to be able to test the
        non-existing variable without generating an error).</p>

        <p> </p>

        <p>You can also check the existence of a variable, using the <span
        class="f_Variables">Exists (</span>variable_name<span
        class="f_Variables">)</span> instruction, which will send back the
        value <span class="f_Variables">True()</span> if the variable exists,
        or <span class="f_Variables">False()</span> otherwise. This instruction
        can be used for local or global variables indifferently.</p>

        <p> </p>

        <p><span style="font-weight: bold; text-decoration: underline;">Array
        variables:</span></p>

        <p> </p>

        <p>Array variables can contain several values simultaneously. You
        access each value by using the variable name, followed by the value's
        index between square brackets <span style="font-weight: bold;">[
        ]</span>. The index of the first value is 1.</p>

        <p> </p>

        <p>To create an array, type its name, followed by the : sign, than the
        number of elements that the array must store. The initial value of all
        elements will be 0.</p>

        <p>An array can be dynamically resized, by simply specifying another
        size. The local values are kept; however if the new size is smaller
        than the older, the elements whose index is higher than the new size
        are lost.</p>

        <p>The maximum size of an array is 32767 (215-1). The element index, as
        well as the size used for creating the array, may be an arbitrary
        arithmetic expression.</p>

        <p>You can assign a single value to all the elements of an array in a
        single instruction. You simply need to use the variable name, without
        [], followed directly the assignment instruction.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Examples:</span></p>

        <p><span style="text-decoration: underline;"> </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Create an array of 10 values, </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># initialized to 0 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Array : 10 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Set up each of the values to 5 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Array := 5 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Add 10 additional values. The new
        values</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># are initialized to 0, but the first 10 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># (index 1 to 10) keep their original value
        </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Array : 20 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Store 1 in the first value </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Array[1] := 1 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Set 100 to the 11th value</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Array[11] := 100</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Add 1 to each value </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Array += 1 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Read the 5th value </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">a := array[5]</span></p>
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

        <p>Une variable est une zone de mémoire dans laquelle est stockée une
        valeur numérique. Cette zone mémoire reçoit un nom, qui permet de
        retrouver la valeur numérique qui lui correspond.</p>

        <p> </p>

        <p>Les variables sont utilisées dans Winpro de diverses manières:<span
        style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Certaines variables sont créées par Winpro pour fournir à
                l'utilisateur divers paramètres concernant le calcul en
              cours</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'utilisateur doit créer certaines variables pour que Winpro
                puisse récupérer le résultat d'un calcul</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'utilisateur peut créer diverses variables pour son propre
                usage</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>Le <span style="font-weight: bold;">nom</span> <span
        style="font-weight: bold;">de variable</span> doit répondre à certaines
        contraintes:<span
        style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Il doit commencer par une lettre (non accentuée!) ou l'un des
                3 caractères suivants: <span
                style="color: #0000ff;"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: #000000;">_</span>,
                <span
                style="font-family: 'Courier New'; font-weight: bold; color: #000000;">@</span>,
                <span
                style="font-family: 'Courier New'; font-weight: bold; color: #000000;">$</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>A partir du 2ème caractère, il peut, outre les caractères
                autorisés ci-dessus, contenir des chiffres</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Il doit comporter de 1 caractère au minimum à 31 caractères
                au maximum</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'utilisation de majuscules ou de minuscules est indifférente
                pour Winpro</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>En outre, il existe dans Winpro, plusieurs types de variables: d'une
        part des variables <span style="font-weight: bold;">globales
        </span>ou<span style="font-weight: bold;">locales</span>, d'autre part
        des variables <span style="font-weight: bold;">simples</span> ou des
        variables <span style="font-weight: bold;">tableau</span>. Ces deux
        catégories de variables peuvent être combinées: locales simples,
        locales tableau, globales simples, globales tableau.</p>

        <p> </p>

        <p>Les variables globales sont utilisées dans le calcul d'une fenêtre
        (ou d'un volet). Elle sont accessibles du moment de leur création
        jusqu'à la fin du calcul de la fenêtre ou du volet. Elles sont donc
        pratiques pour transférer de l'information d'un bout à l'autre de la
        séquence de calcul, ou pour pré-définir des informations qui concernent
        la globalité de la fenêtre. Nous devons cependant distinguer les
        variables globales Winpro des variables globales créées par
        l'utilisateur. En effet, la disponibilité des variables globales
        utilisateurs dépend de l'<a href="ordrecalcul.php">ordre de calcul</a>
        des composants.</p>

        <p>Voici deux exemples:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>       L'utilisateur crée une variable globale dans une
                quincaillerie. Pour autant que cette quincaillerie soit reprise
                dans la composition de la fenêtre, le contenu de cette variable
                pourra être récupéré au niveau du paramétrage du dormant et des
                rehausses (par exemple), contrairement au paramétrage des
                coulisses, caisson de volet et du tablier.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>       L'utilisateur crée une variable globale dans le
                dormant. Pour autant que ce dormant soit repris dans la
                composition de la fenêtre, le contenu de cette variable pourra
                uniquement être récupéré au niveau du paramétrage des profils
                périphériques (rehausses et seuils).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Veillez à ne pas utiliser les variables globales utilisateur dans
        les formules de question car elles sont indisponibles à ce
        niveau-ci.</p>

        <p>Pour définir une variable globale, il suffit de la faire commencer
        par le signe _. Pour le reste, elles s'emploient comme les variables
        locales.</p>

        <p>Il existe toutefois une différence importante entre les variables
        locales et globales: si vous utilisez dans une expression une variable
        locale qui n'a pas été créée, WinPro vous signalera une erreur et
        arrêtera le calcul. Par contre, si vous faites cela avec une variable
        globale, WinPro ne signalera pas d'erreur, mais considérera que la
        variable existe avec une valeur de 0. Cela permet de tester une
        variable globale, même si on n'est pas sûr qu'elle a bien été créée,
        car une variable globale peut être créée dans un composant de fenêtre
        et lue dans un autre. La composition des fenêtres étant très variable,
        il n'y a pas de garantie que la création ait bien été faite (p.ex, vous
        pouvez créer une variable globale dans une quincaillerie, et la tester
        dans le dormant. Si la quincaillerie n'est pas utilisée, il faut que le
        calcul puisse se faire sans générer d'erreur).</p>

        <p> </p>

        <p>On peut vérifier si une variable existe, au moyen de
        l'instruction<span class="f_Variables">Existe
        (</span>nom_de_variable<span class="f_Variables">)</span>, qui renverra
        <span class="f_Variables">Vrai()</span> si la variable existe, <span
        class="f_Variables">Faux()</span> sinon. Cette fonction est valable
        tant pour les variables locales que globales.</p>

        <p> </p>

        <p><span style="font-size: 2pt;"> </span></p>

        <p><span
        style="font-weight: bold; text-decoration: underline;">Variables
        tableau:</span></p>

        <p> </p>

        <p>Les variables de type tableau peuvent contenir plusieurs valeurs
        simultanément. On accède à chacune de ces valeurs en spécifient le nom
        de la variable, suivi de l'indice de la valeur entre crochets <span
        style="font-weight: bold;">[ ]</span> (la première valeur a l'indice
        1).</p>

        <p> </p>

        <p>Pour créer un tableau, indiquez son nom, suivi du signe : puis du
        nombre d'éléments que le tableau doit contenir. </p>

        <p>Un tableau peut être redimensionné dynamiquement simplement en
        spécifiant une nouvelle fois sa dimension; les valeurs qu'il contenait
        sont conservées; toutefois, si la nouvelle taille est inférieure à la
        précédente, les éléments dont l'indice est supérieur à la nouvelle
        taille sont perdus. </p>

        <p>La taille limite d'un tableau est de 32767 éléments (2**15-1). Le
        numéro d'élément, ainsi que le nombre d'éléments pour la création du
        tableau, peuvent être des expressions arithmétiques quelconques.</p>

        <p>Vous pouvez affecter une valeur unique à tous les éléments d'un
        tableau en une seule instruction; il suffit d'utiliser le nom du
        tableau, sans [], simplement suivi de l'opération d'assignation.</p>

        <p> </p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Exemples:</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 5pt; font-family: 'Courier New'; color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Créer
        une variable tableau Test contenant 10 valeurs initialisées à 0
        </span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Test :
        10</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        Initialiser à 5 chacune des 10 valeurs du tableau Test</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Test :=
        5</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        Ajouter 10 nouvelles valeurs supplémentaires au tableau Test</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Ces 10
        nouvelles valeurs sont initialisées à 0 (index 11 à 20)</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Les 10
        premières valeurs (index 1 à 10) restent à leur valeur
        précédente</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Test :
        20</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        Stocker la valeur 3 dans la première valeur du tableau Test</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Test[1]
        := 3</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Ajoute
        100 à la 11ème valeur du tableau Test</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Test[11]
        := 100</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        Incrémente de 1 chacune des cases du tableau Test</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Test +=
        1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">#
        Initialiser la variable locale utilisateur TTT avec la valeur se
        trouvant en 5ème position dans le tableau Test</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">TTT :=
        Test[5]</span></p>

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
      <td align="left"><p><span style="color: #000000;"> </span></p>

        <p>Een variabele is een term waarin een waarde opgeslagen kan
        worden.Deze term heeft een naam,van waaruit de waarde behandeld kan
        worden.</p>

        <p> </p>

        <p></p>

        <p>Variabelen kunnen in Winpro op meerdere manieren toegepat worden:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Bepaalde variabelen worden door Winpro aangemaakt om de
                gebruiker van parameters te voorzien tijdens de berekening </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>De gebruiker dient zelf variabelen an te maken om Winpro te
                kunnen laten berekenen </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>De gebruiker kan zelf variabelen aanmaken voor eigen
              gebruik</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Een <span style="font-weight: bold;">variabelenaam</span> moet
        enkele stricte regels volgen:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>De variabele dient te beginnen met een letter (A tot Z,zonder
                speciaal karakter! , zoals ó of ë )of met één van volgende
                karakters:<span
                style="font-family: 'Courier New'; font-weight: bold;">_, @, $
                </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Vanaf de 2de karakter kunnen er ook cijfers gebruikt worden
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>De minium lengte voor een variabele is 1 karakter, de maximum
                lengte is 31 karakters </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Je kan hoofd -en kleine letters doorheen gebruiken.Winpro
                behandeld dit als zijnde dezelfde karaketers </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Verder, herkent Winpro meerdere types van variabelen: ten eerste
        zijn er de <span style="font-weight: bold;">global</span>e en <span
        style="font-weight: bold;">lokale</span> variabelen, ten tweede zij er
        <span style="font-weight: bold;">simpel</span> en <span
        style="font-weight: bold;">array</span> variaeblen. Deze 2 categorieën
        kunnen gecombineerd worden : lokaal simpel, lokaal array,global simpel,
        global array.</p>

        <p> </p>

        <p>Globale variabelen worden gebruikt in raam (of rolluik)
        berekeningen. Deze kunnen gebruikt worden vanaf het moment van aanmaak
        hiervan tot op het einde van de berekening van het raam en/of
        rolluik.Dit maakt dat zij gemakkelijk te gebruiken zijn om informatie
        doorheen heel de berekening te sturen, of om een voordefinitie te maken
        over hoe de configuratie van het raam eruit ziet..Maar, het is
        belangrijk een onderscheid te maken in de variabelen welke door de
        gebruiker zijn aangemakt en deze de globale variabelen welke door
        Winpro berekend worden, daar de beschikbaarheid van de angepaste
        globale variabelen afhankelijk zijn van de <a
        href="ordrecalcul.php">berekeningsvolgorde</a> van de onderdelen.</p>

        <p>Hier zijn 2 voorbeelden:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>De gebruiker maakt een globale variabele aan in een
                beslagcode. Wanneer deze beslagcode gebruikt wordt in een raam,
                zal de inhoud van de variabele toegepast kunnen worden in de
                buitenkader en/of bijprofielen (voorbeeld), dit zou niet het
                geval zijn wanneeer deze aangemaakt zou geweest zijn in een
                rolluikgeleidercode of rolluikbladcode.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>De gebruiker maakt een globale variabele aan in een
                kadercode.Wanneer deze code van het kader opgeroepen word in
                een raam, zal deze variabele enkel beschikbaar zijn bij de
                bijprofielen (of deurdorpel).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Gelieve er nota van te nemen dat globale variabelen van de gebruiker
        niet toepasbaar zijn in een code voor de set up van vragen.</p>

        <p>Om een globale variabele te definiëren dien deze vooraf te gaan van
        een underscore _ als eerste karakter van de naam. Anders zijn er geen
        specifieke regels voor het gebruik ervan en word deze behandeld als een
        lokale variabele.</p>

        <p>Maar er is een groot verschil tusssen lokale en globale variabelen :
        indien u een lokale variabele gebruikt , die je eerst niet aangemaakt
        hebt,zal Winpro een foutmelding tonen, en zal tevens stoppen met de
        berekening.Gebruik je een globale variabele die niet eerst aangemaakt
        is geweest, beschouwd Winpro deze als bestaande met de waarde 0. Hier
        zal Winpro geen foutmelding geven.Dit laat je toe een globale variabele
        te testen, ook al ben je niet zeker of hij wel bestaat. Dit is omdat
        een globale variabele aangemaakt kan worden in een raamonderdeel en
        gebruikt kan worden in een ander raamonderdeel. Gezien de samenstelling
        van een raam nogal kan uiteenlopen, is er geen garantie dat het element
        welke de globale variabele aanmaakt ook gebruikt wordt in een raam (vb.
        je kan een globale variabele in een beslagcode aanmaken, en deze testen
        in een kader.Als het beslag niet gebruikt wordt,is het handig om de
        niet-bestaande variabele te testen zonder een foutmelding te
        bekomen.)</p>

        <p> </p>

        <p>Je kan ook een test uitvoeren op het bestaan van een variabele, door
        gebruik te maken van de variabele <span class="f_Variables">Exists
        (</span>variabele_naam<span class="f_Variables">)</span>
        instructie,welke de waarde <span class="f_Variables">True()</span> zal
        terugzenden indien deze bestaat, of <span
        class="f_Variables">False()</span> in omgekeerd geval. Deze kan zowel
        voor lokale als globale variabelen gebruikt worden </p>

        <p> </p>

        <p><span style="font-weight: bold; text-decoration: underline;">Array
        variabelen:</span></p>

        <p> </p>

        <p>Array variabelen kunnen meerdere waardes tegelijktijd bevatten. Je
        kan toegang krijgen tot elke waarde door gebruik te maken van de
        variabelenaam,gevolgd door de index van de waardes tussen <span
        style="font-weight: bold;">[ ]</span>.De index van de eerste waarde is
        1.</p>

        <p> </p>

        <p>Om een array aan te maken, ype zijn naam,gevolgd door het :
        teken,dan het aantal elemeneten welke de array moet opslaan.De
        standaard waarde van elk element is 0.</p>

        <p>Een array kan dynamisch aangepast worden, door simpelweg een andere
        grootte te specifiëren. De lokale waardes worden behouden; zolang de
        waardes van de nieuwe grootte kleiner zijn, anders zijn alle waardes
        welke groter zijn dan de nieuwe verloren.</p>

        <p>De maximum grootte van een array is 32767 (215-1). De element index,
        alsmede de grootte gebruikt voor het maken van de array, kan een
        willekeurige rekenkundige expressie veroorzaken.</p>

        <p>U kunt een enkele waarde aan alle elementen van een array in een
        enkele instructie toewijzen. U hoeft enkel de variabele naam te
        gebruiken, zonder [], direct gevolgd met de opdracht instructie.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Voorbeelden:</span></p>

        <p><span style="text-decoration: underline;"> </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Aanmaken van een array "Test" met 10 waardes,
        </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># initialieren op 0 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Test : 10 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Set up van elke waarde tot 5 Test</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Test := 5 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Voeg 10 extra waardes toe.De nieuwe
        waardes</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># worden op 0 geinitialiseerd,maar de eerste 10
        </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># (index 1 tot 10) houden hun oorspronkelijke
        waarde </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Test : 20 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Opslaan 1 in de eerste waarde Test</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Test[1] := 1 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Set 100 op de 11de waarde Test</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Test[11] := 100</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Voeg 1 toe aan elke waarde Test</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Test += 1 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Initialiseer de lokale gebruikers variabele TTT
        met de waarde welke zich bevindt op de 5de positie in array
        Test</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">TTT := Test[5]</span></p>
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
      <td align="left"><p><span style="color: #000000;"> </span></p>

        <p>Zmienna jest obszarem pamieci, w których wartosci sa przechowywane.
        Obszar ten otrzymuje nazwe i z tego miejsca wartosci moga byc
        obslugiwane.</p>

        <p> </p>

        <p>Zmienne w WinPro sa wykorzystywane na kilka sposobów:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Niektóre zmienne sa tworzone przez WinPro, aby zapewnic
                uzytkownikowi parametry dotyczace czasu pracy.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Uzytkownik musi stworzyc zmienne aby dostarczyc wyniki
                obliczen do WinPro.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Uzytkownik moze tworzyc zmienne do wlasnego uzytku.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Przy tworzeniu<span style="font-weight: bold;">Nazwy Zmiennej</span>
        trzeba przestrzegac kilku regul:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Musi zaczynac sie literami (A do Z) lun jednym z trzech
                nastepujacych znaków:<span
                style="font-family: 'Courier New'; font-weight: bold;">_, @, $
                </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>W przypadku drugiego znaku, moze on zawierac równiez liczby.
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Minimalna dlugosc to 1 znak; maksymalna dlugosc to 31 znaków
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Obojetne jest czy uzyjesz malych czy duzych liter. WinPro
                odczyta male i duze litery jak takie same znaki. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>  </p>

        <p>Ponadto, WinPro rozpoznaje rózne typy zmiennych : przede wszystkim
        rozrózniamy zmienne globalne oraz lokalne, po drugie sa; proste oraz
        tablicowe. Te dwie kategorie mozna mieszac: <strong>proste lokalne,
        lokalne tablicowe, proste globalne, globalne tablicowe</strong>.</p>

        <p></p>

        <p>Globalne zmienne sa uzywane przy obliczaniu okna (lub rolet). Moga
        one byc dostepne od momentu ich powstania az do konca do obliczen okna
        lub rolety. To czyni je wygodne przy przenoszeniu informacji w czasie
        obliczen, lub przy wstepnym okreslaniu informacji, które opisuja
        konfiguracje okna.</p>

        <p></p>

        <p>Jednak ze wazne jest aby, odróznic zminne globalne ustawione przez
        uzytkownika, oraz zmienne globalne obliczone przez WinPro, jako
        dostepnosc niestandardowe zmienne globalne w zaleznosci od <a
        href="ordrecalcul.php">kolejnosci obliczen</a> komponentów.</p>

        <p>Ponizej dwa przyklady:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Uzytkownik tworzy zminna globalna wewnatrz okucia. Kiedy to
                okucie jest uzyte w oknie, zawartosc zmiennej moze byc
                przechwycona do regul Oscieznicy lub profilu preryferyjnego(na
                przyklad), kiedy nie jest to kwestia zminnej globalnej
                ustawionej w Rolecie/Prowadnicy lub regule pancerza.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Uzytkownik tworzy zminna globalna w Oscieznicy. Kiedy ta
                oscieznica uzyta jest w oknie, zminna ta bedzie dostepna tylko
                na poziomie profili preyferyjnych (lub progu drzwi).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Prosze zauwazyc iz uzytkownik definiujacy zminne globalne które nie
        sa dostepne w kodzie tworzenia pytan.</p>

        <p>Aby zdefiniowac zminna, nalezy po prostu uzyc znaku _ jako
        pierwszego znaku jej nazwy. W innym przypadku, nie ma szczególowych
        zasad korzystania z nich - po prostu traktuje sie je tak samo jak
        lokalne . zmienne.</p>

        <p>Istnieje jednak istotna róznica pomiedzy zmiennymi lokalnymi i
        globalnymi: jesli uzywasz zmiennej lokalnej, która nie zostala
        utworzona, WinPro wygeneruje wiadomosc o bledzie i zakonczy proces
        obliczania. Ale jesli uzyjesz nie zdefiniowanej zmiennej globalnej,
        wiadomosci o bledzie nie bedzie, ; w zamian tego WinPro uzna ze zmienna
        istnieje i ma wartosc 0. To pozwoli Ci przetestowac zmienna globalna,
        nawet jak nie jestes pewien czy ona istnieje. To dlatego ze zmienna
        globalna moze bys stworzona w czesci okna i nastepnie uzyta w innej
        czesci. Poniewaz sklad okna moze sie zmieniac, nie ma gwarancji, ze
        element, cktóry tworzy zmienna globalna jest uzywany w oknie (na
        przeklad, mozesz stworzyc zmienna globalna dla okuc, i przetestowac ja
        w Oscieznicy. Jezeli okucie nie jest uzyte, przydatne jest aby miec
        mozliwosc przetestowania nie istniejacej zminnej bez wygenerowania
        bledu).</p>

        <p> </p>

        <p>Jest zawsze mozliwosc sprawdzenia istniejacej zminnej, uzywajac
        <span class="f_Variables">Exists (</span>nazwa zminnej<span
        class="f_Variables">)</span> instrukcji, która zwróci wartosc <span
        class="f_Variables">True()</span> jezeli zminna istniej, lub <span
        class="f_Variables">False()</span> w przeciwnym przypadku. Ta
        instrukcja jednakowo uzywana dla zminnych globalnych oraz lokalnych.</p>

        <p> </p>

        <p><span style="font-weight: bold; text-decoration: underline;">Zmienne
        Tablic:</span></p>

        <p> </p>

        <p>Zmienne tablicowe moga zawierac kilka wartosci jednoczesnie.
        Uzyskujesz dostep do kazdej wartosci przy uzyciu nazwy zmiennej, a
        nastepnie wartosci zawierajacej sie w nawiasie kwadratowym <span
        style="font-weight: bold;">[ ]</span>. Wskaznik pierwszej wartosci to
        1.</p>

        <p> </p>

        <p>Aby stworzyc tablice, nalezy wpisac jej nazwe konczac znakiem :,
        nastepnie nalezy wpisac ilosc elementów które tablica bedzie zawierac.
        Poczatkowa ilosc elementów bedzie wynosic 0.</p>

        <p>Tablica moze byc dynamicznie zmieniana, po prostu poprzez podanie
        innego. rozmiaru. Lokalne wartosci sa przechowywane; jednak ze jezeli
        nowy rozmiar jest mniejszy od starego rozmiaru, elementy których
        wartosc jest wyzsza niz nowy rozmiar. sa tracone</p>

        <p>Maksymalna wartosc tablicy to 32767 (215-1). Indeks elementu, jak
        równiez wielkosci uzyte do stworzenia tablicy, moga byc dowolnie
        wyrazone arytmetycznie.</p>

        <p>Mozna przypisac jedna wartosc dla wszystkich elementów tablicy w
        jednej instrukcji. Musisz po prostu uzyc nazwy zmiennej, bez nawiasów
        [], a nastepnie bezposrednio instrukcji zadania.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Przyklady:</span></p>

        <p><span style="text-decoration: underline;"> </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Tworzenie tablicy zawierajacej 10 wartosci,
        </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># ustawione na 0 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Tablica : 10 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Ustaw kazda wartosc na 5 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Tablica := 5 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Dodaj10 dodatkowych wartosci. Nowe
        wartosci</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># sa ustawione na 0, ale dla pierwszych 10
        </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># (wskaznik 1 do 10) zachowaj oryginalna wartosc
        </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Tablica : 20 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Przechowuj 1 w pierwszej wartosci </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Tablica[1] := 1 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># ustaw 100 dla 11tej wartosci</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Tablica[11] := 100</span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Dodaj 1 do kazdej wartosci </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Tablica += 1 </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"># Przeczytaj 5ta wartosc </span></p>

        <p class="p_CodeExample" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">a := tablica[5]</span></p>
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
      <td align="left"><p><span style="color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">Una variable es un área de
        memoria en el que se almacena un valor. A este área se le atribuye un
        nombre, con el cual el valor puede ser manejado.</span></p>

        <p><span style="color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">Las variables se utilizan en
        WinPro de varias maneras:</span></p>

        <p><span style="color: rgb(0, 0, 0);"> </span></p>

        <div
        style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);">Algunas
                variables son creadas por WinPro para proveer al usuario
                parámetros sobre los calculos en ejecución</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);">El usuario
                debe crear  variables para proporcionar resultados de calculos
                a WinPro</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);">El usuario
                puede crear variables para su propio uso</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="color: rgb(0, 0, 0);"> </span></p>

        <p><span style="font-weight: bold; color: rgb(0, 0, 0);">Un nombre de
        variable</span><span style="color: rgb(0, 0, 0);">debe seguir algunas
        reglas determinantes : </span></p>

        <p><span style="color: rgb(0, 0, 0);"> </span></p>

        <div
        style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);">Debe
                comenzar con una letra (A hasta Z, ningún acento!) o uno de los
                3 caracteres siguiente: </span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">_, @,
                $</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);">Desde el
                2do carácter también puede contener </span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">cifras.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);">La
                longitud mínima es de 1 carácter; la longitud máxima es de 31
                caracteres.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);">Se puede
                utilizar mayúsculas o minúsculas sin distinción. WinPro tratará
                un carácter en mayúscula o minúscula como si fuera el mismo
                carácter.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: rgb(0, 0, 0);"> </span></p>

        <p><span style="font-size: 5pt; color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">Ademas, WinPro reconoce varios
        tipos de variable: primero están las variables </span><span
        style="font-weight: bold; color: rgb(0, 0, 0);">globales</span><span
        style="color: rgb(0, 0, 0);">y </span><span
        style="font-weight: bold; color: rgb(0, 0, 0);">locales</span><span
        style="color: rgb(0, 0, 0);">. En segundo lugar están las variables
        </span><span
        style="font-weight: bold; color: rgb(0, 0, 0);">simples</span><span
        style="color: rgb(0, 0, 0);">y las </span><span
        style="font-weight: bold; color: rgb(0, 0, 0);">tablas</span><span
        style="color: rgb(0, 0, 0);">(o"</span><span
        style="font-weight: bold; color: rgb(0, 0, 0);">Arrays</span><span
        style="color: rgb(0, 0, 0);">"). Estas dos categorias pueden ser
        combinadas: Local simple, local  tipo Tabla , global simple, global
        tipo tabla.</span></p>

        <p><span style="font-size: 5pt; color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">Las variables globales son usadas
        en cálculos de ventana. Estas variables son accessible desde el momento
        de su creación hasta el fin del cálculo de la ventana. </span></p>

        <p><span style="color: rgb(0, 0, 0);">Esto las hace prácticas para
        transferir información a lo largo del cálculo, o para predefinir
        información acerca de la configuración de la ventana.</span></p>

        <p></p>

        <p class="MsoNormal">Sin embargo, hay que distinguir entre las <span
        style="font-weight: bold;">variables globales "WinPro"</span> y las
        <span style="font-weight: bold;">variables globales creadas por los
        "usuarios"</span>. <o:p></o:p></p>

        <p class="MsoNormal">En efecto, la disponibilidad de las variables
        globales creadas por los "usuarios" depende del <a
        href="ordrecalcul.php">Orden de cálculo</a> de los
        componentes.<o:p></o:p></p>

        <p class="MsoNormal"></p>

        <p class="MsoNormal"><span style="font-weight: bold;">Aquí damos 2
        ejemplos</span>:<o:p></o:p></p>

        <p class="MsoNormal">&bull; El usuario crea una variable global en un
        herraje. <o:p></o:p></p>

        <p class="MsoNormal">En cuanto este herraje se incluye en la
        composición de una ventana, el contenido de esta variable global
        (creada en el herraje) podrá recuperarse en la parametrización<span
        style="">  </span>del marco y de los ensanchadores (por ejemplo), a
        diferencia de la configuración de las guías, de los cajones de persiana
        y enrollables.<o:p></o:p></p>

        <p class="MsoNormal"><span class="hps">&bull;</span> <span
        class="hps">El usuario crea una</span> <span class="hps">variable
        global</span> <span class="hps">en el marco.</span> <br>
        <span class="hps">Siempre que</span> este marco <span class="hps">está
        incluido en</span> <span class="hps">la composición de la
        ventana</span>, <span class="hps">sólo</span> <span class="hps">se
        podrá recuperar el contenido de</span> <span class="hps">esta variable
        global en la parametrización </span><span style=""> </span>de <span
        class="hps">los</span> <span class="hps">perfiles periféricos
        (</span>Ensanchadores <span style=""> </span><span class="hps">y
        umbrales).</span><o:p></o:p></p>

        <p><span style="color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">Para definir una variable global,
        usted simplemente necesita usar el signo </span><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">_</span><span
        style="color: rgb(0, 0, 0);">como carácter inicial de su nombre.  Por
        otro lado, no hay reglas específicas para su utilización, se deben
        tratar de la misma manera en que se tratan las variables
        locales.</span></p>

        <p><span style="color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">Hay, sin embargo, una diferencia
        importante entre variables locales y globales: Si  utiliza una variable
        local que no ha sido creada, WinPro generará un mensaje de error, y
        terminará inmediatamente el cálculo. Pero si usted utiliza una variable
        global indefinida, no recibirá un mensaje de error; en su lugar, WinPro
        considerará que la variable existe y que tiene un valor de 0.  Esto le
        permite testear una variable global incluso si no está seguro de que
        existe. Esto es asi porque una variable global puede ser creada en una
        ventana de componente y ser utilizada en otra. Dado que la forma de
        composición de una ventana puede variar ampliamente, no hay garantía de
        que el elemento que crea la variable global sea usado en la ventana
        (ej: Usted crea una variable global en un herraje, y lo testéa en el
        marco exterior. Si el herraje no se utiliza, es útil tener la
        posibilidad de testear una variable no existente sin que genere
        error.)</span></p>

        <p><span style="color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">Usted también puede verificar la
        existencia de una variable utilizando la instrucción </span><span
        style="font-weight: bold; color: rgb(0, 0, 0);">Existe</span><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">(Nombre_de_Variable)</span><span
        style="color: rgb(0, 0, 0);">, que devolverá el valor </span><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Verdadero()</span><span
        style="color: rgb(0, 0, 0);">si la variable existe o </span><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Falso()</span><span
        style="color: rgb(0, 0, 0);">si no.  Esta instrucción puede ser usada
        para variables locales o globales indiferentemente.</span></p>

        <p><span style="color: rgb(0, 0, 0);"> </span></p>

        <p><span style="font-size: 2pt; color: rgb(0, 0, 0);"> </span></p>

        <p><span
        style="font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">Variables
        Tabla (Arrays):</span></p>

        <p><span style="font-size: 5pt; color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">Las </span><span
        style="font-weight: bold; color: rgb(0, 0, 0);">Tabla</span><span
        style="color: rgb(0, 0, 0);">pueden contener varios valores
        simultaneamente.  Usted puede acceder a cada valor usando el nombre de
        la variable, seguido del indice del valor entre corchetes cuadrados
        </span><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">[]</span><span
        style="color: rgb(0, 0, 0);">. El indice del primer valor es
        </span><span
        style="font-weight: bold; color: rgb(0, 0, 0);">1</span><span
        style="color: rgb(0, 0, 0);">.</span></p>

        <p><span style="font-size: 5pt; color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">Para crear </span><span
        style="font-weight: bold; color: rgb(0, 0, 0);">una Tabla</span><span
        style="color: rgb(0, 0, 0);">, escriba su nombre, seguido del signo
        </span><span
        style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">:</span><span
        style="color: rgb(0, 0, 0);">, y del numero de elementos que el arreglo
        debe guardar. El valor inicial de todos los elementos será 0.</span></p>

        <p><span style="font-size: 5pt; color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">Un arreglo puede ser
        redimensionado dinámicamente, simplemente especificando otro tamaño.
         Las variables dentro del arreglo son mantenidas; sin embargo, si el
        nuevo tamaño es menor que el anterior, los elementos cuyo indice sea
        superior al nuevo tamaño se perderán.</span></p>

        <p><span style="font-size: 5pt; color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">El maximo tamaño de un arreglo es
        32767 (215-1). El indice del elemento, asi como el tamaño usado para
        crear la Tabla, pueden ser una expresión aritmética
        arbitraria.</span></p>

        <p><span style="font-size: 5pt; color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">Puede asignar un valor simple a
        todos los elementos de una tabla en una sola instrucción. Simplemente
        necesita usar el nombre de la variable sin </span><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">[]</span><span
        style="color: rgb(0, 0, 0);">seguido de la instrucción de
        asignación.</span></p>

        <p><span style="font-size: 5pt; color: rgb(0, 0, 0);"> </span></p>

        <p><span
        style="color: rgb(0, 0, 0); text-decoration: underline;">Ejemplo:</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 128);"> </span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);"># Crear un
        tabla de 10 valores,</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">#
        inicializado a 0</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Tabla :
        10</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">#
        Congfigurar cada valor a 5</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Tabla :=
        5</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);"># Sumar 10
        nuevos valores. Los nuevos valores</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);"># son
        inicializados a 0, pero los 10 primeros</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);"># (indice 1
        a 10) mantienen su valor original</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Tabla :
        20</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);"># guardar 1
        en el primer valor</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Tabla[1] :=
        1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);"># guardar
        100 en el undécimo valor</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Tabla[11] :=
        100</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);"># Sumar 1 a
        cada valor de la Tabla</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Tabla +=
        1</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);"># Leer el
        quinto valor en la variable a</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a :=
        Tabla[5]</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
