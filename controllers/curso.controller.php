<?php

//incorporar al modelo
require_once "../models/curso.php";

//verificar si existe una operación en curso
//GET - POST - REQUEST
if (isset($_POST['operacion'])) {
  //instancia de la clase curso
  $curso = new curso();

  //identificar la operación : listar, insertar, eliminar, buscar,ect
  if ($_POST['operacion'] == 'listar'){
    //utilizaremos el métododefinido en la clase
    $resultado = $curso->listarcursos();

    //enviamos el resultado a la vista como un json
    echo json_encode($resultado);
  }
}