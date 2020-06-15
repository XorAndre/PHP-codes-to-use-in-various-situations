<?php 
//Friendly URL
function urlAmigavel(){
    $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'home';
    $explode = array_filter(explode('/', $url));

    $pags = 'views/';
    $ext = '.php';

    if(file_exists($pags.$explode['0'].$ext)){
        include($pags.$explode['0'].$ext);
    }else{
        include "views/404.php";
    }
}