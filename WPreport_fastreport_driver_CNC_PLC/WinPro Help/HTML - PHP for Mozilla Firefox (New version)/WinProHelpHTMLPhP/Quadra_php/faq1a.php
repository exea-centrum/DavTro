<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Reservation/Supplier order - Optimization","R&#233;servation/Cde Fourn - Optimisation"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?faq1a.php"; }
else { parent.quicksync('a10.1.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>R�servation/Cde Fourn - Optimisation</title>
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
        href="introduction.php">Top</a>� <a href="faq1.php">Previous</a>� <a
        href="faq1b.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>�</p>

        <p>Winpro offers two possibilities to compute the profile needs for customer Reservations in case your licence includes the
		stock management module, and/or for Supplier orders created throuugh "Actions" tab of the customer order.</p>

        <p>�</p>

        <p><span class="f_Heading1">1.</span> The first way consists in computing needs by summing the various profile parts to 
		cut end to end.</p>

        <p>The number of profile bars to be ordered to the supplier may anyway be not sufficient compared to the result of the
		optimization, considering that optimization settings such as cutting waste, loss on new profile, minimum waste to store or
		maximum waste to throw are not considered by this way.</p>

        <p>But knowing that when optimizing, WinPro may probably retrieve a waste of profile, knowing that a profile is ordered as
		a multiple of its packaging (meaning that ordered quantity is the most often over estimated compared to the needs), and
		knowing that optimization will probably group several customer orders, the risk involved should be minor.</p>

        <p>To avoid this, you may also define a minimum stock level for each profile.</p>

        <p>Profiles that are the most exposed to this risk are profiles from sliders or doors as non reusable wastes are usually
		longer.</p>

        <p>If the key does not exists iwithin WinPro, this method will be defaultly used.</p>

        <p>This method is then enabled by a key into winpro.ini file:</p>

        <p><span class="f_Winproini">[Inventory]</span></p>

        <p><span class="f_Winproini">Optim Res = 0</span></p>

        <p>�</p>

        <p><span class="f_Heading1">2.</span> The profile needs computation for second method consists in a pre-optimization of the
		different parts to be cut in order to determine the bar quantity needed to fabricate.</p>

        <p>Using this method, different cases have to be distinguished:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="text-decoration: underline;">Profiles that are not managed into stock (Ral or unusual 
			  colours):</span> It is absolutely requested to optimize this kind of customer order separately to respect the
			  pre-optimization computed. It is then possible to optimize several orders into the same production job, as long 
			  as optimized profiles have distinct colours, or as long as the profiles are different. If this case is possible, 
			  it is imperatively requested to disable double cutting feature.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="text-decoration: underline;">Profiles managed into stock (Ral or usual colours):</span> The minimum
			  stock level may be reduced to a very low or null value. Optimization through a production job of several orders is
			  then recommended.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="text-decoration: underline;">Multi bar length profiles:</span> Customer orders must imperatively be
			  optimized separately, this in order to be sure that bar lengths cut for fabrication (optimization) match bar lengths
			  ordered to suppliers.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 27px;">In case of multi bar length profiles, enabling this method is IMPERATIVE.</p>

        <p>This method is then enabled by a key into winpro.ini file:</p>

        <p><span class="f_Winproini">[Inventory]</span></p>

        <p><span class="f_Winproini">Optim Res = 1</span></p>

        <p>�</p>

        <p>�</p>

        <p>�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="630"
                style="width: 630px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Notes</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Be aware that a pre-optimization may be different of the optimization due to the profile wastes
					  management is enabled or not.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>In case of optimization with reusable wastes, the computation try to reach a maximum of reusable wastes.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 27px;">Without wastes management, the computation try to reach the minimum of bars 
				to cut.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
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

        <p>Winpro propose 2 m�thodes de calcul des besoins en profil�s pour les
        R�servations client dans le cas o� votre licence inclus la gestion de
        stock, et/ou pour les Commandes fournisseurs �dit�es via l'onglet
        "Action" de la commande client.</p>

        <p>�</p>

        <p><span class="f_Heading1">1.</span> La premi�re m�thode consiste �
        calculer les besoins en totalisant bout � bout les diff�rentes pi�ces �
        d�biter. </p>

        <p>Le nombre de barres qui seront command�es aupr�s du fournisseur
        risque parfois d'�tre insuffisant par rapport au r�sultat du calcul
        d'optimisation obtenu pour la fabrication. Vu que les param�tres
        d'optimisations tels que traits de scie, perte bout de barre, chute �
        stocker min et chute � jeter max ne sont pas pris en compte.</p>

        <p>Mais sachant que lors de l'optimisation, Winpro r�cup�rera tr�s
        probablement des chutes, sachant que le profil est command� dans une
        quantit� correspondant � un multiple de son conditionnement (autrement
        dit la quantit� command�e est sup�rieure � l'estimation des besoins),
        et sachant que le calcul de l'optimisation englobera tr�s certainement
        plusieurs commandes client, le risque encouru est tr�s faible. </p>

        <p>Afin d'�viter ce probl�me, vous pouvez toujours d�finir pour chaque
        profil un stock minimum.</p>

        <p>Les profils les plus expos�s � ce risque sont les profils de
        coulissants, de portes car les chutes non r�utilisables sont
        habituellement plus longues.</p>

        <p>Si cette cl� n'existe pas dans Winpro, c'est cette m�thode qui est
        prise en compte par d�faut.</p>

        <p>Cette m�thode est activ�e par une cl� se trouvant dans le fichier
        winpro.ini:</p>

        <p><span class="f_Winproini">[Inventory]</span></p>

        <p><span class="f_Winproini">Optim Res = 0</span></p>

        <p>�</p>

        <p><span class="f_Heading1">2.</span> Le calcul des besoins, pour la
        seconde m�thode, consiste en une pr�optimisation des diff�rentes pi�ces
        permettant de d�terminer la quantit� de barres n�cessaires � la
        fabrication.</p>

        <p>Dans cette m�thode il faut distinguer diff�rents cas de figures:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="text-decoration: underline;">Profils non g�r�s
                en stock (Ral ou teintes peu fr�quentes):</span> Il est
                indispensable de calculer l'optimisation de cette commande
                client seule afin de respecter ce qui a �t� pr�optimiser. Il
                est donc possible d'optimiser plusieurs commandes client dans
                un m�me lot, pour autant que les profils optimis�s soient de
                couleurs diff�rentes, ou que les profils diff�rent. Si ce cas
                de figure est possible, il vous faut imp�rativement d�sactiver
                les coupes en doubles.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="text-decoration: underline;">Profils g�r�s en
                stock (Ral ou teintes fr�quentes):</span> Le stock minimum peut
                �tre r�duit � une valeur tr�s basse, voir m�me nulle.
                L'optimisation par lot de commandes clients est conseill�e.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="text-decoration: underline;">Profils param�tr�s
                en multi-barre (appel� aussi multi-longueurs):</span> Les
                commandes clients doivent imp�rativement �tre optimis�e
                s�par�ment. Ceci afin de s'assurer que les longueurs de barres
                consomm�es par la fabrication (optimisation) correspondent aux
                longueurs des barres command�es aux fournisseurs.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 27px;">Dans le cas de profils param�tr�s
        en multi-barre, l'activation de cette m�thode est OBLIGATOIRE.</p>

        <p>Cette m�thode est activ�e par une cl� se trouvant dans le fichier
        winpro.ini:</p>

        <p><span class="f_Winproini">[Inventory]</span></p>

        <p><span class="f_Winproini">Optim Res = 1</span></p>

        <p>�</p>

        <p>�</p>

        <p>�</p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="630"
                style="width: 630px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarques</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Soyez conscient du fait qu'une pr�optimisation peut
                        encore �tre diff�rente d'une optimisation par le fait
                        que la conservation des chutes du profil est active ou
                        non.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Dans le cas d'une optimisation avec r�cup�ration des
                        chutes, le calcul cherche � obtenir le maximum de
                        chutes r�utilisables.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 27px;">Dans le cas contraire, le
                calcul cherche a consommer le moins de barre possible.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
