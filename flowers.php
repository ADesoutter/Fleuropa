<?php

$flowers = [
    [
        'title' => 'Roses',
        'price' => '19',
        'is_enabled' => true,
    ],
    [
        'title' => 'Orchidés',
        'price' => '29',
        'is_enabled' => true,
    ],
];

foreach($flowers as $flower) {
    echo $flower['title'] . 'au prix de : ' . $flower['price'] . PHP_EOL;
}

-->