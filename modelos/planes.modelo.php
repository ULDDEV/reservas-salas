<?php
require_once "conexion.php";

class ModeloPlanes
{
    /* Mostrar Planes */

    static public function mdlMostrarPlanes($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
