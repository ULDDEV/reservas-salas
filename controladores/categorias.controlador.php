<?php

class ControladorCategorias
{
    /* Mostrar Banner */
    static public function ctrMostrarCategorias()
    {

        $tabla = "categorias";
        $respuesta = ModeloCategorias::mdlMostrarCategorias($tabla);

        return $respuesta;
    }
}

