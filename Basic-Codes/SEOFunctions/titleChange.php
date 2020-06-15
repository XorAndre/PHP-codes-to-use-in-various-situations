<?php 
    /*
    In this code example we can change the title of dynamic pages using the Get method
    */
    function PageTitle(){
        $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'home';
        $explode = explode('/', $url);

        switch($explode[0]){
            default:
                echo ucfirst($explode[0]);
            break;
        }
    }
    
    