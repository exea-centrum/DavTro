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
if(top.frames.length==0) { top.location.href="index.php?quibaselabour.php"; }
else { parent.quicksync('a5.6.7'); }
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
        href="quibasearticles.php">Previous</a>� <a
        href="quidrawing.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This page allows you enumerating all the operations that can be used to create this fitting. 
		You have to give the rules for using each operation. The operations will be examined by WinPro in the order in which they are defined, 
		for each leaf successively.</span></p>

        <p style="text-align: center;"><img src="img/clip0161eng.jpg" width="620" height="374" border="0" alt="clip0161eng"></p>

        <p class="p_Textestd"><span class="f_Textestd">The page
        is divided in 3 sections (left, center, right).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">The left section</span> contains the list of labour codes. 
		Select a line in this list, and type the labour code in the input field
        immediately on top of the list.</p>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Below the
        list, there are several check boxes, which let you define a few usage
        conditions:</span></p>

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
		

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">The central
        section</span> contains the list of colours defined as standard and standard-RAL colours in the system to
        which the fittings frame belongs to. If the operation has no colour rule to
        follow, you simply need to select nothing from this list. If the
        operation (and its formula) only apply for specific colours, you must
        select each colour as appropriate.</p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The <span style="font-weight: bold; color: #000000;">Reverse selection</span> 
		button above the list lets you reverse all of the list's selections.</p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Below this colour list, you have a few extra check boxes:</span></p>

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
                style="font-weight: bold;">RAL 1 colour</span>: When this box is checked, the component can be used with any of the non-standard RAL single-colour.</td>
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
                style="font-weight: bold;">RAL 2 colours</span>: When this box is checked, the component can be used with any of the non-standard RAL bi-colour.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd" style="font-weight: bold; text-decoration: underline;">The right
        section</span> contains the formula that applies to the labour.</p>

        <p> </p>

        <p> </p>
		
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
      <td align="left"><p><span style="font-size: 5pt;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cet onglet vous permet
        d'�num�rer les op�rations relatives � chaque vantail de la
        quincaillerie, et de donner les r�gles de calcul de chacune de ces
        op�rations. Les op�rations ainsi d�finies seront examin�es une � une
        pour chaque vantail successivement, dans l'ordre de leur
        d�finition.</span></p>

        <p style="text-align: center;"><img src="img/clip0400.gif" width="559"
        height="404" border="0" alt="clip0400"></p>




        <p class="p_Textestd"><span class="f_Textestd">L'onglet est r�parti en
        trois zones (gauche, centre, droite).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone de
        gauche</span><span class="f_Textestd"> contient la liste des op�rations;
        s�lectionnez une ligne de cette liste, et indiquez le code de
        l'op�ration dans la zone de saisie imm�diatement au-dessus de la
        liste.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Sous la liste, vous
        disposez de plusieurs cases � cocher, qui vous permettent de d�finir
        certaines caract�ristiques d'utilisation de l'op�ration:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Exclure
                du pr. revient</span><span class="f_Textestd">: le prix de
                cette op�ration n'interviendra pas sur le prix de
                revient.</span></td>
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
                du pr. de vente</span><span class="f_Textestd">: le prix de
                cette op�ration n'interviendra pas sur le prix de
              vente.</span></td>
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
                d'atelier simplifi�</span><span class="f_Textestd">:
                l'op�ration sera list�e sur le plan d'atelier
              simplifi�.</span></td>
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
                clients</span><span class="f_Textestd">: l'op�ration sera
                mentionn�e (avec sa dur�e) sur les documents clients (devis,
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
                class="f_Textestd">: si l'op�ration est mentionn�e sur les
                documents clients, elle sera en plus valoris�e.</span></td>
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
                class="f_Textestd">: l'op�ration sera mentionn�e sur la
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
                qualit�</span><span class="f_Textestd">: l'op�ration sera
                mentionn�e sur les documents de contr�le qualit�.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone du
        centre</span><span class="f_Textestd"> contient la liste des couleurs
        d�finies comme couleurs standard et comme couleurs RAL standard dans le
        syst�me auquel appartient la quincaillerie. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Si l'op�ration n'ob�it �
        aucune r�gle de couleur, il suffit de ne rien s�lectionner dans cette
        liste; si par contre, l'op�ration et sa formule ne s'appliquent qu'�
        certaines couleurs, il faut s�lectionner chacune des couleurs
        concern�es.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le bouton </span><span
        class="f_Textestd" style="font-weight: bold;">Inverser s�lection
        </span><span class="f_Textestd">au-dessus de cette liste vous permet
        d'inverser la s�lection dans la liste.</span></p>

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
                class="f_Textestd">: Cochez cette case pour que l'op�ration
                soit utilis�e avec les couleurs standard sp�cifi�es dans la
                liste au-dessus.</span></td>
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
                que l'op�ration soit utilis�e avec les dormants en couleur RAL
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
                pour que l'op�ration soit utilis�e avec les dormants en couleur
                RAL bicolore.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone de
        droite</span><span class="f_Textestd"> contient la formule li�e �
        l'op�ration.</span></p>

        <p> </p>

        <p> </p>

  	  </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
