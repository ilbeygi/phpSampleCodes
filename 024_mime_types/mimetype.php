<?php

$files = array_diff(scandir('files'), ['.', '..']);

$mimeTypes = [];

foreach ($files as $file) {
    $mimeTypes[] = mime_content_type('files/' . $file);
}

var_dump($mimeTypes);