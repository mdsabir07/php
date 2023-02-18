<?php 
$products = [
    [
        "name"=> "Earthen Bottle",
        "image"=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg",
        "price"=>"48",
    ],
    [
        "name"=> "Nomad Tumbler",
        "image"=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg",
        "price"=>"35",
    ],
    [
        "name"=> "Focus Paper Refill",
        "image"=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg",
        "price"=>"89",
    ],
    [
        "name"=> "Machined Mechanical Pencil",
        "image"=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg",
        "price"=>"35",
    ],
    [
        "name"=> "Focus Card Tray",
        "image"=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-05.jpg",
        "price"=>"64",
    ],
    [
        "name"=> "Focus Multi-Pack",
        "image"=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-06.jpg",
        "price"=>"39",
    ],
    [
        "name"=> "Brass Scissors",
        "image"=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-07.jpg",
        "price"=>"50",
    ],
    [
        "name"=> "Focus Carry Pouch",
        "image"=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-08.jpg",
        "price"=>"32",
    ],
];

// foreach($products as $product) {
//     testProducts($product);
// }

// function testProducts($pr) {
//     echo "{$pr['name']} - {$pr['price']} </br>";
// }

// function newName($name="Sabirul", $title="Islam") {
//     echo "{$name} {$title}<br/>";
// }

// newName("Sabirul", "");

// function unlimitedArgument(...$n1) {
//     echo count(func_get_args());
// }
// unlimitedArgument(1,2,3,4,5,6,7,8,9,12,44,67);

$data = 12;
function functionVariable() {
    global $data;

    $data +=3;
    echo $data;
}
functionVariable();
