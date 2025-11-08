<?php
class Electronico extends Producto implements IGarantia {

    private $mesesGarantia;

    public function __construct($id, $nombre, $precioBase, $mesesGarantia) {
        parent::__construct($id, $nombre, $precioBase);
        $this->mesesGarantia = $mesesGarantia;
    }

    public function obtenerDetalle() {
        return "ID: {$this->id}, Nombre: {$this->nombre}, Garantía: {$this->mesesGarantia} meses";
    }

    public function calcularPrecioFinal() {
        return $this->precioBase * 1.16;
    }

    public function aplicarGarantia() {
        echo "Aplicando garantía de {$this->mesesGarantia} meses para {$this->nombre}\n";
    }
}