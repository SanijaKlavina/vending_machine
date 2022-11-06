<?php

$userMoney = 400;

function product($name, $price){
    $product = new stdClass();
    $product->name = $name;
    $product->price = $price;
    return $product;
}

$vendingMachine = [
    product("CocaCola", 100),
    product("Sprite", 100),
    product("Fanta", 100),
    product("Red Bull", 190),
    product("Red Bull Tropical", 190),
    product("Venden Water", 50),
    product("Venden Mineral water", 50),
    product("Stawberry Juice", 75),
];

$coins = [
    200 => 30,
    100 => 75,
    50 => 120,
    20 => 200,
    10 => 300,
    5 => 400,
    2 => 300,
    1 => 200

];


$userSelect = (int) readline("Choose a drink \n");
foreach($vendingMachine as $key => $product){
    echo $key. " ".$product->name. " ".$product->price. " \n";
}

$selectedProduct = $vendingMachine[$userSelect];


/*
Atļaut lietotājam mest monētas, līdz viņam pietiek.
Monētu skaits aparātā 100 eiro monētas un tā tālāk.
Ja nav tā lielākā monēta, tad jāiet tālāk.
Ja nevar izdot, tad mest kļūdu.
*/