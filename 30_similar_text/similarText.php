<?php

$persian = 'ءآأؤإئابتثجحخدذرزسشصضطظعغفقلمنهوَُِّٕپچژکگھی';

$text = 'Ali';
$text1 = 'Hi Ali علی';

$result = similar_text($persian, $text1, $percentage);

echo $result . PHP_EOL;
echo $percentage . PHP_EOL;