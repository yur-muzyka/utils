<?php
require "templ.php";
$arr = array(1, 12, "go!!", array(8, 12, 332), "the end!");
$partial = new Template;
$partial->tpl('_partial.tpl');
$partial->set('var', 'squeezer');
$partial->set('arr', $arr);

$main = new Template('main.tpl');
$main->set('partial', $partial);
echo $main;

?>
