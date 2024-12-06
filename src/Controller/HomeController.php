<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;

final class HomeController
{
    public function home(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Eletrônica Marquinho - A Oficina de Som Automotivo de Brasília',
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }

    public function a_eletronica_marquinho(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Quem Somos - A Eletrônica Marquinho',
            'title' => 'A Eletrônica Marquinho',
            'caminho' => array(
                [
                    'link' => 'a-eletronica-marquinho',
                    'nome' => 'A Eletrônica Marquinho'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "a_eletronica_marquinho.php", $data);
    }

    public function produtos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Nossos Produtos - Eletrônica Marquinho',
            'title' => 'Nossos Produtos',
            'caminho' => array(
                [
                    'link' => 'produtos',
                    'nome' => 'Produtos'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "produtos.php", $data);
    }

    public function servicos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Nossos Serviços - Eletrônica Marquinho',
            'title' => 'Nossos Serviços',
            'caminho' => array(
                [
                    'link' => 'servicos',
                    'nome' => 'Serviços'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "servicos.php", $data);
    }

    public function blog(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Blog - Eletrônica Marquinho',
            'title' => 'Blog',
            'caminho' => array(
                [
                    'link' => 'blog',
                    'nome' => 'Blog'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "blog.php", $data);
    }

    public function fale_conosco(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Fale Conosco - Eletrônica Marquinho',
            'title' => 'Fale Conosco',
            'caminho' => array(
                [
                    'link' => 'fale_conosco',
                    'nome' => 'Fale Conosco'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "fale_conosco.php", $data);
    }

    public function produto_detalhe(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Mult-Mídia 4GB/64GB - Eletrônica Marquinho',
            'title' => 'Mult-Mídia 4GB/64GB',
            'caminho' => array(
                [
                    'link' => 'produtos',
                    'nome' => 'Produtos'
                ],
                [
                    'link' => 'multimidia4-64',
                    'nome' => 'Mult Mídia 4GB/64GB'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "produto_detalhe.php", $data);
    }
    public function servico_detalhe(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Amplificadores - Eletrônica Marquinho',
            'title' => 'Amplificadores',
            'caminho' => array(
                [
                    'link' => 'servicos',
                    'nome' => 'Serviços'
                ],
                [
                    'link' => 'amplificadores',
                    'nome' => 'Amplificadores'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "servico.php", $data);
    }
}