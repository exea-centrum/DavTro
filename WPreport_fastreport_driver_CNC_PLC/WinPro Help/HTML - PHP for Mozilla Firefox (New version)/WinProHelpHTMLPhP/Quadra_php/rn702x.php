<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.0.2x","7.0.2x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn702x.php"; }
else { parent.quicksync('a11.6.6'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.0.2x</title>
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
        href="introduction.php">Top</a>� <a href="rn703x.php">Previous</a>� <a
        href="rn701x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.0.29</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/02/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">M�morisation des factures
        simples:</span> Les factures simples et notes de cr�dit sont maintenant
        stock�e dans la table FacNc.dbf. </p>

        <p>Ceci vous permet de d�finir la pr�sentation de ces documents par
        WPReport ou tout autre g�n�rateur de rapport.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Messages d&rsquo;erreur de
        calcul:</span> Les messages d&rsquo;erreur g�n�r�s lors de la cr�ation
        d&rsquo;une fen�tre sont maintenant stock�s dans le champ MsgErreur de
        la table Detail.dbf</p>

        <p>�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.0.26</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/02/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Nouveau champ dans les tables de
        commandes fournisseur:</span> Le num�ro de ch�ssis y est not�, pour les
        articles command�s sur mesure.</p>

        <p>�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.0.25</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/02/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Variable exportable:</span> Une
        nouvelle variable <span class="f_Variables">VarLin</span> peut �tre
        d�finie pour chaque composant ; le contenu de cette variable est not�
        dans le champ Var de la table Lin.dbf, si le composant y est
        export�.</p>

        <p>�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.0.24</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/02/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Nouveau champ dans la table des
        r�servations client:</span> Le num�ro de ch�ssis y est not�, pour les
        articles command�s sur mesure.</p>

        <p>�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.0.20 � 23</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/01/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Poids des vitrages et
        panneaux:</span> Vous pouvez d�finir un poids au m�tre carr� pour tous
        les types de remplissages. </p>

        <p>Ce poids est accessible dans le param�trage par la nouvelle variable
        globale <span class="f_Variables">_RemplPoids[]</span>.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Biblioth�ques:</span> Vous pouvez
        d�finir des cat�gories de biblioth�que, c'est-�-dire des valeurs
        num�riques associ�es d&rsquo;une part aux biblioth�ques, d&rsquo;autre
        part � chaque ch�ssis dans une biblioth�que. </p>

        <p>Lorsque vous utilisez un ch�ssis de biblioth�que dans une commande,
        ces valeurs sont mises � votre disposition dans les variables <span
        class="f_Variables">_NumeroBiblio</span> (au niveau de la biblioth�que)
        et <span class="f_Variables">_NumeroInterneBiblio</span> (au niveau des
        ch�ssis de la biblioth�que).</p>
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
      <td align="left"><p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.0.29</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/02/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Opslaan van eenvoudige
        facturen</span> De eenvoudige facturen en kredietnota&rsquo;s worden nu
        opgeslagen in de table FacNc.dbf. Hierdoor wordt de informatie ook
        beschikbaar voor dokumenten van WPReport of een andere
        reportgenerator�.</p>

        <p></p>

        <p><span class="f_TitreReleaseNote">&bull;Bericht van
        berekeningen</span> De foutmeldingen welke gecre�erd worden bij de
        aanmaak van een raam worden nu opgeslaan in het veld MsgErreur van de
        table Detail.dbf</p>

        <p>�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.0.26</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/02/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Nieuw veld in de table van de
        bestelling bij de leverancier :</span> Het raamnummer wordt nu
        genoteerd,voor de artikels welke op maat besteld worden.</p>

        <p>�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.0.25</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/02/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Variable exporteerbaar</span>
        Een nieuwe variabele <strong><span
        style="color:#0000a0">VarLin</span></strong> kan nu gedefinieerd worden
        voor elk onderdeel ; de uitkomst van deze variabele wordt genoteerd in
        het veld Var van de table Lin.dbf, indien het onderdeel ge�xporteerd
        wordt.</p>

        <p>�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.0.24</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/02/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Nieuw veld in de table van de
        klantreservatie</span> Het raamnummer wordt nu genoteerd,voor de
        artikels welke op maat besteld worden..</p>

        <p>�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.0.20 tot 23</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/01/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Gewicht van beglazingen en
        panelen:</span> U kan het gewicht per m� bepalen voor alle types van
        vullingen.Het gewicht kan bepaald worden in de parametrage met de
        nieuwe globale variabele  <span
        class="f_Variables">_RemplPoids[],(_VullingGewicht[])</span>.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Bibliotheken:</span> U kan
        categorie�n toewijzen aan de bibliotheken,d.w.z. een numerieke waarde
        welke enerzijds aan de bibliotheek toegewezen wordt en anderzijds aan
        elk raam binnen een bibliotheek.Wanneer u een in een bestelling een
        raam vanuit een bibliotheek kiest,beschikt u onmiddelijk over de waarde
        in de variabele <strong><span
        style="color:#0000a0">_NumeroBiblio</span></strong> (op niveau van de
        bibliotheek) en <strong
        style="color:#0000a0">_NumeroInterneBiblio</strong> (op niveau van het
        raam in de bibliotheek).</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
