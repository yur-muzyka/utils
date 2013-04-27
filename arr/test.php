<?

$arr = array(4, 21, 3, 3, 9, 3, 29, 0, 12,3, 0);

init($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

function init(&$arr) {
    $left = 0;
    $right = count($arr) - 1;
    qsort($arr, $left, $right);
}

function qsort(&$arr, $left, $right) {
    $l = $left;
    $r = $right;
    $center = $arr[(int)(($left + $right)/2)];

    do {
        while ($arr[$l] < $center) {
            $l++;
        }
        while ($arr[$r] > $center) {
            $r--;
        }

        if ($l <= $r) {
            list($arr[$r], $arr[$l]) = array($arr[$l], $arr[$r]);
            $l++;
            $r--;
        }
    } while ($l <= $r);

    if ($l < $right) {
        qsort($arr, $l, $right);
    }
    if ($r > $left) {
        qsort($arr, $left, $r);
    }
}









?>
