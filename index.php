<?php

function get_pages() {
	$file_list = scandir(__DIR__ . '/pages');
	return array_filter($file_list, function($var) {
		return substr($var, -5) === '.html';
	});
}

require_once __DIR__ . '/partials/header.html';

if (isset($_GET['page'])) {
    require_once __DIR__ . '/pages/' . $_GET['page'] . '';
} else {
    require_once __DIR__ . '/pages/list.php';
}

require_once __DIR__ . '/partials/footer.html';
?>