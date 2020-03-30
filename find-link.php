<?php
// Find-Link
// Created by find-xss.net
// Author Reznik Vitaly
// Version 0.1.0
// 15.07.2011

class findLink {

	var $invisibleFileNames;
	var $fileList;

	function __construct($path = "./") {
		$this->invisibleFileNames = array(".", "..");
		$this->fileList = $this->scanDirectories($path);
	}

	function scanDirectories($rootDir, $allFiles = array()) {
		$dirContent = scandir($rootDir);
		foreach($dirContent as $key => $content) {
			$path = $rootDir.'/'.$content;
			if(!in_array($content, $this->invisibleFileNames)) {
				$allFiles[] = $path;
				if(is_dir($path) && is_readable($path)) {
					$allFiles = $this->scanDirectories($path, $allFiles);
				}
			}
		}
		return $allFiles;
	}
}

$rootDir = isset($_GET['rootdir']) ? htmlentities($_GET['rootdir']) : dirname(__FILE__);
$findLink = new findLink($rootDir);
$i = 1;

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
	<head>
		<title>Find - Link</title>
		<meta name="description" content="Find - Info module by http://sdelaysitesam.info/" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body>
		<div align="center">
			<b>Find-Link</b>, powered by <b><a href="http://sdelaysitesam.info/" >find-xss.net</a></b><br /><br />
			<b>Found external links:</b><br /><br />
			<table>
				<th>File name</th>
				<th>External link</th>
				<?php foreach($findLink->fileList as $item):
					if(is_readable($item)):
						$contents = file_get_contents($item);
						if(preg_match("/(<a *.*?href=[\'\"]?http[s]?:\/\/.*?<\/a>)+/", $contents, $match) && strlen($match[0]) < 2048): ?>
							<tr style="background-color: #<?php echo $i > 0 ? "DDDDDD": "EEEEEE"; $i = 1 - $i;?>" >
								<td><?php echo htmlentities($item); ?></td><td align="center"><?php echo htmlentities($match[0]); ?></td>
							</tr>
						<?php endif; ?>
					<?php endif; ?>
				<?php endforeach; ?>
			</table><br /><br />
			Copyright © 2010-2011 XSS Scanner http://sdelaysitesam.info/
		</div>
	</body>
</html>
