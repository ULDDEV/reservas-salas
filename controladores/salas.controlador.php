<?php

class ControladorSalas
{

    /* Mostrar Categorias - Salas con INNER JOIN */

    static public function ctrMostrarSalas($valor)
    {
        $tabla1 = "categorias";
        $tabla2 = "salas";

        $respuesta = ModeloSalas::mdlMostrarSalas($tabla1, $tabla2, $valor);

        return $respuesta;
    }
}

