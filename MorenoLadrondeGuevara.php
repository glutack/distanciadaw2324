<?php

/** Script para la practica de phpDocumentor
 * 
 * Este script contiene dos funciones que seran documentadas usando
 * phpDocumentor.
 * 
 * PHP version 7
 * 
 * @author Irene Moreno Ladron de Guevara <ladrondeguevara97@gmail.com>
 * @version 1.0
 */

/**
 * Calcula la suma de dos numeros
 *
 * @param int $a El primer numero
 * @param int $b El segundo numero
 * @return int La suma de los dos numeros
 */
function suma($a, $b)
{
	return $a + $b;
}

/** 
 * Saluda al usuario
 * 
 * @internal Solo para uso en la documentacion para desarrolladores
 * @param string $nombre El nombre del usuario
 * @return string Un saludo personalizado par el usuario
 */
function saludo($nombre) {
	return "Hola, " . $nombre . "!";
}