<?php

namespace Ifba\Visitantes\controller;

class VisitorController{

    public function index()
    {
        $titulo = "Livro de Visitas - 3º ano Matutino";
        require "./app/view/home.php";
    }

    public function listVisitors()
    {
        $titulo = "Livro de Visitas - 3º ano Matutino";
        require "./app/view/list_visitors.php";

    }

    public function save()
    {
        $visitor = new \Ifba\Visitantes\model\entities\Visitor();
        $visitor->setName($_POST['name']);
        $visitor->setRating($_POST['rating']);
        $visitor->setDate();


    }

    // public function sendForm() 
    // {
    //     require "./app/view/enviar.php";
    // }

    public function notFound()
    {
        $titulo = "Not Found";
        require "./app/view/not_found.php";

    }

}