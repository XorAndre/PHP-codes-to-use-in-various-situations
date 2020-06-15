<?php 
    //Title function
    function title(){
        $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'home';
        $explode = explode('/', $url);

        switch($explode[0]){
            default:
                echo ucfirst($explode[0]);
            break;
        }
    }
    //seo
    function seo(){
        $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'home';
        $explode = explode('/', $url);

        switch($explode[0]){
            case "home":
                include("seo/home.php");
            break;

            default:
                include("seo/404.php");
            break;
        }
    }
    // Url amigável
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