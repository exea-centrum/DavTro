var usecookie = false;
var tocselecting = false;
var currentselection;
var treestate = "";  

function fullexpand() { switchall(true); }
function fullcollapse() { switchall(false); }

function switchall(divvisible) {
    var tree = hmnavigation.document.getElementById(readCookie('WinProHelpLang')+"tree");
    if (tree) {
       var items = tree.getElementsByTagName("div");
       for(var i = 0; i < items.length; i++) if (divvisible != ((items[i].style.display=="block")?true:false)) switchdiv(items[i], items[i].id, divvisible);
       if ((divvisible) && (currentselection)) intoview(currentselection, tree, false);
    }
}

function loadstate(tree) {
    var divID;
    if ((treestate=="") && (usecookie)) treestate = document.cookie;
    while (treestate != "") {
       divID = treestate.substring(0,treestate.indexOf(","));
       treestate = treestate.substring(divID.length+1,treestate.length);
       toggle(divID);
    }
    var topicID = hmcontent.location.href.substring(hmcontent.location.href.lastIndexOf("/")+1,hmcontent.location.href.length);
    if (topicID.lastIndexOf("#") != -1) topicID = topicID.substring(0,topicID.lastIndexOf("#"));
    if (topicID.lastIndexOf("?") != -1) topicID = topicID.substring(0,topicID.lastIndexOf("?"));
    tocselecting = false;
    lazysync(topicID);
}

function savestate(tree) {
    treestate = "";
	 if (tree)
		 {
		 var items = tree.getElementsByTagName("div");
		 for(var i = 0; i < items.length; i++) if (items[i].style.display=="block") treestate = treestate.concat(items[i].id + ",");
		 if (usecookie) document.cookie = treestate;
		 }
}

function toggle(divID) {
    var thisdiv = hmnavigation.document.getElementById(divID);
    if (thisdiv) switchdiv(thisdiv, divID, ((thisdiv.style.display=="none")?true:false));
}

function switchdiv(thisdiv, divID, divvisible) {
    var thisicon = hmnavigation.document.getElementById(readCookie('WinProHelpLang')+"i"+divID.substring(6,divID.length));
    var icons = "";
    if (thisicon) icons = thisicon.getAttribute("name");
    if (divvisible) {
       thisdiv.style.display="block";
       if (thisicon) thisicon.src = icons.substring(icons.lastIndexOf(":")+1, icons.length);
    }
    else {
       thisdiv.style.display="none";
       if (thisicon) thisicon.src = icons.substring(0, icons.lastIndexOf(":"));
    }
}

function hilight(spanID) {
    tocselecting = true;
    var thisnode = null;
    var selectionchanged = false;
	if (spanID[0]=="s") {
	spanID=readCookie('WinProHelpLang')+spanID;
    }
	thisnode = hmnavigation.document.getElementById(spanID);
    if (thisnode) {
       try {
          if ((currentselection) && (currentselection != thisnode)) currentselection.className = "heading" + currentselection.className.substr(7,1);
       }
       catch(e){}
       thisnode.className = "hilight"+thisnode.className.substr(7,1);
       selectionchanged = (currentselection != thisnode);
       currentselection = thisnode;
    }
    return selectionchanged;
}

function intoview(thisnode, tree, selectionchanged) {
    var thisparent = thisnode;
    while (thisparent != tree) {
       if ((selectionchanged) && (thisparent.nodeName.toLowerCase()=="div")) switchdiv(thisparent,thisparent.id,true);
       thisparent = thisparent.parentNode;
    }
    thisparent = thisnode;
    for (var t=0; thisparent!=null; t+=thisparent.offsetTop, thisparent=thisparent.offsetParent);
    var bt = (hmnavigation.window.pageYOffset)?hmnavigation.window.pageYOffset:hmnavigation.document.body.scrollTop;
    var bh = (hmnavigation.window.innerHeight)?hmnavigation.window.innerHeight:hmnavigation.document.body.offsetHeight;
    if ((t+thisnode.offsetHeight-bt) > bh) hmnavigation.window.scrollTo(0,(t+24-bh))
    else if (t < bt) hmnavigation.window.scrollTo(0,t);              
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
function quicksync(aID) {
    if (aID != "") {
	   aID = readCookie('WinProHelpLang') + aID;
       var tree = hmnavigation.document.getElementById(readCookie('WinProHelpLang')+"tree");
       if ((tree) && (!tocselecting)) {
          var thisspan = hmnavigation.document.getElementById(aID);
          if (thisspan) {
             var selectionchanged = hilight(readCookie('WinProHelpLang')+"s"+aID.substring(4,aID.length));
             intoview(thisspan, tree, selectionchanged);
          }
       }
    }
    tocselecting = false;
}

function lazysync(topicID) {
    if (topicID != "") {
       var tree = hmnavigation.document.getElementById(readCookie('WinProHelpLang')+"tree");
       if ((tree) && (!tocselecting)) {
          var array = new Array(0);
          var items = tree.getElementsByTagName("a");
          for(var i = 0; i < items.length; i++) {
             if (items[i].href.substring(items[i].href.lastIndexOf("/")+1,items[i].href.length)==topicID) {
                var selectionchanged = hilight("s"+items[i].id.substring(1,items[i].id.length));
                intoview(items[i], tree, selectionchanged);
                break;
             }
          }
       }
    }
    tocselecting = false;
}

function preloadicons() {
    var icons = new Array();
    for (i=0; i<preloadicons.arguments.length; i++) {
       icons[i] = new Image();
       icons[i].src = preloadicons.arguments[i];
    }
}
