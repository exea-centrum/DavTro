<?php


function idstr($idtxt)
{
	include_once("./includes/classsql.inc.php");
	require("./includes/db.inc.php");
    $lnid = new dbconnection($adm_login,$adm_pwd,$adm_server,$adm_db);
    if (isset($_SESSION['language'])) {
        $language = $_SESSION['language'];
    } else {
        $reqL = ("select sectionkey from settings where section='default_language'");
        $resL = mysql_query($reqL,$lnid->sqllinkid);
        $defL = mysql_fetch_object($resL);
        $language = $defL->sectionkey;
    }

    $reqT = ("SELECT $language as Ltxt FROM id_translation WHERE id_text=\"$idtxt\"");
    if ($resT = mysql_query($reqT,$lnid->sqllinkid)) {
        $txt = mysql_fetch_object($resT);
        $Ltxt = $txt->Ltxt;
        return $Ltxt;
    } else {
        echo mysql_error();
    }
    unset($lnid);
}
?>