<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>BR</b> Architects</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="w3images/architect.jpg" alt="Architecture" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
      <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>J&#179;</b></span>


<?PHP

$clientURL="http://bb.dataii.com:8080";

require_once('classes/Rest.class.php');
require_once('classes/Token.class.php');

$rest = new Rest($clientURL);
$token = new Token();

$token = $rest->authorize();
$access_token = $token->access_token;

$users = $rest->getAllUsers($access_token);
$u=$users->results;

//print_r($c);
?>
<select id="userId" name="userId">
        <option value="0">--Select User Id--</option
<?PHP
foreach($u as $row)
{
        echo '<option value='.$row->id.'>'.$row->name->given.' '.$row->name->family.'</option>';
}
echo '</select>';

echo "<br><br>";

?>

<form method="post" action="">
<input type="button" value="Take Survey!"
onclick="location.href='survey.php'" />
</form>


<!--    <span class="w3-hide-small w3-text-light-grey">Architects</span></h1> -->
  </div>

</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">


<!-- End page content -->
</div>

</body>
</html>
