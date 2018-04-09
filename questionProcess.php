<?PHP
if (empty($_POST['question'])) {
	echo "No question was submitted.";
	die();
}

$l= mysqli_connect("34.224.83.184", "student30", "phppass30", "student30");

$question = addslashes($_POST['question']);

$query = "insert into Question (questionID, questionText) values (null, '$question')";

mysqli_query($l, $query);

echo "Question was submitted.<br>";
echo "\"$_POST[question]\"";

?>
