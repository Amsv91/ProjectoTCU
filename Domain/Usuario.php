<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario{
    
    private $nombre;
    private $correo;
    private $contrasenia;
    private $codigo;
    
    public function __construct() {
        
    }
     function getCodigo() {
        return $this->codigo;
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getContrasenia() {
        return $this->contrasenia;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setContrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
    }

function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    

}
