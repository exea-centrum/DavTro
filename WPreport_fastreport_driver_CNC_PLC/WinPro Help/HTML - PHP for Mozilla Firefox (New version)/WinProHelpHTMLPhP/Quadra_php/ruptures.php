<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Breaks","Ruptures","Onderbrekingen","Rupturas"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame. 
if(top.frames.length==0) { top.location.href="index.php?ruptures.php"; }
else { parent.quicksync('a2.3.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  
  <title>Ruptures</title><meta name="keywords" content="Rupture,Retour,Echec,Message">
  <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet"></head>

<body style="margin: 0px; background: rgb(255, 255, 255) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;" onload="AddTitleAndLangFlags();highlight();">

<div id="hmpopupDiv" style="visibility: hidden; position: absolute; z-index: 1000;">
</div>

<table bgcolor="#ff8000" border="0" cellpadding="5" cellspacing="0" width="100%">
  <tbody>
    <tr valign="middle">
      <td align="left"><p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>

        <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
      </td>
      <td align="center">
        <div id="langflags">
        </div>
      </td>
      <td align="right"><span style="font-size: 9pt;"><a href="introduction.php">Top</a>&nbsp; <a href="boucles.php">Previous</a>&nbsp; <a href="fonctions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table border="0" cellpadding="5" cellspacing="0" width="100%">
  <tbody>
    <tr valign="top">
      <td align="left"><p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>

        <p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>

        <p>WinPro has two break functions: <span style="font-weight: bold; color: rgb(0, 0, 255);">Return</span> and <span style="font-weight: bold; color: rgb(0, 0, 255);">Fail</span>.</p>

        <p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>

        <p>Break instructions let you stop the execution of a formula, either
        because you have achieved the desired result, and executing the rest of
        the formula is not necessary (<span style="font-weight: bold; color: rgb(0, 0, 255);">Return</span> instruction),
        or because you have met an error condition, and all computation must be
        stopped (<span style="font-weight: bold; color: rgb(0, 0, 255);">Fail</span>
        instruction).</p>

        <p>&nbsp;</p>

        <div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;">

        <table style="border-style: solid; border-color: rgb(218, 218, 218) rgb(105, 105, 104) rgb(105, 105, 104) rgb(218, 218, 218); border-width: 1px; -x-border-x-spacing: 0px; -x-border-y-spacing: 0px;" align="center" border="1" cellpadding="0" cellspacing="0">
          <tbody>
            <tr align="left" valign="top">
              <td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Return</span></p>
              </td>
              <td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529"><p>The
                instruction uses no parameter. The execution of the formula
                stops, but the results are kept.</p>
              </td>
            </tr>
            <tr align="left" valign="top">
              <td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Fail</span></p>
              </td>
              <td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529"><p>The
                instruction must be followed by a message explaining why the
                execution has stopped. This may be a fixed text, or a a message
                code. In the later case, you must prefix the message code with
                the sign <span class="f_Variables">#</span>. The message code
                refers to an entry in the <a href="messages.php">message
                table</a>.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 1px; text-align: center;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">Examples:</span></p>

        <p><span style="color: rgb(0, 0, 0); text-decoration: underline;">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If a
        &lt; b</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;Return</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If a
        &lt; 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;Fail
        'a' must be positive</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If b
        &lt; 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;Fail
        #MESS001</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>

        <p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
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
      <td align="left"><p>&nbsp;</p>

        <p>Il existe dans WinPro deux instructions de rupture: <span style="font-weight: bold; color: rgb(0, 0, 255);">Retour</span> et <span style="font-weight: bold; color: rgb(0, 0, 255);">Echec</span>.</p>

        <p>Les instructions de rupture permettent d'interrompre l'exécution
        d'une formule, soit parce que l'on a obtenu le résultat souhaité et
        qu'il n'est plus nécessaire de continuer l'exécution de la formule
        (instruction <span style="font-weight: bold; color: rgb(0, 0, 255);">Retour</span>), soit parce
        que l'on rencontré une condition d'erreur, et que l'on souhaite
        empêcher l'utilisateur de continuer le calcul (instruction <span style="font-weight: bold; color: rgb(0, 0, 255);">Echec</span>).</p>

        <p>&nbsp;</p>

        <p><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>

        <div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">

        <table style="border: 2px solid rgb(192, 192, 192); background-color: rgb(255, 247, 239); -x-border-x-spacing: 0px; -x-border-y-spacing: 0px; border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="1" cellpadding="2" cellspacing="0">
          <tbody>
            <tr align="left" valign="middle">
              <td style="border: 1px solid rgb(192, 192, 192); width: 76px;" width="76"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 255);"></span><span class="f_Variables" style="font-weight: bold;">Retour</span></p>
              </td>
              <td style="border: 1px solid rgb(192, 192, 192); width: 529px;" width="529"><p style="margin: 0px 0px 0px 13px;">Cette instruction n'a pas de
                paramètre. L'exécution de la formule s'interrompt, mais les
                résultats sont conservés. Par exemple, cette instruction, si
                elle est exécutée depuis une routine, interrompera l'exécution
                de la routine, <span style="font-weight: bold;">mais pas
                l'exécution de la formule appelant la routine !</span></p>
              </td>
            </tr>
            <tr align="left" valign="middle">
              <td style="border: 1px solid rgb(192, 192, 192); width: 76px;" width="76"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 255);"></span><span class="f_Variables" style="font-weight: bold;">Echec</span></p>
              </td>
              <td style="border: 1px solid rgb(192, 192, 192); width: 529px;" width="529"><p style="margin: 0px 0px 0px 13px;">Cette instruction peut être
                suivie d'un texte spécifiant la cause de l'erreur. Il peut
                s'agir d'un texte fixe, que l'on spécifie tel quel, ou alors
                d'un texte codifié, stocké dans une <a href="messages.php">table de messages</a>. Dans ce cas, on fera
                suivre l'instruction <span style="font-weight: bold; color: rgb(0, 0, 255);">Echec</span> du
                caractère <span style="font-weight: bold; color: rgb(0, 0, 255);">#</span> puis du
                code du message choisi.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 27px;"><span style="text-decoration: underline;">Exemples:</span></p>

        <p style="margin: 0px 0px 0px 27px;"><span style="text-decoration: underline;">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si a
        &lt; b</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;Retour</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Fin
        Si</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si a
        &lt; 0</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;Echec
        'a' doit être positif</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Fin
        Si</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si b
        &lt; 0</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;Echec
        #MESS001</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Fin
        Si</span></p>
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
      <td align="left"><p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>

        <p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>

        <p>WinPro heeft twee functies om een berekening te onderbreken nl.:
        <span style="font-weight: bold; color: rgb(0, 0, 255);">Return</span> en <span style="font-weight: bold; color: rgb(0, 0, 255);">Fail</span>.</p>

        <p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>

        <p>Deze onderbrekings instructies laten u toe een uitvoering van een
        formule te onderbreken, ofwel omdat u het doel bereikt hebt,en de rest
        van de uitvoering van de formule is niet langer nodig (<span style="font-weight: bold; color: rgb(0, 0, 255);">Return</span> instructie),
        of u bent een fout in een voorwaarde tegen gekomen en alle berekeningen
        dienen te stoppen (<span style="font-weight: bold; color: rgb(0, 0, 255);">Fail</span> instructie).</p>

        <p>&nbsp;</p>

        <div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;">

        <table style="border-style: solid; border-color: rgb(218, 218, 218) rgb(105, 105, 104) rgb(105, 105, 104) rgb(218, 218, 218); border-width: 1px; -x-border-x-spacing: 0px; -x-border-y-spacing: 0px;" align="center" border="1" cellpadding="0" cellspacing="0">
          <tbody>
            <tr align="left" valign="top">
              <td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Return</span></p>
              </td>
              <td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529"><p>Deze
                instructie gebruikt geen parameter. De uitvoering van de
                formule stopt,maar de resultaten worden behouden.</p>
              </td>
            </tr>
            <tr align="left" valign="top">
              <td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Fail</span></p>
              </td>
              <td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529"><p>Deze
                instructie moet gevolgd worden door een bericht welke verklaart
                waarom de uitvoering gestopt is. Dit kan een vaste tekst zijn,
                of een bericht code. In een later stadium,kan je voor de
                bericht code de prefix <span class="f_Variables">#</span> voor
                plaatsen. De bericht code verwijst naar een code aangemaakt bij
                de berichten in Winpro welke opgelagen worden in de <a href="messages.php">berichten tabel</a>.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 1px; text-align: center;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">Voorbeeld:</span></p>

        <p><span style="color: rgb(0, 0, 0); text-decoration: underline;">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If a
        &lt; b</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;Return</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If a
        &lt; 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;Fail
        'a' moet positief zijn</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If b
        &lt; 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;Fail
        #MESS001</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Waarbij&nbsp;&nbsp;#MESS001 verwijst naar de aangemaakte code
        bij de berichten in Winpro</span></p>

        <p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
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
      <td align="left"><p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>

        <p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>

        <p><span style="color: rgb(0, 0, 0);">WinPro tiene dos funciones de corte: </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Retorno</span><span style="color: rgb(0, 0, 0);"> y </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Fracaso</span><span style="color: rgb(0, 0, 0);">.</span></p>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">Las instrucciones de corte
