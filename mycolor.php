<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META http-equiv="Content-Style-Type" content="text/css">
<link rel="image_src" href="http://www.mendedreality.com/images/icons/mendedLogoSmall.png"  />
<LINK rel="stylesheet" href="common.css" type="text/css">
<LINK href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
<head>
<title>Color Test</title>
<meta name="keywords" content="Shen Ge, color test, color theory, survey">
<meta name="description" content="Color test to see how many colors a human can distinguish.">
<meta name="author" content="Shen Ge">

<style type="text/css">
body {
	background-color: white;
	color: black;
}

h1 {
	color: #483D8B;
}

p,ul {
	color: black;
	font-size: 14px;
}

table {
	border: 0;
}

td {
	width: 100px;
}

.num1 {	
	background-color: #6A5ACD;
}

.num2 {
	background-color: #7B68EE;
}

.num3 {
	background-color: #7FFF00;
}

.num4 {
	background-color: #7CFC00;
}

.num5 {
	background-color: #00FF7F;
}

.num6 {
	background-color: #00FA9A ;
}

.num7 {
	background-color: #008B8B;
}

.num8 {
	background-color: #008080;
}

.num9 {
	background-color: #87CEEB;
}

.num10 {
	background-color: #87CEFA ;
}

.num11 {
	background-color: #00008B;
}

.num12 {
	background-color: #000080;
}

.num13 {
	background-color: #778899;
}

.num14 {
	background-color: #708090;
}

.num15 {
	background-color: #FA8072;
}

input[type='submit'] {
	background-color: #483D8B;
}

</style>
</head>

<body>
 
 <div id="wrapper">   
<!--main content--> 
<h1>How many colors can you distinguish?</h1>
<h2>Introduction</h2>
<p>How many colors can the human eye distinguish? According to the current Wikipedia entry, the answer is 10 million. However, a New Scientist article in January 24, 2004 says 2.3 million. A 1993 Visual Neurosciences article says 100,000. Which one is the right one?</p>

<p>Since I, Shen Ge, don't know the answer and I don't feel like reading conflicting articles, I coded up a simple test for you to test your eyes' ability to distinguish colors. For every question, there are two colors presented. Simply choose whether you believe the colors to be identical or different. I will use this data and generate a histogram of number of distinguishable colors among the human population.</p>
   <div id="content">
	<h2>Color Test</h2>
	<p>Note: Yes is picked by default so choose carefully.</p>
	<form id='formcolor' name='formcolor' method='post' action='addmycolor.php'>
	<table>
	<tr>
	<td colspan='2'>1. Are these colors identical?</td>
	</tr>
	<tr>
	<td class='num1'></td>
	<td class='num2'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='radio' name='q1' value='1' checked='checked' />Yes
	<input type='radio' name='q1' value='0' />No
	</td>
	</tr>

	<tr>
	<td colspan='2'>2. Are these colors identical?</td>
	</tr>
	<tr>
	<td class='num3'></td>
	<td class='num3'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='radio' name='q2' value='1' checked='checked' />Yes
	<input type='radio' name='q2' value='0' />No
	</td>
	</tr>

	<tr>
	<td colspan='2'>3. Are these colors identical?</td>
	</tr>
	<tr>
	<td class='num5'></td>
	<td class='num6'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='radio' name='q3' value='1' checked='checked' />Yes
	<input type='radio' name='q3' value='0' />No
	</td>
	</tr>
	
	<tr>
	<td colspan='2'>4. Are these colors identical?</td>
	</tr>
	<tr>
	<td class='num4'></td>
	<td class='num4'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='radio' name='q4' value='1' checked='checked' />Yes
	<input type='radio' name='q4' value='0' />No
	</td>
	</tr>
	
	<tr>
	<td colspan='2'>5. Are these colors identical?</td>
	</tr>
	<tr>
	<td class='num7'></td>
	<td class='num8'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='radio' name='q5' value='1' checked='checked' />Yes
	<input type='radio' name='q5' value='0' />No
	</td>
	</tr>
	
	<tr>
	<td colspan='2'>6. Are these colors identical?</td>
	</tr>
	<tr>
	<td class='num9'></td>
	<td class='num9'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='radio' name='q6' value='1' checked='checked' />Yes
	<input type='radio' name='q6' value='0' />No
	</td>
	</tr>
	
	<tr>
	<td colspan='2'>7. Are these colors identical?</td>
	</tr>
	<tr>
	<td class='num11'></td>
	<td class='num12'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='radio' name='q7' value='1' checked='checked' />Yes
	<input type='radio' name='q7' value='0' />No
	</td>
	</tr>
	
	<tr>
	<td colspan='2'>8. Are these colors identical?</td>
	</tr>
	<tr>
	<td class='num10'></td>
	<td class='num10'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='radio' name='q8' value='1' checked='checked' />Yes
	<input type='radio' name='q8' value='0' />No
	</td>
	</tr>
	
	<tr>
	<td colspan='2'>9. Are these colors identical?</td>
	</tr>
	<tr>
	<td class='num13'></td>
	<td class='num14'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='radio' name='q9' value='1' checked='checked' />Yes
	<input type='radio' name='q9' value='0' />No
	</td>
	</tr>
	
	<tr>
	<td colspan='2'>10. Are these colors identical?</td>
	</tr>
	<tr>
	<td class='num15'></td>
	<td class='num15'></td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type='radio' name='q10' value='1' checked='checked' />Yes
	<input type='radio' name='q10' value='0' />No
	</td>
	</tr>
	
	</table>
	<br/>
	<input type='submit' name='submitmycolor' value='Get My Results!'>		
	</form>
	
   </div>
<?php
		// $lastupdate = "October 9, 2013";
		// require("sidebar.inc");
		require("footer.inc");
?>	