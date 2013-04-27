<?

include "func.php";

for ($i = 0; $i < 1000; $i++) {
    $arr[] = rand(0, 100);
    //$arr[] = $i;
}


echo "<pre>";

echo "puzir: <br>";
$start_time = microtime(true);
list($ar, $op) = puzir($arr);
$exec_time = microtime(true) - $start_time;
echo "operations: " . $op . "<br>";
echo $exec_time . "<br><br>";

echo "vibor: <br>";
$start_time = microtime(true);
list($ar, $op) = vibor($arr);
$exec_time = microtime(true) - $start_time;
echo "operations: " . $op . "<br>";
echo $exec_time . "<br><br>";

echo "insert: <br>";
$start_time = microtime(true);
list($ar, $op) = insert($arr);
$exec_time = microtime(true) - $start_time;
echo "operations: " . $op . "<br>";
echo $exec_time . "<br><br>";

echo "gnom: <br>";
$start_time = microtime(true);
list($ar, $op) = gnom($arr);
$exec_time = microtime(true) - $start_time;
echo "operations: " . $op . "<br>";
echo $exec_time . "<br><br>";

echo "merge: <br>";
$start_time = microtime(true);
merge($arr);
$exec_time = microtime(true) - $start_time;
echo "operations: " . $merge_op . "<br>";
echo $exec_time . "<br><br>";

echo "qsort: <br>";
$start_time = microtime(true);
$tmp = $arr;
qsort($tmp);
$exec_time = microtime(true) - $start_time;
echo "operations: " . $qsort_op . "<br>";
echo $exec_time . "<br><br>";

echo "</pre>";

?>
