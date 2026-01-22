<?php
include_once("./includes/db.inc.php");
include_once("../includes/classsql.inc.php");
include_once("./includes/formadm.inc.php");

function create_user()
{
	
	if (isset($_POST['typeuser'], $_POST['user'], $_POST['password'], $_POST['confpassword'])) {
        if ($_POST['password'] == $_POST['confpassword']) {
            if ($_POST['typeuser'] == "customer" && empty($_POST['code'])) {
                $_SESSION['sendaction'] = "AU";
                echo '<div class="error">For a customer you must enter his name in customer code</div><br>';
                createuserform('checked', '', '', $_POST['user'], '', $_POST['password'], $_POST['confpassword']);
            } else {
            	$dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
                $request = ("select i from settings where section ='user' and sectionkey =\"$_POST[typeuser]\";");
                if ($result = mysql_query($request,$dlink->sqllinkid)) {
                    $row = mysql_fetch_row($result);
                    $numuser = $row[0];
                    $numuser++;
                    mysql_free_result($result);
                    unset($dlink);
                }
                switch ($_POST['typeuser']) {
                    case "customer" :
                        $instype = 1;
                        $custcode = $_POST['code'];
                        break ;
                    case "employee" :
                        $instype = 2;
                        $custcode = "Eokpl-" . $numuser;
                        break ;
                    case "admin" :
                        $instype = 3;
                        $custcode = "Aokpl-" . $numuser;
                        break ;
                }

                $NewUserPwd = md5($_POST['password']);
                $dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
                $request = ("insert into user (user,customer,type,language,password)
				values (\"$_POST[user]\",\"$custcode\",\"$instype\",\"$_POST[language]\",\"$NewUserPwd\");");
                if (mysql_query($request)) {
                    $updsettings = ("update settings set i = $numuser where section ='user' and sectionkey =\"$_POST[typeuser]\";");
                    $result = mysql_query($updsettings);
                    $_SESSION['sendaction'] = "AU";
                    echo 'User' . $_POST['user'] . ' created <br>';
                    echo '<form action="" method="post" enctype="multipart/form-data" name="datauser2">
					<input name="choice" type="submit" value="Continue" >
					</form>';
                    unset($dlink);
                }
            }
        } else {
            $_SESSION['sendaction'] = "AU";
            switch ($_POST['typeuser']) {
                case "customer" :
                    $typec = "checked";
                    break ;
                case "employee" :
                    $typee = "checked";
                    break ;
                case "admin" :
                    $typea = "checked";
                    break ;
            }

            echo '<div class="error">The password are different</div><br>';
            createuserform($typec, $typee, $typea, $_POST['user'], $_POST['code'], '', '');
        }
    } else {
        $_SESSION['sendaction'] = "AU";
        createuserform('', '', '', '', '', '', '');
    }
   
}

function delete_user()
{
    if (!isset($_POST['userlogin'])) {
        selectuserform(idstr('id_0013'), idstr('id_0030'));
        $_SESSION['sendaction'] = "SU";
    } else {
    	$dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
        $request = ("delete from user where user=\"$_POST[userlogin]\";");
        if (mysql_query($request)) {
        	
            $_SESSION['sendaction'] = "SU";
            echo 'User ' . $_POST['userlogin'] . ' deleted <br>';
            echo '<form action="" method="post" enctype="multipart/form-data" name="datauser3">
					<input name="choice" type="submit" value="Continue" >
					</form>';
        }
        unset($dlink);
    }
}

function change_user()
{
    if (!isset($_POST['userlogin']) && !isset($_POST['user'])) {
        selectuserform(idstr('id_0014'), idstr('id_0031'));
        $_SESSION['sendaction'] = "MU";
    } else {
        if (isset($_POST['userlogin']) && !isset($_POST['user'])) {
            $request = ("select * from user where user=\"$_POST[userlogin]\";");
            $dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
            $result = mysql_query($request,$dlink->sqllinkid);
            unset($dlink);
            while ($row = mysql_fetch_assoc($result)) {
                switch ($row['type']) {
                    case 1 :
                        $typec = "checked";
                        break ;
                    case 2 :
                        $typee = "checked";
                        break ;
                    case 3 :
                        $typea = "checked";
                        break ;
                }
                $usrlogin = $row['user'];
                $usrcode = $row['customer'];
                $usrlanguage = $row['language'];
                if ($row['type'] == 1) {
                    $usrtypec = 'disabled="true"';
                   
                }
            }
            mysql_free_result($result);
            updateuserform($typec, $typee, $typea, $usrlogin, $usrcode, $usrlanguage, $usrtypec);
        }

        switch ($_POST['typeuser']) {
            case "customer" :
                $instype = 1;
                break ;
            case "employee" :
                $instype = 2;
                break ;
            case "admin" :
                $instype = 3;
                break ;
        }
        if (!empty($_POST['password']) || !empty($_POST['confpassword'])) {
            if ($_POST['password'] == $_POST['confpassword']) {
                $NewPwd = md5($_POST['password']);
                $request = ("update user set type=$instype,password=\"$NewPwd\",language=\"$_POST[language] \"
						where user= \"$_POST[user]\" and customer =\"$_POST[code]\";");
            } else {
                $_SESSION['sendaction'] = "MU";
                $requestf = ("select * from user where user=\"$_POST[user]\";");
                $dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
                $result = mysql_query($requestf,$dlink->sqllinkid);
                unset($dlink);
                while ($row = mysql_fetch_assoc($result)) {
                    switch ($row['type']) {
                        case 1 :
                            $typec = "checked";
                            $usrtypec = 'disabled="true"';
                            break ;
                        case 2 :
                            $typee = "checked";
                            break ;
                        case 3 :
                            $typea = "checked";
                            break ;
                    }
                    $usrlogin = $row['user'];
                    $usrcode = $row['customer'];
                    $usrlanguage = $row['language'];
                }
                mysql_free_result($result);
                echo '<div class="error">The password are different</div><br>';
                updateuserform($typec, $typee, $typea, $usrlogin, $usrcode, $usrlanguage, $usrtypec);
            }
        }
        else {
            $request = ("update user set type=$instype,language=\"$_POST[language]\"
				where user= \"$_POST[user]\" and customer =\"$_POST[code]\";");
        }
       
		$dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
        if (mysql_query($request,$dlink->sqllinkid)) {
        	unset($dlink);
            $_SESSION['sendaction'] = "MU";
            echo 'User ' . $_POST['user'] . ' updated <br>';
            echo '<form action="" method="post" enctype="multipart/form-data" name="datauser3">
					<input name="choice" type="submit" value="Continue" >
					</form>';
        }
    }
}

function create_lg()
{
    if (!isset($_POST['lang'])) {
        $_SESSION['sendaction'] = "AL";
        createlanguageform();
    } else {
    	$dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
        $request_t = ("alter table id_translation add $_POST[lang] varchar(120);");
        $request = ("insert into settings (section,sectionkey,c) values ('language',\"$_POST[lang]\",\"$_POST[flag]\");");
        if ($result_t = mysql_query($request_t,$dlink->sqllinkid)) {
            if ($result = mysql_query($request,$dlink->sqllinkid)) {
                echo 'Language ' . $_POST['language'] . ' created <br>';
                echo 'To use it, you must actvate it after adding translations<br>';
                echo '<form action="" method="post" enctype="multipart/form-data" name="datal">
					<input name="choice" type="submit" value="Continue" >
					</form>';
            }
            unset($dlink);
        }
    }
}

function change_lg()
{
    if (!isset($_POST['updlg'])) {
        $_SESSION['sendaction'] = "ML";
        updatelanguageform();
    } else {
        $_SESSION['sendaction'] = "ML";
        $dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
        $request = ("select sectionkey from settings where section='language';");
        if ($result = mysql_query($request,$dlink->sqllinkid)) {
            $cptlg = 0;
            while ($row = mysql_fetch_assoc($result)) {
                $lstlg[$cptlg] = $row['sectionkey'];
                $cptlg++;
            }
            mysql_free_result($result);
        }
        for ($cpt = 0;$cpt < $cptlg;$cpt++) {
            $currentlg = $lstlg[$cpt];
            $currentlgact = 'active_' . $currentlg;
            $currentlgflag = 'flag_' . $currentlg;
            if (isset($_POST[$currentlgact])) {
                $lgactive = 1;
            } else {
                $lgactive = 0;
            }
            $request = ("update settings set i=$lgactive, c=\"$_POST[$currentlgflag]\" where section='language' and sectionkey=\"$currentlg\";");
            mysql_query($request,$dlink->sqllinkid);
        }
        unset($dlink);
        updatelanguageform();
    }
}

function change_tr()
{
    if (!isset($_POST['updtransl'])) {
        $_SESSION['sendaction'] = "MT";
        updatetrchoiceform();
		$dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
        $request = ("select id_text from id_translation");
        if ($result = mysql_query($request,$dlink->sqllinkid)) {
        	unset($dlink);
            $cptlst = 0;
            while ($row = mysql_fetch_assoc($result)) {
                $lstid[$cptlst] = $row['id_text'];
                $cptlst++;
            }
            
        }
        mysql_free_result($result);

        for ($cptmaj = 0; $cptmaj < $cptlst ;$cptmaj++) {
            $idtotr = $lstid[$cptmaj];
            $txttomaj = $_POST['maj'];
            $newtxt = $_POST[$idtotr];
            $dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
            $reqmaj = ("update id_translation set $txttomaj=\"$newtxt\" where id_text=\"$idtotr\";");
            mysql_query($reqmaj,$dlink->sqllinkid);
            unset($dlink);
        }
    } else {
        $_SESSION['sendaction'] = "MT";
        updatetranslationform();
    }
}

function change_pt()
{
    if (!isset($_POST['maxday'])) {
        $_SESSION['sendaction'] = "MP";
        updatepointform();
    } else {
        $_SESSION['sendaction'] = "MP";
        echo"<form action='' method='post' enctype='multipart/form-data' name='datauser'>
		<table width='600' border='0' class='tabgen'>
		<tr>
		<td  class='tabadmtitle'>" . idstr('id_0018') . "</td>
		</tr>
		<tr><td align='center'>";
        $request = ("update settings set i=$_POST[maxday] where section='max_point' and sectionkey='max_day';");
        $dlink = new dbconnection($GLOBALS['adm_login'],$GLOBALS['adm_pwd'],$GLOBALS['adm_server'],$GLOBALS['adm_db']);
        if ($result = mysql_query($request,$dlink->sqllinkid)) {
        	unset($dlink);
            echo idstr('id_0044') . " = " . $_POST[maxday];
        }
        echo "
		</td>
		</tr>
		</form>
		<tr>
		<form action='index.php' method='post'>
		<td class='tabadmfooter'><input name='back' type='hidden' value='back' checked><input type='submit' name='Home' value='Home' ></td>
		</tr>
		</form>
		</table>
		</form>";
    }
}

?>