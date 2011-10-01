<?php 
include 'functions.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
	<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport"/>
	<link href="./css/style.css" rel="stylesheet" media="screen" type="text/css"/>
	<link href="./css/applist.css" rel="stylesheet" media="screen" type="text/css" />
	<script src="javascript/functions.js" type="text/javascript"></script>
	<title>Mobile Store</title>
</head>

<body class="applist">
	<div id="topbar">
		<div id="title">Mobile Store</div>
	</div>
	<div id="content">
		<ul>
		<?php
		$dir = dirname(__FILE__) . "/apps";
		$dirs = dirs($dir);
		$index_count = count($dirs);
		for($index = 0; $index < $index_count; $index++) {
			$app = $dirs[$index];
			$versions = dirs("$dir/$app", 1);
			if (count($versions) > 0) {
				$last_version = $versions[0];
				$json = file_get_contents("$dir/$app/$last_version/$app.json");
				$obj = json_decode($json);
				$icon = "./apps/$app/$last_version/" . $obj->{'icon'};
				$title = $obj->{'title'};
				print("<li>");
				print("<a href=\"detail.php?app=$app\">");
				print("<span class=\"image\" style=\"background-image:url('$icon')\"></span>");
				print("<span class=\"name\">$title</span>");
				print("<span class=\"arrow\"></span>");
				print("</a>");
				print("</li>");
			}
		}
		?>
		</ul>
	</div>
	<div id="footer">
		<a class="noeffect" href="http://snippetspace.com">Powered by iWebKit</a>
	</div>
</body>

</html>
