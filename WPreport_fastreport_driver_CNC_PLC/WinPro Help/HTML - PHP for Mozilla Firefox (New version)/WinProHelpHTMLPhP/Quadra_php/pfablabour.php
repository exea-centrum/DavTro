<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Labour","Main d'oeuvre"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?pfablabour.php"; }
else { parent.quicksync('a5.11.8'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Main d'oeuvre</title>
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
        href="pfabarticles.php">Previous</a>� <a
        href="pfabdrawings.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>�</p>

        <p>This page allows you enumerating all the operations that can be used to create
        this panel.</p>

        <p>You have to give the rules for using each operation.</p>

        <p>The operations will be examined by WinPro in the order in which they are defined.</p>

        <p>�</p>

        <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0216eng.jpg" width="633" height="360" border="0"
        alt="clip0216eng"></p>

        <p>The page is divided in 3 sections (left, center, right).</p>

        <p><span style="font-size: 5pt;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">The left section</span> contains the list of labour codes. Select a
        line in this list, and type the labour code in the input field immediately on top of the list.</p>

        <p><span style="font-size: 5pt;">�</span></p>

        <p>Below the list, there are several check boxes, which let you define a few usage conditions:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Do not
                use for cost price</span>: the price of the component will not be used when computing the cost price.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Do not
                use for selling price</span>: the price of the component will not be used when computing the selling price.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Simpl. fact. document</span>: the component
                will be listed onto simplified factory documents.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Customer documents</span>: the component will
                be mentioned (with quantity and dimension) onto customer documents (quotation, confirmation, delivery).</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Valued</span>: if
                the component is mentioned onto customer document, this check box tells WinPro its selling price must also be detailed.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Delivery preparation</span>: the component
                will be listed onto delivery preparation documents.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Quality control</span>: the component will
                be listed onto quality control documents.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;">�</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">The central section</span> contains the list of
        colours defined into the <a href="pfabdescription.php">Description</a> page of the composed panel. If the
        labour has no colour rule to follow, you simply need to select nothing from this list. If the labour (and its formula) only apply for
        specific colours, you must select each colour as appropriate.</p>

        <p><span style="font-size: 5pt;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The <span style="font-weight: bold; color: #000000;">Reverse selection</span> 
		button above the list lets you reverse all of the list's selections.</p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p>Below the list, there are several check boxes, which let you define a few usage conditions:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Standard</span>: When this box is checked, the component can be used with any of the standard colours.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">RAL 1 colour</span>: When this box is checked, the component can be used with any of 
				the non-standard RAL single-colour.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">RAL 2 colours</span>: When this box is checked, the component can be used with any of 
				the non-standard RAL bi-colour.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="526"
                style="width: 526px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;"><span
                style="font-size: 14pt"><span style="font-size: 12pt"><span
                style="color:#ff0000">Important !</span></p>

                <p style="margin: 0px 0px 0px 13px;">The considered colour
                depends on the value of a key from <em>settings</em> table:
                </p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini"><strong><span
                class="f_Textestd">[System]</span></strong></span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini">PanneauFabriqueDormant</span> =
                0����;����Composed panel components retrieve the sash frame
                colour, if no colour is set when inputing the panel (default
                value). Then, the formula should be read "for a standard sash
                frame colour" or "for a sash frame RAL 1 colour", depending on
                checkboxes, as long as no colour is set at input.</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini">PanneauFabriqueDormant</span> =
                1����;����Composed panel components retrieve the outer frame
                colour, if no colour is set when inputing the panel AND the
                panel is within a fixed pane. Then, the formula should be read
                "for a standard outer frame colour" or "for an outer frame RAL
                1 colour", depending on checkboxes, as long as the sash frame
                is a fixed pane and no colour is set for the panel at input.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd" style="font-weight: bold; text-decoration: underline;">The right
        section</span> contains the formula that applies to the labour.</p>

        <p><span style="font-size: 5pt;">�</span></p>

        <p><span style="font-size: 5pt;">�</span></p>		
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
      <td align="left"><p>�</p>

        <p>Cet onglet permet de d�finir les temps de main d'oeuvre � consommer
        pour ce panneau fabriqu�. </p>

        <p>Vous devez renseigner une r�gle de consommation pour chaque main
        d'oeuvre.</p>

        <p>Les main d'oeuvres seront �valu�s par WinPro dans l'ordre dans
        lequel elles sont d�finis.</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0476.zoom80.gif"
        width="415" height="332" border="0" alt="clip0476"></p>

        <p>Cette page se divise en 3 zones (gauche, centre et droite).</p>

        <p><span style="font-size: 5pt;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone gauche</span> contient la
        liste des main d'oeuvres � consommer pour ce panneau fabriqu�.
        S�lectionner une ligne dans cette liste, et saisissez le code de main
        d'oeuvre dans le champ de saisie imm�diatement au-dessus de la
        liste.</p>

        <p><span style="font-size: 5pt;">�</span></p>

        <p>Sous cette liste, plusieurs cases � cocher permettent de pr�ciser
        les conditions d'utilisation suivantes:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="25"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclure du pr.
                revient</span>: le prix de la main d'oeuvre ne sera pas utilis�
                pour calculer le prix de revient.</td>
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
              <td width="25"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclure du pr. vente</span>:
                le prix de la main d'oeuvre ne sera pas utilis� pour calculer
                le prix de vente.</td>
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
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Plan d'atelier
                simplifi�</span>: la main d'oeuvre sera imprim�e sur le
                document plan d'atelier simplifi�.</td>
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
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Documents client</span>: la
                main d'oeuvre sera imprim�e sur les documents client (devis,
                confirmation, note d'envoi).</td>
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
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Valorisation</span>: si la
                main d'oeuvre est coch�e � imprimer sur les documents client,
                cette case coch�e d�taillera le prix de vente sur ces
              documents.</td>
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
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Pr�paration
                livraison</span>: la main d'oeuvre sera imprim�e sur les
                documents de pr�paration � la livraison.</td>
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
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Contr�le qualit�</span>: la
                main d'oeuvre sera imprim�e sur le document de contr�le
              qualit�.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;">�</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone centrale</span> contient la
        liste des couleurs autoris�es pour ce panneau fabriqu� dans l'onglet <a
        href="pfabdescription.php">Description</a>. Si la main d'oeuvre n'est
        pas d�pendante de la couleur, il suffit de ne rien s�lectionner dans
        cette liste. Si la main d'oeuvre (et sa formule) s'applique uniquement
        pour certaines couleurs, s�lectionnez ces couleurs dans la liste.</p>

        <p><span style="font-size: 5pt;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le bouton </span><span
        class="f_Textestd" style="font-weight: bold;">Inverser
        s�lection</span><span class="f_Textestd">au-dessus de cette liste vous
        permet d'inverser la s�lection dans la liste.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p>Sous cette liste, quelques options suppl�mentaires peuvent �tre
        utilis�es::</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Standard</span>: lorsque
                cette case est coch�e, cette main d'oeuvre peut �tre utilis�e
                avec n'importe laquelle des couleurs standards.</td>
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
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">RAL 1 couleur</span>:
                lorsque cette case est coch�e, cette main d'oeuvre peut �tre
                utilis�e avec n'importe laquelle des teintes RAL non-standards
                1 couleur.</td>
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
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">RAL 2 couleurs</span>:
                lorsque cette case est coch�e, cette main d'oeuvre peut �tre
                utilis�e avec n'importe laquelle des teintes RAL non-standards
                2 couleurs.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;">�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="526"
                style="width: 526px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;"><span
                style="font-size: 14pt"><span style="font-size: 12pt"><span
                style="color:#ff0000">Important !</span></p>

                <p style="margin: 0px 0px 0px 13px;">La couleur consid�r�e ici d�pend d'une clef dans 
				la table <em>settings</em>:
                </p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini"><strong><span
                class="f_Textestd">[System]</span></strong></span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini">PanneauFabriqueDormant</span> =
                0����;����Les composants du panneau suivront la couleur de l'ouvrant si aucune couleur n'est renseign�e 
				� la saisie (valeur par d�faut). La formule pour ce composant se lira donc 
				"pour une couleur d'ouvrant standard" ou bien "pour un ouvrant en RAL 1 couleur", en fonction des cases 
				� cocher, tant qu'aucune couleur n'est pr�cis�e en saisie pour ce panneau.</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini">PanneauFabriqueDormant</span> =
                1����;����Les composants du panneau suivront la couleur du dormant si aucune couleur n'est renseign�e 
				en saisie ET que le panneau se trouve dans un fixe simple cadre. La formule pour ce composant se lira donc
				"pour une couleur de dormant standard" ou bien "pour un dormant en teinte RAL 1 couleur", en fonction 
				des cases � cocher, tant qu'aucune couleur n'est pr�cis�e en saisie pour le panneau ET que le panneau 
				se trouve dans un fixe simple cadre.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone de droite</span> contient
        la formule de consommation de la main d'oeuvre.</p>

        <p>�</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
