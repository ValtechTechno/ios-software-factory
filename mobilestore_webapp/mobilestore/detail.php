<?php 
include 'functions.php';
$app = $_GET["app"];
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
	<title><?php print($app)?></title>
</head>

<body class="applist">
	<div id="topbar">
		<div id="leftnav">
			<a href="index.php"><img alt="home" src="./images/home.png" /></a>
		</div>
		<div id="title"><?php echo $app?></div>
	</div>
	<div id="content">
		<ul>
		<?php
		$dir = dirname(__FILE__) . "/apps";
		$versions = dirs("$dir/$app");
		$index_count = count($versions);
		for($index = 0; $index < $index_count; $index++) {
			$version = $versions[$index];
			$json = file_get_contents("$dir/$app/$version/$app.json");
			$obj = json_decode($json);
			$icon = "./apps/$app/$version/" . $obj->{'icon'};
			$title = $obj->{'title'};
			$plateform = $obj->{'devices'} . ", iOS ≥ " . $obj->{'osVersion'};
			$app_version = $obj->{'version'};
			print("<li>");
			print("<span class=\"image\" style=\"background-image:url('$icon')\"></span>");
			print("<span class=\"name\">$title</span>");
			print("<span class=\"version\">v$app_version</span><span class=\"plateform\">$plateform</span>");
			$servername = $_SERVER['SERVER_ADDR'];
			print("<a href=\"itms-services://?action=download-manifest&amp;url=http://$servername/mobilestore/apps/$app/$version/$app.plist\">");
			print("<span class=\"button\">Installer</span>");
			print("</a>");
			print("</li>");
		}
		?>
		</ul>
		<ul class="pageitem">
		<?php
		$handle = fopen("$dir/$app/$version/users.txt", "r");
		if ($handle) {
			while ($user = fgets($handle)) {
				print("<li><span class=\"name\">$user</span></li>");
			}
			fclose($handle);
		}
		?>
		</ul>
	</div>
	<div id="footer">
		<a class="noeffect" href="http://snippetspace.com">Powered by iWebKit</a>
	</div>
</body>

</html>
