<?php

$foods = [
    'vegetables' => explode(', ', 'Brinjal, Tomato, Potato, Brocolli, Carrot'),
    'fruits' => explode(', ', 'Jackfruit, Mango, Banana, Guava, Orange'),
    'drinks' => explode(', ', 'Water, Milk, Lemon juice')
];
array_push($foods['drinks'], 'Mango juice');
// print_r($foods);
// print_r($foods);

// echo $foods['vegetables'][4];

$test = [
    'test' => [
        'test-another' => [
            'a', 'b', 'c', 'd'
        ]
    ],
];
// echo $test['test']['test-another'][0];

$test2 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,4444,[5,6,7,8]],
];
echo $test2[3][4][2];
