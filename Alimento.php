<?php
class Alimento extends Producto {

    private $fechaCaducidad;

    public function __construct($id, $nombre, $precioBase, $fechaCaducidad) {
        parent::__construct($id, $nombre, $precioBase);
        $this->fechaCaducidad = $fechaCaducidad;
    }

    public function obtenerDetalle() {
        return "ID: {$this->id}, Nombre: {$this->nombre}, Caduca: {$this->fechaCaducidad}";
    }

    public function calcularPrecioFinal() {
        return $this->precioBase * 1.08;
    }
}