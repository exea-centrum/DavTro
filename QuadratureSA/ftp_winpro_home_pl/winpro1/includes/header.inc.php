<?php

include_once("id.inc.php");
include("db.inc.php");
if (isset($_GET['language'])) {
    $_SESSION['language'] = $_GET['language'];
}
echo "
<html>

 <head>
  <title>winpro</title>

  <meta http-equiv='Content-Type'  content='text/html' name='Author'>

  <link href='css/style.css' rel='stylesheet' type='text/css'>
 </head>

 <body  marginwidth='0' marginheight='0' topmargin='0' leftmargin='0'>

  <table width='100%' border='0' cellspacing='0' cellpadding='0'>
   <tr valign='middle' class='pageheader' >
    <td align='center'>
     <table width='768' border='0' cellspacing='4' align='center'>
      <tr valign='middle'>
       <td width='222' align='left'>
        <img src='./pictures/winpro.png' alt='winpro' width='300' height='150' border='0' >

       </td>
       <td width='336' align='center' class='pagetitle'>
        <h2>" . idstr('id_0003') . "</h2>
       </td>
<td width='188'>
     </table>
	<div align='right'> <table>
  <tr>";
$lnflag =new dbconnection($adm_login,$adm_pwd,$adm_server,$adm_db);
$reqH = ("select * from settings where section='language' and i=1");
$resH = mysql_query($reqH,$lnflag->sqllinkid);
unset($lnflag);
while ($rowH = mysql_fetch_assoc($resH)) {
    echo "<td ><div align='center' border='0'><a href=\"index.php?language=$rowH[sectionkey]\"]><img src=\"pictures/flags/$rowH[c]\" width='16' height='11' title=\"$rowH[sectionkey]\" ></a></div></td>";
}

echo "  </tr>

</table></div>
     </td>
      </tr>
	 </td>
   </tr>
   <tr valign='bottom'><td height='2' bgcolor='#FFFFFF'></td></tr>
   <tr valign='top'>
    <td>
     <table width='600' height='623' border='0' align='center' cellspacing='8'>
      <tr valign='top'>

       <td height='60%'>
";

?>