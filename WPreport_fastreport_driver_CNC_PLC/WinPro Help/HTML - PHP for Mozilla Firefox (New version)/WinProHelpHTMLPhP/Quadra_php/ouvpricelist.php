<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Price List","Tarif"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?ouvpricelist.php"; }
else { parent.quicksync('a5.3.9'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Tarif</title>
  <meta name="keywords" content="Price table">
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
        href="ouvcornerlabour.php">Previous</a>� <a href="ouvdxf1.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This page lets you link
        one or more price table to each frame, depending on the
        colour.�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip0151eng.jpg" width="547" height="342" border="0"
        alt="clip0151eng"><span style="color: #000000;"></span></p>
 
        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Min width</span>: The minimum width accepted
        for this frame.</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Widths</span>: List of the widths in the
        price table. The gap between 2 dimensions may be variable.</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Generate</span><span
        style="color: #000000;">: This button lets you fill automatically the
        widths list, with a constant increment.</span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-weight: bold;">�</span></p>

        <p style="text-align: center;"><img src="img/clip0138eng.jpg" width="210"
        height="154" border="0" alt="clip0138eng"></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Min height</span>: The minimum width
        accepted for this frame.</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Heights</span>: List of the heights in the
        price table. The gap between 2 dimensions may be variable.</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Generate</span>: This button lets you fill
        automatically the heights list, with a constant increment.</p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="text-align: center;"><img src="img/clip0138eng.jpg" width="210"
        height="154" border="0" alt="clip0138eng"></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Colour groups</span>: If the frame can be
        made in different colours, you may have to define more than one price
        table (one per colour group). Type an arbitrary number for each colour,
        with the same number for colours of the same price.</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Dimension type</span>: Select here for which kind of dimension the price tables are defined: 
		Total dimension, Leaf rebate dimension, Leaf dimension, Outer frame rebate dimension, Masonry dimension.</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Use for cost price</span>: Check this box if
        the price grid is to be used when computing the cost price of the
        window.</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Use for selling price</span>: Check this box
        if the price grid is to be used when computing the selling price of the
        window.</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Input prices</span>: Click this button to
        select and fill the price tables. When you click, you first get a list
        of the colour groups you have defined:</p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">�</span></p>

        <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0139eng.jpg" width="250" height="292" border="0"
        alt="clip0139eng"></p>

        <p class="p_Textestd"><span class="f_Textestd">Select one of the
        groups, then click OK; the next dialog opens, in which you will type
        the prices:</span></p>

        <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0140eng.jpg" width="533" height="354" border="0"
        alt="clip0140eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Glass
                table</span><span style="color: #000000;">: You can link a
                price table for standard price to the sash. You can select to
                define this table for cost and/or selling prices. You can also
                select which kind of dimensions it uses: Total dimension (outer
                frame), Real glass dimension, Reveal dimension.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Input prices</span>: Click on this button to input the glass price table:</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip0152eng.jpg" width="540" height="350" border="0"
        alt="clip0152eng"></p>
		
        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Price/m�</span>: rather than using a price table, you
                can type a price per square meter. This price will use the same kind of dimensions as the price table would.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Min price</span><span style="color: #000000;">: If you compute the
                glass price per square meter, you can also define here a minimum price (per leaf).</td>
            </tr>
          </tbody>
        </table>
        </div>

		<p>�</p>
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
        class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cet onglet vous permet
        de lier une grille de prix � chaque ouvrant, en fonction de sa
        couleur.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="text-align: center;"><img src="img/clip0151fra.jpg" width="733"
        height="436" border="0" alt="clip0151fra"></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Largeur minimum</span><span
        class="f_Textestd">: Largeur minimum accept�e pour cet
        ouvrant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Largeurs</span><span class="f_Textestd">:
        liste des largeurs d�finissant les colonnes de la grille de prix.
        L'�cart entre deux largeurs peut varier si n�cessaire.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">G�n�rer</span><span class="f_Textestd">: Ce
        bouton vous permet de remplir la liste des largeurs (avec un espacement
        constant).</span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-weight: bold;">�</span></p>

        <p style="text-align: center;"><img src="img/clip0138.jpg" width="210"
        height="154" border="0" alt="clip0138"></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Hauteur minimum</span><span
        class="f_Textestd">: Hauteur minimum accept�e pour cet
        ouvrant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Hauteurs</span><span class="f_Textestd">:
        liste des hauteurs d�finissant les lignes de la grille de prix. L'�cart
        entre deux hauteurs peut varier si n�cessaire.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">G�n�rer</span><span class="f_Textestd">: Ce
        bouton vous permet de remplir la liste des hauteurs (avec un espacement
        constant).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="text-align: center;"><img src="img/clip0138.jpg" width="210"
        height="154" border="0" alt="clip0138"></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Groupes de couleurs</span><span
        class="f_Textestd">: Si l'ouvrant peut �tre fabriqu� dans plusieurs
        couleurs, vous aurez plusieurs grilles de prix � d�finir, chaque grille
        de prix �tant li�e � une ou plusieurs couleurs. Attribuez un num�ro
        arbitraire � chaque grille de prix (de 0 � 99), et indiquez, pour
        chaque couleur, le num�ro de le grille de prix
        correspondante.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Type de dimensions</span><span
        class="f_Textestd">: Indiquez ici sur quelle type de dimension votre
        grille de prix est d�finie, entre c�tes fabrication, c�tes tableau,
        fond de feuillure ouvrant, fond de feuillure dormant ou dimensions
        ext�rieur ouvrant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Utiliser pour le prix de revient</span><span
        class="f_Textestd">: Cochez cette case pour que la grille de prix
        affecte le prix de revient de la fen�tre.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Utiliser pour le prix de vente</span><span
        class="f_Textestd">: Cochez cette case pour que la grille de prix
        affecte le prix de vente de la fen�tre.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Encodage des grilles de prix</span><span
        class="f_Textestd">: Cliquez sur ce bouton pour encoder les diff�rentes
        grilles de prix. WinPro vous pr�sente alors la liste des num�ros de
        grille que vous avez d�finis:</span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">�</span></p>

        <p class="p_Textestd" style="text-align: center;"><img
        src="img/clip0139.jpg" width="200" height="266" border="0"
        alt="clip0139"></p>

        <p class="p_Textestd"><span class="f_Textestd">S�lectionnez l'un des
        groupes, et cliquez sur OK pour acc�der � l'encodage des
        prix:</span></p>

        <p style="text-align: center;"><img src="img/clip0140.jpg" width="556"
        height="398" border="0" alt="clip0140"></p>

        <p style="text-align: center;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Grille de vitrage</span>:
                Vous pouvez associer une grille de prix � l'ouvrant afin de
                chiffrer le vitrage. Vous pouvez choisir de calculer cette
                grille pour affecter le prix de revient tarif ou courant. Vous
                pouvez aussi choisir le type de dimension de verre �
                consid�rer, entre la dimension hors tout (fond de batt�e
                dormant), dimension exacte (telle que calcul�e) ou dimension
                tableau (�largi � l'ext�rieur du dormant ou � l'axe
              traverse)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Encodage de la grille de
                vitrage</span>: Cliquez ce bouton pour saisir les valeurs de la
                grille de vitrage</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><img src="img/clip0140.jpg" width="556"
        height="398" border="0" alt="clip0140"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Prix au m�</span>: Saisir
                ici un prix au m�tre carr� plut�t qu'une grille de prix. Ce
                prix utilisera les m�mes dimensions que les grilles de
              prix.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Prix min</span>: Si le prix
                de vitrage est calcul� par le champs de prix au m�tre carr�
                ci-dessus, vous pouvez d�finir ici un prix minimum (par
                vantail).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
