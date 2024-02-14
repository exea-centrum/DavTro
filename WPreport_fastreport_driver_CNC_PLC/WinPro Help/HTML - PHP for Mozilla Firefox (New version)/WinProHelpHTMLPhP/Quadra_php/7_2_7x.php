<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>	  
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED","ESP"];
var WinProHelpPageName=["7.2.7x","7.2.7x","7.2.7x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?7_2_7x.php"; }
else { parent.quicksync('a11.4.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>7.2.7x</title>
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
        href="introduction.php">Top</a>� <a href="7_2_8x.php">Previous</a>� <a
        href="7_2_6x.php">Next</a> </span> </td>
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
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.79</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p><span class="f_TitreReleaseNote">Ajout de variables pour les faux
        cintres:</span><span class="f_Textestd"></span>Ajout de la variable
        globale <span class="f_Variables">_FlecheFauxCintre</span><span
        style="font-weight: bold;"></span>qui renvoie la hauteur de la fleche
        du faux-cintre telle qu'elle a �t� saisie. </p>

        <p>Elle renvoie z�ro comme valeur par d�faut en cas de saisie d'une
        forme de faux-cintre pour laquelle le champ <span class="f_Textestd">�
        </span>Fleche <span class="f_Textestd">� </span>est gris�.</p>

        <p>Ajout �galement de la variable <span
        class="f_Variables">_HauteurSupplFCtr</span><span
        style="font-weight: bold;"></span>qui renverrait la valeur saisie pour
        la hauteur suppl�mentaire du faux-cintre.</p>

        <p>� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.78</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p><span class="f_TitreReleaseNote">Modification du droit ��Encodage
        commercial��</span><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">:</span><span
        class="f_Textestd">Les droits utilisateur Client (manipulation des
        fiches client), Prospect (manipulation des fiches Prospect) et
        Comptabilit� (mise en place des informations comptables) sont
        maintenant ajustables pour les utilisateurs ne disposant que du droit
        ��Encodage commercial��.</span></p>

        <p>� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.77</span></p>
              </td>
              <td colspan="3" valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td colspan="2" valign="top" width="379" bgcolor="#e5ffff"
              style="width: 379px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 8px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifi�es</span></p>
              </td>
              <td valign="top" width="109" bgcolor="#e5ffff"
              style="width: 109px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 8px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                cr��es</span></p>
              </td>
              <td valign="top" width="115" bgcolor="#e5ffff"
              style="width: 115px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 8px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Index
                modifi�s</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td colspan="2" valign="top" width="379" bgcolor="#f2ffff"
              style="width: 379px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 8px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Article.dbf</span></p>
              </td>
              <td valign="top" width="109" bgcolor="#f2ffff"
              style="width: 109px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 8px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">???</span></p>
              </td>
              <td valign="top" width="115" bgcolor="#f2ffff"
              style="width: 115px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 8px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">???</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>� � � �</p>

        <p><span class="f_TitreReleaseNote">Interface de cr�ation des commandes
        fournisseur:</span><span class="f_Textestd">Dans le dialogue de
        cr�ation des commandes fournisseurs, accessible via le menu Stock |
        Cr�ation de commande fournisseur, WinPro pr�sente maintenant la
        description fournisseur des articles plut�t que la description de base
        de l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">article.</span></p>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p><span class="f_TitreReleaseNote">Suppression de champ:</span><span
        class="f_Textestd">Le champ �� LAQUE�� de la table </span><span
        style="font-style: italic; color: #000000;">Article </span><span
        class="f_Textestd">a �t� supprim�e car obsol�te</span>.</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.74</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p><span class="f_TitreReleaseNote">Suppression d</span><span
        class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">articles:</span><span
        class="f_Textestd"></span>La suppression des articles n'est plus
        permise si l'article � supprimer est utilis� dans un article
        compos�.</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.73</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Impression des
        dimensions de vitrages sur les devis WinPro/D:</span><span
        class="f_Textestd">La cl� �</span><span class="f_Winproini">Glass Dim
        On Quotation</span><span class="f_Textestd">� dans la
        section</span><span class="f_Textestd"
        style="font-weight: bold;">[Documents] </span><span
        class="f_Textestd">de WinPro.ini permet d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">imprimer ou
        non les dimensions de vitrages sur les devis, pour WinPro/D
        seulement.</span></p>

        <p class="p_Textestd"><span class="f_Winproini"
        style="color: #000000;">[Documents]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Glass Dim On Quotation
        � � � �= 0</span> � � � �<span class="f_Textestd">pas de dimensions de
        vitrage sur les devis WinPro/D (d�faut).</span></p>

        <p class="p_Textestd">� � � � � � � � � � � � � � � �<span
        class="f_Winproini">= 1</span> � � � �<span class="f_Textestd">les
        dimensions de vitrages sont imprim�es sur les devis WinPro/D.</span></p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.72</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Dialogue de
        compactage des lots � l</span><span
        class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">optimisation:</span><span
        class="f_Textestd">La cl� � </span><span class="f_Winproini">Pack
        </span><span class="f_Textestd">� dans le section </span><span
        class="f_Winproini" style="color: #000000;">[System]</span><span
        class="f_Textestd">de WinPro.ini permet d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">activer ou
        non le dialogue invitant l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">utilisateur �
        compacter les tables FoxPro relatives aux lots, en fin d</span><span
        class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">optimisation.</span></p>

        <p class="p_Textestd"><span class="f_Winproini"
        style="color: #000000;">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Pack� � � � �= 0 � � �
        �</span><span class="f_Textestd">pas de dialogue de compactage des
        lots, et pas de compactage.</span></p>

        <p class="p_Textestd">� � � �<span class="f_Winproini">= 1 � � �
        �</span><span class="f_Textestd">affiche le dialogue de compactage des
        lots en fin d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">optimisation (valeur par d�faut).</span></p>

        <p>�</p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Seuils �tendus
        pour ch�ssis porte:</span><span class="f_Textestd">La cl� �
        </span><span class="f_Winproini">Seuil etendu = 1</span><span
        class="f_Textestd">� dans le section</span><span
        class="f_Winproini"></span><span class="f_Winproini"
        style="color: #000000;">[System]</span><span class="f_Textestd">de
        WinPro.ini permet d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">activer la notion de seuil �tendu, pour les portes
        uniquement. Cette fonction permet de d�finir en saisie la continuit� du
        seuil de porte par rapport au dormant et aux traverses. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Une fois la clef
        activ�e, vous avez acc�s � un nouveau combo � c�t� de la saisie du
        seuil de porte:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim79.jpg" width="405"
        height="316" vspace="1" hspace="1" border="0" alt=""></p>

        <p><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette saisie renseignera
        une variable,</span><span class="f_Variables">_TypeSeuil</span><span
        class="f_Textestd">, disponible dans tous les niveaux de cadres du
        param�trage WinPro, et qui contiendra la s�lection du type de
        configuration :</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Variables">-1</span><span class="f_Textestd">�
                si aucune pose de seuil n</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">est
                pr�cis�e et que le seuil est coch� � </span><span
                class="f_Textestd" style="font-weight: bold;">Avec r�duction de
                dormant</span><span class="f_Textestd">�.</span></td>
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
              <td><span class="f_Variables">-2</span><span class="f_Textestd">�
                si aucune pose de seuil n</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">est
                pr�cis�e et que le seuil est coch� � </span><span
                class="f_Textestd" style="font-weight: bold;">Sans r�duction de
                dormant</span><span class="f_Textestd">�</span></td>
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
              <td><span class="f_Variables">0</span><span
                class="f_Textestd">��� si aucune pose de seuil n</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">est
                pr�cis�e et que le seuil n</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">est
                pas coch� � </span><span class="f_Textestd"
                style="font-weight: bold;">Avec/Sans r�duction de
                dormant</span><span class="f_Textestd">�, ou qu</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">aucun
                seuil de porte n</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">est
                saisi</span></td>
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
              <td><span class="f_Variables">1</span><span
                class="f_Textestd">��� si la premi�re pose est s�lectionnn�e
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
              <td><span class="f_Variables">2</span><span
                class="f_Textestd">��� si la deuxi�me pose est s�lectionnn�e
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
              <td><span class="f_Variables">3</span><span
                class="f_Textestd">��� si la troisi�me pose est s�lectionnn�e
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
              <td><span class="f_Variables">4</span><span
                class="f_Textestd">��� si la quatri�me pose est s�lectionnn�e
                </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Si la cl� � </span><span
        class="f_Winproini">Seuil etendu = 0</span><span class="f_Textestd">�,
        la variable </span><span class="f_Variables">_TypeSeuil</span><span
        class="f_Textestd">renverra les valeurs:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Variables">0</span><span
                class="f_Textestd">��� s'il n'y a pas de seuil de porte, ou si
                aucune des 2 cases �</span><span class="f_Textestd"
                style="font-weight: bold;">Avec/Sans r�duction de
                dormant</span><span class="f_Textestd">� n</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">est
                coch�e dans la r�hausse </span></td>
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
              <td><span class="f_Variables">-1</span><span class="f_Textestd">�
                pour un seuil de porte d�fini � </span><span class="f_Textestd"
                style="font-weight: bold;">Avec r�duction de
                dormant</span><span class="f_Textestd">� </span></td>
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
              <td><span class="f_Variables">-2</span><span class="f_Textestd">�
                pour un seuil de porte d�fini � </span><span class="f_Textestd"
                style="font-weight: bold;">Sans r�duction de
                dormant</span><span class="f_Textestd">� </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.71</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Aisance des
        panneaux � d�couper:</span><span class="f_Textestd">L</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">aisance est �
        pr�sent d�duite des articles consomm�s dans la page Description des
        panneaux � d�couper, lorsque ces articles contiennent une
        macro</span><span class="f_Textestd"
        style="font-weight: bold;">#2#</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Auparavant, WinPro
        d�duisait l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">aisance du panneau pour une macro situ�e dans la
        description du panneau, mais pas pour l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">article
        consomm� dans cette m�me page</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Recalcul des
        r�servations:</span><span class="f_Textestd">WinPro renseigne � pr�sent
        la table </span><span class="f_Textestd"
        style="font-style: italic;">ParArt</span><span class="f_Textestd">�
        chaque recalcul des r�servations depuis l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">onglet
        correspondant de la commande. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Auparavant, un recalcul
        des r�servations n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">avait pas d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">impact sur
        cette table.</span></p>

        <p>�</p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Poids sur
        documents clients:</span><span class="f_Textestd">Il est maintenant
        possible d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">afficher le poids de chaque ch�ssis ainsi que le
        poids total de la commande. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette fonctionnalit�
        s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">active � l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">aide de 2
        nouvelles cl�s dans le fichier winpro.ini</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Winproini"
        style="color: #000000;">[Customer order]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Weight � � � �= 0 � � �
        �</span><span class="f_Textestd">comportement actuel de Winpro (valeur
        par d�faut)</span></p>

        <p class="p_Textestd">� � � �<span class="f_Winproini">= 1 � � �
        �</span><span class="f_Textestd">affiche le poids de chaque
        rep�re.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Order � � � �= 0 � � �
        �</span><span class="f_Textestd">comportement actuel de Winpro (valeur
        par d�faut)</span></p>

        <p class="p_Textestd">� � � �<span class="f_Winproini">= 1 � � �
        �</span><span class="f_Textestd">affiche le poids total de la
        commande</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Num�rotation
        automatique des rep�res:</span><span class="f_Textestd">Il est
        maintenant possible d'imposer la saisie de l'identifiant du rep�re
        manuellement. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette fonctionnalit�
        s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">active � l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">aide d'une
        nouvelle cl� dans le fichier winpro.ini</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Winproini"
        style="color: #000000;">[Customer order]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Autonum � � � �= 1 � �
        � �</span><span class="f_Textestd">comportement actuel de Winpro
        (valeur par d�faut)</span></p>

        <p class="p_Textestd">� � � � � � � �<span class="f_Winproini">= 0 � �
        � �</span><span class="f_Textestd">identifiant de rep�re
        manuel</span></p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.70</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Import/Export de
        devis et client pour WinPro/D:</span><span class="f_Textestd">Il est
        maintenant possible d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">exporter les
        devis saisis dans WinPro/D ainsi que les fiches client cr��es, en
        utilisant les menus Utilitaires | Export client(s) et devis pour
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">exportation, ou Utilitaires | Import client(s) et
        devis pour l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">importation.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les devis et client
        seront respectivement cr��s au format ��*.WPX et ��*.WPT��, dans le
        r�pertoire de base de WinPro/D.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les devis et/ou client
        doivent �tre pr�sents dans le r�pertoire de base de WinPro/D pour �re
        import�s.</span></p>

        <p>�</p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0080.zoom85.jpg"
        width="229" height="307" border="0" alt="clip0080"></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>
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
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.79</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p><span class="f_TitreReleaseNote">Toevoegen van variabelen voor valse
        opdekken (schijnbogen):</span><span class="f_Textestd"></span>Toevoegen
        van de globale variabele <span class="f_Variables">_FlecheFauxCintre
        </span><span style="font-weight: bold;"></span>welke de waarde van de
        ingegeven pijlhoogte opslaat bij valse opdekken. </p>

        <p>Standaard is de waarde 0 in geval dat een vorm van een valse opdek
        (schijnboog) ingegeven wordt waarbij de pijlhoogte in het grijs
        staat.</p>

        <p>Tevens werd de variabele <span
        class="f_Variables">_HauteurSupplFCtr</span><span
        style="font-weight: bold;"></span>toegevoegt welke de extra hoogte van
        de valse opdek (schijnboog) opslaat welke ingegeven is.</p>

        <p>� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.78</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p><span class="f_TitreReleaseNote">Aanpassing van het recht
        ��Commercieel gebruik��</span><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">:</span><span
        class="f_Textestd">Het gebruikersrecht "Klanten" (manipulatie van de
        klantgegevens), Prospect (manipulatie van de prospectgegevens) en
        Boekhouding (updates van de boekhoudinformatie) zijn nu aanpasbaar voor
        de gebruikers die enkel het ' Commercieel gebruik' hadden.</span></p>

        <p>� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.77</span></p>
              </td>
              <td colspan="3" valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>� � � �</p>

        <p><span class="f_TitreReleaseNote">Interface voor het aanmaken van een
        leveranciersbestelling:</span><span class="f_Textestd">In het scherm
        van de leveranciersbestellingen, toegankelijk via het menu Voorraad |
        Aanmaken leveranciersbestelling, geeft WinPro nu de artikelbeschrijving
        van de leverancier weer ipv de artikelbeschrijving</span><span
        class="f_Textestd">.</span></p>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p><span class="f_TitreReleaseNote">Verwijderen van een
        veld:</span><span class="f_Textestd">Het veld �� LAQUE�� van de tabel
        </span><span style="font-style: italic; color: #000000;">Article
        </span><span class="f_Textestd">is verwijderd , daar deze niet langer
        meer gebruikt wordt</span>.</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.74</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p><span class="f_TitreReleaseNote">Verwijderen van
        artikelen</span><span class="f_TitreReleaseNote">:</span><span
        class="f_Textestd"></span>Het verwijderen van een artikel is niet
        langer toegestaan wanneer deze deel uitmaakt van een samengesteld
        artikel..</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.73</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Afdruk van de
        glasafmetingen op een offerte van WinPro/D:</span><span
        class="f_Textestd">De sleutel �</span><span class="f_Winproini">Glass
        Dim On Quotation</span><span class="f_Textestd">� in de
        sectie</span><span class="f_Textestd"
        style="font-weight: bold;">[Documents] </span><span
        class="f_Textestd">van de WinPro.ini staat u toe te kiezen of u al dan
        niet de afmetingen van de beglazing wenst af te drukken op een offerte,
        doch enkel voor </span><span class="f_Textestd">WinPro/D.</span></p>

        <p class="p_Textestd"><span class="f_Winproini"
        style="color: #000000;">[Documents]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Glass Dim On Quotation
        � � � �= 0</span> � � � �<span class="f_Textestd">geen glasafmetingen
        op een WinproD offerte (standaard).</span></p>

        <p class="p_Textestd">� � � � � � � � � � � � � � � �<span
        class="f_Winproini">= 1</span> � � � �de glasafmetingen worden
        afgedrukt op de WinproD offerte<span class="f_Textestd">.</span></p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.72</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Dialoog voor het
        comprimeren van het optimalisatielot</span><span
        class="f_TitreReleaseNote">:</span><span class="f_Textestd">De sleutel
        � </span><span class="f_Winproini">Pack </span><span
        class="f_Textestd">� in de sectie </span><span class="f_Winproini"
        style="color: #000000;">[System]</span><span class="f_Textestd">van de
        WinPro.ini staat u toe om het scherm weer te geven aan de gebruiker met
        de vraag of de tabellen in Foxpro dienen gecompacteerd te worden of
        niet, gerelateert aan de lots, op het einde van een
        optimalisatie</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Winproini"
        style="color: #000000;">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Pack� � � � �= 0 � � �
        �</span><span class="f_Textestd">geen berichtenscherm voor het
        compacteren, geen compressie.</span></p>

        <p class="p_Textestd">� � � �<span class="f_Winproini">= 1 � � �
        �</span><span class="f_Textestd">weergave van het dialoogscherm met de
        vraag om het optimalisatielot te compresseren</span><span
        class="f_Textestd">op het einde van de optimalisatie (standaard
        waarde).</span></p>

        <p>�</p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Doorlopende
        dorpels bij deuren:</span><span class="f_Textestd">De sleutel �
        </span><span class="f_Winproini">Seuil etendu = 1</span><span
        class="f_Textestd">� in de sectie</span><span
        class="f_Winproini"></span><span class="f_Winproini"
        style="color: #000000;">[System]</span><span class="f_Textestd">van de
        WinPro.ini staat u toe om de notie van een doorlopende dorpel te
        activeren</span><span class="f_Textestd">, en dit enkel voor deuren
        .Deze functie laat u toe om te defini�ren hoe de dorpel dient ingegeven
        te worden ten opzichte van de kader en/of stijl/regel. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Wannneer deze sleutel
        geactiveert isheeft u toegang tot een nieuw dialoogscherm bij de ingave
        van een deurdorpel (rechts):</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim79.jpg" width="405"
        height="316" vspace="1" hspace="1" border="0" alt=""></p>

        <p><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Elke ingave
        vertegenwoordigd de variabele,</span><span
        class="f_Variables">(_TypeSeuil), _TypeDorpel</span><span
        class="f_Textestd">beschikbaar in alle niveau's van parametrage van de
        kaders.Deze variabele kan ��n van volgende waarden bevatten :</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Variables">-1</span><span class="f_Textestd">�
                wannneer de montage niet gedefinieert is en de dorpel is
                aangevinkt met</span><span class="f_Textestd">� </span><span
                class="f_Textestd" style="font-weight: bold;">Met
                kaderaftrek</span><span class="f_Textestd">�.</span></td>
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
              <td><span class="f_Variables">-2</span><span class="f_Textestd">�
                wannneer de montage niet gedefinieert is en de dorpel is
                aangevinkt met</span><span class="f_Textestd"> � </span><span
                class="f_Textestd" style="font-weight: bold;">Zonder
                kaderaftrek</span><span class="f_Textestd">�</span></td>
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
              <td><span class="f_Variables">0</span><span
                class="f_Textestd">��� wannneer de montage niet gedefinieert is
                en de dorpel is niet aangevinkt met</span><span
                class="f_Textestd">� </span><span class="f_Textestd"
                style="font-weight: bold;">Met/Zonder kaderaftrek</span><span
                class="f_Textestd">�, of wanneer geen dorpel ingevoerd
                is</span><span class="f_Textestd"></span></td>
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
              <td><span class="f_Variables">1</span><span
                class="f_Textestd">��� indien de eerste type van montage
                gekozen is </span></td>
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
              <td><span class="f_Variables">2</span><span
                class="f_Textestd">��� indien de tweede type van montage
                gekozen is</span></td>
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
              <td><span class="f_Variables">3</span><span
                class="f_Textestd">��� indien de derde type van montage gekozen
                is </span></td>
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
              <td><span class="f_Variables">4</span><span
                class="f_Textestd">��� indien de vierde type van montage
                gekozen is </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Wanneeer de sleutel �
        </span><span class="f_Winproini">Seuil etendu = 0</span><span
        class="f_Textestd">�, geeft ons de variabele <span
        class="f_Variables">(_TypeSeuil), _TypeDorpel</span></span><span
        class="f_Textestd">volgende waardes:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Variables">0</span><span
                class="f_Textestd">��� wanneer er geen deurdorpel is,of wanneer
                geen van beide gevallen �</span><span class="f_Textestd"
                style="font-weight: bold;">Met/Zonder kaderaftrek</span><span
                class="f_Textestd">� zijn aangevinkt in de
                bijprofiel</span><span class="f_Textestd"> </span></td>
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
              <td><span class="f_Variables">-1</span><span class="f_Textestd">�
                voor een gekozen deurdorpel � </span><span class="f_Textestd"
                style="font-weight: bold;">Met kaderaftrek</span><span
                class="f_Textestd">� </span></td>
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
              <td><span class="f_Variables">-2</span><span class="f_Textestd">�
                voor een gekozen deurdorpel � </span><span class="f_Textestd"
                style="font-weight: bold;">Zonder kaderaftrek</span><span
                class="f_Textestd">� </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.71</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Speling bij te
        zagen panelen:</span><span class="f_Textestd">De speling wordt op dit
        moment afgetrokken van de verbruikte artikels in de pagina Beschrijving
        van de te zagen panelen, en dit wanneer een artikel de macro #2#
        bevat</span><span class="f_Textestd"
        style="font-weight: bold;"></span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Voorheen trok Winpro de
        speling van het paneel af van het totaal paneel , maar niet van het
        verbruikte artikel</span><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Herberekenen van
        reservaties:</span><span class="f_Textestd">WinPro informeert zich in
        de tabel </span><span class="f_Textestd"
        style="font-style: italic;">ParArt</span><span class="f_Textestd">� bij
        elke herberekening van de reservaties vanuit het tabblad in een
        bestelling</span><span class="f_Textestd">. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Voorheen had dit geen
        invloed op de tabel van reservaties</span><span
        class="f_Textestd">.</span></p>

        <p>�</p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Gewicht op de
        klantendocumenten:</span><span class="f_Textestd">Het is nu mogelijk om
        het gewicht van elk kozijn evenals het totale gewicht van de bestelling
        te kennen te geven. Deze nieuwe functionaliteit activeert u met behulp
        van 2 nieuwe regels in het bestand winpro.ini </span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Winproini"
        style="color: #000000;">[Customer order]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Weight � � � �= 0 � � �
        �</span><span class="f_Textestd">huidig gedrag van WinPro (standaard
        waarde) </span></p>

        <p class="p_Textestd">� � � �<span class="f_Winproini">= 1 � � �
        �</span><span class="f_Textestd">zichtbaar zijn van het gewicht per
        merk(raam)..</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Order � � � �= 0 � � �
        �</span><span class="f_Textestd">huidig gedrag van WinPro (standaard
        waarde)</span></p>

        <p class="p_Textestd">� � � �<span class="f_Winproini">= 1 � � �
        �</span><span class="f_Textestd">zichtbaar zijn van het totale gewicht
        per order</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Automatische
        nummering van ramen:</span><span class="f_Textestd">Het is nu mogelijk
        om manueel een merk/raam te benoemen.Deze functie wordt geactiveert in
        het Winpro.ini bestand</span><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Winproini"
        style="color: #000000;">[Customer order]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Autonum � � � �= 1 � �
        � �</span><span class="f_Textestd">huidig Winpro gedrag (standaard
        waarde)</span></p>

        <p class="p_Textestd">� � � � � � � �<span class="f_Winproini">= 0 � �
        � �</span><span class="f_Textestd">manuele identificatie van he
        raam/merk</span></p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.70</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Import/Export
        van bestellingen voor WinPro/D:</span><span class="f_Textestd">Het is
        nu mogelijk om offertes te exporteren welke ingegeven zijn in WinproD
        alsook de klantenfiche welke gecree�rd is, dit door gebruik te maken
        van Instellingen ! Export klant(en) en offertes</span><span
        class="f_Textestd">voor de export of Instellingen ! Importeer klant(en)
        en offertes voor de import ervan</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De offertes en de
        klanten worden respectievelijk aangemaakt in het formaat ��*.WPX en
        ��*.WPT��, in de directorie van de Winpro/D database.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De offertes en/of
        klant(en) dienen te bestaan in de directorie van de Winpro/D database
        waarin deze ge�mporteerd wordt.</span></p>

        <p>�</p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0080.zoom85.jpg"
        width="229" height="307" border="0" alt="clip0080"></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>
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
      <td align="left">
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table width="100%" cellspacing="0" cellpadding="5" border="0"
        style="border: none; border-spacing:0px;">
          <tbody>
            <tr style="text-align:left;vertical-align:top;">
              <td valign="top"><p style="text-align: center;"><span
                style="color: #000000;">�</span></p>

                <p style="text-align: center;"><span
                style="color: #000000;">�</span></p>

                <p style="text-align: center;"><span
                style="color: #000000;">�</span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" width="615" cellspacing="0"
                cellpadding="2" border="0"
                style="border: none; border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="303" bgcolor="#d8ffff"
                      style="width:303px; background-color:#d8ffff;"><p
                        style="margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                        7.2.79</span></p>
                      </td>
                      <td valign="bottom" width="304" bgcolor="#d8ffff"
                      style="width:304px; background-color:#d8ffff;"><p
                        style="text-align: right; margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/06/2010</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p><span style="color: #000000;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; color: #000000;">Creaci�n
                de 2 variables para los falsos Arcos:</span><span
                style="color: #000000;"></span><br>
                <span style="color: #000000;">La variable global </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_FlechaFalsoArco</span><span
                style="color: #000000;">devuelve la altura de la flecha del
                Falso Arco tal como ha sido introducido.</span></p>

                <p><span style="color: #000000;">Devuelve cero como valor por
                defecto en caso de introducci�n de una forma de Falso Arco para
                la cual el campo "Flecha" esta inabilitado.</span></p>

                <p><span style="color: #000000;">La variable </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_AlturaSuplFArco</span><span
                style="color: #000000;">que devuelve el valor introducido para
                la altura suplementaria del falso Arco.</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">�</span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" width="615" cellspacing="0"
                cellpadding="2" border="0"
                style="border: none; border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="303" bgcolor="#d8ffff"
                      style="width:303px; background-color:#d8ffff;"><p
                        style="margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                        7.2.78</span></p>
                      </td>
                      <td valign="bottom" width="304" bgcolor="#d8ffff"
                      style="width:304px; background-color:#d8ffff;"><p
                        style="text-align: right; margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/06/2010</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; color: #000000; text-decoration: underline;">Modificaci�n
                derecho de "Codificaci�n comercial"</span><span
                style="font-size: 12pt; font-weight: bold; color: #000000;">:</span><span
                style="color: #000000;">Los derechos usuario Cliente
                (manipulaci�n de las fichas cliente), Cliente potencial
                (manipulaci�n de las fichas Cliente potencial) y Contabilidad
                (instauraci�n de la informaci�n contable) son ahora ajustables
                para los usuarios s�lo que disponen derecho de la "Codificaci�n
                comercial".</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">�</span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" width="615" cellspacing="0"
                cellpadding="2" border="0"
                style="border: none; border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="303" bgcolor="#d8ffff"
                      style="width:303px; background-color:#d8ffff;"><p
                        style="margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                        7.2.77</span></p>
                      </td>
                      <td colspan="3" valign="bottom" width="304"
                      bgcolor="#d8ffff"
                      style="width:304px; background-color:#d8ffff;"><p
                        style="text-align: right; margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/06/2010</span></p>
                      </td>
                    </tr>
                    <tr style="text-align:left;vertical-align:top;">
                      <td colspan="2" valign="top" width="379"
                      bgcolor="#e5ffff"
                      style="width:379px; background-color:#e5ffff;"><p
                        style="margin: 2px 0px 8px 0px;"><span
                        style="font-size: 8pt; font-family: 'Tahoma'; color: #000000;">Tables
                        modifi�es</span></p>
                      </td>
                      <td valign="top" width="109" bgcolor="#e5ffff"
                      style="width:109px; background-color:#e5ffff;"><p
                        style="margin: 2px 0px 8px 0px;"><span
                        style="font-size: 8pt; font-family: 'Tahoma'; color: #000000;">Tables
                        cr��es</span></p>
                      </td>
                      <td valign="top" width="115" bgcolor="#e5ffff"
                      style="width:115px; background-color:#e5ffff;"><p
                        style="margin: 2px 0px 8px 0px;"><span
                        style="font-size: 8pt; font-family: 'Tahoma'; color: #000000;">Index
                        modifi�s</span></p>
                      </td>
                    </tr>
                    <tr style="text-align:left;vertical-align:top;">
                      <td colspan="2" valign="top" width="379"
                      bgcolor="#f2ffff"
                      style="width:379px; background-color:#f2ffff;"><p
                        style="margin: 2px 0px 8px 0px;"><span
                        style="font-size: 8pt; font-family: 'Tahoma'; color: #000000;">Article.dbf</span></p>
                      </td>
                      <td valign="top" width="109" bgcolor="#f2ffff"
                      style="width:109px; background-color:#f2ffff;"><p
                        style="margin: 2px 0px 8px 0px;"><span
                        style="font-size: 8pt; font-family: 'Tahoma'; color: #000000;">???</span></p>
                      </td>
                      <td valign="top" width="115" bgcolor="#f2ffff"
                      style="width:115px; background-color:#f2ffff;"><p
                        style="margin: 2px 0px 8px 0px;"><span
                        style="font-size: 8pt; font-family: 'Tahoma'; color: #000000;">???</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p><span style="color: #000000;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; color: #000000; text-decoration: underline;">Interfaz
                de creaci�n de los pedidos proveedor</span><span
                style="font-size: 12pt; color: #000000; text-decoration: underline;">:</span><span
                style="color: #000000;">En el di�logo de creaci�n de los
                pedidos proveedores, accesible mediante �el men� Stock |
                Creaci�n de pedido proveedor, WinPro presenta ahora la
                descripci�n proveedor de los art�culos m�s bien que la
                descripci�n b�sica del art�culo.</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; color: #000000; text-decoration: underline;">Supresi�n
                de campo:</span><span style="color: #000000;">El campo "LACA"
                de la tabla Art�culo se suprimi� ya que anticuado.</span></p>

                <p><span style="color: #000000;">�</span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" width="615" cellspacing="0"
                cellpadding="2" border="0"
                style="border: none; border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="303" bgcolor="#d8ffff"
                      style="width:303px; background-color:#d8ffff;"><p
                        style="margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                        7.2.74</span></p>
                      </td>
                      <td valign="bottom" width="304" bgcolor="#d8ffff"
                      style="width:304px; background-color:#d8ffff;"><p
                        style="text-align: right; margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/06/2010</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; color: #000000; text-decoration: underline;">Supresi�n
                de art�culos:</span><span style="color: #000000;">La supresi�n
                de los art�culos ya no est� �permitida si el art�culo que debe
                suprimirse se utiliza dentro de un art�culo
                compuesto.</span></p>

                <p><span style="color: #000000;">�</span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" width="615" cellspacing="0"
                cellpadding="2" border="0"
                style="border: none; border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="303" bgcolor="#d8ffff"
                      style="width:303px; background-color:#d8ffff;"><p
                        style="margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                        7.2.73</span></p>
                      </td>
                      <td valign="bottom" width="304" bgcolor="#d8ffff"
                      style="width:304px; background-color:#d8ffff;"><p
                        style="text-align: right; margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/06/2010</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; color: #000000; text-decoration: underline;">Impresi�n
                de las dimensiones de acristalamientos sobre los presupuestos
                WinPro/D: </span><br>
                <span style="color: #000000;">�</span><br>
                <span style="color: #000000;">La clave </span><span
                style="font-weight: bold; color: #666699;">Glass Dim On
                Quotation</span><span style="color: #000000;">" en la secci�n
                [Documentos] de WinPro.ini permite imprimir o no las
                dimensiones de los acristalamientos sobre los presupuestos,
                </span><span
                style="font-style: italic; font-weight: bold; color: #000000;">para
                WinPro/D solamente</span><span
                style="color: #000000;">.</span></p>

                <p><span style="font-weight: bold; color: #666699;">�</span><br>
                <span
                style="font-weight: bold; color: #666699;">[Documents]</span></p>

                <p><span style="font-weight: bold; color: #666699;">Glass Dim
                On Quotation �= 0</span><span
                style="color: #000000;"></span><span style="color: #000000;">no
                hay dimensiones de acristalamiento sobre los presupuestos
                WinPro/D (defecto).</span></p>

                <p><span style="color: #000000;">� � � � � � � � � � � � � � �
                � � � � </span><span style="color: #666699;">= 1 </span><span
                style="color: #000000;">las dimensiones de acristalamientos se
                imprimen sobre los presupuestos WinPro/D.</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">�</span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" width="615" cellspacing="0"
                cellpadding="2" border="0"
                style="border: none; border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="303" bgcolor="#d8ffff"
                      style="width:303px; background-color:#d8ffff;"><p
                        style="margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                        7.2.72</span></p>
                      </td>
                      <td valign="bottom" width="304" bgcolor="#d8ffff"
                      style="width:304px; background-color:#d8ffff;"><p
                        style="text-align: right; margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/06/2010</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; color: #000000; text-decoration: underline;">Di�logo
                para compactar los lotes en el momento de la optimizaci�n:
                </span><br>
                <span style="color: #000000;">�</span><br>
                <span style="color: #000000;">La clave "</span><span
                style="font-weight: bold; color: #666699;">Pack"</span><span
                style="color: #000000;">en la secci�n </span><span
                style="font-weight: bold; color: #666699;">[System]</span><span
                style="color: #000000;">de WinPro.ini permite activar o no el
                di�logo que invita al usuario a compactar las tablas FoxPro
                relativas a los lotes, en fin de optimizaci�n. </span></p>

                <p><span
                style="font-weight: bold; color: #666699;">[System]</span></p>

                <p><span style="font-weight: bold; color: #666699;">Pack = 0
                </span><span style="color: #000000;">no hay di�logos para
                compactar los lotes, y no se compactar� </span></p>

                <p><span style="color: #000000;">� � � </span><span
                style="font-weight: bold; color: #666699;">= 1</span><span
                style="color: #000000;">aparece el di�logo para compactar los
                lotes en final de la optimizaci�n (valor por
                defecto).</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; color: #000000; text-decoration: underline;">Seuils
                �tendus pour ch�ssis porte:</span><span
                style="color: #000000;">La cl� � </span><span
                style="font-weight: bold; color: #666699;">Seuil etendu =
                1</span><span style="color: #000000;">� dans le
                section</span><span
                style="font-weight: bold; color: #666699;"></span><span
                style="font-weight: bold; color: #000000;">[System]</span><span
                style="color: #000000;">de WinPro.ini permet d'activer la
                notion de seuil �tendu, pour les portes uniquement. Cette
                fonction permet de d�finir en saisie la continuit� du seuil de
                porte par rapport au dormant et aux traverses.</span></p>

                <p><span style="color: #000000;">Une fois la clef activ�e, vous
                avez acc�s � un nouveau combo � c�t� de la saisie du seuil de
                porte:</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p style="margin: 0px 0px 0px 24px;"><img src="img/embim79.jpg"
                width="405" height="316" vspace="1" hspace="1" border="0"
                alt=""></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">Cette saisie renseignera une
                variable,</span><span
                style="font-family: 'Courier New'; color: #0000ff;">_TypeSeuil</span><span
                style="color: #000000;">, disponible dans tous les niveaux de
                cadres du param�trage WinPro, et qui contiendra la s�lection du
                type de configuration :</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none; border-spacing:0px;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="13" style="width:13px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td valign="top"><p><span
                        style="font-family: 'Courier New'; color: #0000ff;">-1</span><span
                        style="color: #000000;">�si aucune pose de seuil n'est
                        pr�cis�e et que le seuil est coch� � </span><span
                        style="font-weight: bold; color: #000000;">Avec
                        r�duction de dormant</span><span
                        style="color: #000000;">�.</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none; border-spacing:0px;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="13" style="width:13px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td valign="top"><p><span
                        style="font-family: 'Courier New'; color: #0000ff;">-2</span><span
                        style="color: #000000;">�si aucune pose de seuil n'est
                        pr�cis�e et que le seuil est coch� � </span><span
                        style="font-weight: bold; color: #000000;">Sans
                        r�duction de dormant</span><span
                        style="color: #000000;">�</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none; border-spacing:0px;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="13" style="width:13px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td valign="top"><p><span
                        style="font-family: 'Courier New'; color: #0000ff;">0</span><span
                        style="color: #000000;">� �si aucune pose de seuil
                        n'est pr�cis�e et que le seuil n'est pas coch� �
                        </span><span
                        style="font-weight: bold; color: #000000;">Avec/Sans
                        r�duction de dormant</span><span
                        style="color: #000000;">�, ou qu'aucun seuil de porte
                        n'est saisi</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none; border-spacing:0px;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="13" style="width:13px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td valign="top"><p><span
                        style="font-family: 'Courier New'; color: #0000ff;">1</span><span
                        style="color: #000000;">� �si la premi�re pose est
                        s�lectionnn�e</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none; border-spacing:0px;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="13" style="width:13px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td valign="top"><p><span
                        style="font-family: 'Courier New'; color: #0000ff;">2</span><span
                        style="color: #000000;">� �si la deuxi�me pose est
                        s�lectionnn�e</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none; border-spacing:0px;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="13" style="width:13px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td valign="top"><p><span
                        style="font-family: 'Courier New'; color: #0000ff;">3</span><span
                        style="color: #000000;">� �si la troisi�me pose est
                        s�lectionnn�e</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none; border-spacing:0px;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="13" style="width:13px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td valign="top"><p><span
                        style="font-family: 'Courier New'; color: #0000ff;">4</span><span
                        style="color: #000000;">� �si la quatri�me pose est
                        s�lectionnn�e</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">Si la cl� � </span><span
                style="font-weight: bold; color: #666699;">Seuil etendu =
                0</span><span style="color: #000000;">�, la variable
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_TypeSeuil</span><span
                style="color: #000000;">renverra les valeurs:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none; border-spacing:0px;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="13" style="width:13px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td valign="top"><p><span
                        style="font-family: 'Courier New'; color: #0000ff;">0</span><span
                        style="color: #000000;">� �s'il n'y a pas de seuil de
                        porte, ou si aucune des 2 cases �</span><span
                        style="font-weight: bold; color: #000000;">Avec/Sans
                        r�duction de dormant</span><span
                        style="color: #000000;">� n'est coch�e dans la
                        r�hausse</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none; border-spacing:0px;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="13" style="width:13px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td valign="top"><p><span
                        style="font-family: 'Courier New'; color: #0000ff;">-1</span><span
                        style="color: #000000;">�pour un seuil de porte d�fini
                        � </span><span
                        style="font-weight: bold; color: #000000;">Avec
                        r�duction de dormant</span><span
                        style="color: #000000;">�</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table cellspacing="0" cellpadding="0" border="0"
                style="border: none; border-spacing:0px;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="13" style="width:13px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td valign="top"><p><span
                        style="font-family: 'Courier New'; color: #0000ff;">-2</span><span
                        style="color: #000000;">�pour un seuil de porte d�fini
                        � </span><span
                        style="font-weight: bold; color: #000000;">Sans
                        r�duction de dormant</span><span
                        style="color: #000000;">�</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p><span style="color: #000000;">�</span></p>

                <p style="text-align: center;"><span
                style="color: #000000;">�</span></p>

                <p style="text-align: center;"><span
                style="color: #000000;">�</span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" width="615" cellspacing="0"
                cellpadding="2" border="0"
                style="border: none; border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="303" bgcolor="#d8ffff"
                      style="width:303px; background-color:#d8ffff;"><p
                        style="margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                        7.2.71</span></p>
                      </td>
                      <td valign="bottom" width="304" bgcolor="#d8ffff"
                      style="width:304px; background-color:#d8ffff;"><p
                        style="text-align: right; margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">08/04/2008</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p><span style="color: #000000;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; color: #000000; text-decoration: underline;">Holgura
                de los paneles a cortar</span><span style="color: #000000;">:
                la Holgura se deduce ahora de los art�culos consumidos en la
                p�gina Descripci�n de los paneles a cortar, cuando estos
                art�culos contienen un macro #2#.</span></p>

                <p><span style="color: #000000;">Antes, WinPro deduc�a la
                holgura del panel con un macro situado en la descripci�n del
                panel, pero no para el art�culo consumido en esta misma
                p�gina</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; color: #000000; text-decoration: underline;">C�lculo
                de las reservas</span><span
                style="font-size: 12pt; color: #000000; text-decoration: underline;">:</span><span
                style="color: #000000;"></span><br>
                <span style="color: #000000;">Ahora WinPro informa la tabla
                </span><span
                style="font-style: italic; color: #000000;">ParArt</span><span
                style="color: #000000;">a cada c�lculo de las reservas de
                materia desde el pesta�a correspondiente del pedido.</span></p>

                <p><span style="color: #000000;">Antes, un c�lculo de las
                reservas no ten�a impacto sobre esta tabla.</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; text-decoration: underline;">Peso
                en los Documentos Clientes </span><br>
                <span style="color: #000000;">Es ahora posible indicar el peso
                de cada ventanas as� como el peso total del pedido.</span></p>

                <p><span style="color: #000000;">Esta funcionalidad se activa
                con ayuda de 2 nuevas claves en el fichero Winpro.ini</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="font-weight: bold; color: #666699;">[Customer
                order]</span></p>

                <p><span style="font-weight: bold; color: #666699;">Weight � �
                � �= 0</span> � � � �<span
                style="font-weight: bold; color: #000000;">C</span><span
                style="color: #000000;">omportamiento actual de WinPro (valor
                por defecto) </span></p>

                <p><span style="font-weight: bold; color: #666699;">� � � � � �
                � � �= 1 </span> � � � �<span style="color: #000000;">Muestra
                el peso de cada l�nea de pedido (se�al).</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="font-weight: bold; color: #666699;">Order � � �
                � �= 0 � </span> � � � �<span
                style="font-weight: bold; color: #000000;">C</span><span
                style="color: #000000;">omportamiento actual de Winpro (valor
                por defecto)</span></p>

                <p><span style="font-weight: bold; color: #666699;">� � � � � �
                � � �= 1 </span> � � � �<span style="color: #000000;">Muestra
                el peso del pedido� </span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; text-decoration: underline;">Numeraci�n
                autom�tica de las l�neas de Pedidos:</span> <br>
                Es ahora posible imponer la introducci�n del identificador de
                cada l�neas de pedidos manualmente.</p>

                <p>Esta funcionalidad se activa con ayuda de una nueva clave en
                el fichero winpro.ini</p>

                <p>�</p>

                <p><span style="font-weight: bold; color: #666699;">[Customer
                order]</span></p>

                <p><span
                style="font-weight: bold; color: #666699;">Autonum������� =
                1������� </span><span
                style="font-weight: bold; color: #000000;">C</span><span
                style="color: #000000;">omportamiento actual de WinPro (valor
                por defecto)</span></p>

                <p>�������������������� <span
                style="font-weight: bold; color: #666699;">= 0��������
                </span><span style="color: #000000;">Ide</span>ntificaci�n
                manual� de la linea de pedido </p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">�</span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" width="615" cellspacing="0"
                cellpadding="2" border="0"
                style="border: none; border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top" width="303" bgcolor="#d8ffff"
                      style="width:303px; background-color:#d8ffff;"><p
                        style="margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                        7.2.70</span></p>
                      </td>
                      <td valign="bottom" width="304" bgcolor="#d8ffff"
                      style="width:304px; background-color:#d8ffff;"><p
                        style="text-align: right; margin: 4px 0px 4px 0px;"><span
                        style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/06/2010</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p><span style="color: #000000;">�</span></p>

                <p><span
                style="font-size: 12pt; font-weight: bold; color: #000000; text-decoration: underline;">Importaci�n/exportaci�n
                de presupuesto y cliente para WinPro/D: </span><br>
                <span style="color: #000000;">Es ahora posible exportar los
                presupuestos creados en WinPro/D as� como las fichas cliente
                creadas, utilizando el men� Herramientas | Exportaci�n cliente
                (s) y presupuesto para la exportaci�n, o Herramientas |
                Importaci�n cliente (s) y presupuesto para la
                importaci�n.</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">Los presupuestos y cliente se
                crear�n respectivamente en el formato "*.WPX y "*.WPT" , en el
                directorio b�sico de WinPro/D.</span></p>

                <p><span style="color: #000000;">Los presupuestos y/o cliente
                deben estar presentes dentro el directorio b�sico de WinPro/D
                para ser importados.</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p><span style="color: #000000;">�</span></p>

                <p style="margin: 0px 0px 0px 24px;"><img
                src="img/clip0080.zoom85.jpg" width="229" height="307" border="0"
                alt="clip0080"></p>

                <p style="margin: 0px 0px 0px 24px;"><span
                class="f_ImageCaption">�</span></p>

                <p style="margin: 0px 0px 0px 24px;"><span
                class="f_ImageCaption">�</span></p>

                <p><span
                style="font-family: 'Courier New'; color: #000000;">�</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="color: #000000;">�</span></p>

        <p><span style="color: #000000;">�</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
