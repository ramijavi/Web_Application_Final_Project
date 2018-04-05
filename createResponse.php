<html>
<?PHP
if (empty($_GET['questionID'])) {
	echo "No question ID was given.";
	die();
}
$l = mysqli_connect("34.224.83.184", "student30", "phppass30", "student30");

$query = "select * from Question where questionID = $_GET[questionID]";

$r = mysqli_query($l, $query);

echo "<table border=1 cellpadding=10>";
while ($row = mysqli_fetch_array($r)) {
	echo "<tr>";
		echo "<td><b>$row[questionText]</b></td>";
	echo "</tr>";
}

$query = "select * from Answer where questionID = $_GET[questionID]";

$r = mysqli_query($l, $query);

while ($row = mysqli_fetch_array($r)) {
	echo "<tr>";
		echo "<td>$row[answerText]</td>";
	echo "</tr>";
}

echo "</table>";

?>
</html>
