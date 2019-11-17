<?php
include 'config.php';
include 'classes/page.php';
include 'classes/database.php';

$page = new Page();
if(isset($_GET['id'])) {
	$id = (int)$_GET['id'];
	if($id != 0) {
        $text = $page->get_one($id);
        echo $page->get_body($text, 'view');

	}
	else {
		exit('wrong parameter');
	}
} else {
    $text = $page->get_all();

    echo $page->get_body($text, 'main');
}