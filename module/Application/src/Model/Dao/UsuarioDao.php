<?php

namespace Application\Model\Dao;

use \ArrayObject;
use Application\Model\Entity\Usuario;

class UsuarioDao {
    
    private $listaUsuario;

    public function __construct() {
        $this->listaUsuario = new ArrayObject();

        $this->listaUsuario->append(new Usuario(1, "Andres", "Guzman"));
        $this->listaUsuario->append(new Usuario(2, "Linus", "Torvalds"));
        $this->listaUsuario->append(new Usuario(3, "Steve", "Jobs"));
        $this->listaUsuario->append(new Usuario(4, "Rasmus", "Lerdorf"));
        $this->listaUsuario->append(new Usuario(5, "Erich", "Gamma"));
        $this->listaUsuario->append(new Usuario(6, "Richard", "Helm"));
        $this->listaUsuario->append(new Usuario(7, "Ralph", "Johnson"));
        $this->listaUsuario->append(new Usuario(8, "John", "Vlissides"));
        $this->listaUsuario->append(new Usuario(9, "James", "Gosling"));
        $this->listaUsuario->append(new Usuario(10, "Bruce", "Lee"));
    }
    
    public function obtenerTodos(){
        
    }
    
    public function obtenerPorId() {
        
    }
    
    public function buscarPorNombre(){
        
    }
    
    
}
