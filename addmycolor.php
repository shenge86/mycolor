<?php
# Connect to database
$db = mysql_connect("mendedarchives.db.5276487.hostedresource.com","username","password"); 

if (!$db)
{
	echo "Error: Cannot connect!";
	die('Could not connect: ' . mysql_error());
	exit;
}

mysql_select_db("mendedarchives", $db);

// get information from inputs
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];

// insert into database
$tbl_name = 'MYCOLOR';
$sql = "INSERT INTO $tbl_name (Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10) VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10')";
$result=mysql_query($sql);

// compare with correct information
$correctans = 0;
if ($q1 == 1) {
	$correctans++;
}

if ($q2 == 0) {
	$correctans++;
}

if ($q3 == 1) {
	$correctans++;
}

if ($q4 == 0) {
	$correctans++;
}

if ($q5 == 1) {
	$correctans++;
}

if ($q6 == 0) {
	$correctans++;
}

if ($q7 == 1) {
	$correctans++;
}

if ($q8 == 0) {
	$correctans++;
}

if ($q9 == 1) {
	$correctans++;
}

if ($q10 == 0) {
	$correctans++;
}
?>
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

.num1 {
	width: 100px;
	background-color: #6A5ACD;
}

.num2 {
	width: 100px;
	background-color: #7B68EE;
}

input[type='submit'] {
	background-color: #483D8B;
	color: black;
}

input[type='text'] {
	background-color: silver;
	color: black;
}

textarea {
	background-color: silver;
	color: black;
}

</style>
</head>

<body>
 
 <div id="wrapper">   
<!--main content--> 
<h1>Your Color Results</h1>
<p>Not enough data has been collected yet to provide a valid statistics of the distribution of colors an average human can see.</p>

<p>However, for just you, 
<?php
	if ($correctans < 3) {
		echo " you may be color blind. You probably already know this.";
	} elseif ($correctans < 6) {
		echo " did you just guess? Look carefully at the colors.";
	} elseif ($correctans < 8) {
		echo " you are slightly on the lower end. Check a doctor to see if your eyes are okay.";
	} else {
		echo " you appear to be normal.";
	}
?>
</p>

<p>What did you think of this test?</p>
<form name="myform" action="feedback.php" method="post">
<table border="0">
	<tr>
	<td>Name</td>
	<td><input type=text name=name maxlength=30 size=30></td>
	</tr>

	<tr>
	<td>Email</td>
	<td><input type=text name=email maxlength=30 size=30></td>
	</tr>

	<tr>
	<td>Message</td>	
	<td>
	<textarea  name="comments" cols="40" rows="5"></textarea>
	</td>
	</tr>

	<tr align='left'>
	<td colspan=2><input type=submit value="Let Shen know."></td>
	</tr>
	
	</table>
	</form>

</div>

<?php
		// $lastupdate = "October 9, 2013";
		// require("sidebar.inc");
		require("footer.inc");
?>	