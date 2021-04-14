<?php
    require_once 'modeloBase.php';
    class Usuario extends ModeloBase{
        public $nombre;
        public $apellido;
        public $email;
        public $password;

        public function __construct(){
            parent::__construct();
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getApellido(){
            return $this->apellido;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function setApellido($apellido){
            $this->apellido=$apellido;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function setPassword($password){
            $this->password=$password;
        }
    } 

?>