<html>
<head>

<meta charset="utf-8">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "input" ).checkboxradio({
      icon: false
    });
	
  } );
  </script>

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

$l = mysqli_connect("34.224.83.184", "student30", "phppass30", "student30");

$query = "select * from Question where questionID = $_GET[questionID]";

$r = mysqli_query($l, $query);

echo "<div class='widget'>";

while ($row = mysqli_fetch_array($r)) {

		echo "<h2><b>$row[questionText]</b></h2>";
}

$query = "select * from Answer where questionID = $_GET[questionID]";

$r = mysqli_query($l, $query);
	
echo "<fieldset>";
echo "<legend>Select an answer:</legend>";
echo "<form action = 'radioButtonTest.php?questionID=$_GET[questionID]' method = post>";

while ($row = mysqli_fetch_array($r)) {
	
		echo "<label for=$row[answerText]>$row[answerText]</label>";
		echo "<input type='radio' name ='myCheckBox' id=$row[answerID]>";
}

echo "<br><br>";
echo "<input id=checkNow type=button Value=Submit>";
echo "</fieldset>";
echo "</div>";
echo "</form>";

?>

<script>
var questionID = "<?php echo $_GET['questionID'] ?>";
var studentID = "<?php echo $_GET['studentID'] ?>";
var responseID;

$("#checkNow").click(function(event){ 
$('input:radio[name=myCheckBox]').each(function() 
{ 
    if($(this).is(':checked'))
		responseID = $(this).attr('id');
})

window.location.href = "submitResponse.php?questionID=" + questionID + "&studentID=" + studentID + "&responseID=" + responseID;

});
</script>        
</body>
</html>
