<?php

class curso{

  //atributo
  //arreglo asociativo multidimensional
  private $data =[
    [
      "id"     =>  1,
      "nombre" => "AutoCAD",
      "nivel"  => "Básico",
      "precio" => 300,
      "horas"  => 30
    ],
    [
      "id"     =>  2,
      "nombre" => "Excel",
      "nivel"  => "Intermedio",
      "precio" => 280,
      "horas"  => 25
    ],
    [
      "id"     =>  3,
      "nombre" => "Java",
      "nivel"  => "Avanzado",
      "precio" => 290,
      "horas"  => 30 
    ],
    [
      "id"     =>  4,
      "nombre" => "Python",
      "nivel"  => "Intemredio",
      "precio" => 240,
      "horas"  => 25 
    ],
    [
      "id"     =>  5,
      "nombre" => "JavaScript",
      "nivel"  => "Avanzado",
      "precio" => 350,
      "horas"  => 40 
    ],
  ];
  //método para listar cursos
 public function listarcursos(){ 
    return $this->data;
 }
}