<?php
require_once "conexion.php";

class ModeloRestaurante
{
    /* Mostrar Restaurante */

    static public function mdlMostrarRestaurante($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
