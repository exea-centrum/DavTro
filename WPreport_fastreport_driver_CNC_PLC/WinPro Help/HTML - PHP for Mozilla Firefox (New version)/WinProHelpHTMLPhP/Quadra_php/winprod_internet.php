<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["WinPro/D Internet","WinPro/D Internet","WinPro/D Internet"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?winprod_internet.php"; }
else { parent.quicksync('a11.3.3.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>WinPro/D Internet</title>
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
        href="introduction.php">Top</a>� <a href="8_0_2_x.php">Previous</a>� <a
        href="8_0_1_x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Uncompatible with version 7.2, unless
        mentionned</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="466" bgcolor="#d8ffff"
              style="width: 466px; background-color: #d8ffff;"><p
                style="text-align: center; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">WinPro/D 8.0.2
                Internet (mySQL format)</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Introduction</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The version 8.0.2 of
        WinPro introduces a new feature: the ability to manage several WinPro/D
        databases for your customers, onto a unique MySQL server dedicated to
        the program, allowing you to maintain only one technical database. This
        functionality is available only for versions further than the version
        dated from February 4th 2008. This feature is currently on testing on
        site with some of our customers, the final version will be released a
        few weeks later.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Overview</span></p>

        <p class="p_Textestd"><span class="f_Textestd">A WinPro/D database is
        installed on a MySQL server equipped with an internet
        connexion.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Onto the same server are
        created separated for each customer. Those databases will contain each
        customer proper files like Commande (Order Header), Detail (Order
        Detail), Client (Customer), Devise (Currency), etc., along with views
        (VIEW) reaching technical tables from the fabricator.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Using MySQL, and an
        appropriate password strategy, allows then to have a unique server at
        our disposal for WinPro/D, where the customer is just able to browse
        the commercial data that's concerning him only. On a technical point of
        view, the set up is available for the customer, but only through his
        use of WinPro/D, as tables cannot be accessed straight.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Important note:
        considering the security level given to the accesses within this
        configuration as well as performance gains obtained, the encryption of
        fields previously used with FoxPro format has become unnecessary.
        Indeed, the physical content of the set up tables cannot be accessed
        directly by the user. Only WinPro/D can do this with calculating a
        complex password, together with the MySQL database.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Installation</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">The following walkthrough may appear
                a bit long to read but they fully detail the process.
                Practically, the procedure is very simple to use.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">The first step is the installation
                of the MySQL server onto a machine with a high bandwidth
                Internet connexion. Be sure you are granted for creation of
                MySQL users from a remote machine, and take care with disabling
                the MySQL 'strict' mode at installation, as shown on below
                screenshots.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Lucida Sans Unicode';">�</span></p>

        <p style="margin: 0px 0px 0px 21px;"><img src="img/clip0422.gif"
        width="522" height="398" border="0" alt="clip0422"></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p style="margin: 0px 0px 0px 21px;"><img src="img/clip0423.gif"
        width="519" height="395" border="0" alt="clip0423"></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">The remaining process goes through
                several stages, detailed further below�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Installation of the master WinPro/D
                executable</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creation of WinPro/D technical
                database extracted from WinPro</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creation of Customer Information for
                the master WinPro/D, extracted from WinPro</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Installation of the Sentinel
                dongle.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creation of the empty WinPro/D
                master database</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Importation of the technical
                database extracted into the Master WinPro/D database</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Initialization of
              WinPro/D</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creation of customers databases from
                WinPro production</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Distribution of WinPro/D executable
                and connexion settings to your customers</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">WinPro/D master must be installed on
                a workstation with access to the MySQL server assigned to
                WinPro/D. Your main WinPro installation must also be able to
                access this server. Both installations may reside on the same
                workstation.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Export the 'Settings' table to a
                winpro.ini file (</span><span class="f_Textestd"
                style="font-weight: bold;">menu Tools | Export to
                Winpro.ini</span><span class="f_Textestd">) (be cautious not to
                overwrite your main winpro.ini in your production directory�!).
                If you skip this step, WinPro/D will create default values for
                all settings when creating its database.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Update this WinPro.ini file, adding
                a </span><span class="f_Textestd"
                style="font-family: 'Courier New';">[Database]</span><span
                class="f_Textestd">section for the WinPro/D MySQL server access
                settings. See below details of the section�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 4px 0px 0px 72px;"><span
        class="f_Winproini">[Database]</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">DLL=mysqldata.dll</span></p>

        <p style="margin: 4px 0px 0px 72px;"><span
        class="f_Winproini">Host=xxx</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Name=yyy</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Engine=zzz</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Transactions=bbb</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Character set=ccc</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">xxx</span><span
                class="f_Textestd">is replaced with the hostname or IP address
                of the server (e.g. 192.168.1.1, <a href="www.Company_name.com"
                target="_blank" class="weblink">www.Company_name.com</a>,
                etc.)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">yyy</span><span
                class="f_Textestd">is replaced with the database label you want
                to assign to the database (WinPro will create it
                automatically). Examples: winpro, production,�</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">zzz</span><span
                class="f_Textestd">is replaced with the type of database engine
                you wish to use. For a basic installation, you can choose
                between </span><span class="f_Textestd">&lsquo;</span><span
                class="f_Textestd"
                style="font-weight: bold;">InnoDB</span><span
                class="f_Textestd">&rsquo; </span><span class="f_Textestd">and
                </span><span class="f_Textestd">&lsquo;</span><span
                class="f_Textestd"
                style="font-weight: bold;">myISAM</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">. We
                suggest using the </span><span
                class="f_Textestd">&lsquo;</span><span class="f_Textestd"
                style="font-weight: bold;">InnoDB</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">format for LAN or internet
              access.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">bbb</span><span
                class="f_Textestd">is to be replaced with 1 (default), or with
                0. In case of value 1, WinPro will process a given number of
                processes (e.g. optimization) within a single transaction.
                Nevertheless, this may result in certain cases in slowing the
                overall system. This value may then be replaced with 0, but be
                aware that this option may cause operations to be a bit less
                safe. Note that in any cases, tables of myISAM format do not
                support such transactions; this option will then have no effect
                onto those tables.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">ccc</span><span
                class="f_Textestd">contains the character set to use; the
                default value is latin1, suitable for languages from occidental
                Europe area (French, English, Dutch, Spanish, Italian, German,
                etc...). This line is optional.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">To install the master WinPro/D
                database, copy the listed files onto a workstation:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">WinProD.exe</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Mysqldata.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Libmysql.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Clepar.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Cleusb.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Modules.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Stdreports.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Wpreport.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">MySQLWPR.dll (from version
                8.0.3 and later)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Winpro.ini (created as
                decribed above)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Optionally the specific.dll
                file (please advise us)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Any strings.*
              files</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Your own lang.ini
                file</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">The mysql directory
                (contains the scripts needed for table creation; same directory
                as WinPro production)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">From WinPro production, extract a
                technical database for WinPro/D using the appropriate Tools
                sub-menu. A single file will now be created, named data.pak,
                and located into a sub-directory labelled </span><span
                class="f_Textestd"
                style="font-family:       'Courier New';">Devis</span><span
                class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Still from WinPro production, create
                an </span><span class="f_Textestd"
                style="font-family:       'Courier New';">Infocli</span><span
                class="f_Textestd">set of data from any customer in the list
                (menu Tools | Customer information for WinPro/D)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Copy required files into a directory
                accessible for WinPro/D, including�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">data.pak</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">infocli.dat</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">licence.ini</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">winpro.lic</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">and optionally, when
                required</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">site.var</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">remise.var</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">specif.var</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-family: 'Courier New';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Install the Sentinel dongle driver
                if required, and plug the dongle in.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Note that you may feel
        free to install from a station where WinPro is installed, with the
        benefit of the Sentinel dongle already running... Be also sure that the
        winpro.ini contains any required settings, because they will be
        imported basically into the Settings table of the master WinPro/D. If
        necessary, extract table Settings of WinPro production toward a new
        winpro.ini file that you will copy into the appropriate WinPro/D
        directory, before modification. Without anything sets in the file,
        WinPro/D will generate default values for missing settings for a safe
        start of the program. Be sure that the section [Database] of winpro.ini
        file is correctly set for reaching the WinPro/D MySQL server</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">In case another WinPro/D licence has
                been already installed on the machine, it is necessary to
                delete the following keys into the Windows registry database:
                section </span><span class="f_Textestd"
                style="font-family: 'Courier New';">HKEY_CLASSES_ROOT</span><span
                class="f_Textestd">, keys </span><span
                class="f_Textestd">&lsquo;</span><span class="f_Textestd"
                style="font-family: 'Courier New';">WinProD</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">and
                </span><span class="f_Textestd">&lsquo;</span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">HP</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Run the master WinPro/D. At login
                dialog, input your mySQL access codes (needed for database
                creation), and check the connexion settings, When WinPro/D asks
                for it, please confirm you want to ��Create a new
                database��.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Leave WinPro/D create an empty
                database, lasts for a few 10th of seconds!</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">When the empty database is created,
                WinPro/D asks for the location of the </span><span
                class="f_Textestd"
                style="font-family: 'Courier';">licence.ini</span> file.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-family: 'Courier';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">After reading the licence.ini file,
                the </span><span class="f_Textestd">&lsquo;</span><span
                class="f_Textestd">Company</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">dialog appears. Input something into the
                first field (</span><span class="f_Textestd"
                style="font-weight: bold;">SubTitle</span><span
                class="f_Textestd">).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Execute the menu </span><span
                class="f_Textestd" style="font-weight: bold;">Tools | Import
                fabricator data</span><span class="f_Textestd">. WinPro/D asks
                for location of the </span><span class="f_Textestd"
                style="font-family:       'Courier New';">data.pak</span><span
                class="f_Textestd">file extracted from WinPro production, and
                then import the data from the file into the master
                database.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Open the </span><span
                class="f_Textestd" style="font-weight: bold;">Tools | User
                dialog</span><span class="f_Textestd">dialog, select user
                </span><span class="f_Textestd"
                style="font-weight: bold;">Administrator</span><span
                class="f_Textestd">, and set it a password. </span><span
                class="f_Textestd"
                style="font-weight: bold; color: #ff0000;">Attention�!!! As
                your database is accessible from the Internet, it is strongly
                recommended to use a safe password strategy, including a mix a
                upper and lower case characters, digits, and special characters
                into a string with no significance!!!</span><span
                class="f_Textestd">You may now create new users if
                required.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Open the </span><span
                class="f_Textestd" style="font-weight: bold;">Data |
                Currency</span> <span class="f_Textestd">dialog and create at
                least your basic currency, with a change rate of 1 and the
                appropriate number of decimals. You may also create the other
                needed currencies for your customers, if required. Your
                customers will use a copy of this one when you will create
                their databases, and they will be able to customize it as for
                their needs.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Open the </span><span
                class="f_Textestd" style="font-weight: bold;">Tools |
                Preferences</span><span class="f_Textestd">dialog and check the
                overall settings as for your needs. Your customers will use a
                copy of those preferences when their databases will be created,
                they will also be able to customize it.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Open the </span><span
                class="f_Textestd" style="font-weight: bold;">Tools | Main
                system</span><span class="f_Textestd">dialog, and select your
                own default system. Your customers will receive a copy of this
                information, which they will be able to customize for their
                needs.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Open the </span><span
                class="f_Textestd" style="font-weight: bold;">Tools | VAT
                rate</span><span class="f_Textestd">dialog, and indicate the
                various VAT rates to be used. Your customers will receive a
                copy of this information, which they will be able to customize
                for their needs.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">At this stage, you must exit from
                WinPro/D. You can now create the databases for your
                customers.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Start WinPro production,
        and select menu </span><span class="f_Textestd"
        style="font-weight: bold;">Tools | WinPro/D through
        Internet</span><span class="f_Textestd">. The below dialog
        appears:</span></p>

        <p style="text-align: center;"><img src="img/clip0424eng.jpg" width="579"
        height="674" border="0" alt="clip0424eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Input frame </span><span
                class="f_Textestd" style="font-weight: bold;">WinPro/D
                Server</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Same
                server as WinPro</span><span class="f_Textestd">�: check this
                box when the WinPro and WinPro/D databases are located onto the
                same machine.</span><span class="f_Textestd"
                style="font-weight: bold;">Note that we strongly recommend
                avoiding such a deployment which weakens your
                security</span><span class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">WinPro/D
                server</span><span class="f_Textestd">�: Input here the server
                address on which the master WinPro/D database is
              located</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">MySQL�port</span><span
                class="f_Textestd">�: Port number for MySQL access on this
                server</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">WinPro/D
                master database</span><span class="f_Textestd">�: Name set for
                the WinPro/D database when created.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Those 4 above settings are stored
                into the database, into table </span><span class="f_Textestd"
                style="font-family: 'Courier New';">Settings</span><span
                class="f_Textestd">of </span><span class="f_Textestd"
                style="font-family: 'Courier New';">WinPro
                production</span><span class="f_Textestd">, section
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">WinPro/D</span><span
                class="f_Textestd">. They will be required each time this
                dialog is enabled.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd"
                style="font-weight: bold;">MySQL�user code</span><span
                class="f_Textestd">�: Input the user code for MySQL access (and
                not the code for accessing the WinPro/D database!).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd"
                style="font-weight: bold;">MySQL password</span><span
                class="f_Textestd">�: Access password for MySQL related to the
                user code previously set.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Both settings will not be recorded
                into the database, for security reasons.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Input frame</span><span
                class="f_Textestd" style="font-weight: bold;">Slave WinPro/D
                database</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Customer
                code in WinPro main database</span><span class="f_Textestd">�:
                this list shows the customer file as filled into the WinPro
                production database. Select here the customer who will use the
                generated database .</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Name of
                slave winPro/D database</span><span class="f_Textestd">�: Input
                here the database name assigned to the customer. It is
                recommended to use the customer code, for an easy
                maintenance.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">WinPro/D�user code</span><span
                class="f_Textestd">�: Assign here a WinPro/D user code to your
                customer. A new user will be created into his WinPro/D
                database, with every access rights. Your customer is then free
                to add any users required.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">WinPro/D�password</span><span
                class="f_Textestd">�: Set here a password for your customer.
                Here again we insists on the pertinence of a safe password
                strategy, for yourself and for your customers.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Price
                list</span><span class="f_Textestd">�: Price list code assigned
                to the customer</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Currency</span><span
                class="f_Textestd">�: Your customer's currency. It is better to
                have set it first into the master Winpro/D currency
                table.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Discounts</span><span
                class="f_Textestd">�: Discount awarded to your customer. Note
                that the discount formulas will also be transferred, without
                any intervention from you.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Round up
                to 10cm</span><span class="f_Textestd">�: Set here if the
                prices calculated by your customer will be rounded up to 10 cm
                for a given design dimension</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">On
                current prices</span><span class="f_Textestd">�: Set here if
                calculated prices will be based on Current or List
                prices.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Discount
                per windows on orders</span><span class="f_Textestd">�: Set if
                the detail of discount should be displayed for each design onto
                the paper order form sent to you by your customer.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Locked
                access (Acc�s bloqu�)</span><span class="f_Textestd">�: allows
                you to forbid the access to the database.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Allow use
                without dongle (Autoriser utilisation sans cl�)</span><span
                class="f_Textestd">�: Leaves you allow the use of the program
                without a Sentinel dongle. In this case, the number of designs
                input into a given order or quotation will be transferred
                automatically to Quadrature, and an invoice will be established
                proportionally to the number of lines reported. On another
                hand, you may supply the program to your customers for free
                with this deployment. The below table shows the program
                behaviour according the status of this checkbox, and the use of
                the Sentinel dongle or not:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="113"
              style="width: 113px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">�</span></p>
              </td>
              <td valign="top" width="204"
              style="width: 204px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">With
                </span><span
                style="font-size: 12pt; font-weight: bold;">Sentinel</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">dongle</span></p>
              </td>
              <td valign="top" width="227"
              style="width: 227px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Without
                </span><span
                style="font-size: 12pt; font-weight: bold;">Sentinel</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">dongle</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="113"
              style="width: 113px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">�</span></p>

                <p style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Usage
                without dongle </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">allowed</span></p>
              </td>
              <td valign="top" width="204"
              style="width: 204px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Allowed
                configuration</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; font-style: italic;">No
                lines tracking for invoicing</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Licence
                required</span></p>
              </td>
              <td valign="top" width="227"
              style="width: 227px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Allowed
                configuration</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; font-style: italic;">Invoicing
                for any line recorded</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">No
                licence required</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="113"
              style="width: 113px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">�</span></p>

                <p style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Use
                without dongle </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">forbidden</span></p>
              </td>
              <td valign="top" width="204"
              style="width: 204px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Allowed
                configuration</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; font-style: italic;">No
                lines tracking for invoicing</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Licence
                required</span></p>
              </td>
              <td valign="top" width="227"
              style="width: 227px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

                <p style="text-align: center;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Forbidden
                configuration</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 72px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <p style="margin: 0px 0px 0px 21px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">The main
        advantage of a use without dongle configuration is to allow a temporary
        access to some of your customers, or for customers with a small volume
        of use, without the constraint of a dongle which is a costless
        solution.</span></p>

        <p style="margin: 0px 0px 0px 21px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Create</span><span
                class="f_Textestd">button</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Click on this button to
        create the database for your customer. If the database already exists
        on the server, an error message is displayed. Refer then to the next
        paragraph, �</span><span class="f_Textestd"
        style="font-weight: bold;">'Update' ('Mettre � jour')</span><span
        class="f_Textestd">�.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The creation process
        achieves the following steps:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Check validity of input information,
                with an error message in case of missing setting.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Storage of input information into
                WinPro production database</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Connexion to the WinPro/D
                server</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creation of the customer
                database</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creation of 'commercial' tables into
                this database, the tables containing the customizable settings
                for each customer.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creation of views onto the technical
                tables contained into the master WinPro/D database. This
                implies that you will have only a single database to
                maintain!</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creation and duplication of the dict
                table as contained into the master WinPro/D database</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creation of a user into the customer
                WinPro/D database, with the code and password you previously
                set</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creation of user rights, necessary
                and sufficient, for this user into MySQL. Those rights are
                granted and applied onto the whole WinPro/D database for this
                customer; every rights are allocated, except </span><span
                class="f_Textestd" style="font-family: 'Courier New';">SHOW
                DATABASES, SHUTDOWN</span><span class="f_Textestd">and
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">SUPER</span><span
                class="f_Textestd">. The </span><span class="f_Textestd"
                style="font-family: 'Courier New';">CREATE VIEW</span><span
                class="f_Textestd">access right is also applied onto the master
                database; this is necessary for potential update of the views.
                A MySQL password is also generated, and you have no direct
                access to it, or your customer. This password is generated
                using the same rules as for password generation using WinPro
                production; refer to the corresponding chapter of WinPro 8
                release notes for more details.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creation of a record into table
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">Societe</span><span
                class="f_Textestd">. This record will receive the name of your
                customer, as defined into your WinPro production customer file
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">Client</span><span
                class="f_Textestd">(and as shown into the list of customer
                within the ��Customer information for WinPro/D��
              dialog)</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Copy of the content of table
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">Devise
                (Currencies)</span><span class="f_Textestd">from the master to
                the slave database.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Copy of the content of table
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">Settings</span><span
                class="f_Textestd">from the master to the slave
              database.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Storage of connexion and
                authentification settings into table </span><span
                class="f_Textestd"
                style="font-family:       'Courier New';">Settings</span><span
                class="f_Textestd">of the slave customer database, section
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">WinPro/D</span><span
                class="f_Textestd">�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="margin: 4px 0px 0px 48px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Key
                (Key field)</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Content</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Client</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Customer
                code within WinPro production</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Code
                Tarif</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">List
                price code set for the customer</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Coeff</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Multiplying
                coefficient of the list price code set for the
                customer</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Devise</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Base
                currency for the customer</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">TauxDevise</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Multiplying
                coefficient of the base currency for this customer</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Remise1,
                Remise2, Remise3</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Base
                discounts awarded to the customer</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Arrondi</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 if
                dimensions of designs have to be rounded up to 10 cm for price
                calculation, 0 otherwise</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Prix
                Courant</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 for
                price calculation based on current prices, 0
                otherwise</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Remise
                par repere</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 for
                calculation of discounts by lines onto fabricator order form, 0
                otherwise</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Intercalaire</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Multiplying
                coefficient for the price of the glazing in case the specific
                colour for spacer feature is used</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Bloque</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 if
                the customer is not allowed to access his database anymore, 0
                otherwise</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Internet</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 if
                the customer is allowed to use the program without the Sentinel
                dongle, 0 otherwise</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Licence</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copy
                of the winpro.lic licence file</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Site</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copy
                of the site.var file</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">VarRemise</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copy
                of the remise.var file</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">VarSpecif</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copy
                of the specific.var file</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; text-decoration: underline;">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Update
                ('Mettre � jour')</span><span
              class="f_Textestd">button</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Click this button to
        update an existing WinPro/D database. If the database is not already
        existing, an error message is displayed. Refer to the previous
        paragraph, �</span><span class="f_Textestd"
        style="font-weight: bold;">Create</span><span
        class="f_Textestd">�.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The update process
        achieves the following steps:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Check validity of input information,
                with an error message in case of missing setting.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Storage of input information into
                WinPro production database</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Connexion to the WinPro/D
                server</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Refresh of the views into master
                database</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Modification or creation of the user
                set into the customer database</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Allocation of MySQL user right for
                this user</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Update of the Societe (Company)
                table content</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Storage of the customer settings, as
                described into the above table.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Abort
                ('Abandon')</span><span class="f_Textestd">button</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Abort the
        procedure.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Broadcast of
        WinPro/D</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The broadcast of
        WinPro/D for a MySQL connexion via Internet require less files than the
        Foxpro version as well as for the master WinPro/D version. Needed files
        are listed below:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">WinProD.exe</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Mysqldata.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Libmysql.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Clepar.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Cleusb.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Modules.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Stdreports.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Wpreport.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Optionally the file named
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">specific.dll</span><span
                class="f_Textestd">(please advise us)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Any </span><span class="f_Textestd"
                style="font-family: 'Courier New';">strings.*</span> files</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Your own </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">lang.ini</span> file</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">The </span><span class="f_Textestd"
                style="font-family: 'Courier New';">mySQL</span><span
                class="f_Textestd">(containing the scripts needed for table
                creation; same directory as WinPro production).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">A </span><span class="f_Textestd"
                style="font-family: 'Courier New';">WinPro.ini</span><span
                class="f_Textestd">file, with adapting the </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">[Database]</span><span
                class="f_Textestd">section to the WinPro/D MySQL server access
                settings, and to the specific database settings for this
                customer</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Moreover, you will have
        to communicate to your customer his access code and password.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Finally, you will have
        to distribute the Sentinel dongle with its driver, except if you wish
        to work without dongle (see the corresponding chapter at the end of the
        document).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Those files would
        require an upgrade only in case of significant changes or new feature
        within WinPro/D.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The only file specific
        for each customer is </span><span class="f_Textestd"
        style="font-family:    'Courier New';">WinPro.ini</span><span
        class="f_Textestd">, because it contains the connexion settings. All
        keys others than the ones included into the </span><span
        class="f_Textestd"
        style="font-family: 'Courier New';">[Database]</span><span
        class="f_Textestd">section must be deleted, as they are stored into the
        </span><span class="f_Textestd"
        style="font-family: 'Courier New';">Settings</span><span
        class="f_Textestd">table created into the database assigned to the
        customer.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">No more broadcast for
        technical data or licence required, those data are included into the
        MySQL database that the customer can access, and will be exploited from
        this location.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">First start for
        a customer version</span></p>

        <p class="p_Textestd"><span class="f_Textestd">At the first start
        stage, WinPro/D displays the company label dialog, which allows the
        customer to input his suitable text for his company. As long as nothing
        is input into the </span><span class="f_Textestd"
        style="font-weight: bold;">Sous titre (Sub-Title)</span><span
        class="f_Textestd">field of the dialog, it will appear again at every
        start of the program. In order to bypass the dialog, or if nothing
        needs to be indicated, the customer may input a single dot.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">It is recommended for
        the user to check the validity of the settings into the Tools menu, and
        adapt it as needed. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The document layout may
        also need to be adapted (into menu </span><span class="f_Textestd"
        style="font-weight: bold;">Tools | Preferences</span><span
        class="f_Textestd">, tabs </span><span class="f_Textestd"
        style="font-weight: bold;">Customer documents</span><span
        class="f_Textestd">, </span><span class="f_Textestd"
        style="font-weight: bold;">Invoice</span><span class="f_Textestd">and
        </span><span class="f_Textestd"
        style="font-weight: bold;">Drawing</span><span class="f_Textestd">),
        eventually according a customized logo.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Updates /
        upgrades</span></p>

        <p class="p_Textestd"><span class="f_Textestd">For the program itself,
        the upgrade of WinPro/D, for a MySQL connexion via Internet, is
        processed with distributing </span><span class="f_Textestd"
        style="font-weight: bold;">the same files</span><span
        class="f_Textestd">as for an installation, </span><span
        class="f_Textestd" style="font-weight: bold;">except the winpro.ini
        file</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Concerning the update of
        technical data, only the master WinPro/D database needs to be updated,
        with importing the fabricator data again after extraction from WinPro
        production. This needs to be done once, on the master database, do
        never try to update the slave databases.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Finally, for the
        database structure which evolutes with the WinPro version number, the
        behaviour is described below:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Master
                database upgraded before the slave database</span><span
                class="f_Textestd">�: the customer keep on using the program as
                usually without taking care of the modifications. However, the
                new feature won't be available until the customer has installed
                the same version of WinPro/D as the fabricator. When the
                customer receives the new version, WinPro/D upgrades the tables
                that are specific to the customer targeted, and refreshes the
                concerned views.</span></td>
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
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Slave
                database upgraded before the master database</span><span
                class="f_Textestd">�: WinPro/D upgrades the customer database,
                but is intended to fail finding the fields it needs into the
                views toward the master database. </span><span
                class="f_Textestd" style="font-weight: bold;">This deployment
                is then to avoid absolutely</span><span
                class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Restrictions of
        use onto the slave database</span></p>

        <p class="p_Textestd"><span class="f_Textestd">A single restriction
        known this day: the customer cannot access the menu to import data from
        fabricator. This is obviously necessary and critical!</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Volumes of data
        and connexion speeds</span></p>

        <p class="p_Textestd"><span class="f_Textestd">We tested without
        troubles the creation of 250 slave database, along with the master
        database, onto a small test server. An empty database is about less
        than 1Mb on the server. You will need to add the space for specific
        tables for each customer (tables for customers, orders &amp;
        quotations, representatives, etc).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The number of 250 may be
        passed easily, but the Internet connexion speeds may be considered
        too.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The most important
        imitating factor is the number of simultaneous connexions. According
        our first evaluations, an average of 512Kb by user simultaneously
        connected is required for a correct use, and a minimum de 2Mb globally
        for good performances (then no more than 4 users simultaneously in this
        case). It is probable that above 10 simultaneous users connected, the
        necessary bandwidth decreases significantly in average by user, because
        statistically every user won't read or write data into tables at the
        same time, but feedbacks are missing for us to supply more information.
        We think that for 50 simultaneous users, the required bandwidth would
        be of about 20Mb at the server level, using a SDSL line.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">At the user side, we
        recommend a minimum of 1Mb for download, and 512Kb for upload. It is
        obvious that a higher speed line would bring more speed, but if the
        server line is adapted.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">At the server level, the
        processor load will be relatively limited, but an as large as possible
        RAM memory amount is better, as well as a good SCSI disk
        system.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Invoicing for
        use without dongle/span&gt;</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Into this mode, the
        information collected onto our server is listed below:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Fabricator number: a number for
                internal use by Quadrature, corresponding to your company.
                </span><span class="f_Textestd"
                style="font-style: italic; font-weight: bold;">No other
                information are transferred</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Customer code: your WinPro code of
                the concerned customer.</span><span class="f_Textestd"
                style="font-style: italic; font-weight: bold;">No other
                information concerning the customer are transferred</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Order number�: the order number
                created by the customer</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Number of lines: number of order
                lines (designs) recorded. Additional articles, profiles,
                installation articles and bent sheets are not counted
                here.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Date and time recorded for the first
                order line creation.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic; font-weight: bold;">The 3 last
                settings are the only settings transferred for each order
                recorded by your customer</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic; font-weight: bold;">The above listed
                settings are the only settings transferred to us.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic; font-weight: bold;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This feature is supplied
        as for experiment purpose. It will not be invoiced before a full
        validation. Nevertheless, you will receive the log files created onto
        our server, for information or validation purposes.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">To conclude, the
        invoicing rate for this feature is still to be determined.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>
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
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Incompatible version 7.2, sauf si
        pr�cis�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="466" bgcolor="#d8ffff"
              style="width: 466px; background-color: #d8ffff;"><p
                style="text-align: center; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">WinPro/D 8.0.2
                Internet (format mySQL)</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Introduction</span></p>

        <p class="p_Textestd"><span class="f_Textestd">La version 8.0.2 de
        WinPro introduit une nouvelle fonctionnalit�: la possibilit� de g�rer
        plusieurs bases de donn�es WinPro/D, attribu�es � vos clients, sur un
        seul serveur WinPro/D sous MySQL, tout en n�ayant � maintenir qu�une
        seule base de donn�es technique.� Cette fonctionnalit� n�est disponible
        que dans les versions dat�es du 4 f�vrier 2008 ou au-del�. Cette
        fonctionnalit� est actuellement en phase de tests chez certains de nos
        clients. La version d�finitive sera diffus�e quelques semaines plus
        tard.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Principe de
        fonctionnement</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Une base de donn�es
        WinPro/D est install�e sur un serveur MySQL, disposant d�un acc�s �
        Internet.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Sur ce m�me serveur, une
        base de donn�es est cr��e pour chaque client. Elle contient d�une part
        des tables propres au client, telles que Commande, Detail, Client,
        Devise, etc�, et d�autre part des vues (VIEW) sur les tables de
        param�trage propres au fabricant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Par l�utilisation de
        MySQL et de mots de passe judicieusement choisis, on dispose ainsi d�un
        serveur unique, mais o� chaque client ne peut voir que ce qui le
        concerne au point de vue commercial. D�un point de vue technique, il
        dispose de votre param�trage, mais uniquement � travers son utilisation
        dans WinPro/D, sans acc�s direct aux tables de donn�es.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Remarque importante�: vu
        la s�curit� d�acc�s offerte par cette configuration, et pour am�liorer
        les performances, il n�a pas �t� utile de crypter le contenu de
        certains champs, comme cela se fait avec WinPro/D FoxPro. Le contenu
        physique des tables de param�trage n�est en effet pas accessible
        directement par l�utilisateur. Seuls WinPro/D dispose du moyen d�y
        acc�der, en calculant un mot de passe complexe, ainsi bien s�r que
        l�administrateur de la base de donn�es.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Installation</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Les explications qui suivent
                pourront vous para�tre un peu longue, mais elles sont tr�s
                d�taill�es. Dans la pratique, la proc�dure est vraiment simple
                � mettre en �uvre.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">La premi�re �tape consiste �
                installer MySQL sur un serveur disposant d�un acc�s haut d�bit
                � Internet. Assurez-vous que vous pouvez cr�er des utilisateurs
                depuis une station distante, et que vous avez d�sactiv� le mode
                �strict� de MySQL pendant l�installation. Voyez les deux copies
                d��cran ci-apr�s.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Lucida Sans Unicode';">�</span></p>

        <p style="margin: 0px 0px 0px 21px;"><img src="img/clip0422.gif"
        width="522" height="398" border="0" alt="clip0422"></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p style="margin: 0px 0px 0px 21px;"><img src="img/clip0423.gif"
        width="519" height="395" border="0" alt="clip0423"></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">La suite de l�installation comprend
                les points suivants, qui seront d�taill�s ci-apr�s�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Installation de l�ex�cutable
                WinPro/D ma�tre</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cr�ation de la base de donn�es devis
                � partir de WinPro</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cr�ation des informations client �
                partir de WinPro</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Installation de la cl�
                Sentinel.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cr�ation de la base de donn�es
                (vide) WinPro/D ma�tre </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Importation de la base de donn�es
                devis dans la base WinPro/D ma�tre</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Initialisation de
              WinPro/D</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cr�ation des bases client � partir
                de WinPro production</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Distribution de l�ex�cutable
                WinPro/D et des informations de connexion � vos
              clients</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">L'installation du WinPro/D ma�tre se
                fera sur une station de travail disposant d'�un acc�s au
                serveur MySQL assign� � WinPro/D. Votre installation WinPro
                principale devra �galement pouvoir acc�der � ce serveur Les
                deux versions peuvent d�'ailleurs r�sider sur la m�me station
                de travail.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Exportez la table Settings dans un
                fichier winpro.ini (</span><span class="f_Textestd"
                style="font-weight: bold;">Menu Utilitaires | Exportation vers
                WinPro.ini</span><span class="f_Textestd">) (attention � ne pas
                �craser votre copie principale�!!!). Si vous passez outre de
                cette �tape, WinPro/D g�n�rera des valeurs par d�faut pour tous
                les renseignements normalement contenus dans winpro.ini lors de
                la cr�ation de la base ma�tre</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Ajoutez une section </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">[Database]</span><span
                class="f_Textestd">� ce winpro.ini, pour configurer l'�acc�s au
                serveur WinPro/D. Pour rappel, voici la description de cette
                section�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 4px 0px 0px 72px;"><span
        class="f_Winproini">[Database]</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">DLL=mysqldata.dll</span></p>

        <p style="margin: 4px 0px 0px 72px;"><span
        class="f_Winproini">Host=xxx</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Name=yyy</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Engine=zzz</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Transactions=bbb</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Character set=ccc</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">xxx</span><span
                class="f_Textestd">est � remplacer par le nom ou l�'adresse de
                votre serveur WinPro/D (p.ex. 192.168.1.1, <a
                href="www.nom_societe.com" target="_blank"
                class="weblink">www.nom_societe.com</a>, etc.)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">yyy</span><span
                class="f_Textestd">est � remplacer par le nom que vous
                souhaitez donner � votre base de donn�es (WinPro se chargera de
                la cr�er lui-m�me). Exemples�: winpro, production, �</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">zzz</span><span
                class="f_Textestd">est � remplacer par le type de moteur de
                base de donn�es que vous souhaitez utiliser. Pour une
                installation mySQL de base, vous avez le choix entre
                </span><span class="f_Textestd">&lsquo;</span><span
                class="f_Textestd"
                style="font-weight: bold;">InnoDB</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">et
                </span><span class="f_Textestd">&lsquo;</span><span
                class="f_Textestd"
                style="font-weight: bold;">myISAM</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">.
                Nous vous sugg�rons de choisir le format </span><span
                class="f_Textestd"
                style="font-weight: bold;">InnoDb</span><span
                class="f_Textestd">pour un acc�s Internet.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">bbb</span><span
                class="f_Textestd">est � remplacer soit par 1 (valeur par
                d�faut), soit par 0. Si vous indiquez 1, WinPro effectuera un
                certain nombre d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">op�rations � l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">int�rieur d</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">une
                transaction. Dans le cadre de l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">utilisation de WinPro/D, nous vous
                conseillons fortement d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">utiliser les transactions.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">ccc</span><span
                class="f_Textestd">contient le type de caract�res � utiliser�;
                la valeur par d�faut est latin1, qui convient pour les langues
                d</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">Europe occidentale (fran�ais, anglais,
                espagnol, italien, allemand, etc). La ligne est
                optionnelle.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Pour proc�der � l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">installation de la copie ma�tre de WinPro/D,
                copiez sur une station de travail les fichiers
              suivants�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">WinProD.exe</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Mysqldata.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Libmysql.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Clepar.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Cleusb.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Modules.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Stdreports.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Wpreport.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">MySQLWPR.dll (� partir de
                la version 8.0.3)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Winpro.ini (cr�� tel que
                d�crit ci-avant)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Eventuellement, le fichier
                specific.dll (nous consulter)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Tous les fichiers
                strings.*</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Votre fichier
                lang.ini</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Le r�pertoire mysql (qui
                contient les scripts de cr�ation des tables�; c</span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">&rsquo;</span><span
                class="f_Textestd" style="font-family: 'Courier New';">est
                exactement le m�me r�pertoire que pour WinPro production).
                Cette �tape sera supprim�e � partir de la version
              8.1.0</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">A partir de WinPro production,
                exportez une base de donn�es devis. Le r�sultat de cette
                op�ration produit un seul fichier, nomm� data.pak, qui sera
                constitu� dans un sous r�pertoire </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">Devis</span><span
                class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Toujours � partir de WinPro
                production, cr�ez un </span><span class="f_Textestd"
                style="font-family: 'Courier New';">Infocli</span><span
                class="f_Textestd">pour un client quelconque (menu Utilitaire |
                Informations client pour module devis)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Copiez dans un r�pertoire accessible
                depuis WinPro/D ma�tre, tous les fichiers g�n�r�s
              ainsi�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">data.pak</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">infocli.dat</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">licence.ini</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">winpro.lic</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">et le cas �ch�ant les
                fichiers</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">site.var</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">remise.var</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">specif.var</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-family: 'Courier New';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Installez si n�cessaire le driver de
                la cl� Sentinel, ainsi que la cl� elle-m�me.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Notez que rien ne vous
        emp�che de proc�der � l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">installation
        depuis un poste o� WinPro production est d�j� install�, ce qui vous
        permet de b�n�ficier d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une cl�
        Sentinel d�j� install�e.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Si une autre licence WinPro/D a �t�
                install�e auparavant sur le m�me station de travail, il est
                indispensable de supprimer de la base de registre, dans la
                section </span><span class="f_Textestd"
                style="font-family: 'Courier New';">HKEY_CLASSES_ROOT</span><span
                class="f_Textestd">, les cl�s </span><span
                class="f_Textestd">&lsquo;</span><span class="f_Textestd"
                style="font-family: 'Courier New';">WinProD</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">et
                </span><span class="f_Textestd">&lsquo;</span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">HP</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Lancez WinPro/D. Au login, indiquez
                vos codes d</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">acc�s MySQL (indispensables pour cr�er une
                base de donn�es), et v�rifiez les adresses de connexion.
                Lorsque WinPro/D vous le demande, confirmez que vous voulez
                effectivement cr�er une nouvelle base de donn�es.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Laissez WinPro/D constituer une base
                vide, ce qui prend quelques dizaines de secondes.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Apr�s constitution de la base vide,
                WinPro/D vous demande de lui indiquer l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">emplacement du fichier </span><span
                class="f_Textestd"
                style="font-family: 'Courier';">licence.ini</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-family: 'Courier';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Apr�s lecture du fichier
                licence.ini, le dialogue </span><span
                class="f_Textestd">&lsquo;</span><span
                class="f_Textestd">Soci�t�</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">s</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">ouvre. Indiquez-y quelque chose dans le
                premier champ (</span><span class="f_Textestd"
                style="font-weight: bold;">Sous-titre</span><span
                class="f_Textestd">).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Ex�cutez le menu </span><span
                class="f_Textestd" style="font-weight: bold;">Utilitaires |
                Importation donn�es fabricant</span><span class="f_Textestd">.
                WinPro/D vous demande de localiser le fichier </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">data.pak</span><span
                class="f_Textestd">, que vous avez constitu� depuis WinPro
                production, puis importe les donn�es de ce fichier dans la base
                de donn�es ma�tre.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Ouvrez le dialogue </span><span
                class="f_Textestd" style="font-weight: bold;">Utilitaires |
                Utilisateur</span><span class="f_Textestd">, s�lectionnez
                l</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">utilisateur </span><span class="f_Textestd"
                style="font-weight: bold;">Administrateur</span><span
                class="f_Textestd">, et donnez-lui un mot de passe.
                </span><span class="f_Textestd"
                style="font-weight: bold; color: #ff0000;">Attention�!!! Comme
                votre base de donn�es va �tre accessible depuis Internet, nous
                vous conseillons fortement d</span><span class="f_Textestd"
                style="font-weight: bold; color: #ff0000;">&rsquo;</span><span
                class="f_Textestd"
                style="font-weight: bold; color: #ff0000;">utiliser un mot de
                passe s�r, comprenant un m�lange de lettres majuscules et
                minuscules, de chiffres, et de caract�res de ponctuation, et
                n</span><span class="f_Textestd"
                style="font-weight: bold; color: #ff0000;">&rsquo;</span><span
                class="f_Textestd"
                style="font-weight: bold; color: #ff0000;">ayant aucune
                signification particuli�re�!!!</span><span
                class="f_Textestd">Vous pouvez, si vous le souhaitez, cr�er
                d</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">autres utilisateurs, </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Ouvrez le dialogue </span><span
                class="f_Textestd" style="font-weight: bold;">Donn�s |
                Devises</span><span class="f_Textestd">, et cr�ez-y au moins
                votre devise de base, avec un taux de change de 1, et le nombre
                de d�cimales ad�quat. Vous pouvez �galement y cr�er les autres
                devises que vos clients sont susceptibles d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">utiliser. Vos clients recevront chacun une
                copie de cette table lorsque vous constituerez leur base de
                donn�es. Ils pourront en modifier le contenu �
              volont�.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Ouvrez le dialogue </span><span
                class="f_Textestd" style="font-weight: bold;">Utilitaires |
                Pr�f�rences�</span><span class="f_Textestd">et passez-le en
                revue. Mettez � jour les diff�rentes valeurs selon vos
                souhaits. Vos clients recevront chacun une copie de ces
                pr�f�rences lorsque vous constituerez leur base de donn�es, et
                ils pourront modifier ces r�glages.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Ouvrez le dialogue </span><span
                class="f_Textestd" style="font-weight: bold;">Utilitaires |
                Syst�me principal</span><span class="f_Textestd">, et
                s�lectionnez votre syst�me par d�faut. Vos clients recevront
                une copie de cette information, et pourront la changer si
                n�cessaire.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Ouvrez le dialogue </span><span
                class="f_Textestd" style="font-weight: bold;">Utilitaires |
                Taux de TVA</span><span class="f_Textestd">, et indiquez les
                diff�rents taux de TVA � utiliser. Vos clients recevront une
                copie de cette information, et pourront la changer si
                n�cessaire.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">A ce stade, vous pouvez quitter
                WinPro/D. Vous pouvez maintenant cr�er les bases de donn�es de
                vos clients.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Depuis WinPro
        production, s�lectionnez le menu </span><span class="f_Textestd"
        style="font-weight: bold;">Utilitaires | WinPro/D Internet</span><span
        class="f_Textestd">. Le dialogue suivant s</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ouvre
        alors�:</span></p>

        <p style="text-align: center;"><img src="img/clip0424fra.jpg" width="579"
        height="673" border="0" alt="clip0424fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Cadre de saisie </span><span
                class="f_Textestd" style="font-weight: bold;">Serveur
                WinPro/D</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">M�me
                serveur que WinPro</span><span class="f_Textestd">�: cochez
                cette case si votre base de donn�es WinPro et WinPro/D se
                trouvent sur le m�me serveur.</span><span class="f_Textestd"
                style="font-weight: bold;">Notez que nous vous d�conseillons
                formellement cette configuration, car cela affaiblit votre
                s�curit�</span><span class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Serveur
                WinPro/D</span><span class="f_Textestd">�: Indiquez ici
                l�'adresse du serveur sur lequel se trouve la base ma�tre de
                WinPro/D</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Port
                MySQL</span><span class="f_Textestd">�: num�ro du port d�acc�s
                � MySQL sur ce serveur</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Base de
                donn�es WinPro/D ma�tre</span><span class="f_Textestd">�:
                indiquez ici le nom que vous avez donn� � votre base de donn�es
                WinPro/D lorsque vous l'�avez cr��e.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Les 4 informations ci-dessus seront
                stock�es en base de donn�es, dans la table </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">Settings</span><span
                class="f_Textestd">de </span><span class="f_Textestd"
                style="font-family: 'Courier New';">WinPro
                production</span><span class="f_Textestd">, section
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">WinPro/D</span><span
                class="f_Textestd">. Elles seront repropos�e � chaque affichage
                de ce dialogue.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd"
                style="font-weight: bold;">Code utilisateur MySQL</span><span
                class="f_Textestd">�: indiquez ici votre code utilisateur pour
                MySQL (et non pour votre base WinPro/D).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd"
                style="font-weight: bold;">Mot de passe MySQL</span><span
                class="f_Textestd">�: indiquez ici, de m�me, votre mot de passe
                pour MySQL.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Les deux informations ci-dessus ne
                seront pas stock�es, pour raison de s�curit�.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Cadre de saisie</span><span
                class="f_Textestd" style="font-weight: bold;">Base de donn�es �
                cr�er�</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Code
                client dans WinPro production</span><span class="f_Textestd">�:
                cette liste reprend votre fichier client tel qu'�il figure dans
                WinPro production. S�lectionnez-y le client pour lequel vous
                souhaitez cr�er une base de donn�es.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Nom de la
                base de donn�es � cr�er</span><span class="f_Textestd">�:
                Indiquez ici le nom de la base de donn�es que vous attribuez �
                votre client. Nous vous sugg�rons d'�utiliser le code du client
                dans ce nom, pour faciliter la maintenance de vos bases de
                donn�es.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Code
                utilisateur WinPro/D</span><span class="f_Textestd">�:
                Attribuez ici un code utilisateur pour votre client. Un
                utilisateur sera cr�� dans sa base WinPro/D, avec tous les
                droits. Le client est libre d'�ajouter d�autres utilisateurs
                s'il le souhaite.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Mot de
                passe WinPro/D</span><span class="f_Textestd">�: Attribuez ici
                un mot de passe pour votre client. Ici aussi, nous insistons
                sur l'�utilisation de mots de passe s�rieux, et sur votre
                insistance aupr�s de vos clients pour l'�utilisation de ces
                mots de passe.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Tarif</span><span
                class="f_Textestd">�: Le code tarif attribu� � votre
                client</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Devise</span><span
                class="f_Textestd">�: La devise de votre client. Il est
                pr�f�rable que cette devise figure dans la table des devises du
                WinPro/D ma�tre.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Remises</span><span
                class="f_Textestd">�: Les remises accord�es � votre client.
                Notez que les formules de remise seront �galement transf�r�es,
                mais cela ne demande aucune action particuli�re de votre
                part.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Arrondir
                par 10cm</span><span class="f_Textestd">�: Indiquez ici si les
                prix calcul�s par votre client seront bas�s sur des dimensions
                de fen�tre arrondies aux 10 cm sup�rieurs</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Calculs
                en prix courant</span><span class="f_Textestd">�: Indiquez si
                les prix calcul�s par votre client sont bas�s sur vos prix
                tarif ou vos prix courants.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Remise
                par rep�re sur commande fabricant</span><span
                class="f_Textestd">�: Indique si le d�tail de la remise doit
                �tre indiqu� pour chaque fen�tre sur le bon de commande papier
                que vous transmet votre client.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Acc�s
                bloqu�</span><span class="f_Textestd">�: vous permet
                d�'interdire l�acc�s � la base de donn�es</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Autoriser
                utilisation sans cl�</span><span class="f_Textestd">�: Vous
                permet d'�autoriser votre client � fonctionner sans la cl�
                Sentinel. Dans ce cas, le nombre de lignes de devis ou commande
                cr��s nous sera transmis, et nous �tablirons une facture
                proportionnelle au nombre de lignes enregistr�es. Par contre,
                vous pouvez fournir gratuitement WinPro/D dans cette
                configuration. Le tableau suivant indique le comportement de
                WinPro/D, en fonction de l�'�tat de cette case � cocher, et de
                la pr�sence ou non d�une cl� Sentinel�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="113"
              style="width: 113px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">�</span></p>
              </td>
              <td valign="top" width="204"
              style="width: 204px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Cl�
                </span><span
                style="font-size: 12pt; font-weight: bold;">Sentinel</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">pr�sente</span></p>
              </td>
              <td valign="top" width="227"
              style="width: 227px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Cl�
                </span><span
                style="font-size: 12pt; font-weight: bold;">Sentinel</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">absente</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="113"
              style="width: 113px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">�</span></p>

                <p style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Absence
                de cl� </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">autoris�e</span></p>
              </td>
              <td valign="top" width="204"
              style="width: 204px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Fonctionnement
                autoris�</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; font-style: italic;">Pas
                de facturation � la ligne enregistr�e</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Licence
                d'�utilisation payante</span></p>
              </td>
              <td valign="top" width="227"
              style="width: 227px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Fonctionnement
                autoris�</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; font-style: italic;">Facturation
                de l�'utilisation par ligne enregistr�e</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Pas de
                licence d'�utilisation</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="113"
              style="width: 113px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">�</span></p>

                <p style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Absence
                de cl� </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">interdite</span></p>
              </td>
              <td valign="top" width="204"
              style="width: 204px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Fonctionnement
                autoris�</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; font-style: italic;">Pas
                de facturation � la ligne enregistr�e</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Licence
                d�'utilisation payante</span></p>
              </td>
              <td valign="top" width="227"
              style="width: 227px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

                <p style="text-align: center;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Fonctionnement
                interdit</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 72px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <p style="margin: 0px 0px 0px 21px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">L'�int�r�t
        d�un fonctionnement sans cl� est de permettre un acc�s temporaire �
        certains clients, ou � des clients n'�ayant qu'�un faible volume
        d'�utilisation, sans mobiliser de cl� Sentinel, donc � un moindre
        co�t.</span></p>

        <p style="margin: 0px 0px 0px 21px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Bouton </span><span
                class="f_Textestd" style="font-weight: bold;">Cr�er</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Cliquez sur ce bouton
        pour cr�er la base de donn�es de votre client. Si la base de donn�es
        existe d�j�,� vous recevrez un message d�erreur. Reportez vous alors au
        paragraphe suivant, �</span><span class="f_Textestd"
        style="font-weight: bold;">Mettre � jour</span><span
        class="f_Textestd">�.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">La cr�ation encha�ne les
        actions suivantes�:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">V�rification de la validit� des
                informations saisies. Message d�erreur s�il manque une
                information.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Sauvegarde des informations saisies
                dans la base de donn�es WinPro production</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Connexion au serveur
              WinPro/D</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cr�ation de la base de donn�es
                client</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cr�ation des tables �commerciales�
                dans cette base de donn�es, c'est-�-dire des table qui
                contiendront les donn�es propres � chaque client</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cr�ation de vues (view) sur la base
                de donn�es technique contenue dans la base WinPro/D ma�tre.
                Ceci implique que vous n�aurez qu�une seule base de donn�es �
                maintenir</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cr�ation et duplication de la table
                dict telle que contenue dans la base WinPro/D ma�tre</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cr�ation d�un utilisateur dans la
                base WinPro/D client, avec le code et le mot de passe que vous
                avez d�fini</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cr�ation des droits utilisateurs
                n�cessaires et suffisants pour cet utilisateur, au niveau de
                MySQL. Ces droits sont appliqu�s sur la base client�; tous les
                droits sont accord�s, sauf </span><span class="f_Textestd"
                style="font-family: 'Courier New';">SHOW DATABASES,
                SHUTDOWN</span><span class="f_Textestd">et </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">SUPER</span><span
                class="f_Textestd">. Le droit </span><span class="f_Textestd"
                style="font-family: 'Courier New';">CREATE VIEW</span><span
                class="f_Textestd">est �galement appliqu� sur la base ma�tre�;
                ce droit est n�cessaire pour les mises � jour �ventuels des
                views. Un mot de passe MySQL est g�n�r�, auquel ni vous ni le
                client n�avez d�acc�s direct. Ce mot de passe est g�n�r� selon
                les m�mes r�gles que pour WinPro production�; reportez-vous au
                chapitre correspondant des notes de release de WinPro 8 pour
                plus d�informations.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cr�ation d�un enregistrement dans la
                table </span><span class="f_Textestd"
                style="font-family: 'Courier New';">Societe</span><span
                class="f_Textestd">. Cet enregistrement recevra le nom de votre
                client, tel que d�fini dans la table </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">Client</span><span
                class="f_Textestd">de WinPro production (et tel qu�il appara�t
                dans la liste des clients du dialogue de cr�ation de base
                client)</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Copie du contenu de la table
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">Devise</span><span
                class="f_Textestd">de la base ma�tre vers la base
              client.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Copie du contenu de la table
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">Settings</span><span
                class="f_Textestd">de la base ma�tre vers la base
              client.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Sauvegarde des donn�es de connexion
                et d�identification dans la table </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">Settings</span><span
                class="f_Textestd">de la base client, section </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">WinPro/D</span><span
                class="f_Textestd">�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="margin: 4px 0px 0px 48px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Cl�
                (champ Key)</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Contenu</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Client</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Code
                du client dans WinPro production</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Code
                Tarif</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Code
                tarif attribu� au client</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Coeff</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Coefficient
                multiplicateur du tarif attribu� au client</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Devise</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Devise
                de base du client</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">TauxDevise</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Coefficient
                multiplicateur de la devise de base du client</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Remise1,
                Remise2, Remise3</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Remises
                de base attribu�es au client</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Arrondi</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 s�il
                faut arrondir les dimensions aux 10cm sup�rieurs pour le calcul
                des prix, 0 sinon</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Prix
                Courant</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 s�il
                faut calculer les prix sur base des prix courants, 0
                sinon</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Remise
                par repere</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 s�il
                faut calculer la remise par ligne de commande sur les commandes
                au fabricant, 0 sinon</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Intercalaire</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Coefficient
                multiplicateur du prix du verre si on indique une couleur pour
                l�intercalaire d�un vitrage</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Bloque</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 si
                le client ne peut plus acc�der � sa base de donn�es, 0 s�il a
                libre acc�s</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Internet</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 si
                le client a le droit de fonctionner sans cl� Sentinel, 0
                sinon</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Licence</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copie
                du fichier winpro.lic</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Site</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copie
                du fichier site.var</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">VarRemise</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copie
                du fichier remise.var</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">VarSpecif</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copie
                du fichier specif.var</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; text-decoration: underline;">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Bouton</span><span
                class="f_Textestd" style="font-weight: bold;">Mettre �
                jour</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Cliquez sur ce bouton
        pour mettre � jour une base de donn�es existant d�j�. Si la base de
        donn�es n�existe pas encore,� vous recevrez un message d�erreur.
        Reportez vous alors au paragraphe pr�c�dent, �</span><span
        class="f_Textestd" style="font-weight: bold;">Cr�er</span><span
        class="f_Textestd">�.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">La mise � jour encha�ne
        les actions suivantes�:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">V�rification de la validit� des
                informations saisies. Message d�erreur s�il manque une
                information.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Sauvegarde des informations saisies
                dans la base de donn�es WinPro production</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Connexion au serveur
              WinPro/D</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Rafra�chissement des views sur la
                base ma�tre</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Modification ou ajout de
                l�utilisateur indiqu� dans la base client</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Attribution des droits MySQL pour
                cet utilisateur</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Mise � jour du contenu de la table
                Societe</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Sauvegarde des param�tres client,
                tels que d�crits dans le tableau pr�c�dent.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Bouton </span><span
                class="f_Textestd"
              style="font-weight: bold;">Abandon</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Annule toute la
        saisie.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Distribution de
        WinPro/D</span></p>

        <p class="p_Textestd"><span class="f_Textestd">La distribution de
        WinPro/D pour une connexion MySQL via Internet requiert moins de
        fichiers que pour la version FoxPro et que pour la version ma�tre. Les
        fichiers n�cessaires sont les suivants�:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">WinProD.exe</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Mysqldata.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Libmysql.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Clepar.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Cleusb.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Modules.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Stdreports.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Wpreport.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Eventuellement, le fichier
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">specific.dll</span><span
                class="f_Textestd">(nous consulter)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Tous les fichiers </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">strings.*</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Votre fichier </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">lang.ini</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Le r�pertoire </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">mysql</span><span
                class="f_Textestd">(qui contient les scripts de cr�ation des
                tables�; c�est exactement le m�me r�pertoire que pour WinPro
                production).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Un fichier </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">WinPro.ini</span><span
                class="f_Textestd">, dont vous modifiez la section </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">[Database]</span><span
                class="f_Textestd">pour refl�ter l�acc�s au serveur WinPro/D et
                � la base propre au client</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">En outre, vous devrez
        communiquer � votre client son code d�acc�s, et son mot de
        passe.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Enfin, vous devrez
        distribuer la cl� Sentinel, et son driver, sauf si vous souhaitez
        fonctionner sans cl� (voir le chapitre correspondant � la fin du
        document).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ces fichiers ne
        requi�rent de mise � jour que pour les changements significatifs de
        fonctionnalit� de WinPro/D. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le seul fichier
        sp�cifique � chaque client est le fichier </span><span
        class="f_Textestd"
        style="font-family: 'Courier New';">WinPro.ini</span><span
        class="f_Textestd">, qui contient les donn�es de connexion. Toutes les
        donn�es autres que celles contenues dans la section </span><span
        class="f_Textestd"
        style="font-family: 'Courier New';">[Database]</span><span
        class="f_Textestd">doivent en �tre �limin�es, puisqu�elles sont d�j�
        stock�es dans la table </span><span class="f_Textestd"
        style="font-family: 'Courier New';">Settings</span><span
        class="f_Textestd">qui a �t� cr��e dans la base attribu�e au
        client.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Il n�y a pas lieu de
        distribuer les donn�es de param�trage, ni de licence. Ces donn�es sont
        d�j� pr�sentes au niveau de la base de donn�es MySQL � laquelle le
        client aura acc�s, et seront exploit�es � partir de l�.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">D�marrage de la
        version client</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Lors du premier
        d�marrage, WinPro/D affiche le dialogue des coordonn�es soci�t�, ce qui
        permet au client de saisir ses propres coordonn�es comme il le
        souhaite. Tant que rien n�est indiqu� dans le champ </span><span
        class="f_Textestd" style="font-weight: bold;">Sous titre</span><span
        class="f_Textestd">, cet �cran reviendra � chaque d�marrage. Si
        l�utilisateur ne souhaite rien y indiquer, il peut se contenter de
        saisir un simple point.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Il est souhaitable que
        l�utilisateur passe en revue les diff�rents points du menu Utilitaires,
        et les adapte si besoin est.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Il est �galement
        n�cessaire d�adapter la mise en page des documents (dans le menu
        </span><span class="f_Textestd" style="font-weight: bold;">Utilitaires
        | Pr�f�rences�</span><span class="f_Textestd">, pages </span><span
        class="f_Textestd" style="font-weight: bold;">Documents
        clients</span><span class="f_Textestd">, </span><span
        class="f_Textestd" style="font-weight: bold;">Facture</span><span
        class="f_Textestd">et </span><span class="f_Textestd"
        style="font-weight: bold;">Dessin</span><span class="f_Textestd">), en
        fonction notamment de son �ventuel logo.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Mises �
        jour</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour ce qui est du
        programme, la mise � jour de WinPro/D, pour une connexion MySQL via
        Internet, se fait en distribuant </span><span class="f_Textestd"
        style="font-weight: bold;">les m�mes fichiers</span><span
        class="f_Textestd">que pour une installation, </span><span
        class="f_Textestd" style="font-weight: bold;">moins le fichier
        winpro.ini</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour ce qui est des
        donn�es de param�trage, il suffit de mettre � jour la base ma�tre, en
        important les donn�es de WinPro/D telles que constitu�es par WinPro
        production. Ceci n�est � faire qu�une seule fois, sur la base ma�tre,
        et en aucun cas sur les bases client.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Enfin pour la structure
        de la base de donn�es, qui �volue avec les num�ros de version de
        WinPro, le comportement est le suivant�:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Base
                ma�tre mise � jour avant la base client</span><span
                class="f_Textestd">�: le client continue � fonctionner sans se
                soucier des modifications. Toutefois, les nouvelles
                fonctionnalit�s ne seront pas accessibles tant que le client
                n�aura pas install� la m�me version de WinPro/D que le
                fabricant. Lorsque le client re�oit la nouvelle version,
                WinPro/D met � jour les tables propres au client, et rafra�chit
                les views concern�s.</span></td>
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
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Base
                client mise � jour avant la base ma�tre</span><span
                class="f_Textestd">�: WinPro/D met � jour la base client, mais
                risque de ne pas trouver les champs dont il a besoin dans les
                views sur la base ma�tre. </span><span class="f_Textestd"
                style="font-weight: bold;">Ce cas de figure est donc �
                proscrire</span><span class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Restrictions
        d�utilisation sur la base client</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Une seule restriction �
        ce jour�: le client ne peut pas importer les donn�es du fabricant. Le
        point de menu correspondant n�est pas accessible. Cette restriction est
        �videmment indispensable�!</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Volumes de
        donn�es et vitesses de connexion</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Nous avons test� sans
        soucis la cr�ation de 250 bases client, � c�t� de la base ma�tre, sur
        un petit serveur de test. Une base vide consomme un peu moins de 1Mb
        sur le serveur. Il faudra y ajouter les donn�es propres � chaque client
        (tables clients, commandes, repr�sentants, etc).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Il est probable que l�on
        puisse d�passer largement 250 bases sur un seul serveur, mais il faut
        tenir compte de la vitesse des lignes de connexion �
        Internet.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le facteur limitatif le
        plus important est en effet le nombre de connexions simultan�es. Selon
        nos premi�res �valuations, il faut une moyenne de 512Kb par utilisateur
        connect� simultan�ment, et un minimum de 2Mb globalement pour de bonnes
        performances (donc pas plus de 4 utilisateurs dans ce cas de figure).
        Il est probable qu�au-del� de 10 utilisateurs simultan�s, la bande
        passante n�cessaire en moyenne par utilisateur d�croisse
        significativement, car statistiquement tout le monde ne va pas lire ou
        envoyer des informations au m�me instant, mais nous manquons encore de
        recul pour fournir des chiffres pr�cis. Nous pensons que pour 50
        utilisateurs simultan�s, la bande passante n�cessaire devrait �tre de
        l�ordre de 20Mb au niveau du serveur, en SDSL.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">C�t� utilisateur, nous
        conseillons au minimum 1Mb en download, et 512Kb en upload. Il est
        �vident qu�une connexion plus rapide apportera plus de vitesse, pour
        autant que le serveur suive.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Au niveau du serveur, la
        charge d�utilisation sera relativement limit�e c�t� processeur. Par
        contre, une m�moire aussi large que possible est � pr�voir, ainsi bien
        s�r que des disques SCSI rapides.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Facturation des
        installations sans cl�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Dans ce mode
        d�utilisation, les informations collect�es sur notre serveur sont les
        suivantes�:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Num�ro de fabricant�: il s�ag�t d�un
                num�ro utilis� en interne chez nous, vous repr�sentant.
                </span><span class="f_Textestd"
                style="font-style: italic; font-weight: bold;">Aucune autre
                information vous concernant n�est transmise.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Code client�: votre code WinPro du
                client concern�. </span><span class="f_Textestd"
                style="font-style: italic; font-weight: bold;">Aucune autre
                information concernant le client n�est transmise</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Num�ro de commande�: la commande
                saisie par le client</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Nombre de lignes�: nombre de lignes
                de commande enregistr�s. Ne sont pas pris en contre les
                articles, profils, articles de pose et t�les pli�es saisis en
                compl�ment de la commande.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Date et heure de l�enregistrement de
                la premi�re ligne de commande.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic; font-weight: bold;">Ces trois
                derni�res informations sont les seules informations transmises
                pour chaque commande enregistr�e par votre client</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic; font-weight: bold;">Les informations
                �num�r�es ci-dessus sont les seules informations
                transmises.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic; font-weight: bold;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette fonctionnalit� est
        fournie actuellement � titre exp�rimental. Elle ne donnera pas lieu �
        facturation avant validation compl�te. Vous recevrez n�anmoins, durant
        la p�riode de validation, � titre d�information et de v�rification, les
        relev�s effectu�s sur notre serveur.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Enfin, le taux de
        facturation � la ligne n�a pas encore �t� d�termin�.</span></p>
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
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Niet compatible me versie 7.2, tenzij anders
        vermeld</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="466" bgcolor="#d8ffff"
              style="width: 466px; background-color: #d8ffff;"><p
                style="text-align: center; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">WinPro/D 8.0.2
                Internet (mySQL formaat)</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Introductie</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Versie 8.0.2 van WinPro
        introduceert een nieuwe eigenschap: de mogelijkheid om verscheidene
        WinPro/D- databases voor uw klanten, op een unieke MySQL server te
        plaatsen, dat u toestaat om met slechts ��n technisch database te
        werken. Deze functionaliteit is beschikbaar slechts voor versies later
        dan de versie d.d. 4 Februari 2008. Deze eigenschap wordt momenteel
        getest bij een aantal van onze klanten, de definitieve versie zal een
        paar later weken worden vrijgegeven. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Overzicht</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Een WinPro/D- database
        wordt ge�nstalleerd op een MySQL server welke is verbonden met het
        Internet.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Op de zelfde server
        wordt voor elke klant een eigen database gecre�erd. Die databases
        zullen enkel klantspecifieke gegevens bevatten zoals Commande
        (Hoofdorder), Detail (het Detail van de Order), Cli�nt (Klant) , Devise
        (Munteenheid), enz.... , dit samengevoegd met bekijken (View) van de
        technische data van de fabrikant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Gebruikmakend van MySQL,
        en een aangewezen wachtwoordstrategie, bied de mogelijkheid om een
        unieke server ter beschikking van WinPro/D te hebben, waar de klant
        enkel zijn eigen commerci�le gegevens kan doorbladeren. Vanuit een
        technisch oogpunt, is de structuur beschikbaar voor de klant, maar
        slechts door gebruik te maken van zijn WinPro/D, aangezien de tabellen
        niet rechtstreeks kunnen worden benaderd.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Belangrijke nota:
        overwegend het veiligheidsniveau dat aan de toegangen binnen deze
        configuratie evenals prestaties verkregen aanwinsten wordt gegeven, is
        de encryptie van velden die eerder met formaat FoxPro worden gebruikt
        onnodig geworden. De fysieke inhoud van de structuurlijsten kan
        namelijk niet direct door de gebruiker worden betreden. Alleen WinPro/D
        kan dit doen door het berekenen van een complex wachtwoord, samen met
        het MySQL- database.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Installatie</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">De volgende analyse kan een beetje
                lang lijken om te lezen maar zij detailleren volledig het
                proces. Praktisch, is de procedure zeer eenvoudig te
                gebruiken..</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">De eerste stap is de installatie van
                de MySQL server op een machine met een snelle internet
                verbinding. Ben er zeker van dat u voldoende gebruikersrechten
                heeft om MySQL gebruikers te mogen aanmaken op een remote
                machine en wees voorzichtig met het onbruikbaar maken van de '
                strict mode ' van MySQL bij installatie, zoals getoond in
                onderliggende screenshots. .</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Lucida Sans Unicode';">�</span></p>

        <p style="margin: 0px 0px 0px 21px;"><img src="img/clip0422.gif"
        width="522" height="398" border="0" alt="clip0422"></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p style="margin: 0px 0px 0px 21px;"><img src="img/clip0423.gif"
        width="519" height="395" border="0" alt="clip0423"></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Het resterende proces bestaat uit
                verscheidene hieronder verder gedetailleerde
              stadia,�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Installatie van de master WinPro/D
                versie. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Creatie van een technisch database
                WinPro/D vanuit WinPro .</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Informatie van de Klantgegevens voor
                de master WinPro/D vanuit WinPro </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Installatie van de Sentinel
                dongle.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Het cre�ren van een lege WinPro/D
                master database</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Import van de technische database
                (vanuit Winpro) in de master WinPro/D</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Initializatie van de
              WinPro/D</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cre�ren van klanten databases uit
                WinPro productie</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Distributie van het WinPro/D
                programma en verbindings instellingen aan uw klanten
              </span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">WinPro/D master moet geinstalleerd
                worden op een werkstation met toegang tot de MySQL server
                toegewezen aan WinPro/D. Uw algemene WinPro installatie moet
                ook oegang hebben tot deze server.Beide installaties kunnen op
                dezelfde werkstation fungeren.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Exporteer de 'Settings' table naar
                een winpro.ini bestand door (</span><span class="f_Textestd"
                style="font-weight: bold;">menu Instellingen | Exporteer naar
                de Winpro.ini</span><span class="f_Textestd">) (voorzichtig ;
                schrijf niet overheen de bestaande winpro.ini�!). Wanneer u
                deze stap overslaat,zal WinPro/D standaard waardes aanmaken
                voor alle instellingen wanneer deze database aangemaakt
                wordt.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Update deze WinPro.ini file, door
                een </span><span class="f_Textestd"
                style="font-family: 'Courier New';">[Database]</span><span
                class="f_Textestd">sectie voor de WinPro/D MySQL server toegang
                instellingen. Zie onderstaand de details van de
              sectie�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 4px 0px 0px 72px;"><span
        class="f_Winproini">[Database]</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">DLL=mysqldata.dll</span></p>

        <p style="margin: 4px 0px 0px 72px;"><span
        class="f_Winproini">Host=xxx</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Name=yyy</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Engine=zzz</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Transactions=bbb</span></p>

        <p style="margin: 0px 0px 0px 72px;"><span
        class="f_Winproini">Character set=ccc</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">xxx</span><span class="f_Textestd">.
                wordt vervangen met hostname of IP het adres van de server
                (b.v. 192.168.1.1, www.bedrijfsnaam.nl, enz.... )</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">yyy</span><span class="f_Textestd">.
                wordt vervangen met het database naam welke u aan de database
                wilt geven (WinPro zal deze automatisch aanmaken). Voorbeelden:
                winpro, productie</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">zzz</span><span class="f_Textestd">.
                wordt vervangen met het type van database engine welke u wenst
                te gebruiken. Voor een basisinstallatie, kunt u tussen ` InnoDB
                ' en ` myISAM ' kiezen. Wij stellen voor gebruik te maken van
                het formaat InnoDb voor LAN of Internet toegang. De transacties
                van deze engine schijnen veiliger te zijn. Voor een stand alone
                installatie, is de motor myISAM genoeg aangezien het veel
                compacter en licht sneller is</span><span
                class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">bbb.
                </span><span class="f_Textestd">dient met 1 (standaard), of met
                0 worden vervangen. In het geval van waarde 1, zal WinPro een
                bepaald aantal processen (b.v. optimalisering) binnen ��n
                enkele transactie verwerken. Niettemin, kan dit in bepaalde
                gevallen resulteren in het vertragen van het algemene systeem.
                Deze waarde kan dan met 0 worden vervangen, maar ben ervan
                bewust dat deze optie verrichtingen kan veroorzaken die
                enigzins minder veilig zijn. Merk op dat in om het even welke
                gevallen, de tabellen van formaat myIsam dergelijke transacties
                niet steunen; deze optie zal dan geen effect op die
                tabellen.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 85px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">ccc</span><span class="f_Textestd">.
                bevat het gebruik van de set van tekens. De standaardwaarde is
                latin1, geschikt voor talen van gebied van Europa (Frans,
                Engels, Spaans, Italiaans, Duits, enz....). Deze lijn is
                optioneel.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Om het master WinPro/D- database te
                installeren, kopieer de vermelde files op een werkstation:
                </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">WinProD.exe</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Mysqldata.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Libmysql.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Clepar.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Cleusb.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Modules.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Stdreports.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Wpreport.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">MySQLWPR.dll (from version
                8.0.3 and later)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Winpro.ini (created as
                decribed above)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Optionally the specific.dll
                file (please advise us)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Any strings.*
              files</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Your own lang.ini
                file</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">The mysql directory
                (contains the scripts needed for table creation; same directory
                as WinPro production)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd"
                style="font-family:       'Courier New';">Vanuit de productie
                WinPro, haal de technische data voor WinPro/D door gebruik te
                maken van het aangewezen sub-menu van Hulpmiddelen. ��n enkel
                bestand zal gecre�erd worden, data.pak genoemd, en in de
                sub-directory Devis worden geplaatst</span><span
                class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd">Nog
                in productie WinPro, cre�er een reeks Infocli gegevens van om
                het even welke klant in de lijst (menu instellingen informatie
                van de Klant voor offertemodule) </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Kopieer de vereiste files in een
                folder die toegankelijk voor WinPro/D, inclusief�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">data.pak</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">infocli.dat</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">licence.ini</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">winpro.lic</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">and optionally, when
                required</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">site.var</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">remise.var</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">specif.var</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-family: 'Courier New';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Installeer de Sentinal dongle driver
                indien nodig en steek de dongle hierna in de server.</span>

                <p><span class="f_Textestd">Indien u op deze plaats WinPro
                reeds heeft ge�nstalleerd kunt u de bestaande sentinal driver
                en dongle blijven behouden.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Voor het geval dat een andere
                WinPro/D- licentie reeds op de machine is ge�nstalleerd is, is
                het noodzakelijk om de volgende sleutels in het de
                registratiedatabase van Windows te schrappen: sectie 
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">HKEY_CLASSES_ROOT</span><span
                class="f_Textestd">, keys </span><span
                class="f_Textestd">&lsquo;</span><span class="f_Textestd"
                style="font-family: 'Courier New';">WinProD</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">en
                </span><span class="f_Textestd">&lsquo;</span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">HP</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Start de hoofdwinPro/D op. Bij de
                login dialoog, voer uw mySQL toegangscodes (nodig voor het
                cre�ren van de database) in, en controleer de verbindings
                settings, wanneer WinPro/D om het vraagt, gelieve te bevestigen
                dat u "een nieuw database" wilt cre�ren.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Sluit WinPro/D, hierna zal een leeg
                database worden gecre�erd, duurt een paar tiende van seconden!
                </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"></span>Wanneer het lege database is
                gecre�erd, vraagt WinPro/D om de locatie van de licence.ini-
                file.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-family: 'Courier';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd">Na
                het lezen van de licence.ini- file, verschijnt de dialoog van
                het ' Bedrijf '. Plaats iets in het eerste gebied (' Sous-titre
                ', SubTitel). </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd">Ga
                naar het menu instellingen, import makers data, WinPro/D vraagt
                om plaats van het data.pak- bestand welke uit productie WinPro
                is gehaald, importeer vervolgens deze data uit het bestand naar
                de hoofddatabase.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd">Open
                het menu instellingen, gebruikers en selecteer gebruiker
                Administrateur, en voer een wachtwoord in. <strong><span
                style="color:#ff0000">Let op!!! aangezien uw database vanaf
                Internet toegankelijk is, wordt het sterk geadviseerd om een
                veilige wachtwoordstrategie, met inbegrip van een mengeling te
                gebruiken hoofdletters en kleine letters, cijfers, en speciale
                karakters zonder betekenis!!!</span></strong> U kunt nu, indien
                gewenst, nieuwe gebruikers cre�ren</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd">Open
                het menu gegevens, munteenheden en cre�er minstens uw
                basismunteenheid, met een veranderingstarief van 1 en het
                aangewezen aantal decimalen. U kunt de andere nodig munten voor
                uw klanten ook tot stand brengen, indien vereist. Uw klanten
                zullen een kopie van dit exemplaar gebruiken wanneer u hun
                databases zult cre�ren, en zij zullen dit na gelang hun
                behoeften kunnen aanpassen. .</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd">Open
                het menu instellingen, parameters document en controleer de
                algemene settings zoals voor uw behoeften. Uw klanten zullen
                een exemplaar van die voorkeur wanneer hun databases zullen
                worden gecre�erd gebruiken, zullen zij ook het kunnen
                aanpassen..</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd">Open
                het menu instellingen, hoofd systeem en selecteer uw eigen
                standaardsysteem. Uw klanten zullen een exemplaar van deze
                informatie ontvangen, die zij voor hun behoeften zullen kunnen
                aanpassen.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd">Open
                het menu instellingen, btw-codes en wijs op de diverse te
                gebruiken BTW-tarieven. Uw klanten zullen een exemplaar van
                deze informatie ontvangen, die zij voor hun behoeften zullen
                kunnen aanpassen.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">In dit stadium, u moet WinPro/D
                verlaten. U kunt de databases voor uw klanten nu cre�ren.
                .</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span><span
        class="f_Textestd">Start WinPro productie en selecteer de menu
        instellingen, WinPro/D door Internet. De onderstaande dialoog
        verschijnt:</span></p>

        <p style="text-align: center;"><img src="img/clip0424eng.jpg" width="579"
        height="674" border="0" alt="clip0424eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Input scherm </span><span
                class="f_Textestd" style="font-weight: bold;">WinPro/D
                Server</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;"></span><span
                class="f_Textestd"><strong>Dezelfde server als WinPro</strong>:
                controleer deze checkbox wanneer de WinPro &amp; WinPro/D-
                databases op de zelfde machine worden gevestigd. <strong>Merk
                op dat wij sterk adviseren een dergelijke plaatsing te
                vermijden aangezien deze uw beveiliging
              verzwakt</strong></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">WinPro/D
                server</span><span class="f_Textestd">�: plaats hier het
                serveradres waarop het master WinPro/D- database is
                gevestigd</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">MySQL�port</span><span
                class="f_Textestd">�: Het poortnumeer voor toegang MySQL op
                deze server</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">WinPro/D
                master database</span><span class="f_Textestd">�: Naam die voor
                de WinPro/D- database wordt genoemd wanneer gecre�erd.
              .</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"><em>De 4 hierboven genoemde settings
                worden opgeslagen in de database, in de tabel Settings van
                WinPro productie, sectie WinPro/D. Zij zullen worden vereist
                elke keer deze dialoog wordt toegelaten</em>. .</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd"
                style="font-weight: bold;">MySQL�user code</span><span
                class="f_Textestd">�: Voer de gebruikerscode voor toegang tot
                MySQL (en niet de code voor de toegang tot van het WinPro/D-
                database in!). </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd"
                style="font-weight: bold;">MySQL password</span><span
                class="f_Textestd">�: Het wachtwoord van de toegang voor MySQL
                met betrekking tot de gebruikerscode plaatste eerder</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"><em>Beide settings zullen niet
                geregistreerd worden in de database, om
                veiligheidsredenen</em>.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Input scherm </span><span
                class="f_Textestd" style="font-weight: bold;">Slave WinPro/D
                database</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Customer
                code in WinPro main database</span><span class="f_Textestd">�:
                deze lijst toont het klanten bestand zoals die in het WinPro-
                productiedatabase is gevuld. Selecteer hier de klant die de
                geproduceerde database zal gebruiken. .</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Name of
                slave winPro/D database</span><span class="f_Textestd">�: Input
                hier de databasenaam die aan de klant wordt toegewezen. Het
                wordt geadviseerd om de klantencode, voor een gemakkelijk
                onderhoud, te gebruiken. .</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">WinPro/D�user code</span><span
                class="f_Textestd">�: Wijs hier een WinPro/D gebruikerscode aan
                uw klant toe. Een nieuwe gebruiker zal worden aangemaakt in
                zijn WinPro/D- database, met alle toegangsrechten. Uw klant is
                vrij zelf zoveel gebruikers toe te voegen als hij
              wil</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">WinPro/D�password</span><span
                class="f_Textestd">�: cre�er hier een wachtwoord voor uw klant.
                Ook hier dringen wij op de relevantie van een veilige
                wachtwoordstrategie, voor uzelf evenzo als voor uw
                klanten</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Price
                list</span><span class="f_Textestd">�: De prijslijstcode die
                aan de klant wordt toegewezen</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Currency</span><span
                class="f_Textestd">�: Het is beter om het in de master
                Winpro/D- munteenheden eerst geplaatst te hebben. .</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Discounts</span><span
                class="f_Textestd">�: Korting die aan uw klant wordt toegekend.
                Merk op dat de kortingsformules ook, zonder enige interventie
                van u zullen worden overgebracht.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Round up
                to 10cm</span><span class="f_Textestd">�: Aangevinkt indien de
                prijzen die door uw klant worden berekend tot 10 cm voor een
                bepaalde ontwerpdimensie op huidige prijzen zullen worden
                afgerond</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">On
                current prices</span><span class="f_Textestd">�: indien de
                berekende prijzen op de prijzen van de lopende prijs zullen
                worden gebaseerd of vanuit de kostprijs. .</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Discount
                per windows on orders</span><span class="f_Textestd">�:
                Aangevinkt indien het detail van korting voor elk kozijn op het
                document opdrachtbevestiging zou moeten worden getoond die naar
                u door uw klant wordt verzonden. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Locked
                access (Acc�s bloqu�)</span><span class="f_Textestd">�: staat u
                om de toegang tot het database toe te verbieden.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Allow use
                without dongle (Autoriser utilisation sans cl�)</span><span
                class="f_Textestd">�: Staat het gebruik van het programma
                zonder een Sentinal dongle toe. In dit geval, zal het aantal
                ontwerpen ingevoerd in een bepaalde order automatisch naar
                Quadrature worden overgebracht, en een rekening zal
                proportioneel aan het aantal gemelde lijnen worden gevestigd.
                Aan de andere kant, kunt u het programma kostenloos aan uw
                klanten aanbieden. De onderstaande tabel toont het
                programmagedrag overeenstemmend met de status van deze
                checkbox, en het gebruik van de Sentinal dongle of
              niet:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="113"
              style="width: 113px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">�</span></p>
              </td>
              <td valign="top" width="204"
              style="width: 204px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Met
                </span><span
                style="font-size: 12pt; font-weight: bold;">Sentinel</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">dongle</span></p>
              </td>
              <td valign="top" width="227"
              style="width: 227px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Zonder
                </span><span
                style="font-size: 12pt; font-weight: bold;">Sentinel</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">dongle</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="113"
              style="width: 113px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">�</span></p>

                <p style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">Gebruik
                zonder dongle toegestaan</span></p>
              </td>
              <td valign="top" width="204"
              style="width: 204px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Toegestane
                configuratie</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">geen
                lijnen volgen voor factureren</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">vergunning
                vereist</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span></p>
              </td>
              <td valign="top" width="227"
              style="width: 227px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Toegestane
                configuratie</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">elke
                lijn te volgen voor factureren</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">geen
                vergunning vereist</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="113"
              style="width: 113px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">�</span></p>

                <p style="text-align: center;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">Gebruik
                zonder dongle verboden</span></p>
              </td>
              <td valign="top" width="204"
              style="width: 204px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Toegestane
                configuratie</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">geen
                lijnen volgen voor factureren</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">vergunning
                vereist</span></p>

                <p style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span></p>
              </td>
              <td valign="top" width="227"
              style="width: 227px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Onbevoegde
                configuratie</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 72px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <p style="margin: 0px 0px 0px 21px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">Het
        belangrijkste voordeel van een gebruik zonder dongle configuratie is om
        een tijdelijke toegang voor uw klanten, of voor klanten met een klein
        volume van gebruik, zonder de beperking van een dongle verlenen hetgeen
        een oplossing zonder kosten is. </span></p>

        <p style="margin: 0px 0px 0px 21px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Aanmaken
                knop</span><span class="f_Textestd"></span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">klik op deze knop om de
        database voor uw klant te cre�ren. Als het database reeds op de server
        bestaat, wordt een foutenmelding getoond. Zie hiervoor de volgende
        paragraaf, ' Update ' (`Mettre � jour '). </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Het creatie proces
        bestaat uit de volgende stappen: :</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Controle geldigheid van input
                informatie, met een foutmelding in het geval van het ontbreken
                van een setting.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Opslag van input informatie in de
                WinPro- productie database </span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Connectie aan de WinPro/D
                server</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cre�ren van een klanten
                database</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cre�ren van' commerci�le ' tabellen
                in deze database, de tabellen bevatten de klant-aanpasbare
                settings voor elke klant.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cre�ren van het kijken naar (view)
                de technische tabellen welke zich in de hoofdWinPro/D- database
                bevinden. Dit impliceert dat u slechts ��n enkel database om
                zult hebben te onderhouden! </span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cre�ren en dupliceren van de dict
                tabel welke zich in de master WinPro/D- database
              bevind</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Cre�ren van een gebruiker in de
                klantenWinPro/D- database, met de code en het wachtwoord welke
                u eerder heeft aangemaakt</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span
                class="f_Textestd">Cre�ren van gebruikersrechten, noodzakelijk
                en voldoende, voor deze gebruiker in MySQL. De rechten worden
                verleend en op de gehele WinPro/D- database voor deze klant ;
                elke rechten worden toegewezen, behalve SHOW DATABASES SHUTDOWN
                en SUPER. De CREATE VIEW toegangsrecht wordt toegepast op de
                hoofddatabase; dit is noodzakelijk voor potenti�le update van
                de views. Een MySQL wachtwoord wordt ook geproduceerd en u hebt
                geen directe toegang tot het, of uw klant. Dit wachtwoord wordt
                geproduceerd gebruikend de zelfde regels zoals voor
                wachtwoordgeneratie gebruikend productie WinPro; zie het
                overeenkomstige hoofdstuk van WinPro 8 versienota's voor meer
                details.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span
                class="f_Textestd">Cre�ren van een regel in de tabel Societe.
                Deze regel zal de naam van uw klant ontvangen, zoals deze in uw
                productie WinPro wordt genoemd in de file Client (zoals getoond
                in de lijst van klant binnen de de "informatie voor de Klant"
                WinPro/D dialoog).</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span
                class="f_Textestd">Kopie van de inhoud van de tabel Devise
                (Munteenheid) van de master aan de slave database.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span
                class="f_Textestd">Kopie van de inhoud van de tabel Settings
                van de master aan de slave database.</span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd"
                style="font-family: 'Courier New';">Opslag van verbinding en
                authentificatie settings in lijst Settings van de database van
                de slave klant, sectie WinPro/D:</span><span
                class="f_Textestd">�:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="margin: 4px 0px 0px 48px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Key
                (Key field)</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Inhoud</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Client</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Customer
                code within WinPro production</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Code
                Tarif</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">List
                price code set for the customer</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Coeff</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Multiplying
                coefficient of the list price code set for the
                customer</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Devise</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Base
                currency for the customer</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">TauxDevise</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Multiplying
                coefficient of the base currency for this customer</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Remise1,
                Remise2, Remise3</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Base
                discounts awarded to the customer</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Arrondi</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 if
                dimensions of designs have to be rounded up to 10 cm for price
                calculation, 0 otherwise</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Prix
                Courant</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 for
                price calculation based on current prices, 0
                otherwise</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Remise
                par repere</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 for
                calculation of discounts by lines onto fabricator order form, 0
                otherwise</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Intercalaire</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Multiplying
                coefficient for the price of the glazing in case the specific
                colour for spacer feature is used</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Bloque</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 if
                the customer is not allowed to access his database anymore, 0
                otherwise</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Internet</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1 if
                the customer is allowed to use the program without the Sentinel
                dongle, 0 otherwise</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Licence</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copy
                of the winpro.lic licence file</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Site</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copy
                of the site.var file</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">VarRemise</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copy
                of the remise.var file</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="116"
              style="width: 116px; border: solid 1px #000000;"><p
                style="text-align: right; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">VarSpecif</span></p>
              </td>
              <td valign="top" width="420"
              style="width: 420px; border: solid 1px #000000;"><p
                style="margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Copy
                of the specific.var file</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; text-decoration: underline;">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Update
                ('Mettre � jour') </span><span
              class="f_Textestd">knop</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">klikt deze knop om een
        bestaande WinPro/D- database bij te werken. Als het database niet reeds
        bestaat, wordt een foutmelding getoond. Zie vorige paragraaf
        'cre�er':</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Het updateproces
        behandeld de volgende stappen:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">o Controle van de
        geldigheid van input informatie, met een foutenmelding in het geval van
        het missen van een setting.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">o De opslag van input
        informatie in de winPro- productiedatabase</span></p>

        <p class="p_Textestd"><span class="f_Textestd">o Connectie met de
        WinPro/D server.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">o Verversen van het
        kijken in de hoofddatabase</span></p>

        <p class="p_Textestd"><span class="f_Textestd">o Wijziging of creatie
        van de gebruikers in de klanten database.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">o Toewijzing van MySQL
        gebruikersrechten voor deze gebruikers</span></p>

        <p class="p_Textestd"><span class="f_Textestd">o Update van de Societe
        (bedrijf) tabel inhoud.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">o Opslag van de klanten
        settings zoals die in de bovengenoemde lijst wordt beschreven</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Verlaten
                ('Abandon')knop</span><span class="f_Textestd"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Verlaat de
        toepassing.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Broadcast van
        WinPro/D</span></p>

        <p class="p_Textestd"><span class="f_Textestd">de broadcast van
        WinPro/D voor een verbinding MySQL via Internet vereist minder
        bestanden dan de versie Foxpro evenals voor de hoofdversie WinPro/D. De
        noodzakelijke bestanden zijn hieronder vermeld</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">WinProD.exe</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Mysqldata.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Libmysql.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Clepar.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Cleusb.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Modules.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Stdreports.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-family: 'Courier New';">Wpreport.dll</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Optionally the file named
                </span><span class="f_Textestd"
                style="font-family: 'Courier New';">specific.dll</span><span
                class="f_Textestd">(please advise us)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Any </span><span class="f_Textestd"
                style="font-family: 'Courier New';">strings.*</span> files</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Your own </span><span
                class="f_Textestd"
                style="font-family: 'Courier New';">lang.ini</span> file</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">The </span><span class="f_Textestd"
                style="font-family: 'Courier New';">mySQL</span><span
                class="f_Textestd">(containing the scripts needed for table
                creation; same directory as WinPro production).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"></span><span class="f_Textestd">Een
                WinPro.ini- file, met het aanpassen van de [Database] sectie
                aan de WinPro/D MySQL server toegang settings, en aan de
                specifieke database settings voor deze klant</span>

                <p></p>

                <p><span class="f_Textestd">U dient aan uw klant zijn
                toegangscode en wachtwoord mee te delen</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Tot slot zult u de
        Sentinal dongle met zijn driver dienen te verdelen, behalve als u
        zonder dongle wens te werken(zie het overeenkomstige hoofdstuk aan het
        eind van dit document)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Die bestanden zullen
        slechts in het geval van significante veranderingen of nieuwe
        eigenschap binnen WinPro/D een upgrade vereisen.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Het enige specifiek
        bestand voor elke klant is WinPro.ini, omdat het de verbindings
        settings bevat. Alle sleutels anders dan welke zijn inbegrepen in de [
        database ] moeten worden verwijderd, aangezien zij in de tabbel
        Settings opgeslagen worden welke in het database wordt gecre�erd die
        aan uw klant zijn toegewezen.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Het overzetten van
        technische gegevens of licenties is niet langer nodig, deze gegevens
        zijn inbegrepen in de MySQL- database welke de klant benaderd, en wordt
        ge�xploiteerd vanaf deze plaats.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Winpro/D Versie
        van de klant een eerste maal opstarten</span></p>

        <p class="p_Textestd"><span class="f_Textestd">In het eerste
        beginstadium toont WinPro/D het scherm van de bedrijfsgegevens die de
        klant toestaat om zijn geschikte tekst voor zijn bedrijf in te voeren.
        Zolang niets in het scherm ondertitel wordt ingevoerd, zal het opnieuw
        bij elk begin van het programma verschijnen. Om het scherm te
        vermijden, of als niets moet worden vermeld, kan ��n enkele punt worden
        ingevoerd.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Het wordt geadviseerd
        voor de gebruiker om de invoer van de settings te controleren in het
        menu [instellingen] [gegevens van de maatschappij] in winpro, en het
        aan te passen zoals nodig.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">De document lay-out kan
        ook worden aangepast (menu [instellingen], [parameters document] in
        winpro), uiteindelijk overeenstemmend een aangepast logo</span></p>

        <p class="p_Textestd"><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Updates /
        upgrades</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Voor het programma zelf,
        de verbetering van WinPro/D, voor een verbinding MySQL via Internet,
        worden verwerkt met het verspreiden van de zelfde file's dan voor een
        installatie, behalve het winpro.ini- dossier.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Betreffende de update
        van technische gegevens, hoeft slechts de hoofdWinPro/D- database, met
        opnieuw het invoeren van de fabricatorgegevens na extractie van
        productie worden bijgewerkt. Dit moet ��nmalig op de hoofddatabase
        worden gedaan, Probeer nooit de slaven databases bij te
        werken.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Tot slot voor de
        databasestructuur die evoluate met het WinPro versieaantal, het gedrag
        hieronder wordt beschreven:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Master
                database upgraded before the slave database</span><span
                class="f_Textestd">�: de klant houdt bij het gebruiken van het
                programma zoals gewoonlijk zonder de wijzigingen te behandelen.
                Nochtans, zal de nieuwe eigenschap niet beschikbaar zijn tot de
                klant de zelfde versie van WinPro/D als de fabricant heeft
                ge�nstalleerd. Wanneer de klant de nieuwe versie ontvangt,
                zorgt WinPro/D voor een update van de tabellen specifiek voor
                deze klant, en ververst de betrokken data</span></td>
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
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Slave
                database upgraded before the master database</span><span
                class="f_Textestd">�: </span><span class="f_Textestd">WinPro/D
                upgrade de klanten database, maar zal vastlopen bij het zoeken
                naar velden in de hoofd database. <strong>Deze installatie moet
                absoluut worden vermeden. </strong></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">De beperkingen
        van gebruik op de slaven databases </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Een enkele beperking is
        bekend: de klant heeft geen toegang tot het menu import gegevens van de
        fabrikant. Dit is duidelijk noodzakelijk en kritiek! </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Volumes van data
        en verbindings snelheden </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Wij testten zonder
        problemen de creatie van 250 slaven database, samen met het
        hoofd-database, op een kleine test server. Een leeg database is minder
        dan 1Mb op de server. U zult de ruimte voor specifieke tabellen voor
        elke klant (lijsten voor klanten, ordes &amp; offertes,
        vertegenwoordigers, enz.) moeten toevoegen.</span></p>

        <p></p>

        <p class="p_Textestd"><span class="f_Textestd">Het aantal 250 kan
        gemakkelijk worden overschreden, maar de verbindings snelheden van
        Internet kunnen ook worden overwogen.</span></p>

        <p></p>

        <p class="p_Textestd"><span class="f_Textestd">De belangrijkste
        beperkende factor is het aantal gelijktijdige verbindingen.
        Overeenstemmend onze eerste evaluaties, wordt een gelijktijdig
        verbonden gemiddelde van 512Kb door gebruiker vereist voor een correct
        gebruik, en minimum De 2Mb globaal voor goede prestaties (in dit geval
        getest met niet meer dan 4 gebruikers gelijktijdig). Het is
        waarschijnlijk dat boven 10 gelijktijdige verbonden gebruikers, de
        noodzakelijke bandbreedte beduidend in gemiddelde per gebruiker
        vermindert, omdat elke gebruiker statistisch geen gegevens in lijsten
        tezelfdertijd zal zal lezen of schrijven maar wij missen de
        terugkoppeling om meer inlichtingen te verstrekken. Wij denken dat voor
        50 gelijktijdige gebruikers, de vereiste bandbreedte van ongeveer 20Mb
        op het serverniveau zou zijn, gebruik makend van een SDSL
        lijn.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Aan de gebruikerskant,
        adviseren wij een minimum van 1Mb voor download, en 512Kb voor
        uploaden. Het is duidelijk dat een hogere verbindings snelheid meer
        snelheid zou brengen, maar als de serverlijn wordt aangepast.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Op het serverniveau, zal
        het processor gebruik maar vrij beperkt zijn maar een zo hoog mogelijk
        RAM geheugen levert snelheidswinst op, evenals een goed SCSI
        schijfsysteem</span></p>

        <p class="p_Textestd"><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Facturerend voor
        gebruik zonder dongle </span></p>

        <p class="p_Textestd"><span class="f_Textestd">In deze wijze, is de
        informatie die op onze server wordt verzameld hieronder
        vermeld:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd">Fabricatienummer(klantnummer): een
                nummer voor intern gebruik door Quadratuur, die aan uw bedrijf
                behoort. <strong>Geen andere informatie wordt
                overgebracht</strong></span>

                <p><span class="f_Textestd">o Code van de Klant: uw WinPro code
                van de betrokken klant. <strong>Geen andere informatie wordt
                overgebracht</strong></span></p>

                <p><span class="f_Textestd">o Ordernummer: het ordernummer dat
                door de klanten wordt ingevoerd</span></p>

                <p><span class="f_Textestd">o Aantal geregistreerde order
                lijnen (kozijnmerken). De extra artikelen, de profielen, de
                montage artikelen en zetwerk worden niet hier geteld.</span></p>

                <p><span class="f_Textestd">o�Datum en tijd van de creatie van
                de eerste orderlijn wordt geregistreerd.</span></p>

                <p><span class="f_Textestd">o <strong>De 3 laatste settings
                zijn de enige settings die voor elke order worden overgebracht
                die door uw klant wordt geregistreerd</strong></span></p>

                <p><strong><span class="f_Textestd">o De hierboven vermelde
                settings zijn de enige settings die naar ons worden
                overgebracht zijn</span></strong></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic; font-weight: bold;"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deze eigenschap wordt
        geleverd als experiment. Het zal niet gefactureerd worden v��r
        volledige goedkeuring. Niettemin, zult u de logboek files ontvangen die
        op onze server, voor informatie of bevestigingsdoeleinden worden
        gecre�erd. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
