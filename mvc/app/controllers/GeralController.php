<?php
namespace app\controllers;

class GeralController{
    
   public function falar($pessoa = 'Diogo'){
       echo "quero falar com " . $pessoa;
   } 

   public function entregar(){
       echo "quero Entregar";
   } 
}
