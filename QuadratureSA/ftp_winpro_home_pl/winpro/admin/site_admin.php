<?php
include_once("./includes/db.inc.php");
include("./includes/loginadm.php");
include("./includes/id.inc.php");
controlAccess($login, $password, $id_session);
include_once("../includes/classsql.inc.php");
include_once("includes/headeradm.inc.php");
include_once("./includes/formadm.inc.php");
include("./includes/fctadm.php");

if ($_SESSION['sendaction']) {
    $_SESSION['action'] = $_SESSION['sendaction'];
} else {
    $_SESSION['action'] = $_POST['choice'];
}

switch ($_SESSION['action']) {
    case "AU" :
        create_user();
        break ;
    case "SU" :
        delete_user();
        break ;
    case "MU" :
        change_user();
        break ;
    case "AL" :
        create_lg();
        break ;
    case "ML" :
        change_lg();
        break ;
    case "MT" :
        change_tr();
        break ;
    case "MP" :
        change_pt();
        break ;
}

include_once("includes/footeradm.inc.php");

?>
