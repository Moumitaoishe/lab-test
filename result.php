<?php

$obtained = $_POST['subject1'] * $_POST['credit1'] + $_POST['subject2'] * $_POST['credit2'] + $_POST['subject3'] * $_POST['credit3'] + $_POST['subject4'] * $_POST['credit4'] + $_POST['subject5'] * $_POST['credit5'] + $_POST['subject6'] * $_POST['credit6'];
$total_credit = $_POST['credit1'] + $_POST['credit2'] + $_POST['credit3'] + $_POST['credit4'] + $_POST['credit5'] + $_POST['credit6'];

$cgpa = $obtained / $total_credit;

echo "<center><b>CGPA: " . $cgpa. "</b></center>";

?>