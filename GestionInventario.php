<?php
// 1. Incluir todos los archivos de las clases
require_once 'IGarantia.php';
require_once 'Producto.php';
require_once 'Electronico.php';
require_once 'Alimento.php';
require_once 'Ropa.php';

// 2. Instanciar objetos
$laptop = new Electronico(101, "Laptop XYZ", 1200.00, 12);
$manzanas = new Alimento(201, "Manzana Gala (Kg)", 2.50, "15-11-2025");
$camiseta = new Ropa(301, "Camiseta de Algodón", 20.00, "M");

// 3. Crear el "inventario" (un array en PHP)
$inventario = [];
$inventario[] = $laptop;
$inventario[] = $manzanas;
$inventario[] = $camiseta;

echo "=== INICIO DE GESTIÓN DE INVENTARIO (PHP) ===\n";

// 4. Recorrer la lista (aquí está el polimorfismo)
foreach ($inventario as $prod) {
    echo "--------------------\n";
    
    // Llama al método de la subclase correcta
    echo $prod->obtenerDetalle() . "\n";
    
    // Llama al método de la subclase correcta
    $precioFinal = $prod->calcularPrecioFinal();
    
    // Usamos printf para formatear los decimales
    printf("Precio Base: $%.2f, Precio Final (c/IVA): $%.2f\n", $prod->getPrecioBase(), $precioFinal);

    // 5. Comprobar si tiene la "habilidad" (interfaz)
    if ($prod instanceof IGarantia) {
        $prod->aplicarGarantia();
    }
}

echo "--------------------\n";
echo "=== FIN DE GESTIÓN DE INVENTARIO ===\n";