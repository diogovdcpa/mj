<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Area;    

class AreaController extends Controller{
    
   public function index(){
       $dados["view"]="formas";
       $this->load("template",$dados);
   }

   public function calcula(){
    $objArea = new Area();
    $area = null;

    $figura = $_POST["figura"];
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $raio = $_POST["raio"];

    if($figura=="quadrado"){
        $area = $objArea->quadrado($base);
    }else if($figura=="triangulo"){
        $area = $objArea->triangulo($base,$altura);
    }else if($figura=="retangulo"){
        $area = $objArea->retangulo($base,$altura);
    }else if($figura=="circulo"){
        $area = $objArea->circulo($raio);
    }else{
        $area = 0;
    }
    
    $dados["area"]=$area;
    $dados["base"]=$base;
    $dados["figura"]=$figura;
    $dados["altura"]=$altura;
    $dados["raio"]=$raio;
    $dados["view"]="formas";
    $this->load("template",$dados);

   }
   
   
}
