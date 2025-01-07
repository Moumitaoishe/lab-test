<?php

$total = $_POST['fisrt'] + $_POST['second'] + $_POST['third'] + $_POST['fourth'] + $_POST['fifth'] + $_POST['sixth'] + $_POST['seventh'] + $_POST['eighth'];

echo "<center>Total CGPA: ". $total. "</center>";
$cgpa = $total/8;

echo "<br/>";
echo "<br/>";
echo "<center>CGPA: ". $cgpa. "</center>";

?>