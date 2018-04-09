<?PHP
if (empty($_GET['questionID']) || empty($_POST['answer'])) {
	echo "Error.";
	die();
}
$l= mysqli_connect("34.224.83.184", "student30", "phppass30", "student30");

$answer = addslashes($_POST['answer']);

$query = "insert into Answer (answerID, questionID, answerText) values (null, '$_GET[questionID]', '$answer')";

mysqli_query($l, $query);

echo "Answer was submitted.<br>";
echo "\"$_POST[answer]\"";

?>
