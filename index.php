<?php

require "./vendor/autoload.php";

$url = $_GET['url'] ?? "/";
$ctr = new \Ifba\Visitantes\controller\VisitorController();

switch($url){
    case "cadastrar":
        $ctr->index();
    break;

    case "/":
        header('Location: /livro_de_visitas/cadastrar');
    break;

    case "visitantes":
        $ctr->listVisitors();
    break;

    default:
        $ctr->notFound();
}



#MVC -> MODEL VIEW CONTROLLER -> Padrão de Projeto muito utilizado para o desenvolvimento web. Este padrão visa que cada classe tem uma responsabilidade específica na aplicação. E estas classes estão dividas em camadas que tem suas responsabilidades.
#MODEL -> Responsavel pelas regras de negocio da aplicação e o acesso e manipulação dos dados
#VIEW -> Responsável pela visualização das informações. Nesta camada que desenvolvemos o HTML, CSS...
#CONTROLLER -> Reponsável pelo Meio de campo, trabalhando as requisições do usuário e as respostas a serem entregues. Faz intermediação entre o model e a view