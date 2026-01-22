<?php
include_once("includes/id.inc.php");
include("./includes/classtab.inc.php");
function calendar()
{
    echo "<div align='center'><table class=\"ds_box\" cellpadding=\"0\" cellspacing=\"0\" id=\"ds_conclass\" style=\"display: none;\">
<tr><td id=\"ds_calclass\">
</td></tr>
</table></div>

<script type=\"text/javascript\">
var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();

function ds_getel(id) {
	return document.getElementById(id);
}

function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}

var ds_oe = ds_getel('ds_calclass');
var ds_ce = ds_getel('ds_conclass');

var ds_ob = '';
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element;";

    if (isset($_SESSION['language']) && $_SESSION['language'] == 'french') {
        echo"
	var ds_monthnames = [
	'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
	'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
	];

	var ds_daynames = [
	'Dim', 'Lun', 'Mar', 'Me', 'Jeu', 'Ven', 'Sam'
	];

	function ds_template_main_above(t) {
		return '<table cellpadding=\"3\" cellspacing=\"1\" class=\"ds_tbl\">'
			 + '<tr>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_py();\">&lt;&lt;</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_pm();\">&lt;</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_hi();\" colspan=\"3\">[Fermer]</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_nm();\">&gt;</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_ny();\">&gt;&gt;</td>'
			 + '</tr>'
			 + '<tr>'
			 + '<td colspan=\"7\" class=\"ds_head\">' + t + '</td>'
			 + '</tr>'
			 + '<tr>';
	}";
    } elseif (isset($_SESSION['language']) && $_SESSION['language'] == 'polish') {
        echo"
	var ds_monthnames = [
	'Stycze&#324;', 'Luty', 'Marzec', 'Kwiecie&#324;', 'Maj', 'Czerwiec',
	'Lipiec', '&#346;ierpie&#324;', 'Wrzesie&#324;', 'Pa&#378;dziernik', 'Listopad', 'Grudzie&#324;'
	];

	var ds_daynames = [
	'Nie', 'Pon', 'Wto', '&#346;ro', 'Czw', 'Pi&#261;', 'Sob'
	];

	function ds_template_main_above(t) {
		return '<table cellpadding=\"3\" cellspacing=\"1\" class=\"ds_tbl\">'
			 + '<tr>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_py();\">&lt;&lt;</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_pm();\">&lt;</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_hi();\" colspan=\"3\">[Zamkn&#261;&#263;]</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_nm();\">&gt;</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_ny();\">&gt;&gt;</td>'
			 + '</tr>'
			 + '<tr>'
			 + '<td colspan=\"7\" class=\"ds_head\">' + t + '</td>'
			 + '</tr>'
			 + '<tr>';
	}";
    } else {
        echo"
	var ds_monthnames = [
	'January', 'February', 'March', 'April', 'May', 'June',
	'July', 'August', 'September', 'October', 'November', 'December'
	];

	var ds_daynames = [
	'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
	];

	function ds_template_main_above(t) {
		return '<table cellpadding=\"3\" cellspacing=\"1\" class=\"ds_tbl\">'
			 + '<tr>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_py();\">&lt;&lt;</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_pm();\">&lt;</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_hi();\" colspan=\"3\">[Close]</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_nm();\">&gt;</td>'
			 + '<td class=\"ds_head\" style=\"cursor: pointer\" onclick=\"ds_ny();\">&gt;&gt;</td>'
			 + '</tr>'
			 + '<tr>'
			 + '<td colspan=\"7\" class=\"ds_head\">' + t + '</td>'
			 + '</tr>'
			 + '<tr>';
	}";
    }

    echo"
function ds_template_day_row(t) {
	return '<td class=\"ds_subhead\">' + t + '</td>';
}

function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan=\"' + colspan + '\"></td>'
}

function ds_template_day(d, m, y) {
	return '<td class=\"ds_cell\" onclick=\"ds_onclick(' + d + ',' + m + ',' + y + ')\">' + d + '</td>';
}

function ds_template_main_below() {
	return '</tr>'
	     + '</table>';
}

function ds_draw_calendar(m, y) {
	ds_ob_clean();
	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	for (i = 0; i < 7; i ++) {
		ds_echo (ds_template_day_row(ds_daynames[i]));
	}
	var ds_dc_date = new Date();
	ds_dc_date.setMonth(m - 1);
	ds_dc_date.setFullYear(y);
	ds_dc_date.setDate(1);
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	} else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = ds_dc_date.getDay();
	var first_loop = 1;

	ds_echo (ds_template_new_week());

	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {
		if (j == 0 && !first_loop) {

			ds_echo (ds_template_new_week());
		}
		ds_echo (ds_template_day(i + 1, m, y));
		first_loop = 0;
		j ++;
		j %= 7;
	}
	ds_echo (ds_template_main_below());
	ds_ob_flush();
	ds_ce.scrollIntoView();
}

