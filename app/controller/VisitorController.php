<?php

namespace Ifba\Visitantes\controller;

use Ifba\visitantes\model\DAO\VisitorDAO;

class VisitorController{

    public function index()
    {
        $titulo = "Livro de Visitas - 3º ano Matutino";
        require "./app/view/home.php";
    }

    public function listVisitors()
    {
        $dao = new \Ifba\Visitantes\model\DAO\VisitorDAO;
        $titulo = "Livro de Visitas - 3º ano Matutino";
        $visitors = $dao->findAll();
        require "./app/view/list_visitors.php";

    }
    public function save()
    {
        $visitor = new \Ifba\Visitantes\model\entities\Visitor();
        $visitor->setName($_POST['name'] ?? '');
        $visitor->setRating($_POST['rating'] ?? '');
        $visitor->setDate();

        $dao = new \Ifba\Visitantes\model\DAO\VisitorDAO;

        if($dao->insert($visitor)) {
            $msgH1 = "Formulário enviado com sucesso";
            $msgP = "Seu formulário foi enviado com sucesso. Agradecemos sua participação!";
        } else {
            $msgH1 = "Ocorreu um erro ao enviar o formulário";
            $msgP = "Ocorreu um erro ao enviar o formulário. Entre em contato com os administradores do sistema.";
        }

        require "./app/view/send.php";
    
    }

    public function notFound()
    {
        $titulo = "Not Found";
        require "./app/view/not_found.php";

    }

}