<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Example search page for the JavaScript option for 
Wrensoft Zoom Search Engine (http://www.wrensoft.com/zoom/)

NOTE: You should only use the JavaScript version if server-side
processing is not available. For example, for CD-ROM/DVD distributions, 
local Intranet networks, etc.

Client-side searching requires the entire index file to be downloaded
to the client, which is not an issue locally, or if your website is small,
but can be very slow for larger websites, over the Internet.

Hints:
1. Make sure you have indexed your website with the Zoom Indexer application
   with the "Javascript" option checked in the Configuration dialog. It
   should produce several files (including "zoom_index.js") in your selected 
   output directory.
2. Put this file (search.html), search.js, zoom_index.js, and other files 
   listed at the end of indexing (as "Required files") in the same folder.
3. Copy or upload these files to your distribution medium (CD, server, etc)
3. Customise this page as you see fit. You can also put a search form on the
   other pages of your site (or navigation menus, etc.). See this FAQ:
   http://www.wrensoft.com/zoom/support/faq_howto.html#simpleform
-->
<php xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
	<title>Example search page for Zoom Search Engine (JavaScript version)</title>
	<script language="JavaScript" src="settings.js"></script>
	<script language="JavaScript" src="search.js"></script>
	<!-- You can change the fonts, text colors, and styles of your search results with the CSS below -->
	<link type="text/css" href="default.css" rel="stylesheet" /> 
	<style type="text/css">
     .navtitle { font-size: 14pt; font-weight: bold; margin-bottom: 16px; }
     .navbar   { font-size: 10pt; }
 
	.highlight { background: #FFFF40; }
	.searchheading { font-size: 130%; font-weight: bold; }
	.summary { font-size: 80%; font-style: italic; }
	.suggestion { font-size: 100%; }
	.results { font-size: 100%; }
	.category { color: #999999; }
	.sorting { text-align: right; }

	.result_title { font-size: 100%; }		
	.description { font-size: 100%; color: #008000; }
	.context { font-size: 100%; }
	.infoline { font-size: 80%; font-style: normal; color: #808080;}

	.zoom_searchform { font-size: 100%; }
	.zoom_results_per_page { font-size: 80%; margin-left: 10px; }
	.zoom_match { font-size: 80%; margin-left: 10px;}				
	.zoom_categories { font-size: 80%; }
	.zoom_categories ul { display: inline; margin: 0px; padding: 0px;}
	.zoom_categories li { display: inline; margin-left: 15px; list-style-type: none; }
	
	.cat_summary ul { margin: 0px; padding: 0px; display: inline; }
	.cat_summary li { display: inline; margin-left: 15px; list-style-type: none; }

	input.zoom_button {  }
	input.zoom_searchbox {  }		
	
	.result_image { float: left; display: block; }
	.result_image img { margin: 10px; width: 80px; border: 0px; }

	.result_block { margin-top: 15px; margin-bottom: 15px; clear: left; }
	.result_altblock { margin-top: 15px; margin-bottom: 15px; clear: left; }
	
	.result_pages { font-size: 100%; }
	.result_pagescount { font-size: 100%; }
	
	.searchtime { font-size: 80%; }
	
	.recommended 
	{ 
		background: #DFFFBF; 
		border-top: 1px dotted #808080; 
		border-bottom: 1px dotted #808080; 
		margin-top: 15px; 
		margin-bottom: 15px; 
	}
	.recommended_heading { float: right; font-weight: bold; }
	.recommend_block { margin-top: 15px; margin-bottom: 15px; clear: left; }		
	.recommend_title { font-size: 100%; }
	.recommend_description { font-size: 100%; color: #008000; }
	.recommend_infoline { font-size: 80%; font-style: normal; color: #808080;}
	.recommend_image { float: left; display: block; }
	.recommend_image img { margin: 10px; width: 80px; border: 0px; }
   </style>
</head>

<body onload="if (document.getElementById('zoom_searchbox')) {document.getElementById('zoom_searchbox').focus();}">
	<p class="navtitle">WinPro Reference Manual</p>
	<p class="navbar">
	<a href="wp_content_dyn.php">Content</a>
	| <b>Search</b>
	</p>
	<hr size="1" />
	<p>
	Enter one or more keywords to search for using the Zoom Search Engine.<br />
	Note that '*' and '?' wildcards are supported.
	</p>
	<!-- This is where the search form and results will appear -->
	<script language="JavaScript">ZoomSearch();</script>
	<noscript>You must have JavaScript enabled to use this version of the search engine.</noscript>
</body>
</html>