<h1>Bienbenido al mudo php</h1>
<?php
require_once 'autoload.php';
//  require_once './controllers/usuario.php';
//  require_once './controllers/nota.php';

if (isset($_GET['controller'])) {
    $nombreControlador=$_GET['controller'].'Controller';
}else {
    echo "la clase no existe";
    exit;
}
if (isset($nombreControlador)&& class_exists($nombreControlador)) {
    $controlador=new $nombreControlador;

    if (isset($_GET['action'])&& method_exists($controlador,$_GET['action'])) {
        $action=$_GET['action'];
        $controlador->$action();
    }else {
        echo "el metodo no existe";
    }
}else {
    echo "la clase no existe";
}

?>