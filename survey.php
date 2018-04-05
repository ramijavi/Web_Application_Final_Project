
This is a survey!
<br><br>

<div id="center_button"><button onclick="location.href='survey.php'">Yes!</button></div>



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
        echo '<option value='.$row->id.'>'.$row->name->given.'</option>';
}
echo '</select>';

