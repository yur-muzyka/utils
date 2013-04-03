<?php
require_once('pclzip.lib.php');
$archive = new PclZip('archive.zip');
$v_list = $archive->create('../public_html', PCLZIP_OPT_NO_COMPRESSION);
if ($v_list == 0) {
    die("Error : ".$archive->errorInfo(true));
} else {
	echo "ok!";
}
?>
