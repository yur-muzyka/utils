<?php
set_time_limit(0);
require_once('pclzip.lib.php');
$archive = new PclZip('archive.zip');
$v_list = $archive->create('../../www', PCLZIP_OPT_NO_COMPRESSION);
if ($v_list == 0) {
    die("Error : ".$archive->errorInfo(true));
} else {
	echo "ok!";
}
?>
