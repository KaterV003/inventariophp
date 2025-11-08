<?php
class Ropa extends Producto {
    
    private $talla;

    public function __construct($id, $nombre, $precioBase, $talla) {
        parent::__construct($id, $nombre, $precioBase);
        $this->talla = $talla;
    }

    public function obtenerDetalle() {
        return "ID: {$this->id}, Nombre: {$this->nombre}, Talla: {$this->talla}";
    }

    public function calcularPrecioFinal() {
        return $this->precioBase * 1.16;
    }
}