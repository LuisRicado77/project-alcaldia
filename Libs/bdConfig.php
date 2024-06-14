<?php
require_once 'php-activerecord/ActiveRecord.php';
 
 ActiveRecord\Config::initialize(function($cfg)
 {
    $cfg->set_model_directory($_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities");
     $cfg->set_connections(array(
        'development' => 'mysql://root:3015916341Luis@127.0.0.1:3307/archivo'));   // este es el anterior 'mysql://root:3015916341Luis@127.0.0.1:3307/service_security'));
   $cfg->set_default_connection('development');
 });



//  $t=new Turno();

//  $t->TURNO_ID = 344;

//  echo $t->TURNO_ID;
//  $t->JORNADA = "mañana";
//  $t->HORA_FIN = "7:00:00";
//  $t->HORA_INICIO = "7:00:00";
//  $t->FECHA = "2001-10-12";

//  $t->save();