function ds_sh(t) {
	ds_element = t;
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();
	ds_draw_calendar(ds_c_month, ds_c_year);
	ds_ce.style.display = '';
	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';
	ds_ce.scrollIntoView();
}
function ds_hi() {
	ds_ce.style.display = 'none';
}
function ds_nm() {
	ds_c_month ++;
	if (ds_c_month > 12) {
		ds_c_month = 1;
		ds_c_year++;
	}
	ds_draw_calendar(ds_c_month, ds_c_year);
}
function ds_pm() {
	ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
	if (ds_c_month < 1) {
		ds_c_month = 12;
		ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	}
	ds_draw_calendar(ds_c_month, ds_c_year);
}
function ds_ny() {
	ds_c_year++;
	ds_draw_calendar(ds_c_month, ds_c_year);
}
function ds_py() {
	ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	ds_draw_calendar(ds_c_month, ds_c_year);
}
function ds_format_date(d, m, y) {
	m2 = '00' + m;
	m2 = m2.substr(m2.length - 2);
	d2 = '00' + d;
	d2 = d2.substr(d2.length - 2);
	return d2 + '-' + m2 + '-' + y;
}
function ds_onclick(d, m, y) {
	ds_hi();
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);
	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
	} else {
		alert (ds_format_date(d, m, y));
	}
}
</script>";
}

function selectdateform()
{
	
    echo "<form action=\"orderview.php\" method=\"post\">
	<div align='center'>
	<table width='600' border='0' class='tabgen'>
	<tr>
    <td colspan='4' class='tabadmtitle'>" . idstr('id_0035') . "</td>
    </tr>
	<tr>
	<td width='25%'><label>" . idstr('id_0045') . " :</lable></td><td width='25%'><input onclick=\"ds_sh(this);\" name=\"date1\" readonly=\"readonly\" style=\"cursor: text\" value=".date('d-m-Y')." /></td>
	<td width='25%'><label>" . idstr('id_0046') . "  :</lable></td><td width='25%'><input onclick=\"ds_sh(this);\" name=\"date2\" readonly=\"readonly\" style=\"cursor: text\" value=".date('d-m-Y')." /></td>
	</tr>
	<tr>
	<td colspan='4' class='tabadmfooter'><input type=\"submit\" value=" . idstr('id_0047') . " /></td>
	</tr>
	</table>
	</div>
	</form>";
}


function orderviewcustomer($lg,$pass,$srv,$dtb)
{
	
	$datebegin = $_POST['date1'];
    $dateend = $_POST['date2'];
      
	$dbln = new dbconnection($lg,$pass,$srv,$dtb);
    $request = new dbquery($dbln->sqllinkid,"select i from settings where section='max_point' and sectionkey='max_day';");
    foreach ($request->finallst as $rec) {
    	$pointlimit = $rec['i'];
    }
    $listing = new listingorder(1,$pointlimit);
    unset($request);
    $request = new dbquery($dbln->sqllinkid,"select numorder, reference, customer, dateorder, datedelivery,deliveryinstruction,productionlength from planning where customer =\"$_SESSION[client]\" and
    datedelivery >= str_to_date(\"$datebegin\",'%d-%m-%Y') and datedelivery <= str_to_date(\"$dateend\",'%d-%m-%Y') order by datedelivery;");
    foreach ($request->finallst as $rec){
    	$listing->addtotaborder($rec['numorder'],$rec['reference'],$rec['customer'],$rec['dateorder'],$rec['datedelivery'],$rec['deliveryinstruction'],$rec['productionlength']);
    }
	unset($request);
	 $request = new dbquery($dbln->sqllinkid,"SELECT datedelivery,sum(productionlength) as sumday FROM planning where
    datedelivery >= str_to_date(\"$datebegin\",'%d-%m-%Y') and datedelivery <= str_to_date(\"$dateend\",'%d-%m-%Y') group by datedelivery order by datedelivery;"); 
	   
    foreach ($request->finallst as $rec){
    	$listing->addtotabprod($rec['datedelivery'],$rec['sumday']);
    }
    unset($dbln); 
    unset($request);
    
    
    $listing->buildview($datebegin,$dateend);
    $listing->showdata();
    
    
}    

function orderviewemployee($lg,$pass,$srv,$dtb)
{
	
	$datebegin = $_POST['date1'];
    $dateend = $_POST['date2'];
      
	$dbln = new dbconnection($lg,$pass,$srv,$dtb);
    $request = new dbquery($dbln->sqllinkid,"select i from settings where section='max_point' and sectionkey='max_day';");
    foreach ($request->finallst as $rec) {
    	$pointlimit = $rec['i'];
    }
    $listing = new listingorder(2,$pointlimit);
    unset($request);
    $request = new dbquery($dbln->sqllinkid,"select numorder, reference, customer, dateorder, datedelivery,dateproduction,productionlength from planning where 
    datedelivery >= str_to_date(\"$datebegin\",'%d-%m-%Y') and datedelivery <= str_to_date(\"$dateend\",'%d-%m-%Y') order by datedelivery;");
    foreach ($request->finallst as $rec){
    	$listing->addtotaborder($rec['numorder'],$rec['reference'],$rec['customer'],$rec['dateorder'],$rec['datedelivery'],$rec['dateproduction'],$rec['productionlength']);
    }
	unset($request);
	 $request = new dbquery($dbln->sqllinkid,"SELECT datedelivery,sum(productionlength) as sumday FROM planning where
    datedelivery >= str_to_date(\"$datebegin\",'%d-%m-%Y') and datedelivery <= str_to_date(\"$dateend\",'%d-%m-%Y') group by datedelivery order by datedelivery;");    
    foreach ($request->finallst as $rec){
    	$listing->addtotabprod($rec['datedelivery'],$rec['sumday']);
    }
    unset($request);
    unset($dbln);
    $listing->buildview($datebegin,$dateend);
    $listing->showdata();
    
}   

?>