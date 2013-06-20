<?
require "templ.php";

$templ = new Template("go.tpl");
$templ->set('lol', "--lol--");
$templ->set('go', array(3, "dsf", 3223));
$templ->html();


$templ->tpl("dd.tpl");
echo "<br>-=-=-=-=-=-=-=-=-=-=-=-<br>";
$templ->html();
?>
