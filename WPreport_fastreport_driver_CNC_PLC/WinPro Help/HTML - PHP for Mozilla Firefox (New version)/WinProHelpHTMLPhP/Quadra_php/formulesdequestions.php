<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG" , "FRA","NED"];
var WinProHelpPageName=["Question formulas" , "Formules de questions", " Formules van vragen"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?formulesdequestions.php"; }
else { parent.quicksync('a3.2.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Formules de questions</title>
  <meta name="keywords"
  content="Selection,@noir,@blanc,@jaune,@vert,@cyan,@rouge,@magenta,@gris,Imprimer,Visible,TexteQuestion,FondQuestion,DevisDetaille,DevisSimplifie,Confirmation,PlanAtelierDetaille,PlanAtelierSimplifie">
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
        href="introduction.php">Top</a>  <a
        href="définitiondesquestions.php">Previous</a>  <a
        href="accessibilitédesquestions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>A formula can be linked to each question. This formula gives you
        several options:</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold; color: #000000;">Answer
                computation:</span><span style="color: #000000;">You can
                compute the answer to questions, depending on the answers to
                other questions (or depending on configuration
                variables).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold; color: #000000;">Question
                display.</span><span style="color: #000000;">You can control
                the display of questions with the variable </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Visible</span><span
                style="color: #000000;">. If the value of this variable is
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">False()</span><span
                style="color: #000000;">, the question is hidden from the user.
                If the value is </span><span
                style="font-family: 'Courier New'; color: #0000ff;">True()</span><span
                style="color: #000000;">, the question is displayed. The value
                can be changed dynamically.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold; color: #000000;">Choice of
                selections.</span><span style="color: #000000;">This choice is
                handled through the variable </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Selection[]</span><span
                style="color: #000000;">. This vector variable has one element
                for each possible answer, in their order of definition. An
                answer will be shown if the corresponding element of the
                variable </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Selection[]</span><span
                style="color: #000000;">holds the value </span><span
                style="font-family: 'Courier New'; color: #0000ff;">True()</span><span
                style="color: #000000;">, or hidden if it holds the value
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">False()</span><span
                style="color: #000000;">. This choice may be dynamically
                changed.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="647"
                style="width: 647px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">You must check that,
                        when the default answer is hidden, a valid answer is
                        selected instead.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">You can use the
                        variable names linked to each answer as an index in the
                        </span><span
                        style="font-family: 'Courier New'; color: #0000ff;">Selection[]</span><span
                        style="color: #000000;">variable.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold; color: #000000;">Question
                printing.</span><span style="color: #000000;">You can control
                the printing of questions through the variable </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Print</span><span
                style="color: #000000;">. If this variable holds the value
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">False()</span><span
                style="color: #000000;">, the question will neither be printed
                nor displayed into the </span><span
                style="font-style: italic; color: #000000;">Informations</span><span
                style="color: #000000;">tab of the order. If it holds the value
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">True()</span><span
                style="color: #000000;">, the question will be printed,
                </span><span
                style="color: #000000; text-decoration: underline;">with the
                additional condition that the basic printing conditions are
                also met</span><span style="color: #000000;">(</span><span
                style="font-weight: bold; color: #000000;">Doc.</span><span
                style="color: #000000;">column in the question or answer
                definition).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold; color: #000000;">Question
                colours</span><span style="color: #000000;">. You can define
                the text colour (for display and printing), and the background
                colour. You select colours by assigning a value to the
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">QuestionText</span><span
                style="color: #000000;">(text colour) and </span><span
                style="font-family: 'Courier New'; color: #0000ff;">QuestionBkg</span><span
                style="color: #000000;">(background colour). Possible choices
                are: </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Black</span><span
                style="color: #000000;">(text only), </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@White</span><span
                style="color: #000000;">(background only), </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Blue</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Green</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Cyan</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Red</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Magenta</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Yellow</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Grey</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">.
                </span>When <span class="f_Variables">Print</span> is set to
                <span class="f_Variables">True()</span>, or when undefined,
                Winpro will consider the values of the following variables to
                condition the printing of the question, according the document
                type to be printed : <span
                class="f_Variables">DetailedQuotation, SimplifiedQuotation,
                Confirmation, DetailledProductionDoc,
                SimplifiedProductionDoc</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold; color: #000000;">Message
                display</span><span style="color: #000000;">. You can use the
                </span><span
                style="font-size: 11pt; font-family: 'Courier New'; color: #0000ff;">Message</span><span
                style="color: #000000;">instruction to generate an informative
                text which will be displayed below the list of questions.
                </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <p>Below is a list of global variables that can be used into question
        codes:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="variablesconfiguration.php">Configuration
                variables</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="variablesgenerale.php">General variables</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="formuledesite.php">Site variables</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="formuleclient.php">Customer variables</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="questionsglobales.php">Global questions
              variables</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="541"
                style="width: 541px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;">User defined global
                variables set into formulaes are not accessible into a question
                code.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <p style="background: #fffff2;"><span style="color: #000000;">These
        local variables can be used in the question formulas:</span></p>

        <p style="background: #fffff2;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;">

        <table align="center" cellspacing="0" cellpadding="0" border="1"
        style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Variable</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="font-weight: bold; color: #000000;">Accessible
                into</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">SashNumber</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Sash, fitting, sash transom, special
                panel, ventilator, glazing bars</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Leaf</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Sash, fitting, sash transom, special
                panel, ventilator, glazing bars</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">TransomNumber</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Transom</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">ShutterNumber</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Shutter, shutter handling (see end of
                page concerning <a href="définitiondesquestions.php">questions
                set up</a>)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">ProfileNumber</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Peripheral profiles</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;"><br>
        <br>
        Example of commented code:</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;"></span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Considering a sash question "Weather Bar"</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># -&gt;
        variable WeatherBar, selection format</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Possible answers "Without" -&gt; variable WeatherBar0,</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#      
                                 "Weather bar 1", -&gt; variable
        WeatherBar1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#      
                                 "Weather Bar 2", -&gt; variable
        WeatherBar2</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># For a
        sash frame with W &lt; 600mm no weather bar</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># For a
        sash frame with W &gt;= 600, always a weather bar</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 2
        distinct references to choose for weather bar</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Reference 1 by default</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Question coloration</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">QuestionBkg := @Cyan</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">QuestionText := @Black</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Question printing</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Not
        printed onto simplified factory document</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SimplifiedProductionDoc := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># First
        choice always hidden (never listed)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Selection [WeatherBar0] := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Case
        of sash frame &lt; 600, question is hidden</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Automatic choice (set to "Without")</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        _SashW [SashIndex] &lt; 600</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        WeatherBar := WeatherBar0 </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Above,
        we should first hide the question, but also </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># set a
        value that do not involve any computation</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># from
        WinPro</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Else
        </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Case
        of sash frame &gt;= 600, question is displayed</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Choice
        "Weather bar 1" id displayed and set by default, modifiable</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># No
        "Without" choice in the list, there is always a weather bar</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  If
        WeatherBar = WeatherBar0 </span></p>

        <p style="margin: 0px 0px 0px 48px;">       <span
        class="f_Variables">WeatherBar := WeatherBar1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  End If
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Above
        we should first display the question, but also </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># affect
        it a new default answer, </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># only
        when the previous answer to the question was hidden. </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Into
        this sample code, the user has created a sash frame of less    
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># than
        600mm (=&gt; WeatherBar0 automatically), but also modify </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># the
        sash frame width that became greater than 600mm. Here we should
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># then
        display the previously hidden question, </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        (Visible := 1), and also set again a valid default answer </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># (if
        WeatherBar is worth WeatherBar0 And Sash Frame &gt;= 600, WeatherBar
        would worth </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        WeatherBar1 by default).</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Corresponding code without
        comment:</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;"></span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">QuestionBkg := @Cyan</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">QuestionText := @Black</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SimplifiedProductionDoc := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Selection [WeatherBar0] := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Si If
        _SashW [SashIndex] &lt; 600</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        WeatherBar := WeatherBar0 </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Else
        </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  If
        WeatherBar = WeatherBar0 </span></p>

        <p style="margin: 0px 0px 0px 48px;">       <span
        class="f_Variables">WeatherBar := WeatherBar1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  End If
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>
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

        <p>A chaque question peut également être associé une formule. Cette
        formule permet plusieurs choses:</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Calcul des réponses</span>:
                vous pouvez calculer la réponse à certaines questions en
                fonction des réponses à d'autres questions (ou en fonction des
                variables de configuration à votre disposition).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Choix de l'affichage ou non
                de la question</span>. Ce choix est géré par la variable <span
                class="f_Variables">Visible</span>. Si la valeur de cette
                variable est <span class="f_Variables">Faux()</span>, la
                question ne sera pas montrée à l'utilisateur. Si la valeur est
                <span class="f_Variables">Vrai()</span>, la question sera
                affichée. La valeur peut être réaffectée dynamiquement en
                fonction de l'environnement.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Choix de l'affichage ou non
                des sélections de la question</span>. Ce choix est géré par la
                variable <span class="f_Variables">Selection[]</span>. Il
                s'agît d'une variable de type tableau, dont chaque élément
                correspond à chaque réponse, dans l'ordre où les réponses ont
                été définies. Chaque réponse sera proposée si l'élément
                correspondant dans <span class="f_Variables">Selection[]</span>
                contient <span class="f_Variables">Vrai()</span>, ou caché s'il
                contient <span class="f_Variables">Faux()</span>. Ce choix peut
                être réaffecté dynamiquement en fonction de
              l'environnement.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -13px; margin: 0px 0px 0px 27px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="647"
                style="width: 647px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Si la réponse par défaut est masquée, Il faut
                        s'assurer qu'une réponse valable ait bien été
                        sélectionnée.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Vous pouvez utiliser le nom des variables de réponse
                        comme indice dans la variable <span
                        class="f_Variables">Selection[]</span>.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_Variables"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Choix de l'impression ou non
                de la question</span>. Ce choix est géré par la variable <span
                class="f_Variables">Imprimer</span>. Si la valeur de cette
                variable est <span class="f_Variables">Faux()</span>, la
                question ne sera pas imprimée ni affichée dans l'onglet <span
                style="font-style: italic;">Informations</span>. Si la valeur
                est <span class="f_Variables">Vrai()</span>, la question sera
                imprimée, <span style="text-decoration: underline;">mais à la
                condition supplémentaire que les conditions d'impression de
                base soient également remplies</span> (colonne Doc. de la
                définition de la question ou de la réponse). Si <span
                class="f_Variables">Imprimer </span>est initialisée avec la
                valeur <span class="f_Variables">Vrai()</span>, ou si elle est
                indéfinie, Winpro prendra en considération l'état des variables
                suivantes pour conditionner l'impression de la question en
                fonction du type de document en cours d'impression : <span
                class="f_Variables">DevisDetaille</span>,<span
                class="f_Variables">DevisSimplifie</span>,<span
                class="f_Variables">Confirmation</span>,<span
                class="f_Variables">PlanAtelierDetaille</span>,<span
                class="f_Variables">PlanAtelierSimplifie</span>. Si vous
                souhaitez utiliser les variables document par document, il est
                préférable que les questions et leurs réponses soient toujours
                définies comme étant à imprimer. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;"><span
        class="f_Variables"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Choix des couleurs de la
                question</span>. Vous pouvez définir la couleur de texte (pour
                l'écran et l'impression), et la couleur de fond. Ce choix se
                fait en affectant une valeur aux variables <span
                class="f_Variables">TexteQuestion</span> (couleur de texte) et
                <span class="f_Variables">FondQuestion</span> (couleur de
                fond). Les choix possibles sont: <span
                class="f_Variables">@Noir</span> (texte seulement), <span
                class="f_Variables">@Blanc</span> (fond seulement), <span
                class="f_Variables">@Bleu</span>, <span
                class="f_Variables">@Vert</span>, <span
                class="f_Variables">@Cyan</span>, <span
                class="f_Variables">@Rouge</span>, <span
                class="f_Variables">@Magenta</span>, <span
                class="f_Variables">@Jaune</span>, <span
                class="f_Variables">@Gris</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Affichage de
                messages</span>. Vous pouvez utiliser l'instruction <span
                class="f_Variables">Message</span> pour générer un texte qui
                sera affiché sous la liste des questions présentées à
                l'utilisateur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Voici la liste des variables globales disponibles dans les formules
        de question:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="variablesconfiguration.php">Variables de
                configuration</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="variablesgenerale.php">Variables générales</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="formuledesite.php">Variables de site</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="formuleclient.php">Variables spécifiques
              client</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="questionsglobales.php">Variables de questions
                globales</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="647"
                style="width: 647px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;">Les variables globales
                déclarées par l'utilisateur dans les formules des composants
                sont inaccessibles</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Vous disposez des variables locales Winpro suivantes au niveau des
        formules de question:</p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td valign="middle" width="142"
              style="width: 142px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="510"
                style="width: 510px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Disponibilité</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="142"
              style="width: 142px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 10px;"><span
                class="f_Variables">NumeroOuvrant</span></p>
              </td>
              <td width="510"
                style="width: 510px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Ouvrant, quincaillerie,
                traverse d'ouvrant, panneau fabriqué, aérateur, croisillon</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="142"
              style="width: 142px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 10px;"><span
                class="f_Variables">Position</span></p>
              </td>
              <td width="510"
                style="width: 510px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Ouvrant, quincaillerie,
                traverse d'ouvrant, panneau fabriqué, aérateur, croisillon</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="142"
              style="width: 142px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 10px;"><span
                class="f_Variables">NumeroTraverse</span></p>
              </td>
              <td width="510"
                style="width: 510px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Traverse</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="142"
              style="width: 142px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 10px;"><span
                class="f_Variables">NumeroTablier</span></p>
              </td>
              <td width="510"
                style="width: 510px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Tablier, questions de
                manoeuvre (voir bas de la page <a
                href="définitiondesquestions.php">Définition des
                questions</a>)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="142"
              style="width: 142px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 10px;"><span
                class="f_Variables">NumeroProfil</span></p>
              </td>
              <td width="510"
                style="width: 510px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Profil périphérique</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;"><br>
        <br>
        Exemple de code commenté:</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;"></span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Soit
        une question dans l'ouvrant "Rejet d'eau"</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># -&gt;
        variable RejetDEau, format sélection</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Réponses possibles "Sans" -&gt; variable RejetDEau0,</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#      
                                 "Rejet d'eau 1", -&gt; variable
        RejetDEau1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#      
                                 "Rejet d'eau 2", -&gt; variable
        RejetDEau2</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Pour
        un ouvrant avec L &lt; 600mm on ne met pas de rejet d'eau</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Pour
        un ouvrant avec L &gt;= 600, on a toujours un rejet d'eau</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 2
        références distinctes de rejet d'eau, au choix</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Référence 1 par défaut</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Coloration de la question</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">FondQuestion := @Cyan</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">TexteQuestion := @Noir</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Impression de la question</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Pas
        imprimée sur le plan d'atelier simplifié</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">PlanAtelierSimplifie := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Masquage du premier choix (jamais listé)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Selection [RejetDEau0] := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Cas
        ouvrant &lt; 600, la question est masquée</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Le
        choix est automatique (réponse forcée à "Sans")</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Si
        _OuvrantL [NumeroOuvrant] &lt; 600</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        RejetDEau := RejetDEau0 </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Ci-dessus, il faut non seulement masquer la question, mais aussi
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># lui
        imposer une valeur qui n'entraine pas de calcul </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># de
        consommation par WinPro</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Sinon
        </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Cas
        ouvrant &gt;= 600, la question est affichée</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Choix
        "Rejet d'eau 1" proposé en saisie par défaut, modifiable</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Pas de
        choix "Sans" dans la liste, il y a toujours un rejet d'eau</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  Si
        RejetDEau = RejetDEau0 </span></p>

        <p style="margin: 0px 0px 0px 48px;">       <span
        class="f_Variables">RejetDEau := RejetDEau1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  Fin Si
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Ci-dessus, il faut non seulement afficher la question, mais aussi
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># lui
        réaffecter une réponse par défaut, </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        uniquement dans le cas où la précédente réponse à la question était
        masquée. </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Dans
        cet exemple, l'utilisateur en saisie a créé un ouvrant de moins   
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># de
        600mm (=&gt; RejetDEau0 automatiquement), puis a modifier la </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        largeur d'ouvrant devenu plus grand que 600mm. Il faut, ici, </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># à la
        fois afficher la question, masquée auparavant </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        (Visible := 1), mais aussi redonner une réponse par défaut valide
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># (si
        RejetDEau vaut RejetDEau0 Et Ouvrant &gt;= 600, RejetDEau vaudra
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        RejetDEau1 par défaut).</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fin
        si</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Code correspondant sans
        commentaire:</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">FondQuestion := @Cyan</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">TexteQuestion := @Noir</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">PlanAtelierSimplifie := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Selection [RejetDEau0] := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Si
        _OuvrantL [NumeroOuvrant] &lt; 600</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        RejetDEau := RejetDEau0 </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Sinon
        </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  Si
        RejetDEau = RejetDEau0 </span></p>

        <p style="margin: 0px 0px 0px 48px;">       <span
        class="f_Variables">RejetDEau := RejetDEau1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  Fin Si
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fin
        si</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>
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
      <td align="left"><p> </p>

        <p>Aan elke vraag kan een formule gekoppeld worden.Deze formule geeft u
        meerdere opties:</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold; color: #000000;">Berekening
                antwoord:</span><span style="color: #000000;">U kan het
                antwoord berekenen op een vraag, afhankelijk van het antwoord
                op een andere vraag (of afhankelijk van de configuratie
                variabelen).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold; color: #000000;">Weergave van
                de vraag.</span><span style="color: #000000;">U kan de
                zichtbaarheid van een vraag controleren door gebruik te maken
                van de variabele </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Visible
                (Zichtbaar)</span><span style="color: #000000;">. Indien de
                waarde van deze variabele </span><span
                style="font-family: 'Courier New'; color: #0000ff;">False()</span><span
                style="color: #000000;">is, zal de vraag verborgen blijven voor
                de gebruiker.Als de waarde </span><span
                style="font-family: 'Courier New'; color: #0000ff;">True()</span><span
                style="color: #000000;">is, wordtt de vraag weergegeven.Deze
                waarde kan dynamisch gewijzigd worden.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-weight: bold; color: #000000;">Selectiekeuze.</span><span
                style="color: #000000;">De keuze wordt bepaald door de
                variabele </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Selection[]
                (Selectie [])</span><span style="color: #000000;">. Deze vector
                variabele bevat één element voor elk mogelijk antwoord, in
                volgorde van de definitie ervan.Het antwoord wordt weergegeven
                wanneer het corresponderend element van de variabele
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Selection[]
                (Selectie [])</span><span style="color: #000000;">de waarde
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">True()</span><span
                style="color: #000000;">bevat, of onzichtbaar bij de waarde
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">False()</span><span
                style="color: #000000;">. Deze keuze kan dan dynamisch
                gewijzigd worden.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="647"
                style="width: 647px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Opmerking</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">U dient wel te
                        controleren, dat als een standaard waarde verborgen
                        wordt, een correct antwoord in de plaats hiervan
                        geselecteert is.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">U kan de variabelen
                        namen welke gekoppeld zijn aan elk antwoor gebruiken
                        als een index in de </span><span
                        style="font-family: 'Courier New'; color: #0000ff;">Selection[]
                        (Selectie []) </span><span
                        style="color: #000000;">variabele.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold; color: #000000;">Afdrukken
                vraag.</span><span style="color: #000000;">U kan controleren of
                een vraag afgedrukt moet worden of niet , door gebruik te maken
                van de variabelee </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Print</span><span
                style="color: #000000;">. Wannneer deze variabele de waarde
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">False()</span><span
                style="color: #000000;">heefft, zal de vraag noch afgedrukt
                noch weergegeven worden in de informtieblad</span><span
                style="color: #000000;">van de bestelling. Wanneer het de
                waarde </span><span
                style="font-family: 'Courier New'; color: #0000ff;">True()</span><span
                style="color: #000000;">bevat, wordt de vraag
                afgedrukt,</span><span
                style="color: #000000; text-decoration: underline;">met de
                bijkomende voorwaarde dat de basis afdrukcondities ook geldig
                zijn</span><span style="color: #000000;">(</span><span
                style="font-weight: bold; color: #000000;">Doc.kolom
                </span><span style="color: #000000;">in de vraag of antwoord
                definitie).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold; color: #000000;">Vraag
                inkleuren</span><span style="color: #000000;">. U kan een
                tekstkleur en de achtergrondkleur definiëren (voor de weergave
                of afdruk). U selecteert kleuren door een waarde toe te wijzen
                aan de variabele </span><span
                style="font-family: 'Courier New'; color: #0000ff;">QuestionText(VraagTekst)</span><span
                style="color: #000000;">(tekst kleur) en </span><span
                style="font-family: 'Courier New'; color: #0000ff;">QuestionBkg
                (VraagBkg)</span><span style="color: #000000;">(Kleur
                achtergrond). Mogelijke keuzes zijn: </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Black</span><span
                style="color: #000000;">(enkel tekst), </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@White</span><span
                style="color: #000000;">(enkel achtergrond), </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Blue</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Green</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Cyan</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Red</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Magenta</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Yellow</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">@Grey</span><span
                style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">.
                </span>Wanneer de variabele <span
                class="f_Variables">Print</span> op <span
                class="f_Variables">True()</span> staat, of wanneer hij niet
                bepaald is,zal Winpro ervan uit gaan dat de volgende variabelen
                om de voorwaarde van het afdrukken van de vraag, in functie van
                het type document dat dient afgedrukt te worden : <span
                class="f_Variables">DetailedQuotation, SimplifiedQuotation,
                Confirmation, DetailledProductionDoc, SimplifiedProductionDoc.
                (VereenvoudigdeOfferte,GedetailleerdOfferte,Bevestiging,GedetailleerdWerkplaatsplan,VereenvoudigdWerkplaatsplan)</span>.

                <p></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold; color: #000000;">Weergave
                berichten</span><span style="color: #000000;">. U kan de
                instructie </span><span
                style="font-size: 11pt; font-family: 'Courier New'; color: #0000ff;">Message</span><span
                style="color: #000000;">gebruiken om een informatieve tekst te
                genereren welke weergegeven wordt onderaan de lijst van de
                vragen. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <p>Onderstaand een lijst van globale variabelen welke gebruikt kunnen
        worden in de vraag codering:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="variablesconfiguration.php">Configuratie
                variabelen</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="variablesgenerale.php">Algemene variabelen</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="formuledesite.php">Site variabelen</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="formuleclient.php">Klant variabelen</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><a href="questionsglobales.php">Algemene vraag
              variabelen</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="541"
                style="width: 541px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Opmerking</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;">Gebruiker globale
                variabelen welke in formules geplaatst zijn, zijn niet
                toegankelijk in een vraag code.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000;"> </span></p>

        <p style="background: #fffff2;"><span style="color: #000000;">Deze
        lokale variabelen kunnen gebruikt worden in de formules van de
        vragen:</span></p>

        <p style="background: #fffff2;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;">

        <table align="center" cellspacing="0" cellpadding="0" border="1"
        style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Variabele</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="font-weight: bold; color: #000000;">Toegankelijk
                in</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">SashNumber</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Vleugel, beslag,stijl vleugel,speciaal
                paneel,ventilator,kruisroeden</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Leaf</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Vleugel, beslag,stijl vleugel,speciaal
                paneel,ventilator,kruisroeden</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">TransomNumber</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Stijl</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">ShutterNumber</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Rolluik , rolluikbediening (zie einde
                pagina berekking tot <a href="définitiondesquestions.php">set
                up vragen</a>)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="151" bgcolor="#fff7ef"
              style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">ProfileNumber</span></p>
              </td>
              <td width="454" bgcolor="#fff7ef"
              style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Bijprofielen</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;"><br>
        <br>
        Example of commented code:</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;"></span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Uigaande van een vraag in de vleugel " Waterneus "</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># -&gt;
        variabele WaterNeus, selectie formaat</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Mogelijke antwoorden "Zonder" -&gt; variabele WaterNeus0,</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">#                                "WaterNeus type
        1", -&gt; variable WaterNeus1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">#                                "WaterNeus type
        2", -&gt; variable WaterNeus2</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Voor
        een vleugelbreedte met breedte B &lt; 600mm , geen waterneus</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Voor
        een vleugelbreedte met B &gt;= 600, altijd een waterneus</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 2
        verschillende referenties om de keuze van een waterneus</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Referentie 1 is de standaard keuze</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"></span><span class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Inkleuren vragen</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">QuestionBkg := @Cyan</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">QuestionText := @Black</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Afdrukken vragen</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Niet
        afgedrukt op een vereenvoudigd werkplaatsplan</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SimplifiedProductionDoc := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Eerste
        keus steeds verborgen (nooit gelijst)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Selection [WaterNeud0] := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># In
        geval dat de vleugelbreedte &lt; 600, wordt de vraag
        onzichtbaar</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Automatische keus (set to "Zonder")</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        _SashW [SashIndex] &lt; 600</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        WaterNeus := WaterNeus0 </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Bovenstaand, moeten we eerst de vraag onzichtbaar maken, maar ook
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># een
        waarde toewijzen welke geen enkele berekening bevat</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># van
        WinPro</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Else
        </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        ingeval dat de vleugelbreedte &gt;= 600, wordt de vraag
        zichtbaar</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Keuze
        "Waterneus type 1" wordt weergegeven en als standaard gezet,maar
        aanpasbaar</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Geen
        "Zonder" keus in de lijst, er is altijd een waterneus
        aanwezig</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  If
        WaterNeus := WaterNeus0 </span></p>

        <p style="margin: 0px 0px 0px 48px;">       <span
        class="f_Variables">WaterNeus := WaterNeus1 </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  End If
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Bovenaan moeten wij eerst de vraag weergeven, maar ook </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># een
        nieuwe standaard waarde toewijzen, </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># maar
        enkel wanneer het antwoord op de vorige vraag onzichtbaar was.
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># In
        deze eenvoudige code,heeft de gebruiker een vleugelbreedte kleiner
        dan     </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 600mm
        (=&gt; WaterNeus0 automatisch), maar ook aanpasbaar </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># de
        vleugelbreedte wordt groter dan 600mm. Hier dienen we dan </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># de
        vorige onzichtbare vraag terug weer te gevenn, </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        (Visible := 1), en ook een nieuwe standaard waarde te voorzien.
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># (Als
        WaterNeus is gelijk aan WaterNeus0 en vleugelbreedte &gt;= 600,
        WaterNeus zal dan </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        WaterNeus1 als standaard krijgen).</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Corresponderende code zonder
        commentaarlijnen:</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;"></span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">QuestionBkg := @Cyan</span><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"></span><span class="f_Variables">QuestionText :=
        @Black</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SimplifiedProductionDoc := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Selection [WaterNeus0] := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span><span class="f_Variables"></span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If
        _SashW [SashIndex] &lt; 600</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 0</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        WaterNeus := WaterNeus0 </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Else
        </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"> 
        Visible := 1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  If
        WaterNeus = WaterNeus0 </span></p>

        <p style="margin: 0px 0px 0px 48px;">       <span
        class="f_Variables">WaterNeus := WaterNeus1</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">  End If
        </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End
        If</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
