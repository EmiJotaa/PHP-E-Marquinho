<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;
use App\Model\Usuario;

final class AdminController
{
    function __construct(){
        if (!isset($_SESSION)) {
            session_start();
        }
    }


    public function index(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        
        Usuario::verifica_login();

        $data['informacoes'] = array(
            'titleHeader' => 'Painel Administrativo - Eletrônica Marquinho',
            'menuActive' => 'dashboard'
        );

        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN);
        return $renderer->render($response, "index.php", $data);
    }

    public function login(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        Usuario::verifica_login(true);
        
        $data['informacoes'] = array(
            'titleHeader' => 'Login - Eletrônica Marquinho',
        );

        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN);
        return $renderer->render($response, "login.php", $data);
    }

    public function logout(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
       $_SESSION['usuario_logado'] = null;
       unset($_SESSION['usuario_logado']);

        header('Location:'.URL_BASE.'login');
        exit();
    }

    public function verifica_login(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {

        $posts = $request -> getParsedBody();

        $usuario = new Usuario();

        $result = $usuario->selectUsuario('*', array('email' => $posts['usuario']));

        if($result){
            if ($result[0]['senha'] !== $posts['senha']) {
                header('Location:'.URL_BASE.'login');
                exit();
            }

            $_SESSION['usuario_logado'] = $result[0];

            header('Location:'.URL_BASE.'admin');
            exit();

        }else{
            header('Location:'.URL_BASE.'login');
            exit();
        }
    }
}