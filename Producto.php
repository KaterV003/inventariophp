<?php
abstract class Producto {
    
    protected $id;
    protected $nombre;
    protected $precioBase;

    public function __construct($id, $nombre, $precioBase) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precioBase = $precioBase;
    }

    abstract public function obtenerDetalle();
    abstract public function calcularPrecioFinal();
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getId() {
        return $this->id;
    }

    public function getPrecioBase() {
        return $this->precioBase;
    }
}