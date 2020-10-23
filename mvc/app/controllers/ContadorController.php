<?php
namespace app\controllers;
use app\core\Controller;

use app\models\Contador;

class ContadorController extends Controller{
    
   public function index(){
       echo "Pagina Index Contador";
   }
   
   public function assinar($sala,$nome){
       $objContador = new Contador();

        $dados["res"] = $objContador->assinar($sala,$nome);

       $this->load("Index",$dados);
   }

   public function lista($sala){
        $objContador = new Contador();

        $contadores = $objContador->lista($sala);

        echo "<h1>Lista dos contadores da sala: $sala</h1><hr>".$contadores;
   }

   public function add($contador,$sala){
       $objContador = new Contador();

       $lista = $objContador->inserir($contador,$sala);

       echo "<h1>Lista dos contadores da sala: $sala</h1><hr>".$lista;
   }
}
