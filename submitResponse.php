<HTML>
<head>
</head>
<body>
<?PHP	

if (empty($_GET['questionID'])) {
	echo "No question ID was given.";
	die();
}
if (empty($_GET['studentID'])) {
	echo  "No student ID was provided.";
	die();
}
if (empty($_GET['responseID'])) {
	echo "No response ID provided.";
	die();
}

echo ($_GET['questionID']);
echo "<br>";
echo ($_GET['studentID']);
echo "<br>";
echo ($_GET['responseID']);
echo "<br>";

$l= mysqli_connect("34.224.83.184", "student30", "phppass30", "student30");



$query = "insert into Response (questionID, studentID, answerID) values ('$_GET[questionID]', '$_GET[studentID]', '$_GET[responseID]')";

if (!mysqli_query($l, $query)){
	echo "<br>False";
}

echo "Answer was submitted.<br>";

?>
</body>
</HTML>
