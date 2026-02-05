<?php
include "./controller/controlador.php";

$URL = parse_url ($_SERVER['REQUEST_URI'],PHP_URL_PATH);
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

else if ($URL == "/canil/coelhos"){
     coelhospage();
 }

else if ($URL == "/canil/pesquisa?nome"){
     pesquisapage();
}

else if ($URL == "/canil/pesquisa?nome"){
     pesquisapage();
}

else{
    echo "NOT FOUND!!";
}
?>