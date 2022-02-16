<?php
$host= $_SERVER["HTTP_HOST"];
//echo $host . "<br>";
if($host == "aplicaciones.iecm.mx"){
    define("URL_SISTEMA", "https://aplicaciones.iecm.mx/proyecto/");
} elseif($host == "145.0.40.76"){
    define("URL_SISTEMA", "http://145.0.40.76/proyecto/");
} else{
    define("URL_SISTEMA", "http://localhost/proyecto/");
}
//echo URL_SISTEMA;
?>