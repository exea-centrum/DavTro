<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Articles","Articles"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?drmarticles.php"; }
else { parent.quicksync('a5.2.7'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Articles</title>
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
        href="introduction.php">Top</a>� <a href="drmprofils.php">Previous</a>�
        <a href="drmpi�ceangle.php">Next</a> </span> </td>
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

        <p class="p_Textestd"><span class="f_Textestd">This page
        allows you enumerating all the articles that can be used to create
        this frame. You have to give the rules for using each article. The
        articles will be examined by WinPro in the order in which they are
        defined, for each side of the frame successively.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0133eng.jpg" width="612" height="374" border="0"
        alt="clip0133eng"></p>

        <p class="p_Textestd"><span class="f_Textestd">The page
        is divided in 3 sections (left, center, right).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">The left section</span> contains the list of articles. Select a line in
        this list, and type the article code in the input field immediately on top of the list.</p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Below the list, there are several check boxes, which let you define a few usage conditions:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Do not use for cost price</span>: 
			  the price of the article will not be used when computing the cost price.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Do not use for selling price</span>: 
			  the price of the article will not be used when computing the selling price.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Simpl. fact. document</span>: the
                article will be listed onto simplified factory documents.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Customer
                documents</span>: the article will be mentioned (with quantity and dimension) onto customer documents (quotation, confirmation, delivery).</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Print price on cust. doc.</span>: if the article is mentioned onto customer document, 
			  this check box tells WinPro its selling price must also be detailed.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Delivery preparation</span>: the article will be listed onto delivery preparation documents.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Quality control</span>: the article will be listed onto quality control documents.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p class="p_Textestd"><span class="f_Textestd">�</span></p>
		
        <p class="p_Textestd"><span class="f_Textestd" style="font-weight: bold; text-decoration: underline;">The central section</span> contains the list of
        colours defined as standard and standard-RAL colours in the system to which the outer frame belongs to.</p>

        <p class="p_Textestd"><span class="f_Textestd">If the article has no colour rule to
        follow, you simply need to select nothing from this list. If the
        article (and its formula) only applies for specific colours, you must
        select each colour as appropriate.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Here are rules about article computation according colours:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CASE 1</span><span
        class="f_Textestd">: The outer frame colour is an authorized colour into the system.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro only computes articles where box "Standard" is checked.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CASE�2</span><span
        class="f_Textestd">: The outer frame colour is a standard RAL mono colour.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro only computes articles where box "Standard" is checked.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CASE�3</span><span
        class="f_Textestd">: The outer frame colour is a bicolour RAL composed of standard RALs.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro�computes articles where box "Ral2" is checked <br>
		AND where both boxes "View ins" and "View out" are either checked or unckhecked simultaneously.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro also computes article where box "Standard" is checked <br>
		AND where one of the two boxes "View ins" or "View out" is checked.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CASE�4</span><span
        class="f_Textestd">: The outer frame colour is a non standard mono RAL colour.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro�computes articles where box "Ral1" is checked.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">� </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CASE�5</span><span
        class="f_Textestd">: The outer frame colour is a bicolour RAL composed of non standard RALs.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro�computes articles where box "Ral2" is checked <br>
		AND where boxes "View ins" and "View out" are both either checked or unchecked simultaneously.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro also computes article where box "RAL1" is checked <br>
		AND where one of the two boxes "View ins" or "View out" is checked.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CASE�6</span><span
        class="f_Textestd">: The outer frame colour is a bicolour RAL composed of a standard RAL and a non standard RAL.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro�computes articles where box "Ral2" is checked <br>
		AND where both boxes "View ins" and "View out" are either checked or unckhecked simultaneously.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro also computes article where box "RAL1" is checked <br>
		AND either where box "View ins" is checked if the non standard RAL is on the inside face, <br>
		OR where box "View out" is checked if the non standard RAL is on the outside face.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The <span style="font-weight: bold; color: #000000;">Reverse selection</span> 
		button above the list lets you reverse all of the list's selections.</p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Below
        this colour list, you have a few extra check boxes:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Standard</span>: When this box is checked, the article can be used with any of the standard colours.</td>
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
                style="font-weight: bold;">RAL 1 colour</span>: When this box is checked, the article can be used with any of the non-standard RAL single-colour.</td>
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
                style="font-weight: bold;">RAL 2 colours</span>: When this box is checked, the article can be used with any of the non-standard RAL bi-colour.</td>
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
                style="font-weight: bold;">Visible from inside</span>: Check this box if the article is visible from inside the building.</td>
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
                style="font-weight: bold;">Visible from outside</span>: Check this box if the article is visible from outside the building.</td>
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
                style="font-weight: bold;">No colour</span>: Check this box if the article colour is undefined (e.g. screw)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>
		
        <p class="p_Textestd"><span class="f_Textestd" style="font-weight: bold; text-decoration: underline;">The right
        section</span> contains the formula that applies to the article, as well as some check boxes:</p>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Top</span>, <span class="f_Textestd" style="font-weight: bold;">Bottom</span>, 
			  <span class="f_Textestd" style="font-weight: bold;">Left</span>, <span class="f_Textestd" style="font-weight: bold;">Right</span>
			  : The formula will be applied only to the selected sides.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Door</span>: If checked, tells that the formula can apply to frames containing a door.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Window</span>: If checked, tells that the formula can apply to frames not containing a door.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="background: #fffff2;"><span
        style="color: #000000;">�</span></p>
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
        d'�num�rer les articles qui peuvent entrer dans la composition des
        c�t�s du dormant, et de donner les r�gles d'utilisation de chacun de
        ces articles. Les articles ainsi d�finis seront examin�s un � un pour
        chaque c�t� du dormant, dans l'ordre de leur d�finition.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="text-align: center;"><img src="img/clip0133.jpg" width="595"
        height="355" border="0" alt="clip0133"></p>

        <p class="p_Textestd"><span class="f_Textestd">L'onglet est r�parti en
        trois zones (gauche, centre, droite).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone de gauche</span><span
        class="f_Textestd"> contient la liste des articles; s�lectionnez une
        ligne de cette liste, et indiquez le code article dans la zone de
        saisie imm�diatement au-dessus de la liste.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Sous la liste, vous
        disposez de plusieurs cases � cocher, qui vous permettent de d�finir
        certaines caract�ristiques d'utilisation de l'article:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Exclure
                du pr. revient</span><span class="f_Textestd">: le prix de cet
                article n'interviendra pas sur le prix de revient.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Exclure
                du pr. de vente</span><span class="f_Textestd">: le prix de cet
                article n'interviendra pas sur le prix de vente.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Plan
                d'atelier simplifi�</span><span class="f_Textestd">: l'article
                sera list� sur le plan d'atelier simplifi�.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Documents
                clients</span><span class="f_Textestd">: l'article sera
                mentionn� (avec sa quantit�) sur les documents clients (devis,
                confirmation, note d'envoi).</span></td>
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
                style="font-weight: bold;">Valorisation</span><span
                class="f_Textestd">: si l'article est mentionn� sur les
                documents clients, il sera en plus valoris� (en tenant compte
                du prix de vente n�goce s'il est disponible).</span></td>
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
                style="font-weight: bold;">Pr�paration livraison</span><span
                class="f_Textestd">: l'article sera mentionn� sur la
                pr�paration de livraison.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Contr�le
                qualit�</span><span class="f_Textestd">: l'article sera
                mentionn� sur les documents de contr�le qualit�.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone du centre</span><span
        class="f_Textestd"> contient la liste des couleurs d�finies comme
        couleurs standard et comme couleurs RAL standard dans le syst�me auquel
        appartient le dormant. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Si l'article n'ob�it �
        aucune r�gle de couleur, il suffit de ne rien s�lectionner dans cette
        liste; si par contre, l'article et sa formule ne s'appliquent qu'�
        certaines couleurs, il faut s�lectionner chacune des couleurs
        concern�es.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Voici les r�gles
        conditionnant la consommation d'un article:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CAS 1</span><span
        class="f_Textestd">: La couleur du dormant est une teinte autoris�e
        dans le syst�me.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro ne consomme que les articles dont la case
        "Standard" est active.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CAS�2</span><span
        class="f_Textestd">: La couleur du dormant est correspond � un Ral mono
        standard.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro ne consomme que les articles dont la case
        "Standard" est active.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CAS�3</span><span
        class="f_Textestd">: La couleur du dormant est correspond � un
        Ral�bicolor compos� de teintes Ral standard.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro�consomme l'article dont la case "Ral2" est active <br>
		ET dont les cases "Vu int" et "Vu ext" sont soit toutes deux coch�es ou soit d�coch�es simultan�ment.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro consomme �galement l'article dont la case "Standard" est active <br>
		ET dont une seule des deux cases "Vu int" et "Vu ext" est activ�e.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CAS�4</span><span
        class="f_Textestd">: La couleur du dormant est correspond � un Ral mono
        hors standard.</span><span class="f_Textestd"></span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro ne consomme que les articles dont la case
        "Ral1" est active.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">� </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CAS�5</span><span
        class="f_Textestd">: La couleur du dormant est correspond � un
        Ral�bicolor compos�s de teintes Ral hors standard.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro�consomme l'article dont la case "Ral2" est active <br>
		ET dont les cases "Vu int" et "Vu ext" sont soit toutes deux coch�es <br>
		OU soit d�coch�es simultan�ment.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro consomme �galement l'article dont la case
        "Ral1" est active et dont une seule des deux cases "Vu int" et "Vu ext"
        est activ�e.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">CAS�6</span><span
        class="f_Textestd">: La couleur du dormant est correspond � un
        Ral�bicolor compos�s d'une teinte Ral�standard et d'une teinte Ral hors
        standard.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro�consomme l'article dont la case "Ral2" est active <br>
		ET dont les cases "Vu int" et "Vu ext" sont soit soit toutes deux coch�es ou soit d�coch�es simultan�ment.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Winpro consomme l'article dont la case "Ral1" est active�<br>
		ET soit dont la case "Vu int" est active�pour autant que la teinte Ral�hors standard�se trouve�en face int�rieure, <br>
		OU soit dont la case "Vu ext" est active�pour autant que la teinte Ral�hors standard�se trouve�en face ext�rieure.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd">Le bouton <span class="f_Textestd"
        style="font-weight: bold;">Inverser s�lection</span> au-dessus de cette liste vous permet d'inverser la s�lection dans la liste.</span></p>


        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Sous cette liste de
        couleurs se trouvent quelques cases � cocher suppl�mentaires:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Standard</span><span
                class="f_Textestd">: Cochez cette case pour que l'article soit
                utilis� avec les couleurs standard sp�cifi�es dans la liste
                au-dessus.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">RAL 1
                couleur</span><span class="f_Textestd">: Cochez cette case pour
                que l'article soit utilis� avec les dormants en couleur RAL
                unicolore.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">RAL 2
                couleurs</span><span class="f_Textestd">: Cochez cette case
                pour que l'article soit utilis� avec les dormants en couleur
                RAL bicolore.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Visible
                de l'int�rieur</span><span class="f_Textestd">: Cochez cette
                case si l'article est visible de l'int�rieur.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Visible
                de l'ext�rieur</span><span class="f_Textestd">: Cochez cette
                case si l'article est visible de l'ext�rieur.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Sans
                couleur</span><span class="f_Textestd">: Cochez cette case si
                la couleur de l'article est ind�termin�e par rapport � la
                couleur du dormant (p.ex. vis).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone de droite</span><span
        class="f_Textestd"> contient la formule li�e � l'article, ainsi que
        quelques cases � cocher:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Haut</span>, <span class="f_Textestd" style="font-weight: bold;">Bas</span>, 
				<span class="f_Textestd" style="font-weight: bold;">Gauche</span>, <span class="f_Textestd" style="font-weight: bold;">Droite</span>
				: La formule ne sera appliqu�e que sur les bords correspondant aux cases coch�es.</td>
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
                style="font-weight: bold;">Porte</span><span
                class="f_Textestd">: indique que la formule peut s'appliquer si
                le ch�ssis contient une porte.</span></td>
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
                style="font-weight: bold;">Ch�ssis</span><span
                class="f_Textestd">: indique que la formule peut s'appliquer si
                le ch�ssis contient autre chose qu'une porte.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
