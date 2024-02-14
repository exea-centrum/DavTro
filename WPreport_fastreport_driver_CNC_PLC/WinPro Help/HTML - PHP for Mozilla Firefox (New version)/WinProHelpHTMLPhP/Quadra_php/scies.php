<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Saws","Scies"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?scies.php"; }
else { parent.quicksync('a7.34'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Scies</title>
  <meta name="keywords" content="scie,epointage">
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
        href="introduction.php">Top</a>  <a href="routines.php">Previous</a> 
        <a href="textespredefinis.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>This table is suitable for definition of technical settings for the saw, as cutting wastes, mini and maxi 
		lenght limits,  ...</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>A profile defines onto which saw it has to be cut. The multi saw module allows defining multiple saws for the 
		same profile. A variable <span class="f_Variables">SawID</span> may also be used within formulas of profiles, to 
		reassign dynamically the profile to a specific saw. Refer to the various variable pages from the different frame 
		level for more details.</p>

        <p> </p>

        <p>This dialog is reached through menu <span
        style="font-weight: bold;">Technic | Production | Saw</span>.</p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"></span><img src="img/clip0034eng.jpg"
        width="710" height="648" border="0" alt="clip0034eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Number</span>: Saw number, from 0 to 99 (up to 100 saws).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Saw description.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Waste stock</span>:
                Numeric ID for the waste stock assigned to the saw.
                When profiles are cut onto multiple saws, this allows defining a distinct waste stock for each saw, or else 
				a common stock for all saws. Refer to manual about waste stock management, <span style="font-weight: bold;">GCH.chm
                </span>, for more details about this feature.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Print as list</span>:
                Print the paper optimization list for this saw.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Print as labels</span>: Print optimization labels for this saw. This setting 
			  may be set per profile instead of globally for the saw, within <a href="profils.php">profiles table</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">No waste on sub-jobs</span>: When module for production line management is 
			  used, WinPro is able to split a production job into sub-jobs. In that case, this box defineS if wastes of 
			  profiles generated by a given sub-job are to be reused by anticipation for cutting profiles of next sub-jobs, 
			  in order to avoid useless handling of profiles. Refer to production line management manual, 
			  <span style="font-weight: bold;">GLP.chm</span>, for more details about this feature.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Force single rather than double cut</span>: Some saws may cut profiles by pairs, 
			  some others cannot. When using multiple saws module, this option forces single cutting for profiles defined to be 
			  cut by pairs.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">If double cut, the angles of a profile must be inverted compared to the 
			  other profile</span>: For a double cut, this defines the way profiles are paired: back to back (<img
                src="img/clip0241.jpg" width="79" height="28" border="0"
                alt="clip0241">) or parallels (<img src="img/clip0242.jpg"
                width="86" height="27" border="0" alt="clip0242">).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Cut in a single job</span>: Using production line management module, WinPro 
			  can automatically split a job into sub-jobs. However for certain saws, it is better to group a maximum of 
			  profiles. When checked, WinPro will group profiles cut onto the saw by job, rather than by sub-job. Refer 
			  to production line management manual, <span style="font-weight: bold;">GLP.chm</span>, for more details about 
			  this feature.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Loss when reusing waste</span>: When reusing a waste profile, some saws need 
			  to process a basic first cut to refresh the bar, eliminating a piece of the waste at the end of the profile. Set 
			  here the value of this first basic cut value. Refer to manual about waste management, 
			  <span style="font-weight: bold;">GCH.chm</span>, for more details about this feature.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">No loading list</span>: When checked, no loading list is generated 
			  at optimization for this saw.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">If length &lt;= ... or
                &gt;= ... </span>: Mini and maxi dimension of profile that the saw is able to cut.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Then use saw #...</span>: Set here the saw to be used in case of profile 
			  lower than the minimum length, or profile greater than maximum length.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><img src="img/clip0243.jpg" width="194" height="16" border="0"
                alt="clip0243">: Define here the direction the bars are handled onto the saw, usefull in case of asymetrical cut,
				according cutting angles.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><img src="img/clip0244.jpg" width="260" height="34" border="0"
                alt="clip0244">: Set here the saw cutting waste for each cutting sequence. You may uncheck unneeded sequence, set 
				a numerical value into a field, or else use a formula with variable <span class="f_Variables">h</span>,
                corresponding to profile thickness, as defined into field <span style="font-weight: bold;">Saw correction for 
				45° profile</span>, within <a href="prfdescription.php">description page of a profile</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>
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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>La table des scies permet de définir les caractéristiques techniques
        de la scie, telles que la perte de trait de scie ou les limites
        dimensionnelles minimum et maximum de la machine,  ...</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>Chaque profil définit sur quelle scie il sera débité. Le module
        multi-scie permet de définir de multiples scies pour un même profil. Il
        est également possible d'utiliser la variable <span
        class="f_Variables">NumeroScie</span> dans les formules de profils pour
        réaffecter dynamiquement le profil à une scie donnée. Reportez vous aux
        diverses pages de détails des variables par niveaux de cadres pour plus
        de détails.</p>

        <p> </p>

        <p>Ce dialogue est accessible via le menu <span
        style="font-weight: bold;">Technique | Production | Scie</span>.</p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"></span><img src="img/clip0034.zoom92.jpg"
        width="693" height="636" border="0" alt="clip0034"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Numéro</span>: Numéro de
                scie, de 0 à 99 (soit jusqu'à 100 scies).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description de la scie.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Stock de chutes</span>:
                Identifiant numérique du stock de chutes assigné à cette scie.
                Lorsque des profils peuvent être débités sur plusieurs scies,
                ceci permet de définir un stock de chutes distinct pour chaque
                scie, ou commun à toutes les scies. Reportez vous au manuel sur
                la gestion des chutes <span style="font-weight: bold;">GCH.chm
                </span>pour plus de détails sur cette option.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Imprimer en liste</span>:
                Imprimer la liste d'optimisation papier pour cette scie.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Imprimer sur
                étiquettes</span>: Imprimer les étiquettes d'optimisation pour
                cette scie. Ce paramètre peut être affiné individuellement par
                profil dans la <a href="profils.php">table des profils</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Eliminer les chutes de
                sous-lots</span>: Si vous utilisez le module lignes de
                production, WinPro peut automatiquement divisé un lot en
                sous-lots. Dans ce cas de figure, vous pouvez définir si les
                chutes générées par un sous-lots donné doivent être utilisées
                par anticipation pour débiter les profils des sous-lots
                suivants, dans le but de minimiser les manipulations. Reportez
                vous au manuel sur la gestion des lignes de production <span
                style="font-weight: bold;">GLP.chm </span>pour plus de détails
                sur cette option.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Forcer coupe simple au lieu
                de coupe double</span>: Certaines scies peuvent couper les
                profils par paires, d'autres ne le peuvent pas. Si vous
                utilisez le module multi-scie, cette option permet de forcer
                une coupe simple pour les profils qui sont définis pour être
                débités par paires.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Si coupe en double, les
                angles d'un profil doivent être à l'inverse des angles de
                l'autre profil</span>: Pour une coupe en double, définissez la
                manières dont les profils sont mis en paires: dos à dos (<img
                src="img/clip0241.jpg" width="79" height="28" border="0"
                alt="clip0241">) ou parallèles (<img src="img/clip0242.jpg"
                width="86" height="27" border="0" alt="clip0242">).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Ne pas diviser en
                sous-lots</span>: Si vous utilisez le module de gestion des
                lignes de production, WinPro peut automatiquement scinder un
                lot donné en sous-lots. Toutefois pour certaines scies, il peut
                être préférable de grouper le plus de profils possible. Vous
                pouvez cocher cette case pour laisser WinPro grouper les
                profils sur la scie par lot, plutôt que par sous-lot. Reportez
                vous au manuel sur la gestion des lignes de production <span
                style="font-weight: bold;">GLP.chm </span>pour plus de détails
                sur cette option.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Sans liste de chargement</span>: Lorsque cochée, la liste de chargement de 
			  barre ne sera pas imprimée pour cette scie à l'optimisation.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Perte en bout de
                chute</span>: Lorsque l'on réutilise une chute, certaines scies
                font une première  coupe sur la chute pour la rafraîchir, ce
                qui élimine un morceau de la chute en fin de profil. Renseignez
                ici la valeur de cette coupe de rafraîchissement dans ce cas de
                figure. Reportez vous au manuel sur la gestion des chutes <span
                style="font-weight: bold;">GCH.chm </span>pour plus de détails
                sur cette option.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Si longueur &lt;= ... ou
                &gt;= ... </span>: Définissez dans ces champs les dimensions
                maximum et minimum pouvant être débitées sur cette scie.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Alors utiliser la scie
                n°...</span>: Définissez ici la scie à utiliser lorsque la
                dimension du profil à débiter est plus petite que la dimension
                minimum acceptée, ou plus grande que la dimension maximum.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><img src="img/clip0243.jpg" width="194" height="16" border="0"
                alt="clip0243">: Définissez ici la le sens de défilement de la
                barre sur la scie, utile dans le cas de coupes asymétriques en
                fonction des angles de coupes.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><img src="img/clip0244.jpg" width="260" height="34" border="0"
                alt="clip0244">: Définissez ici l'épaisseur du trait de scie
                pour chaque séquence de coupe. Vous pouvez décocher une
                séquence de coupe donnée lorsque celle ci n'est pas prise en
                charge par la scie. Vous pouvez saisir la valeur directement
                comme dans la capture ci-dessus, ou bien utiliser une formule
                avec la variable <span class="f_Variables">h</span>,
                correspondante à la hauteur du profil, telle que définie dans
                le champ <span style="font-weight: bold;">Correction de scie
                pour coupe à 45°, dans la page </span><a
                href="prfdescription.php">description du profil</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
