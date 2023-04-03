<?php

$computadora = [
    "CPU"       => "Intel Core i7",
    "RAM"       => 32,
    "STOREAGE"  =>  ["SSD","HDD"],
    "SO"        => "Windows",
    "VERSION"   => 10,
    "APP"       => ["Office","VSCode","NeatBeans","Xammp"]
];

echo json_encode($computadora);