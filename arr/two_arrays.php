<?
include "func.php";

for ($i = 0; $i < 10000; $i++) {
    $arr[] = rand(0, 100);
    $arr2[] = rand(0, 100);
}

echo "1 array sort: <br>";
$qsort_op = 0;
$start_time = microtime(true);
$tmp = $arr;
qsort($tmp);
$exec_time = microtime(true) - $start_time;
echo "operations: " . $qsort_op . "<br>";
echo $exec_time . "<br>~~~~~~~~~~~~~~~~~~~~~~<br><br>";


echo "2 arrays foreach sort: <br>";
$qsort_op = 0;
$tmp = $arr;
$start_time = microtime(true);
foreach ($arr2 as $ar) {
    $qsort_op++;
    $qsort_op++;
    $tmp[] = $ar;
}
qsort($tmp);
$exec_time = microtime(true) - $start_time;
echo "operations: " . $qsort_op . "<br>";
echo $exec_time . "<br>~~~~~~~~~~~~~~~~~~~~~~<br><br>";

echo "1 arrays double count: <br>";
$qsort_op = 0;
$tmp = $arr;
foreach ($arr2 as $ar) {
    $tmp[] = $ar;
}
$start_time = microtime(true);
qsort($tmp);
$exec_time = microtime(true) - $start_time;
echo "operations: " . $qsort_op . "<br>";
echo $exec_time . "<br>~~~~~~~~~~~~~~~~~~~~~~<br><br>";

echo "2 arrays sort & merge: <br>";
$qsort_op = 0;
$ar1 = $arr;
$ar2 = $arr2;
$start_time = microtime(true);
qsort($ar1);
qsort($ar2);
$mrg = merge_slice($ar1, $ar2);
$exec_time = microtime(true) - $start_time;
echo "operations: " . ($qsort_op + $merge_op) . "<br>";
echo $exec_time . "<br>~~~~~~~~~~~~~~~~~~~~~~<br><br>";

echo "<pre>";
echo "</pre>";

?>
