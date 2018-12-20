<?php
	// File data
	$filepath = urldecode($_GET['file']);
	$filename = basename($filepath);
	$fileperms = substr(sprintf('%o', fileperms($filepath)), -4);
	
	// Download function
	function download($filepath) {
		header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
		header('Content-type: application/x-download');
		header('Content-Length: '.filesize($filepath));
		readfile($filepath);
		exit;
	}
	
	if($fileperms !== '0600') {
		// Standard download
		download($filepath);
	}else {
		// Authcode required
		include('authcode.php');
		if($_GET['authcode'] == create_authcode($filename)) {
			// Access allowed
			download($filepath);
		}else {
			// Access denied
			echo 'You are not allowed to access this file...';
		}
	}
?>