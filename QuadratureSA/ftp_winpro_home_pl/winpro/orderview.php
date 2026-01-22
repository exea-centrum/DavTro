<?php
include_once("./includes/db.inc.php");
include("./includes/login.php");

controlAccess($login, $password, $id_session);
include("includes/fct.inc.php");

include_once("includes/header.inc.php");
$_SESSION['objdbc']=new dbconnection($adm_login,$adm_pwd,$adm_server,$adm_db);
if ($_SESSION['type'] == 1) {
    selectdateform();
    calendar();
    orderviewcustomer($adm_login,$adm_pwd,$adm_server,$adm_db);
} elseif ($_SESSION['type'] == 2 || $_SESSION['type'] == 3) {
    selectdateform();
    calendar();
    orderviewemployee($adm_login,$adm_pwd,$adm_server,$adm_db);
}

include_once("includes/footer.inc.php");

?>