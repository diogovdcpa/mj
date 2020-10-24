<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Exercicio;

class ExercicioController extends Controller
{

    public function index()
    {
        echo "Lista de Exercicos";
    }

    public function ex01()
    {
        $dados["view"] = "ex01";
        $this->load("ex01", $dados);
    }

    public function calcularEx01()
    {
        $objExercicio = new Exercicio();

        $nome1 = isset($_POST["txt01"]) ? $_POST["txt01"] : null;
        $nome2 = isset($_POST["txt02"]) ? $_POST["txt02"] : null;

        $dados["resultado"] = $objExercicio->lerDoisValores($nome1, $nome2);

        $dados["view"] = "ex01";
        $this->load("ex01", $dados);
    }
}
