<?php

//Array (arreglo)/coleccion mas sencillo. posee un indice, el primero es 0
$platos = ["Ceviche", "Arroz con pollo", "Carapulcra", "Aji de gallina", "lomo saltado"]

echo $platos[0];
echo $platos[1];

$amigos = array("Jose", "Joel", "Lorenzo","Cesar");
echo $amigos[1];

//Array MULTI dimensional
$aplicaciones = [
  ["Photoshop", "Corel Draw", "Premier", "Muse"]
  ["VSCode", "Xampp", "NetBeans", "Erwin", "Notepad++"],
  ["Excel", "SAP", "AutoCAD", "PowerBI", "Project"]
];

//Obtener VSCode
echo $aplicaciones[1][0]; //1 = indice arreglo, 0 = indice valor

//Obtener Muse
echo $aplicaciones[0][3];

//Obtener SAP
echo $aplicaciones[2][1];

//Hasta aqui, cualquier de los arreglos anteriores, utiliza un indice (int)
//ARREGLOS ASOCIATIVOS...KEY => VALUE
$datosPersonales = [
  "apellidos" => "BULEJE FLORES",
  "nombres"   => "Josue",
  "especialidad" => "Ingenieria de Software con IA",
  "email"     => 20,
  "estaCasado" => true,
  "peliculas" => ["EndGame, Pinocho, IronMan"]
];

//Obtener la especialidad
echo $datosPersonales["especialidad"];

//Obtener la primera de tus peliculas favoritas
echo $datosPersonales["peliculas"][0]