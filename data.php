<?php
//setting header to json
header('Content-Type: application/json');

//get connection
$l = mysqli_connect("34.224.83.184", "student30", "phppass30", "student30");

//query to get data from the table
$query = sprintf("SELECT DISTINCT answerID FROM Response WHERE questionID = ".$_GET['questionID']." ORDER BY questionID");

//execute query
$result = mysqli_query($l, $query);

//loop through the returned data
$data = array();
$data2 = array();

foreach ($result as $row) {
        $data[] = $row;
        $answerQuery = sprintf("SELECT COUNT(*) AS frequency, answerID FROM Response WHERE questionID = ".$_GET['questionID']." AND answerID = ".$row[answerID]);
        $result2 = mysqli_query($l, $answerQuery);
        foreach ($result2 as $row2) {
                $data2[] = $row2;
        }
}

print json_encode($data2);
//print_r ($data2);
?>
