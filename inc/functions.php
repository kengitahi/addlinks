<?php

function view(string $view, mixed $model = ''): void
{
    require 'views/layout.view.php';
}

function output($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function sanitize($value)
{
    return htmlspecialchars(trim($value));
}

function redirect($url)
{
    header("Location:$url");
}

function replaceText($originalText, $links, $keywords)
{
    $newText = $originalText;

    for ($i = 0; $i < count($links); $i++) {

        $anchor = "<a href='$links[$i]' target='blank'>$keywords[$i]</a>";

        $newText = str_ireplace($keywords[$i], $anchor, $newText);
    }

    return $newText;
}
