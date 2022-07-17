<?php

$files = array_diff(scandir('files'), ['.', '..']);

$arrFiles = [];

foreach ($files as $file) {
    $md5File = md5_file('files/' . $file);

    $arrFiles[$md5File] = ! isset($arrFiles[$md5File]) 
                    ? 1
                    : $arrFiles[$md5File] + 1;
}

var_dump($arrFiles);