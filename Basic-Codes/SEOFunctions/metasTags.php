<?php 
 /* 
  Separation of meta tags by the Get method
  In this code example, it is possible to separate the types of meta tags from the get method.
 */
function MetaTags(){
    $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'home';
    $explodeGet = explode('/', $url);

    switch($explodeGet[0]){
        case "home":
            include("seo/metaTagshome.php");
        break;

        default:
            include("seo/metaTags404.php");
        break;
    }
}