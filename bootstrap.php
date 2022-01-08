<?php

function partial($name) {
    require( __DIR__ . '/html_partials/{$name}.html.php');
}