<?php

class ControladorBanner
{
    /* Mostrar Banner */
    static public function ctrMostrarBanner()
    {

        $tabla = "banner";
        $respuesta = ModeloBanner::mdlMostrarBanner($tabla);

        return $respuesta;
    }
}

