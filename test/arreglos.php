<?php

//no va para el proyecto
//array(arreglo)sencillo. Posee un índice, el primero es 0.
$pplatos =["Ceviche","Arroz con pollo","Carapulcra","Ají de gallina","Lomo saltado"]//primero
echo $platos[0];
echo $platos[1];

$amigos = array("José","Joel","Lorenzo","César");
echo $amigos[1];//segundo

//Array mutidimensional
$aplicaciones = [
  ["Photoshop","Corel Draw","Premier","Muse"],
  ["VSCode","Xammp","NeatBeans","Erwin","Notepad++"]
  ["Excel","SAP","AutoCad","PowerBI","Project"]
];

//obtener VSCode
echo $aplicaciones[1][0]; //1= índice del arreglo, 0 = índice valor

//obtener Muse
escho $aplicaciones[0][3];

//obtener SAP
echo $aplicaciones [2][1];
//hasta aquí los arreglos anteriores ,utiizaban indices.

//RREGLOS ASOCIATIVOS....KEY =>VALUE 
$datospersonales =[
  "apellidos"     =>  "Atuncar Valerio"
  "nombres"       =>  "Lucas Alfredo"
  "especialidad"  =>  "Ingenerí de software con IA"
  "email"         =>  "lucasatuncar1@gmail.com"
  "edad"          =>  38
  "estadoCasado"  =>  true,
  "peliculas"     => ["EndGame","Pinocho","Ironman"]
];

//obtener la especialidad
echo $datospersonales["especialidad"];

//obtener la primera de tus peliculas favortias
echo $datospersonales["peliculas"][0]




//json
//// los colegios van con corchetes porque se puede haver estudiado en varios colegios