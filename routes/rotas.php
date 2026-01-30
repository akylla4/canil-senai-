<?php
include "./controller/controlador.php";

$URL = $_SERVER['REQUEST_URI'];
echo $URL;

if($URL == "/canil/"){
    mainpage();
}
else if ($URL == "/canil/gatos"){
     gatospage();
}
else if ($URL == "/canil/cachorros"){
     cachorrospage();
}
else if ($URL == "/canil/peixes"){
    peixespage();
}
else if ($URL == "/canil/pesquisa"){
     pesquisapage();
}
else{
    echo "NOT FOUND!!";
}
?>