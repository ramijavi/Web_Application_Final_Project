<?PHP
$l = mysqli_connect("34.224.83.184", "student30", "phppass30", "student30");

$query = "select * from Question";

$r = mysqli_query($l, $query);

echo "<table cellpadding=10>";
echo "<tr>";
echo "<td><b>Question ID</b></td>
<td><b>Question Text</b></td>";
echo "</tr>";
while ($row = mysqli_fetch_array($r)) {
	echo "<tr>";
		echo "<td>$row[questionID]</td>";
		echo "<td><a href=createResponse.php?questionID=$row[questionID]>$row[questionText]</a></td>";
		echo "<td><a href=createAnswer.php?questionID=$row[questionID]>Add Answer</a></td>";
	echo "</tr>";
}
echo "</table>";
?>