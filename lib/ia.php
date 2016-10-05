<?php
/**
 * Ejercicio hecho by Ximo Gil
 */
class ia
{

// Declaración de una propiedad
public $columna=0;
public $fila=0;

// Declaración de un método
public function getColumna(){
  $this->columna=rand(0,3);
  return $this->columna;
  }

public function getFila(){
  $this->fila=rand(0,3);
  return $this->fila;
  }

}

 ?>
