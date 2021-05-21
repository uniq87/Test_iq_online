<?php
$summn_1 = isset($_POST['value1']) ? $_POST['value1'] : 0;
$summadd = '';
$daysn = (int) date('d');
$daysy = date('L') ? 366 : 365;
$percent = 10;

$summadd = $_POST['radio'] == 'yes' ? $_POST['value2'] : 0;

$summn = $summn_1 + ($summn_1 + $summadd) * $daysn * ($percent / $daysy);

$result = ['summa' => $summn];

echo json_encode($result); 

?>