<?php
include "./data/animals.php";

function mainPage(){
    global $items;
    $banner = "./images/allanimals.jpg";
    $title = "todos os animais";
    $content = $items;

    include "./include/layout.php";
}
function gatosPage(){
    $banner = "./images/allannimals.jpg";
    $title = "todos os animais";
    $content = $items;
}
function cachorrosPage(){
    $banner = "./images/allannimals.jpg";
    $title = "todos os animais";
    $content = $items;
}
function peixesPage(){
    $banner = "./images/allannimals.jpg";
    $title = "todos os animais";
    $content = $items;
}
?>
