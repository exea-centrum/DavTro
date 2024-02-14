/* Quadrature script de lang*/
var IndexLang = 0;
function createCookie(name,value,days) 
	{
	if (days) 
		{
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
		}
	else 
		var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
	parent.frames[0].location.reload();
	window.location.reload();
	}

function readCookie(name) 
	{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) 
		{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}	
	return null;
	}

function WPlangInit(WinProHelpAvailableLanguages) 
	{
	var langue = readCookie('WinProHelpLang');
	var x;
	for (x in WinProHelpAvailableLanguages)
		{
		if (WinProHelpAvailableLanguages[x] == langue)
			{
			IndexLang = x;
			break;
			}
		}

	for (x in WinProHelpAvailableLanguages)
		{
		document.write('<style type="text/css">.' + WinProHelpAvailableLanguages[x] + '{display:none;}</style>');
		}
	document.write('<style type="text/css">.' + WinProHelpAvailableLanguages[IndexLang] + '{display:block;}</style>');
	}
	
function AddTitleAndLangFlags()
	{
	
	if (document.getElementById) 
		{
		document.getElementById('titlepage').innerHTML = WinProHelpPageName[IndexLang];
		var x;
		for (x in WinProHelpAvailableLanguages)
			{
			document.getElementById('langflags').innerHTML += '<a href="#" onclick="createCookie(\'WinProHelpLang\',\'' + WinProHelpAvailableLanguages[x] + '\',1000);"><img src="img/' + WinProHelpAvailableLanguages[x] + '.png" border="0" alt="' + WinProHelpAvailableLanguages[x] + '"></a>  ';
			}
		}
	}