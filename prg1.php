<?php

$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

$months = [
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
];

$laptops = [
    "Dell" => [
        ["model" => "Inspiron 15", "price" => 50000],
        ["model" => "XPS 13", "price" => 100000]
    ],
    "HP" => [
        ["model" => "Pavilion", "price" => 45000],
        ["model" => "Envy", "price" => 95000]
    ]
];


print_r($days);
print_r($months);
print_r($laptops);
?>
