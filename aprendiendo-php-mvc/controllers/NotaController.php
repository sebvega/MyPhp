<?php
    class NotaController{
        public function listar(){
            //modelo
            require_once './models/nota.php';
            //logica del controlador
            $nota=new NotaModel();
            $notas=$nota->conseguirTodos('notas');
            //vista
            require_once './views/notas/listar.php';
        }
        public function crear(){
            require_once './models/nota.php';
            $nota=new NotaModel();
            $nota->setUsuario_id(1);
            $nota->setTitulo("Nota desde PHP MVC");
            $nota->setDescripcion("descripcion de mi nota");
            $guardar=$nota->guardar();
            header("Location:index.php?action=listar&controller=Nota");
        }
        public function borrar(){
            require_once './models/nota.php';
        }
        
    }

?>