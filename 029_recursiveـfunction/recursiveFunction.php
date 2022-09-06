<?php

$data = [
    'index_1' => [
        'index_2' => 'This is A StrInG',
        'index_3' => [
            'index_4' => [
                'index_5' => 'I aM MohammaD'
            ]
        ]
    ]
];

function arrayLower($arr) {
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            $arr[$key] = arrayLower($value);
        } else {
            $arr[$key] = strtolower($value);
        }
    }

    return $arr;
}

var_dump(arrayLower($data));