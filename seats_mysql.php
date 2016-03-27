<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "chebon01", "busbook");

$result = $conn->query("SELECT Seatno, Status FROM seatsmsafiri01");

$outp = "[";
 while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"SeatNumber":"'  . $rs["Seatno"] . '",';
    $outp .= '"SeatStatus":"'   . $rs["Status"]        . '"}';
}
 $outp .="]";

$conn->close();

echo($outp);
?>