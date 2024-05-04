<?php

class ControladorPlanes
{
    /* Mostrar Banner */
    static public function ctrMostrarPlanes()
    {

        $tabla = "planes";
        $respuesta = ModeloPlanes::mdlMostrarPlanes($tabla);

        return $respuesta;
    }
}

