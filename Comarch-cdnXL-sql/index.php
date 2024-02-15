<?php

function file_extension($filename)
{
    $extArr = explode(".",$filename);
 	return  $extArr[count($extArr)-1];  
}

function odczytajKatalog($dir)
{
	$counter = 0;
	$d = opendir($dir);
	while ( ($f = readdir($d))!==false)
	{
		if (!is_dir($f))
		{
	//	echo file_extension($f)."<br>!!";
			if (strtolower(file_extension($f))!="php" && strtolower(file_extension($f))!="php")
			{
				$counter++;
				$size = round(filesize($dir."/".$f)/1024/1024,2);
//			$frm = "<form method='post' style='display:inline;'><input type='hidden' name='todel' value='$f'><input type='submit' value='usuń'></form>";
				echo "<div style='display:block;width:500px;border-bottom:1px dotted gray;padding:8px;'><a href=' $dir/$f' style='width:400px;display:block;float:left;' target=_blank'>".$f." ($size MB)</a> $frm</div>";
			}
			//echo "<input type='text' id='$f' value='http://www.wp.pl/$f'/><input type='button' onClick=\"javascript:copyToClip('$f');\">";
		}			
	}
	closedir($d);
	return $counter;
}

function replacePolishChars ( $s )
  {
    $s = str_replace ( "Ę", "E", $s ); $s = str_replace ( "Ó", "O", $s ); $s = str_replace ( "Ą", "A", $s );
    $s = str_replace ( "Ś", "S", $s ); $s = str_replace ( "Ł", "L", $s ); $s = str_replace ( "Ż", "Z", $s );
    $s = str_replace ( "Ź", "Z", $s ); $s = str_replace ( "Ć", "C", $s ); $s = str_replace ( "Ń", "N", $s );
    
    $s = str_replace ( "ę", "e", $s ); $s = str_replace ( "ó", "o", $s ); $s = str_replace ( "ą", "a", $s );
    $s = str_replace ( "ś", "s", $s ); $s = str_replace ( "ł", "l", $s ); $s = str_replace ( "ż", "z", $s );
    $s = str_replace ( "ż", "z", $s ); $s = str_replace ( "ć", "c", $s ); $s = str_replace ( "ń", "n", $s );

    $s = str_replace ( " ", "_", $s );
    

    return $s; 
  }

function UploadFile($dir)
{
	if (isset($_REQUEST['todel'])) unlink("$dir/".$_REQUEST['todel']);
	if (isset($_FILES['uploaded']['name']))
	{
		
		$f_name_pr = $_FILES['uploaded']['name'];
//		echo "[".$dir."/".replacePolishChars($f_name_pr)."--$f_name_pr]";
		$f_type_pr = $_FILES['uploaded']['type'];
		$f_size_pr = $_FILES['uploaded']['size'];
		$f_temp_pr = $_FILES['uploaded']['tmp_name'];
		$fd = fopen($f_temp_pr, 'r');
		$contents  = fread($fd, $f_size_pr);
		fclose ($fd);
		$fd = fopen($dir."/".replacePolishChars($f_name_pr), 'w');
		fwrite($fd,$contents);
		flush();
		fclose ($fd);
	}
}

function NewFileForm()
{
	?><br/>
	<form method='post' enctype='multipart/form-data' name='f' style='border:1px solid gray;padding:10px;'>
<b>Dodaj dokument:</b>
  <input type='file' name='uploaded' />&nbsp;<input type='submit' value='zapisz' class='gradientButton' /></form>
	<?php 
}
//cialo

#UploadFile($dir);

if (odczytajKatalog(".")==0) echo "<br/>Brak dokumentów!<br/><br/>";
//NewFileForm();
?>
<br/><br/><br/>