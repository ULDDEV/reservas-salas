<?php
require_once "conexion.php";

class ModeloRecorrido
{
    /* Mostrar Recorrido */

    static public function mdlMostrarRecorrido($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
