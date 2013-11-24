<?php 

// begin vars and function names in export file
$arr_name = 'name';
$decode_function = 'get_prod';
$get_content = 'content';
$get_arr = 'info';
// end vars and function names in export file

$header = "eval(gzinflate(base64_decode('";
$footer = "')));";

$content = php_strip_whitespace('unpack.php'); 
$content = trim(preg_replace('/<\?(php)?/', '', $content)); 

$body = base64_encode(gzdeflate($content, 9));

$all = $header . $body . $footer;
$all_code = code($all);
$split_all_code = array_split($all_code, $arr_name);

$replacement = code("/.*/e");
$where = code(".");

ob_start();
echo '<?php';

//===================== begin file content =====================
?>

preg_replace(<?php echo $decode_function; ?>("<?php echo $replacement ?>"), <?php echo $decode_function; ?>(<?php echo $get_content; ?>()), <?php echo $decode_function; ?>("<?php echo $where; ?>"));

function <?php echo $decode_function; ?>($str) {
    $res = strtr($str, "efkpqr()_+-stulmnoabcFGHIJKLMNO[]{}PQUV.,;:`~WXvwxy6789dzABCZ12DE0@#$%RST^&*=|/'Y34ghij5",
                       "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#$%^&*()_+-=|/.,;:`~'[]{}");
    return $res;
}

function <?php echo $get_content; ?>() {
    $res = '';
    $arr = <?php echo $get_arr; ?>();
    foreach ($arr as $ar) {
        $a = str_replace(' ', '',$ar);
        $res .= $a;
    }
    return $res;
}















































function <?php echo $get_arr; ?>() {
<?php echo $split_all_code ?>
    return $<? echo $arr_name ?>;
}

?>  
<?php
//===================== end file content =====================

$content = ob_get_contents();
$f = fopen('export/index.php', 'w');
fwrite($f, $content);
fclose($f);
//ob_end_clean();

//functions
function code($str) {
    $res = strtr($str, "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#$%^&*()_+-=|/.,;:`~'[]{}",
                       "efkpqr()_+-stulmnoabcFGHIJKLMNO[]{}PQUV.,;:`~WXvwxy6789dzABCZ12DE0@#$%RST^&*=|/'Y34ghij5");
    return $res;
}

function decode($str) {
    $res = strtr($str, "efkpqr()_+-stulmnoabcFGHIJKLMNO[]{}PQUV.,;:`~WXvwxy6789dzABCZ12DE0@#$%RST^&*=|/'Y34ghij5",
                       "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#$%^&*()_+-=|/.,;:`~'[]{}");
    return $res;
}

function array_split($str, $arr_name) {
    $min = 2; $max = 10;
    $new_str = '$' . $arr_name . '[] = "';
    $char_max = rand($min, $max);
    $char_count = 0;

    $dot_count = 0;
    $dot_max = rand($min, $max);

    for ($i = 0; $i < strlen($str); $i ++) {
        if ($char_count >= $char_max) {
            $char_count = 0;
            $char_max = rand($min, $max);
            $new_str .= " ";
            $dot_count++;
        }

        if ($dot_count >= $dot_max) {
            $dot_count = 0;
            $dot_max = rand($min, $max);
            $new_str = trim($new_str) . '"; $' . $arr_name . '[] = "';
        }

        $new_str .= $str[$i];

        $char_count++;
    }

    $new_str .= '";';
    return $new_str;
} 

?>
