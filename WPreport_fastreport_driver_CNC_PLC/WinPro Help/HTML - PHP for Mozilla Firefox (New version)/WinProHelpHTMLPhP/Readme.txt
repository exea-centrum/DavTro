#Standard help for Winpro:

#########################
#in "HEAD": script put flags and title in header section....
#########################


<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA","ENG"];
var WinProHelpPageName=["Fonctions","Functions"];
WPlangInit(WinProHelpAvailableLanguages);
...


#########################
#in "BODY":
#########################
you have to put "AddTitleAndLangFlags()" in "onload" section


<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
...



#########################
#in "TABLE" for the header section:
#########################

you have to put "id="titlepage"" in the good section:

<td align="left">
  <p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
  <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
</td>

And ad this section for flags area

<td align="center">
 <div id="langflags"></div>
</td>


#########################
#Topic body
#########################
you have to put : 
<div class="FRA">

befor your topic body and 
</div>
after


#########################
#Only for Quadrature users
#########################

In the body you have to put befor and after the section Start and End....

<!--QuadraStart//-->
        <p style="margin: 0px 0px 0px 48px;"><span class="FRA"><span
        class="f_Variables"># Si 0+0 = la tête à TOTO</span></span></p>
<!--QuadraEnd//-->


#########################
#When the file's not finish
#########################

Put in the "body" section : background="workinprogress.png" like this:
<body background="workinprogress.png" style="margin: 0px 0px 0px 0px;" onload="AddTitleAndLangFlags();highlight();"> 

becarfull, sometime, the background's put in default in white... you have to delete it: "BACKGROUND: #FFFFFF"
<body background="workinprogress.png" style="margin: 0px 0px 0px 0px; BACKGROUND: #FFFFFF;" onload=" AddTitleAndLangFlags();highlight();">
->

<body background="workinprogress.png" style="margin: 0px 0px 0px 0px;" onload=" AddTitleAndLangFlags();highlight();">

