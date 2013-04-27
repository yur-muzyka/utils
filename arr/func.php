<?
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

function vibor($arr) {
    $size = count($arr);
    $op++;
    $op++;
    $op++;
    $op++;
    for ($i = 0; $i < $size - 1; $i++) {
        $op++;
        $min = $i;
        $op++;
        $op++;
        $op++;
        for ($j = $i + 1; $j < $size; $j++) {
            $op++;
            if ($arr[$j] < $arr[$min]) {
                $op++;
                $min = $j;
                $op++;
            }
        $op++;
        }
        $op++;
        swap($arr[$i], $arr[$min]);
        $op++;
        $op++;
        $op++;
    }   
    $op++;
    return array($arr, $op);
}



function puzir($arr) {
    $size = count($arr);
    $op++;
    $op++;
    $op++;
    $op++;
    for ($i = 0; $i < $size - 1; $i ++) {
        $op++;
        $op++;
        $op++;
        $op++;
        $op++;
        for ($j = 0; $j < $size - $i - 1; $j++) {
            $op++;
            if ($arr[$j] > $arr[$j + 1]) {
                $op++;
                $op++;
                swap($arr[$j], $arr[$j + 1]);
                $op++;
                $op++;
                $op++;
            }
        }
    }             
    $op++;
    return array($arr, $op);
}

function insert($arr) {
    $size = count($arr);
    $op++;
    $op++;
    $op++;
    $op++;
    for ($i = 1; $i < $size; $i++) {
        $op++;
        $op++;
        $op++;
        $op++;
        $op++;
        for ($j = $i; $j > 0 && $arr[$j] < $arr[$j - 1]; $j--) {
            $op++;
            swap($arr[$j], $arr[$j - 1]);
            $op++;
            $op++;
            $op++;
        }
    }
    $op++;
    return array($arr, $op);
}

function gnom($arr) {
    $size = count($arr);
    $op++;
    $op++;
    $op++;
    $op++;
    for ($i = 1; $i < $size;) { 
        $op++;
        if ($arr[$i-1] <= $arr[$i]) {
            $op++;
            $i++;
        } else { 
            $op++;
            swap($arr[$i], $arr[$i - 1]);
            $op++;
            $op++;
            $op++;
            $op++;
            $i--; 
            if ($i == 0) {
                $op++;
                $i = 1;
                $op++;
            } 
            $op++;
        } 
    } 
    $op++;
    return array($arr, $op); 
}

function merge($arr) {
    global $merge_op;
    $left = array();
    $merge_op++;
    $right = array();
    $merge_op++;
    if (count($arr) == 1) {
        $merge_op++;
        $merge_op++;
        return $arr;
    } else {
        $middle = (int)(count($arr)/2);
        $merge_op++;
        $merge_op++;
        $merge_op++;
        $merge_op++;
        foreach ($arr as $key=>$ar) {
            $merge_op++;
            $merge_op++;
            if ($key < $middle) {
                $merge_op++;
                $left[] = $ar;
                $merge_op++;
            } else {
                $right[] = $ar;
                $merge_op++;
            }
        }

        $left = merge($left);
        $merge_op++;
        $right = merge($right);
        $merge_op++;

        $merge_op++;
        return merge_slice($left, $right);
    }
}

function merge_slice($left, $right) {
    global $merge_op;
    $result = array();
    $merge_op++;
    $merge_op++;
    $merge_op++;
    $merge_op++;
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            $merge_op++;
            $result[] = array_shift($left);
            $merge_op++;
            $merge_op++;
        } else {
            $result[] = array_shift($right);
            $merge_op++;
        }
    }

    $merge_op++;
    $merge_op++;
    if (count($left) > 0) {
        $add = $left;
        $merge_op++;
    } elseif (count($right) > 0) {
        $merge_op++;
        $merge_op++;
        $add = $right;
        $merge_op++;
    }


    foreach ($add as $ad) {
        $merge_op++;
        $result[] = $ad;
        $merge_op++;
    }

    $merge_op++;
    return $result;
}

function qsort(&$arr) {
    global $qsort_op;
    $left = 0;
    $qsort_op++;
    $right = count($arr) - 1;
    $qsort_op++;
    $qsort_op++;
    $qsort_op++;
    qsort_oper($arr, $left, $right);
} 

function qsort_oper(&$arr, $left, $right) {
    global $qsort_op;
    $l = $left;
    $qsort_op++;
    $r = $right;
    $qsort_op++;
    $center = $arr[(int)(($left + $right)/2)];
    $qsort_op++;
    $qsort_op++;
    $qsort_op++;
    $qsort_op++;

    do {
        while ($arr[$l] < $center) {
            $qsort_op++;
            $qsort_op++;
            $l++;
            $qsort_op++;
        }
        while ($arr[$r] > $center) {
            $qsort_op++;
            $qsort_op++;
            $r--;
            $qsort_op++;
        }
        if ($l <= $r) {
            $qsort_op++;
            list($arr[$l], $arr[$r]) = array($arr[$r], $arr[$l]);
            $qsort_op++;
            $qsort_op++;
            $qsort_op++;
            $qsort_op++;
            $qsort_op++;
            $qsort_op++;
            $l++;
            $r--;
            $qsort_op++;
            $qsort_op++;
        }
        $qsort_op++;
    } while ($l <= $r);

    if ($l < $right) {
        $qsort_op++;
        $qsort_op++;
        qsort_oper($arr, $l, $right);
    }
    if ($r > $left) {
        $qsort_op++;
        $qsort_op++;
        qsort_oper($arr, $left, $r);
    }
}
?>