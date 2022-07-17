<?php

function customEncryption(string $text, string $key) {
    $textLen  = strlen($text);
    $keyLen = strlen($key);

    for ($i = 0; $i < $textLen; $i++) {
        for ($j = 0; $j < $keyLen; $j++) {
            $text[$i] = $text[$i] ^ $key[$j];
        }
    }

    return $text;
}

function customDecryption(string $text, string $key) {
    $textLen  = strlen($text);
    $keyLen = strlen($key);

    for ($i = 0; $i < $textLen; $i++) {
        for ($j = 0; $j < $keyLen; $j++) {
            $text[$i] = $key[$j] ^ $text[$i];
        }
    }

    return $text;
}

$en =  base64_encode(customEncryption('Hello world!', 'f7asdhka5f45'));
echo $en . PHP_EOL;

echo customDecryption(base64_decode($en), 'f7asdhka5f45');