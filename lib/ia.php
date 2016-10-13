<?php

class ia
{
//utilización de atributos
  public $columna=1;
  public $fila=1;


//utilización de métodos
  public function getColumna(){
   return $this->columna ;
  }

   public function getFila(){
    return $this->fila;
  }

  public function randomPos(){

  }
//setters
  public function setFila($fil){
     $this->fila=$fil;
  }
  public function setColumna($col){
     $this->columna=$col;
  }


} ?>
