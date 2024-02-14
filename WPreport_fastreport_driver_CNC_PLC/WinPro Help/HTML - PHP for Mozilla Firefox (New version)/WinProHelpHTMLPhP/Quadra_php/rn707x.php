<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.0.7x","7.0.7x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn707x.php"; }
else { parent.quicksync('a11.6.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.0.7x</title>
  <meta name="keywords" content="Winpro.ini">
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
        href="introduction.php">Top</a>� <a href="rn708x.php">Previous</a>� <a
        href="rn704x.php">Next</a> </span> </td>
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
                7.0.79</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;">�</p>

        <p><span class="f_TitreReleaseNote">Valorisation des chutes
        laqu�es:</span> Lorsqu&rsquo; un article laqu� est consomm� via un
        profil et que toutes les conditions permettant la valorisation des
        chutes sont remplies, Winpro prendra en compte le laquage de celles-ci
        dans la valorisation de ces chutes.</p>

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
                7.0.78</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Nouveaux traits de scie:</span> De
        nouveaux traits de scie ont �t� ajout�s � la liste des combinaisons
        d&rsquo;angles. Il s&rsquo;agit des combinaisons 45-135�.</p>

        <p>Une correction dans le calcul de l&rsquo;optimisation concernant
        l&rsquo;exclusion de la prise en compte de certains traits de scie a
        �galement �t� effectu�e.</p>

        <p>Je profite de cette note pour insister sur le fait qu&rsquo;il est
        indispensable de renseigner une valeur de trait de scie pour chaque
        combinaison.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Nouvelle variable:</span> <span
        class="f_Variables">_SansVitrages</span> : Cette variable
        s&rsquo;initialise en fonction de l&rsquo;�tat de la case � cocher � Ne
        pas fournir les vitrages � se trouvant dans l&rsquo;onglet ent�te de la
        commande client.</p>

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
                7.0.77</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">22/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Consommations mensuelles:</span> Un
        filtre vous permet d&rsquo;imprimer uniquement les articles r�ellement
        consomm�s pendant la p�riode demand�e.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Pr�paration des lots:</span> Si
        vous poss�dez le module GLP (Gestion des Lignes de Production), les
        commandes contenant exclusivement des accessoires sont mentionn�es en
        mauve pastel.</p>

        <p>Pour compl�ter �cette information, voici le d�tail des couleurs
        utilis�es :</p>

        <p>� � � �Blanc � � � � � � � � � � � �Ch�ssis rectangulaires</p>

        <p style="margin: 0px 0px 0px 48px;">Jaune � � � � � � � � � � �
        �Portes</p>

        <p style="margin: 0px 0px 0px 48px;">Rose � � � � � � � � � � �
        �Cintres</p>

        <p style="margin: 0px 0px 0px 48px;">Bleu (turquoise) � � � � � � �
        �Ch�ssis NON rectangulaires</p>

        <p style="margin: 0px 0px 0px 48px;">Orange � � � � � � � � � � �
        �Volets</p>

        <p style="margin: 0px 0px 0px 48px;">Vert � � � � � � � � � � �
        �Accessoires (Si ch�ssis dans la commande)</p>

        <p style="margin: 0px 0px 0px 48px;">Mauve � � � � � � � � � � �
        �Accessoires (Si PAS de ch�ssis dans la commande)</p>

        <p style="margin: 0px 0px 0px 48px;">Gris � � � � � � � � � � � �Rep�re
        en Echec (incalculable)</p>

        <p style="margin: 0px 0px 0px 48px;">�</p>

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
                7.0.75</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">20/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Macro #3# avec d�cimale:</span>
        Vous pouvez utiliser la macro #3# (variable : <span
        class="f_Variables">Epaisseur</span>) avec une d�cimale. </p>

        <p>Pour cela il vous faut ajouter une nouvelle cl� dans le fichier
        Winpro.ini:</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span
        style="font-weight: bold; color: #666699;">EpaisseurAvecUneDecimale � �
        � �= 0 </span> macro #3# sans d�cimale</p>

        <p>� � � � � � � � � � � � � � � �<span
        style="font-weight: bold; color: #666699;">= 1</span> macro #3# avec 1
        d�cimale</p>

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
                7.0.74</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;">�</p>

        <p><span class="f_TitreReleaseNote">Archivage des commandes par
        d�placement:</span> Cette nouvelle m�thode d&rsquo;archivage consiste �
        envoyer les commandes dans une autre base de donn�e Winpro. </p>

        <p>Vous devez donc avoir effectu� une copie de Winpro au pr�alable que
        vous n&rsquo;utiliserez que pour consulter vos archives. </p>

        <p>Lors de la cr�ation de cette copie, veuillez vider les tables et de
        vider totalement les tables archiv�es, � savoir :commande, detail,
        travdorm, travouvr, rehdorm, artcde, �cdelog, accouvr, cde, fen, det,
        lin, art, var, vitrehdr, vitrecde, vitrecrx.</p>

        <p>Le d�placement des commandes lors de l&rsquo;archivage s'effectue
        dans une base de donn�e identique � celle utilis�e par WinPro et dont
        le chemin est demand� en d�but de proc�dure.</p>

        <p>Nous vous conseillons donc, avant de lancer l'archivage, de recopier
        la base WinPro dans un autre r�pertoire</p>

        <p>Les commandes archiv�es sont celles dont la date de facturation est
        inf�rieure � la date entr�e.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Calcul des angles de profils
        cintr�s:</span> Winpro vous offre la possibilit� de calculer les angles
        de coupes des montants des cadres de forme cintr�e (formes F, I et J).
        </p>

        <p>Pour activer cette fonctionnalit� il vous faut ajouter une nouvelle
        cl� dans le fichier Winpro.ini. </p>

        <p>La valeur de cette cl� est <span class="f_Variables">1</span> pour
        activer, et <span class="f_Variables">0</span> pour l&rsquo;annuler.
        Elle vaut <span class="f_Variables">0</span> par d�faut, afin de ne pas
        modifier le fonctionnement habituel de Winpro.</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span style="font-weight: bold; color: #666699;">CalculAnglesCintres
        � � � �= 1</span> pour activer la fonctionalit�</p>

        <p>� � � � � � � � � � � �<span
        style="font-weight: bold; color: #666699;">= 0</span> pour la
        d�sactiver</p>

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
                7.0.73</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">18/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Panneaux fabriqu�:</span> Pour
        rappel, lorsque l&rsquo;on consomme un vitrage ou un panneau � d�couper
        depuis un Panneau Fabriqu�, nous devions d�duire par formule
        l&rsquo;aisance de ces �l�ments.</p>

        <p>D�sormais, une nouvelle case � cocher � Deduire aisance � se
        trouvant dans les onglets Vitrage et Panneau vous permet de d�duire
        automatiquement des dimensions � rainure parclose � l&rsquo;aisance
        sp�cifi�e dans le vitrage ou le panneau � d�couper.</p>

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
                7.0.72</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Macro #6#:</span> Idem Macro #5#.
        Consultez la note de release 7.0.71</p>

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
                7.0.71</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Nouvelle variable
        d&rsquo;ouvrant:</span> <span
        class="f_Variables">AisanceSupplementaire</span> : Cette nouvelle
        variable renvoie le param�tre � Aisance suppl�mentaire vitrage � d�fini
        par d�faut, et vous permet de lui attribuer une autre valeur.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">NumeroProfil:</span> Cette variable
        est d�sormais toujours initialis�e � 1 pour le seuil de porte ou de
        fen�tre. Attention, cette r�gle n&rsquo;est vraie que si la saisie est
        effectu�e par l&rsquo;un de ces 2 champs :</p>

        <p style="text-align: center;"><img src="img/img_46.jpg" width="329"
        height="57" border="0" vspace="1" hspace="1" alt="img_46"></p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Macro #5#:</span> Cette nouvelle
        macro s&rsquo;utilise dans les descriptions et est remplac�e par un
        texte pr�d�fini. </p>

        <p>Le choix de ce texte s&rsquo;effectue en affectant la variable
        Macro5 par le num�ro du texte pr�d�fini.</p>

        <p>Vous d�finissez ces textes via le menu : Donn�es | Autres Donn�es |
        Textes Pr�d�finis.</p>

        <p>Si la variable <span class="f_Variables">Macro5</span> est
        initialis�e avec une valeur ne correspondant � aucun texte pr�d�fini,
        la macro sera alors remplac�e par la valeur num�rique. Et dans ce cas,
        la valeur affich�e dans la description correspondra � la valeur absolue
        de la variable <span class="f_Variables">Macro5</span>.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Grouper les coupes
        identiques:</span> Dans l&rsquo;onglet Optimisation de la page profil,
        une nouvelle case � cocher vous permet de regrouper les barres ayant
        des d�bits identiques, et de regrouper les d�bits de longueurs
        identiques dans une m�me barre. </p>

        <p>L&rsquo;activation de cette nouvelle fonctionnalit� r�duit la
        consommation de papier lors de l&rsquo;impression des documents li�s �
        l&rsquo;optimisation.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Pr�cadre:</span> Afin de r�pondre
        aux besoins des fabricants espagnols, la notion de pr�cadre a �t�
        d�velopp�e. </p>

        <p>Ces pr�cadres sont optimis�s s�par�ment du reste, nous avons donc
        ajout� ce point de menu dans le menu Gestion de production. </p>

        <p>Vous devez au pr�alable avoir attribu� la nouvelle cat�gorie �
        pr�cadre � aux profils concern�s.</p>
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
                7.0.79</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;">�</p>

        <p><span class="f_TitreReleaseNote">&bull;Goedkeuren van de gelakte
        reststukken</span> Wanneer een gelakt artikel via een profiel gebruikt
        wordt en wanneer alle voorwaarden toelaten de valorisatie van de
        reststukken in te vullen, neemt WinPro het lakwerk in rekening welke
        bij de reststukken genoteerd zijn</p>

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
                7.0.78</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Nieuwe type&rsquo;s
        zaagsneden</span> Nieuwe zaagsneden werden aan de lijst van de
        combinaties van hoeken toegevoegd. Het gaat om de combinaties 45-135�.
        Een correctie in de berekening van de optimalisering betreffende de
        uitsluiting van bepaalde zaagsneden werd eveneens uitgevoerd.</p>

        <p>Ik profiteer van deze aantekening om op het feit te wijzen dat het
        absoluut noodzakelijk is om een waarde van zaagsnede voor elke
        combinatie in te voeren.</p>

        <p></p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Nieuwe variabele</span> <span
        class="f_Variables">_SansVitrages (_ZonderBeglazing)</span> : Deze
        variabele wordt geinitialiseerd in functie van de aan te vinken optie �
        Beglazing niet leveren � welke zich bevindt in het beginscherm van een
        klantbestelling. client.</p>

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
                7.0.77</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">22/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p style="color:#ff0000"><span style="color:#0000a0"><strong><span
        style="color:#ff0000">Deze versie van WinPro vereist om de versie
        2.8.4.1 van "modules.dll te gebruiken </span></strong></span></p>

        <p><span class="f_TitreReleaseNote">&bull;Maandelijks verbruik</span>
        Een nieuwe filter staat u toe enkel de werkelijk verbruikte artikels
        gedurende een opgegeven periode af te drukken.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Voorbereiden van een
        lot:</span> Indien u in het bezit bent van de module GLP
        (Productielijnen):Bestellingen welke enkel bijprofielen bevatten worden
        nu weergegeven in de kleur pastel paars.</p>

        <p>Ter vervollediging van deze informatie,kan u hier de andere kleuren
        terugvinden :</p>

        <p style="margin-left:8em">Wit Rechthoekige ramen</p>

        <p style="margin-left:8em">Geel Deuren</p>

        <p style="margin-left:8em">Roze Ronde ramen</p>

        <p style="margin-left:8em">Blauw (turquoise) Niet rechthoekige ramen</p>

        <p style="margin-left:8em">Oranje Rolluiken</p>

        <p style="margin-left:8em">Groen Bijprofielen (Indien er zich een raam
        in de bestelling bevindt)</p>

        <p style="margin-left:8em">Paars Bijprofielen (Indien er zich GEEN raam
        in de bestelling bevindt)</p>

        <p></p>

        <p style="margin: 0px 0px 0px 48px;">�</p>

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
                7.0.75</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">20/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Macro #3# met decimaal</span>
        U kan de macro #3# (variable : Epaisseur, (dikte)) met een decimaal
        gebruiken.Om dit te gebruiken dient u in de Winpro.ini in de sectie
        [System] een nieuwe sleutel toe te voegen genaamd
        "EpaisseurAvecUneDecimale" .</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span
        style="font-weight: bold; color: #666699;">EpaisseurAvecUneDecimale��������
        = 0</span> macro #3# zonder d�cimale</p>

        <p style="margin-left:12em">� � � � � � � � � � � � � � � �<span
        style="font-weight: bold; color: #666699;">= 1</span> macro #3# met 1
        d�cimale</p>

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
                7.0.74</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;">�</p>

        <p><span class="f_TitreReleaseNote">&bull;De archivering van de
        bestellingen per verplaatsing:</span> De verplaatsing van de
        bestellingen vindt in een identieke database plaats aan die die door
        WinPro wordt gebruikt en waarvan de weg in het begin van de procedure
        wordt gevraagd.</p>

        <p>Wij raden u dus aan, alvorens de archivering te lanceren, om de
        directory van WinPro in een andere map te kopi�ren en om de
        gearchiveerde tabellen volkomen te wissen, te weten:commande, detail,
        travdorm, travouvr, rehdorm, artcde, cdelog, accouvr, cde, fen, det,
        lin, art, vitrecde var, vitrehdr, vitrecrx. De gearchiveerde
        bestellingen zijn dan degenen waarvan de factuurdatum lager is dan de
        invoerdatum.</p>

        <p></p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Berekening van de hoeken van
        gebogen profielen:</span> Winpro biedt u de mogelijkheid om de
        zaaghoeken van de stijlen in de kaders van gebogen vormen te berekenen
        (vormen F, I en J). Om deze functionaliteit te activeren is het nodig
        een nieuwe sleutel "CalculAnglesCintres" in de sectie[ System ] toe te
        voegen. De waarde van deze sleutel bedraagt 1 om te activeren, en 0 om
        het te annuleren. Standaard wordt 0 gehanteerd, om de gewone werking
        van Winpro niet te wijzigen.</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p style="margin-left:2em;"><span
        style="font-weight: bold; color: #666699;">CalculAnglesCintres � � � �=
        1</span> om te activeren</p>

        <p style="margin-left:12em">�������������������<span
        style="font-weight: bold; color: #666699;">= 0</span> om het te
        annuleren</p>

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
                7.0.73</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">18/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Samengestelde panelen:</span>
        Ter herinnering, wanneer u een glas of paneel zaagt gemaakt van een
        samengesteld paneel , hadden we een afgeleide formule voor de speling
        hiervan af te trekken.</p>

        <p>Nu is er een nieuwe checkbox "Aftrek speling" gelegen in tabblad
        beglazing en paneel zodat u automatisch de speling kan aftrekken i f v
        de afmetingen.</p>

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
                7.0.72</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Macro #6#:</span> Deze nieuwe macro
        wordt gebruikt in de beschrijvingen en wordt vervangen door een
        voorgedefinieerde tekst. De keuze van deze tekst wordt bepaald door het
        nummer welke aan de voorgedefinieerde tekst wordt meegegeven .</p>

        <p>U definieert deze tekst in het menu : Gegevens &ndash; Diversen
        &ndash; Voorgedefinieerde teksten</p>

        <p></p>

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
                7.0.71</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/05/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Nieuwe vleugel
        variabele</span> <span class="f_Variables">AisanceSupplementaire
        (ExtraSpeling)</span> : Deze nieuwe variabele vervangt het veld �Extra
        Speling � in de beschrijving van de vleugel.U kan dus de speling gaan
        corrigeren dmv formules en per vulling.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;NumeroProfil �
        Profielnummer</span> Deze variable wordt steeds op 1 geinitialiseerd
        voor de deurdorpel of raamdorpel. Aandacht , deze regel is slechts waar
        indien er een keuze uit ��n van volgende velden gemaakt wordt. :</p>

        <p><img alt="Afb1" src="rn7071_1.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="297" height="57">�</p>

        <p><span class="f_TitreReleaseNote">Macro #5#:</span> Deze nieuwe macro
        wordt gebruikt in de beschrijvingen en wordt vervangen door een
        voorgedefinieerde tekst. De keuze van deze tekst wordt bepaald door het
        nummer welke aan de voorgedefinieerde tekst wordt meegegeven .</p>

        <p>U definieert deze tekst in het menu : Gegevens &ndash; Diversen
        &ndash; Voorgedefinieerde teksten.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">&bull;Groeperen van identieke
        zaagsneden:</span> In het tabblad Optimalisatie bij het Profiel, heeft
        u nu de mogelijkheid aan te vinken of de identieke lengten en
        zaagsneden van ��n staaflengte bij elkaar dienen geteld te worden en
        dan eenmalig afgedrukt dienen te worden. De activering van deze nieuwe
        functionaliteit vermindert het verbruik van papier bij de afdruk van de
        documenten in verband met de optimalisering..</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Pre-frames (Stelkozijnen)</span>
        Teneinde aan de behoeften van de Spaanse fabrikanten te beantwoorden,
        werd het begrip pre-frames ontwikkeld. Deze pre-frames worden
        afzonderlijk van de rest geoptimaliseerd, wij hebben dus dit punt in
        het menu bij &ldquo;beheer van produktie &ldquo; toegevoegd. U moet
        eerst de nieuwe categorie " pre-frames &ldquo; toegekend hebben " aan
        de betrokken profielen. .</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