permiten parar la ejecución de una formula, ya sea porque se ha logrado
el resultado deseado, y la ejecución del resto de la formula no es
necesaria (Instrucción </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Retorno</span><span style="color: rgb(0, 0, 0);">), o porque se ha encontrado una condición de error y los cálculos deben ser detenidos (Instrucción </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Fallo</span><span style="color: rgb(0, 0, 0);">).</span></p>
<p><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 76px;" valign="top" width="76"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Retorno</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 529px;" valign="top" width="529"><p><span style="color: rgb(0, 0, 0);">La instrucción no usa parametros. La ejecución de la formula se detiene, pero los resultados se mantienen.</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 76px;" valign="top" width="76"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Fracaso</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 529px;" valign="top" width="529"><p><span style="color: rgb(0, 0, 0);">La
instrucción debe ser seguida por un mensaje explicando porqué la
ejecución se ha detenido. Esto puede ser un texto fijo, o un codigo de
mensaje. En el último caso, se deben predefinir los codigos de mensaje
con el signo </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">#</span><span style="color: rgb(0, 0, 0);">. El código de mensaje referencia a una entrada en la <a href="messages.php">Tabla de Mensajes</a>.</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">Ejemplos:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);"></span></p><p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si a &lt; b</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">  Retorno</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Fin Si</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si a &lt; 0</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">  Fracaso 'a' debe ser positivo</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Fin Si</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si b &lt; 0</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">  Fracaso #MENS001</span></p>






<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Fin Si</span></p>

        <p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body></html>