<?php
require_once "conexion.php";

class ModeloBanner
{
    /* Mostrar Banner */

    static public function mdlMostrarBanner($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
