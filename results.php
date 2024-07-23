<?php

require_once 'inc/functions.php';

if (! empty($_GET['originalText'])) {
    $originalText = sanitize($_GET['originalText']);
} else {
    redirect('./');
}

if (! empty($_GET['keywords'])) {

    $keywords = $_GET['keywords']; //array
    $keywords_arr = [];

    foreach ($keywords as $keyword) {
        $keywords_arr[] = sanitize($keyword);
    }
} else {
    redirect('./');
}

if (! empty($_GET['links'])) {
    $links = $_GET['links']; //array
    $links_arr = [];

    foreach ($links as $link) {
        $links_arr[] = sanitize($link);
    }
} else {
    redirect('./');
}

$replacedText = replaceText($originalText, $links, $keywords);
/*
*
* @param string $view
*
*/

view('views/results', $replacedText);
