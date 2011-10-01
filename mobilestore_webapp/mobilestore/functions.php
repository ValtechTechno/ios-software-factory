<?php 
header("Cache-Control: max-age=0,no-cache,no-store,must-revalidate");
header("Pragma: no-cache");
header("Expires: Thu, 21 Apr 2001 16:04:47 GMT");

function dirs($dir, $sorting = 0) {
	$dirs = array();
	$files = scandir($dir, $sorting);
	$index_count = count($files);
	for($index = 0; $index < $index_count; $index++) {
		$file = $files[$index];
		if ($file != "." && $file != ".." && is_dir("$dir/$file")) {
			array_push($dirs, $file);
		}
	}
	return $dirs;
}
?>