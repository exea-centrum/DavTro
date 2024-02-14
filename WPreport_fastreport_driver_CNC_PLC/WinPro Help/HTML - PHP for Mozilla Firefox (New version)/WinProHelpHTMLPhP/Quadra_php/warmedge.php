<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Warm edge","Warm edge"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?warmedge.php"; }
else { parent.quicksync('a7.41'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Warm edge</title>
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
        href="introduction.php">Top</a>� <a href="usgatelier.php">Previous</a>�
        <a href="zonelivraison.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>A warm edge is a glass unit spacer type bringing a better thermic insulation than the standard 
	  aluminium spacer, this last one representing a thermic bridge at the glass perimeter.</p>

        <p>This table is suitable to create the various warm edges to be used, those warm edges would have to be 
		assigned afterward by <a href="vitwarmedge.php">glazing</a>.</p>

        <p>Warm edges should be defined when an additionnal price is involved, and have a great importance within 
		<a href="modulethermique.php">thermic module</a>, even though they can be used without thermic computation.</p>

        <p>Warm edges will be available into customer orders, from the Price tab or using button 
		<img src="img/clip0640.gif" width="20" height="21" border="0" alt="clip0640"> on the right of the modify glazing dialog.</p>

        <p>�</p>

        <p>This dialog is reached through menu <span
        style="font-weight: bold;">Technic | Window | Warm edges</span>.</p>

        <p><span style="font-weight: bold;">�</span></p>

        <p>Refer to <a href="8_1_0_x.php">release note version 8.1</a> for more details about this feature.</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0641eng.jpg"
        width="805" height="428" border="0" alt="clip0641eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>�: Code of the warm edge</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>�: Warm edge description.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Category</span>�: Numeric value updating variable 
			  <span class="f_Variables">WarmEdge</span> within glazing formulas.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Cannot be arched</span>: Check this box to avoid usage of this warmedge with 
			  a bowed glazing.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">No colour</span>: Check this option when the warm edge cannot be coloured 
			  on demand. When a user set a spacer colour, but for a warmedge with no colour, no error message is generated, 
			  the glazing price will not take the additionnal price for colour into consideration, and no colour will be 
			  mentionned onto documents.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Use as default</span>:
                Check this box for the warm edge to be used by default, if no warm edge is defined at customer order level. 
				When another warmedge is defined to be used as default, WinPro will ask for acknowledgment before modifying 
				default value.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Do not document</span>:
                Check this box for the warm edge not to be detailled anymore onto any document.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">The array</span> allows setting prices according warm edge thickness, as 
			  well  defining of the Psi coefficient, for thermic module usage.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">Thickness</span>: Thickness considered for pricing and <span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span> 
				thermic coefficient computation for this line.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">Fixed price</span>: Additional fixed price, per glass unit.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">Perimeter</span>: Additionnal price according perimeter of the glass unit 
			  (by meter).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">Surface</span>: Additionnal price according surface of the glass unit 
			  (by square meter).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">Supplementary %</span>:
                Additionnal percentage apply to the glass unit (computed before the other above additionnal prices for the 
				warm edge are applied).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">Psi</span>: <span style="font-size: 11pt; font-family: 'Arial Unicode MS',
			  'Lucida Sans Unicode', 'Arial';">&Psi;</span> coefficient applied as default value when the warm edge is used�: 
			  when another value is defined for this profiles, glass thickness, Ug coefficient combinations and for this warm edge, 
			  this specific value will be used.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Apply to all glazings</span>: Use this button for the displayed warm edge to 
			  be assigned to every glazings. An acknowledgement message will be displayed to confirm before proceeding. 
			  This operation may take a long time, depending on the glazings number into the database.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>
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
      <td align="left"><p>Le warm edge est un type d&rsquo;intercalaire vitrage
        qui assure une meilleure isolation thermique que le classique
        intercalaire en aluminium, ce dernier constituant en lui-m�me un pont
        thermique � la p�riph�rie du vitrage.</p>

        <p>Cette table permet de cr�er les diff�rents warm edges utilis�s,
        qu'il faudra ensuite autoriser par <a
        href="vitwarmedge.php">vitrage</a>.</p>

        <p>Les warm edges doivent �tre d�finis de mani�re � en calculer le
        surco�t. Ils ont en outre une grande importance pour le <a
        href="modulethermique.php">module thermique</a>, bien que vous puissiez
        utiliser les warm edges sans le module thermique.</p>

        <p>Ils pourront �tre saisis dans la commande, depuis l'onglet Prix ou
        bien via le bouton <img src="img/clip0640.gif" width="20" height="21"
        border="0" alt="clip0640"> situ� � droite des dialogues de modification
        de vitrage.</p>

        <p>�</p>

        <p>Ce dialogue est accessible via le menu <span
        style="font-weight: bold;">Technique | Ch�ssis | Warm edges</span>.</p>

        <p><span style="font-weight: bold;">�</span></p>

        <p>Consultez la <a href="8_1_0_x.php">note de version 8.1</a> pour plus
        d'informations sur ce composant.</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0641fra.jpg"
        width="803" height="427" border="0" alt="clip0641fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>�: Code que vous
                attribuez au warm edge</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>�: La
                description du warm edge</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Cat�gorie</span>�: Valeur
                num�rique qui alimente une variable <span
                class="f_Variables">WarmEdge</span> dans les formules de
                vitrage.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Non cintrable</span>�:
                Cochez cette case pour emp�cher l&rsquo;utilisation de ce warm
                edge avec un vitrage cintr�.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Sans couleur</span>: Cochez
                cette case si le warm edge ne peut pas �tre peint � la demande.
                Si l&rsquo;utilisateur pr�cise une couleur
                d&rsquo;intercalaire, mais pour un warm edge sans couleur,
                aucun message d&rsquo;erreur ne sera g�n�r�, le prix du vitrage
                ne tiendra pas compte du suppl�ment pour la couleur, et la
                couleur ne sera mentionn�e sur aucun document.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Utiliser par d�faut</span>:
                Cochez cette case pour que ce warm edge soit utilis� par
                d�faut, si aucun warm edge n&rsquo;est d�fini au niveau de la
                commande. Si un autre warm edge a d�j� �t� d�fini comme �
                utiliser par d�faut, WinPro vous demandera de confirmer la
                modification de la valeur par d�faut.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Ne pas documenter</span>:
                Lorsque coch�e, le d�tail du warm edge ne sera plus affich� ou imprim� sur les documents.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Le tableau</span> permet de
                d�finir les prix en fonction de l&rsquo;�paisseur du warm edge.
                Ce tableau permet aussi de d�finir le coefficient Psi pour le
                calcul du coefficient de dissipation thermique de la
              fen�tre.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">Epaisseur</span>: Epaisseur
                prise en compte pour le prix et le coefficient <span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span>
                de la ligne du tableau.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">Forfait</span>: Suppl�ment
                forfaitaire, par vitrage</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">P�rim�tre</span>: Suppl�ment
                en fonction du p�rim�tre du vitrage (par m�tre)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">Surface</span>: Suppl�ment
                en fonction de la surface du vitrage (par m�tre carr�)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">Suppl�ment %</span>:
                Pourcentage de suppl�ment � appliquer au vitrage (calcul� avant
                l&rsquo;application des autres suppl�ments li�s au warm
              edge)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 21px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span style="font-weight: bold;">Psi</span>: Coefficient
                <span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span>
                appliqu� en cas d&rsquo;utilisation du warm edge; il
                s&rsquo;ag�t d&rsquo;une valeur par d�faut�: si une autre
                valeur est d�finie pour la combinaison de profils, �paisseur
                vitrage, coefficient Ug et pour ce m�me warm edge, c&rsquo;est
                cette derni�re valeur qui sera utilis�e.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Appliquer � tous les
                vitrages</span>: Cliquez sur ce bouton pour que le warm edge
                affich� soit associ� � tous les vitrages. Un message de
                confirmation vous demandera de confirmer l&rsquo;op�ration
                avant de la lancer. Cette op�ration peut prendre un certain
                temps, suivant la quantit� de vitrages dans votre base de
                donn�es.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
