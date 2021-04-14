<?php
    function autocargar($clasename){

        include_once './controllers/'.$clasename.'.php';
    }
    spl_autoload_register('autocargar');
?>