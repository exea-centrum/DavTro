<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.0.8x","7.0.8x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn708x.php"; }
else { parent.quicksync('a11.6.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.0.8x</title>
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
        href="introduction.php">Top</a>� <a href="rn709x.php">Previous</a>� <a
        href="rn707x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>�</p>

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
                7.0.82</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">18/07/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Traduction:</span> Vous pouvez
        maintenant traduire les questions globales ainsi que les textes
        pr�d�finis utilis�s par les macros #5#, #6#...</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Optimisation:</span> Dans le cas o�
        nous n&rsquo;avons pas autoris� toutes les combinaisons d&rsquo;angles
        pour une scie, Winpro est alors susceptible de prendre une nouvelle
        barre pour y d�biter la pi�ce pour laquelle il n&rsquo;a pas trouv� de
        solution r�pondant aux contraintes pr�d�finies.</p>

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
                7.0.81</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/06/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;">�</p>

        <p><span class="f_TitreReleaseNote">Optimisation des cadres:</span>
        Vous pouvez maintenant d�sactiver le calcul et l&rsquo;impression des
        cadres lors de l&rsquo;optimisation. </p>

        <p>Sachez que si vous n&rsquo;avez pas param�tr� de cadres (voir note
        de release 3.1.0 et 3.1.1), nous vous sugg�rons de d�sactiver ce calcul
        qui allonge consid�rablement le temps de calcul d&rsquo;optimisation.
        </p>

        <p>Voici le d�tail de la cl� � ajouter dans votre fichier winpro.ini
        pour pr�ciser votre choix :</p>

        <p><span
        style="font-weight: bold; color: #666699;">[Optimisation]</span></p>

        <p><span style="font-weight: bold; color: #666699;">EtiquetteCadre =
        1</span><span style="color: #666699;"></span>pour imprimer les
        �tiquettes de cadres juste apr�s les �tiquettes
        d&rsquo;optimisation.</p>

        <p>� � � � � � � �<span style="font-weight: bold; color: #666699;">=
        0</span> pour ne pas imprimer les �tiquettes cadre apr�s l'impression
        des �tiquettes d'optimisation.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Calcul des cintr�s:</span> Les
        angles des montants assembl�s avec un cintre ne sont pas calcul�s par
        Winpro, les variables <span class="f_Variables">Angle1</span> ou <span
        class="f_Variables">Angle2</span> renvoient une valeur nulle. </p>

        <p>D�sormais, Winpro peut d�terminer automatiquement ces angles de
        coupe pour les formes FGHIJ, soit les formes : Cintre, PleinCintre,
        DemiPleinCintre, CintrePlat, DemiCintrePlat. </p>

        <p>De plus, l&rsquo;angle des traverses se fixant sur une partie
        cintr�e peuvent eux aussi �tre calcul� par Winpro. </p>

        <p>Voici le d�tail des cl�s � ajouter dans votre fichier winpro.ini
        pour activer/d�sactiver ces deux nouvelles fonctionnalit�s :</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span style="font-weight: bold; color: #666699;">CalculAnglesCintres
        � � � �= 1</span> pour activer le calcul des angles cintr�s dans les
        cadres</p>

        <p>� � � � � � � � � � � �<span
        style="font-weight: bold; color: #666699;">= 0</span> pour d�sactiver
        le calcul des angles cintr�s dans les cadres&hellip;les angles
        concern�s auront alors une valeur nulle.</p>

        <p><span
        style="font-weight: bold; color: #666699;">CalculAnglesCintresTrav � �
        � �= 1</span> pour activer le calcul des angles des traverses fix�es
        sur une partie cintr�e</p>

        <p>� � � � � � � � � � � � � � � �<span
        style="font-weight: bold; color: #666699;">= 0</span> pour d�sactiver
        le calcul des angles des traverses fix�es sur une partie cintr�e, dans
        ce cas les angles concern�s auront une valeur nulle.</p>

        <p>�</p>

        <p>�</p>
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
                7.0.82</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">18/07/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Vertaling</span> U kunt nu de
        globale vragen evenals de voorgedefinieerde teksten vertalen die door
        volgende macro's worden gebruikt, # 5 #,.6 #... </p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Optimalisatie:</span> Wanneer niet
        alle combinaties van hoeken gedefinieerd zijn in de zaagparameters, zal
        Winpro een nieuw profiel nemen waarop hij het stuk waarvan de hoeken
        niet gedefinieerd zijn in de zaagparameters zal zagen</p>

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
                7.0.80 en 7.0.81</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/06/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;">�</p>

        <p><span class="f_TitreReleaseNote">Optimalisatie van de kaders</span>
        U kan nu de berekening en de afdruk van een kader deactiveren bij de
        optimalisering. U dient wel te weten dat wanneer u geen kaders
        geparametreerd heeft (zie release notes 3.1.0 en 3.1.1) wij u aanraden
        deze berekening te deactiveren omdat anders de tijd voor het
        optimaliseren verlengt wordt. Ziehier het detail van de sleutel welke
        toegevoegd dient te worden in de winpro.ini om uw keus te bepalen.:</p>

        <p><span
        style="font-weight: bold; color: #666699;">[Optimisation]</span></p>

        <p><span style="font-weight: bold; color: #666699;">EtiquetteCadre =
        1</span><span style="color: #666699;"></span>is gelijk aan 1 voor het
        afdrukken van etiketten van de kaders na de etiketten van de
        optimalisatie.</p>

        <p>� � � � � � � �<span style="font-weight: bold; color: #666699;">=
        0</span> is gelijk aan 0 voor het niet afdrukken van etiketten van de
        kaders na de etiketten van de optimalisatie.</p>

        <p>�</p>

        <p><span class="f_TitreReleaseNote">Berekening van bogen</span> De
        hoeken van de opstaande posten welke verbonden worden met een gebogen
        deel worden niet berekend in WinPro,de variabelen Angle1 (Hoek1) of
        Angle2(Hoek2) geven de waarde 0. Voortaan kan WinPro voor de volgende
        vormen automatisch deze hoeken bepalen FGHIJ, oftewel de vormen :
        Cintre, PleinCintre, DemiPleinCintre, CintrePlat, DemiCintrePlat.</p>

        <p>Meer nog, de hoeken van de stijlen welke op een gebogen deel
        verbonden worden kunnen ook berekend worden door Winpro. Ziehier het
        detail in de sectie [System] van de WinPro.ini welke ervoor zorgt dat
        deze nieuwe functionaliteit geactiveerd dan wel gedeactiveerd wordt</p>

        <p></p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span style="font-weight: bold; color: #666699;">CalculAnglesCintres
        � � � �= 1</span> is gelijk aan 1 voor het activeren van de berekening
        van de hoeken in de kaders </p>

        <p>� � � � � � � � � � � �<span
        style="font-weight: bold; color: #666699;">= 0</span> is gelijk aan 0
        voor het deactiveren van de berekening van de hoeken in de kaders
        &hellip;Deze hoeken geven aldus een waarde 0.</p>

        <p><span
        style="font-weight: bold; color: #666699;">CalculAnglesCintresTrav � �
        � �= 1</span> is gelijk aan 1 voor het activeren van de berekening van
        de hoeken van de stijlen welke grenzen aan een gebogen deel</p>

        <p>� � � � � � � � � � � � � � � �<span
        style="font-weight: bold; color: #666699;">= 0</span> is gelijk aan 0
        voor het deactiveren van de berekening van de hoeken van de stijlen
        welke grenzen aan een gebogen deel. In dit geval is de waarde van de
        hoeken steeds 0</p>

        <p>�</p>

        <p>�</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
