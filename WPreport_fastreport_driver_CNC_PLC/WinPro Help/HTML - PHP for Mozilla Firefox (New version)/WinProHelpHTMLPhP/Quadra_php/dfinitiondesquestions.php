<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Questions Setup","Définition des questions","Definitie van vragen"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?définitiondesquestions.php"; }
else { parent.quicksync('a3.2.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Définition des questions</title>
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;"
onload=" AddTitleAndLangFlags();highlight();">

<div id="hmpopupDiv"
style="visibility:hidden; position:absolute; z-index:1000;">
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="5"
bgcolor="#FF8000">
  <tbody>
    <tr valign="middle">
      <td align="left"><p class="p_Heading1"><span id="titlepage"
        class="f_Heading1"></span></p>
      </td>
      <td align="center">
        <div id="langflags">
        </div>
      </td>
      <td align="right"><span style="font-size: 9pt"><a
        href="introduction.php">Top</a>  <a href="questions.php">Previous</a> 
        <a href="formulesdequestions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p>You define questions in a grid; each line of the grid defines a
        question.</p>

        <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0075.jpg" width="556" height="95" border="0"
        alt="clip0075"></p>

        <p>Each column defines one characteristic of the question:</p>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;">

        <table align="center" cellspacing="0" cellpadding="0" border="1"
        style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Column</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000;">Usage</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Text</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Text which will be displayed or
                printed. This text can be replaced by a translation, which you
                define by clicking the corresponding button in the </span><span
                style="font-weight: bold; color: #000000;">Tra...</span><span
                style="color: #000000;">column.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Variable
                name</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Name of the variable associated to the
                question. This name will be hidden to the user. The variable
                will be usable in each formula belonging to the element in
                which the question is defined, as well as by some other
                formulas, as explained below.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Type</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Sets the type of question. There are
                three types: </span><span
                style="font-weight: bold; color: #000000;">Logical</span><span
                style="color: #000000;">, </span><span
                style="font-weight: bold; color: #000000;">Numerical</span><span
                style="color: #000000;">, </span><span
                style="font-weight: bold; color: #000000;">Selection</span><span
                style="color: #000000;">. These types show different styles of
                answer to the user:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-weight: bold; color: #000000;">Yes</span><span
                        style="color: #000000;"> or </span><span
                        style="font-weight: bold; color: #000000;">No</span><span
                        style="color: #000000;"> for a </span><span
                        style="font-weight: bold; color: #000000;">Logical</span><span
                        style="color: #000000;"> question</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">A </span><span
                        style="font-weight: bold; color: #000000;">number</span><span
                        style="color: #000000;"> input for a </span><span
                        style="font-weight: bold; color: #000000;">Numerical</span><span
                        style="color: #000000;"> question</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-weight: bold; color: #000000;">Selection</span><span
                        style="color: #000000;"> from a list of choices for a
                        </span><span
                        style="font-weight: bold; color: #000000;"> Selection</span><span
                        style="color: #000000;"> question</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">...</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">For </span><span
                style="font-weight: bold; color: #000000;">Selection</span><span
                style="color: #000000;"> questions, a button lets you define the
                list of possible answers.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Default
                value</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Lets you define the default answer to
                the question:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">For </span><span
                        style="font-weight: bold; color: #000000;">Logical</span><span
                        style="color: #000000;">questions, this value can be 0
                        (no) o 1 (yes).</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">For </span><span
                        style="font-weight: bold; color: #000000;">Numerical</span><span
                        style="color: #000000;">questions, this value may be an
                        arbitrary number.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">For </span><span
                        style="font-weight: bold; color: #000000;">Selection</span><span
                        style="color: #000000;"> questions, this valuer will be
                        the name of the variable associated to one of the
                        answers. Such questions must necessarily have a default
                        value.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Doc.</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Lets you define when to print the
                question:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-weight: bold; color: #000000;">Always</span><span
                        style="color: #000000;">: the question is </span><span
                        style="font-weight: bold; color: #000000;">always
                        printed.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-weight: bold; color: #000000;">Never</span><span
                        style="color: #000000;">: the question is </span><span
                        style="font-weight: bold; color: #000000;">never
                        printed.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold; color: #000000;">=
                        0</span><span style="color: #000000;">: the question is
                        printed only when the answer is </span><span
                        style="font-weight: bold; color: #000000;">0 for a
                        numerical question</span><span
                        style="color: #000000;">, or </span><span
                        style="font-weight: bold; color: #000000;">No for a
                        logical question.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-weight: bold; color: #000000;">&lt;&gt;
                        0</span><span style="color: #000000;">: the question is
                        printed only when the answer is </span><span
                        style="font-weight: bold; color: #000000;">not 0 for a
                        numerical question</span><span
                        style="color: #000000;">, or </span><span
                        style="font-weight: bold; color: #000000;">Yes for a
                        logical question</span><span style="color: #000000;">.
                        </span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">This column is disabled
                        for </span><span
                        style="font-weight: bold; color: #000000;">Selection</span><span
                        style="color: #000000;"> questions. The printability of
                        such questions is defined for each answer individually,
                        with a checkbox onto the left of the answer list set up
                        pane.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 14px 13px;"><img src="img/clip0082.jpg"
                width="438" height="102" border="0" alt="clip0082"></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p>Roller shutter boxes and shutter questions have an extra column.
        This column lets you define that a question is about the handling of
        the shutter. For roller shutters with more than one shutter, WinPro
        will ask such questions for each shutter individually.</p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p style="text-align: center; margin: 0px 0px 14px 0px;"><img
        src="img/clip0081.zoom117.jpg" width="218" height="97" border="0"
        alt="clip0081"></p>

        <p>Global questions have also an extra column, letting you define when a global question may be updated after the first input into an order, 
		as defined into <a href="9_0_0_x.php">release note version 9.0.0.71</a>.</p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p style="text-align: center; margin: 0px 0px 14px 0px;"><img
        src="img/clip0081eng.jpg" width="267" height="232" border="0"
        alt="clip0081eng"></p>

        <p style="margin: 0px 0px 14px 0px;"><span style="color: #000000;">For
        </span><span
        style="font-weight: bold; color: #000000;">Selection</span><span
        style="color: #000000;"> questions, the list of possible answers is also
        defined in a grid, where each line holds the one answer:</span></p>

        <p style="margin: 0px 0px 14px 0px;"><span
        style="color: #000000;"> </span></p>

        <p style="text-align: center; margin: 0px 0px 14px 0px;"><img
        src="img/clip0082.jpg" width="438" height="102" border="0"
        alt="clip0082"></p>

        <p style="text-align: center; margin: 0px 0px 14px 0px;"><span
        class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;">

        <table align="center" cellspacing="0" cellpadding="0" border="1"
        style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="76" bgcolor="#fff7ef"
              style="width: 76px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Column</span></p>
              </td>
              <td width="529" bgcolor="#fff7ef"
              style="width: 529px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 15px;"><span
                style="font-weight: bold; color: #000000;">Usage</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="76" bgcolor="#fff7ef"
              style="width: 76px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Text</span></p>
              </td>
              <td width="529" bgcolor="#fff7ef"
              style="width: 529px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 15px;"><span
                style="color: #000000;">Text which will be displayed or
                printed.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="76" bgcolor="#fff7ef"
              style="width: 76px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Value</span></p>
              </td>
              <td width="529" bgcolor="#fff7ef"
              style="width: 529px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 15px;"><span
                style="color: #000000;">Name of the variable associated with
                the answer. The user will not see this name. The value of this
                answer variable will be compared to the value of the question
                variable in the formulas which can use the question. If both
                variables have the same value, then the user has selected the
                corresponding answer. The value of the answer variables is
                handled by WinPro.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="76" bgcolor="#fff7ef"
              style="width: 76px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Doc.</span></p>
              </td>
              <td width="529" bgcolor="#fff7ef"
              style="width: 529px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 15px;"><span
                style="color: #000000;">When this box is checked, the question
                is printed onto documents, along with corresponding
                answer.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="color: #000000;"> </span></p>

        <p><span style="color: #000000; text-decoration: underline;">Question
        printing:</span></p>

        <p>A variable labelled <span class="f_Variables">Print </span>is
        available into the code. If the variable is worth <span
        class="f_Variables">True ()</span>, the question will be printed onto
        documents, when others conditions are fulfilled for enabling printings
        (Doc. column into question set up) ; If the variable is worth<span
        class="f_Variables">False ()</span>, the question is not printed. You
        may then decide when and how a given question has to be printed,
        according others questions.</p>

        <p style="text-align: center; margin: 0px 0px 14px 0px;"><span
        style="color: #000000;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>La définition des questions se présente sous forme de tableau;
        chaque ligne du tableau permet de définir une question.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0271.gif" width="706"
        height="116" border="0" alt="clip0271"></p>

        <p><span style="font-size: 5pt;"></span>Chaque colonne définit une
        caractéristique de la question:</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="86" style="width: 86px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Colonne</span></p>
              </td>
              <td width="621"
                style="width: 621px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="86" style="width: 86px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Texte</span></p>
              </td>
              <td width="621"
                style="width: 621px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Texte qui sera présenté à
                l'utilisateur, ou imprimé</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="86" style="width: 86px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Nom </span></p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">de la </span></p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">variable</span></p>
              </td>
              <td width="621"
                style="width: 621px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Nom de la variable associée à
                la question. Ce nom sera caché à l'utilisateur. La variable
                sera disponible dans toutes les formules de l'élément auquel
                les questions appartiennent, ainsi que dans certains autres
                éléments, comme expliqué à la fin de cette page.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="86" style="width: 86px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Type</span></p>
              </td>
              <td width="621"
                style="width: 621px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Indique le type de question.
                Il en existe trois types: <span
                style="font-weight: bold;">Logique</span>, <span
                style="font-weight: bold;">Numérique</span>, <span
                style="font-weight: bold;">Sélection</span>. Ces types se
                distinguent par le type de réponse proposé à l'utilisateur:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Oui</span> ou <span
                        style="font-weight: bold;">Non</span> pour une question
                        <span style="font-weight: bold;">Logique</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Saisie d'un <span
                        style="font-weight: bold;">nombre</span> pour une
                        question <span
                        style="font-weight: bold;">Numérique</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Choix</span> dans
                        une liste pour une question de type <span
                        style="font-weight: bold;">Sélection</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="86" style="width: 86px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">...</span></p>
              </td>
              <td width="621"
                style="width: 621px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si la question est de type
                Sélection, un bouton vous permet de définir la liste des
                réponses possibles.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="86" style="width: 86px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Valeur</span></p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">par</span></p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">défaut</span></p>
              </td>
              <td width="621"
                style="width: 621px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Indique la valeur par défaut
                de la réponse à la question:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Oui ou Non pour une question de type Logique.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Saisie d'un nombre pour une question de type
                        Numérique. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Choix dans une liste pour une question de type
                        Sélection.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="86" style="width: 86px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Doc.</span></p>
              </td>
              <td width="621"
                style="width: 621px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Indique s'il faut imprimer la
                question. Les réponses possibles sont:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Toujours</span>: la
                        question est toujours imprimée.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Jamais</span>: la
                        question n'est jamais imprimée.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">= 0</span>: la
                        question n'est imprimée que si la réponse est 0 pour
                        une question numérique, ou Non pour une question
                        logique.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">&lt;&gt; 0</span>:
                        la question n'est imprimée que si la réponse n'est pas
                        0 pour une question numérique, ou Oui pour une question
                        logique.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Pour les questions de type Sélection, ce choix n'est
                        pas accessible. La définition de l'impression se fait
                        individuellement pour chaque réponse possible (à l'aide
                        de la case à cocher se trouvant dans la liste des
                        différentes sélections possibles)</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 27px;"><img src="img/clip0275.gif"
                width="576" height="140" border="0" alt="Clip0275"></p>

                <p style="margin: 0px 0px 0px 27px;"> </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>Les questions de caisson et tablier de volet roulant comportent une
        colonne supplémentaire. Cette colonne permet d'indiquer que la question
        se rapporte à la manoeuvre du tablier. Dans ce cas, pour les volets
        comportant plus d'un tablier, WinPro posera la question
        individuellement pour chaque tablier.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0272.gif" width="766"
        height="225" border="0" alt="clip0272"></p>

       <p><span style="font-size: 5pt;"> </span></p>

        <p>Les questions globales ont également une colonne supplémentaire, permettant de définir 
		si une question globale peut etre mise à jour apres saisie de la première valeur de réponse, comme défini dans la 
		<a href="9_0_0_x.php">note de version 9.0.0.71</a>..</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0081fra.jpg" width="243"
        height="246" border="0" alt="clip0081fra"></p>

        <p style="text-align: center;"> </p>

        <p>Pour les questions de type Sélection, la liste des réponses
        possibles se définit également dans un tableau, où chaque réponse
        possible correspond à une ligne du tableau:</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0275.gif" width="576"
        height="140" border="0" alt="Clip0275"></p>

        <p style="text-align: center;"><span
        style="font-size: 8pt; font-family: 'MS Sans Serif'; color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Colonne</span></p>
              </td>
              <td width="661"
                style="width: 661px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Usage</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Texte</span></p>
              </td>
              <td width="661"
                style="width: 661px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 6px;">Texte qui sera présenté à
                l'utilisateur, ou imprimé</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Valeur</span></p>
              </td>
              <td width="661"
                style="width: 661px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 6px;">Nom de la variable associée à
                la réponse. Ce nom sera caché à l'utilisateur. On pourra
                comparer la variable de la question avec la variable de la
                réponse dans les formules qui ont accès à la question. Si les
                deux variables sont égales, c'est que l'utilisateur a
                sélectionné la réponse correspondante. </p>

                <p style="margin: 0px 0px 0px 6px;">La valeur effective de
                cette variable est géré par WinPro.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Doc.</span></p>
              </td>
              <td width="661"
                style="width: 661px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 6px;">Indique s'il faut imprimer la
                question lorsque la réponse correspondante a été
                sélectionnée.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p><span style="text-decoration: underline;">Impression des
        questions:</span> <br>
        Nous disposons d&rsquo;une variable dans les formules de questions :
        <span class="f_Variables">Imprimer</span>. Si cette variable contient
        la valeur <span class="f_Variables">Vrai()</span>, la question pourra
        être imprimée sur les documents, si les autres conditions sont réunies
        pour l&rsquo;impression (colonne Doc. de la définition des questions) ;
        si la variable contient <span class="f_Variables">Faux()</span>, la
        question ne sera pas imprimée. Vous pouvez donc décider si une question
        doit être imprimée au non, en fonction des réponses aux autres
        questions.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p>U definieert vragen in een tabel,waarin elke lijn staat voor een
        vraag.</p>

        <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0075.jpg" width="556" height="95" border="0"
        alt="clip0075"></p>

        <p>Elke kolom bepaald een eigenschap van de vraag:</p>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;">

        <table align="center" cellspacing="0" cellpadding="0" border="1"
        style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Kolom</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000;">Gebruik</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Tekst</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Tekst welke weergegeven of afgedrukt
                wordt.Deze tekst kan vervangen worden door een vertaling,welke
                je kan invoeren door op de correspondernde knop te klikken in
                de </span><span
                style="font-weight: bold; color: #000000;">Tra...</span><span
                style="color: #000000;">kolom.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Variabele
                naam</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Naam van de variabele toegewezen aan
                aan de vraag.Deze naam zal niet gezien worden door de
                gebruiker.De variabele kan gebruikt worden in elke formule
                toebehorend aan het element in dewelke de vraag is
                gedefinieert,alsook in bepaalde andere formules ,zoals onderaan
                verder uitgelegd.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Type</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Bepaald het type van vraag. Er zijn 3
                types: </span><span
                style="font-weight: bold; color: #000000;">Logische</span><span
                style="color: #000000;">, </span><span
                style="font-weight: bold; color: #000000;">Numerieke</span><span
                style="color: #000000;">, </span><span
                style="font-weight: bold; color: #000000;">Selectie</span><span
                style="color: #000000;">. Deze types geven andere stijlen weer
                van antwoord voor de gebruiker:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold; color: #000000;">Ja
                        </span><span style="color: #000000;">of </span><span
                        style="font-weight: bold; color: #000000;">Nee
                        </span><span style="color: #000000;">voor een
                        </span><span
                        style="font-weight: bold; color: #000000;">Logische
                        </span><span style="color: #000000;">vraag</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Een </span><span
                        style="font-weight: bold; color: #000000;">numerieke
                        </span><span style="color: #000000;">invoer voor een
                        </span><span
                        style="font-weight: bold; color: #000000;">Numerieke
                        </span><span style="color: #000000;">vraag</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-weight: bold; color: #000000;">Selectie
                        </span><span style="color: #000000;">vanuit een
                        keuzelijst voor een </span><span
                        style="font-weight: bold; color: #000000;">Selectie</span><span
                        style="color: #000000;">vraag</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">...</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Voor </span><span
                style="font-weight: bold; color: #000000;">Selectie
                </span><span style="color: #000000;">vragen, zal een extra knop
                u de keuzelijst weergeven voor de mogelijke
                antwoorden.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Standaard
                waarde</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Laat u de standaard waarde bepalen van
                het antwoord op de vraag:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Voor </span><span
                        style="font-weight: bold; color: #000000;">Logische
                        </span><span style="color: #000000;">vragen, kan deze
                        waarde 0 (neen) of 1 (ja) zijn.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Voor </span><span
                        style="font-weight: bold; color: #000000;">Numerieke
                        </span><span style="color: #000000;">vragen, kan dit
                        getal een nummer zijn.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 26px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Voor </span><span
                        style="font-weight: bold; color: #000000;">Selectie
                        </span><span style="color: #000000;">vragen, zal deze
                        waarde de naam van de variabele zijn welke toegewezen
                        is aan één van de antwoorden.Zulke vragen moeten een
                        standaard waarde hebben..</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="113" bgcolor="#fff7ef"
              style="width: 113px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Doc.</span></p>
              </td>
              <td width="491" bgcolor="#fff7ef"
              style="width: 491px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Laat u bepalen of een vraag dient
                afgedrukt te worden of niet.</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-weight: bold; color: #000000;">Altijd</span><span
                        style="color: #000000;">: de vraag (en antwoord) wordt
                        </span><span
                        style="font-weight: bold; color: #000000;">altijd
                        afgedrukt.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-weight: bold; color: #000000;">Nooit</span><span
                        style="color: #000000;">: de vraag (en antwoord) wordt
                        </span><span
                        style="font-weight: bold; color: #000000;">nooit
                        afgedrukt.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold; color: #000000;">=
                        0</span><span style="color: #000000;">: de vraag wordt
                        enkel afgedrukt wanneer het antwoord </span><span
                        style="font-weight: bold; color: #000000;">0 is voor
                        een numerieke vraag</span><span
                        style="color: #000000;">, of </span><span
                        style="font-weight: bold; color: #000000;">Neen voor
                        een logische vraag.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-weight: bold; color: #000000;">&lt;&gt;
                        0</span><span style="color: #000000;">: de vraag wordt
                        enkel afgedrukt wanneer het antwoord </span><span
                        style="font-weight: bold; color: #000000;">niet 0 is
                        voor een numerieke vraag, </span><span
                        style="color: #000000;">of </span><span
                        style="font-weight: bold; color: #000000;">Ja voor een
                        logische vraag</span><span style="color: #000000;">.
                        </span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Deze kolom is verborgen
                        voor </span><span
                        style="font-weight: bold; color: #000000;">Selectie</span><span
                        style="color: #000000;">vragen. Het afdrukken van zulke
                        vragen is bepaald voor elk afzonderlijk antwoord, met
                        een selectievak rechts van de variabelenaam in de
                        keuzelijst.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 14px 13px;"><img src="img/clip0082.jpg"
                width="438" height="102" border="0" alt="clip0082"></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p>Rolluikbladen en rolluikvragen hebben een extra kolom. Deze kolom
        laat u toe te bepalen of deze vraag te maken heeft met de bediening van
        het rolluik.Voor rolluiken met meer dan één rolluikblad,zal Winpro voor
        elk blad afzonderlijk deze vragen stellen.</p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p style="text-align: center; margin: 0px 0px 14px 0px;"><img
        src="img/clip0081.zoom117.jpg" width="218" height="97" border="0"
        alt="clip0081"></p>

        <p style="margin: 0px 0px 14px 0px;"><span style="color: #000000;">Voor
        </span><span style="font-weight: bold; color: #000000;">Selectie
        </span><span style="color: #000000;">vragen, is de lijst van mogelijke
        antwoorden bepaald in een tabel,waar elke lijn een antwoord
        bevat</span></p>

        <p style="margin: 0px 0px 14px 0px;"><span
        style="color: #000000;"> </span></p>

        <p style="text-align: center; margin: 0px 0px 14px 0px;"><img
        src="img/clip0082.jpg" width="438" height="102" border="0"
        alt="clip0082"></p>

        <p style="text-align: center; margin: 0px 0px 14px 0px;"><span
        class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;">

        <table align="center" cellspacing="0" cellpadding="0" border="1"
        style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="76" bgcolor="#fff7ef"
              style="width: 76px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Kolom</span></p>
              </td>
              <td width="529" bgcolor="#fff7ef"
              style="width: 529px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 15px;"><span
                style="font-weight: bold; color: #000000;">Gebruik</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="76" bgcolor="#fff7ef"
              style="width: 76px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Tekst</span></p>
              </td>
              <td width="529" bgcolor="#fff7ef"
              style="width: 529px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 15px;"><span
                style="color: #000000;">Tekst welke weergegeven en/of afgedrukt
                wordt.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="76" bgcolor="#fff7ef"
              style="width: 76px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Waarde</span></p>
              </td>
              <td width="529" bgcolor="#fff7ef"
              style="width: 529px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 15px;"><span
                style="color: #000000;">Naam van de variabele geassocieert met
                het antwoord.De gebruiker zal dit niet zien.de waarde van deze
                variabele van het antwoord zal vergeleken worden met de waarde
                van de vraag variabele in de formules welke de vraag kan
                gebruiken.Wanneeer beide variabelendezelfde waarde hebben,dan
                heeft de gebruiker het corresponderend antwoord geselecteert.De
                waarde van de antwoord variabele wordt behandeld door
                Winpro.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="76" bgcolor="#fff7ef"
              style="width: 76px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Doc.</span></p>
              </td>
              <td width="529" bgcolor="#fff7ef"
              style="width: 529px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 15px;"><span
                style="color: #000000;">Wannneer dit geselecteert is,zal de
                vraag en antwoord afgedrukt worden.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="color: #000000;"> </span></p>

        <p><span style="color: #000000; text-decoration: underline;">Afdrukken
        vragen:</span></p>

        <p>Een variabele genaamd <span class="f_Variables">Print </span>is
        beschikbaar in de code. Als de variabele waar is <span
        class="f_Variables">True ()</span>, zal de vraag afgedrukt worden op de
        documenten, wanneer andere voorwaarden voldaan zijn voor het
        inschakelen van het afdrukken (Doc. kolom bij de vraag definitie) ; Als
        de variabele onwaar is <span class="f_Variables">False ()</span>, wordt
        de vraag niet afgedrukt U kan dan bepalen wanneer en hoe een gegeven
        vraag moet afgedrukt worden, in functie van andere vragen.</p>

        <p style="text-align: center; margin: 0px 0px 14px 0px;"><span
        style="color: #000000;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
