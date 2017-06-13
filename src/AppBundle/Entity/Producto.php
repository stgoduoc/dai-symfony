<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Producto {
    
    /**
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     *
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;
    
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $precio;
    
    /**
     *
     * @ORM\Column(type="text")
     */
    private $descripcion;
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


}
