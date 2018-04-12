<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
    var table = $('#table_id').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );
</script>

</head>
<body>
<?PHP
$l = mysqli_connect("34.224.83.184", "student30", "phppass30", "student30");

$query = "select * from Question";

$r = mysqli_query($l, $query);
echo "<center>";
echo "<table id=\"table_id\" class=\"display nowrap\" style=\"width:100%\">";
echo "<thead>";
echo "<tr>";
echo "<th>Questions</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while ($row = mysqli_fetch_array($r)) {
	echo "<tr>";
		echo "<td><a href=createResponse.php?questionID=$row[questionID]>$row[questionText]</a></td>";
	echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</center>";
?>
</body>
</html>
