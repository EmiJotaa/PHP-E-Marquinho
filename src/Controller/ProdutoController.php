<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;
use App\Model\Usuario;
use App\Model\Produto;

final class ProdutoController
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

        $produto = new Produto();

        if (isset($_GET['search']) && $_GET['search'] !== '') {
            $listaProdutos = $produto->selectProdutosPesquisa($_GET['search']);
            $paginaAtual = 1;
            $proximaPagina = false;
            $paginaAnterior = false;
        }else{
            $limit = 10;
            $paginaAtual = isset($_GET['page']) ? $_GET['page'] : 1;
            $offset = ($paginaAtual*$limit) - $limit;
 
            $qntTotal = count($produto->selectProduto('*', false));
 
            $proximaPagina = ($qntTotal > ($paginaAtual*$limit)) ? URL_BASE."admin-produtos?page=".($paginaAtual+1) : false;
            $paginaAnterior = ($paginaAtual > 1) ? URL_BASE."admin-produtos?page=".($paginaAtual-1) : false;
 
            $listaProdutos = $produto->selectProdutosPage($limit, $offset);
        }
 
        $data['informacoes'] = array(
            'titleHeader' => 'Produtos - Painel Administrativo - A RLBS Motors',
            'menuActive' => 'produtos',
            'listagem' => $listaProdutos,
            'paginaAtual' => $paginaAtual,
            'proximaPagina' => $proximaPagina,
            'paginaAnterior' => $paginaAnterior
        );


        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN);
        return $renderer->render($response, "produto/index.php", $data);
    }

    public function create(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        
        Usuario::verifica_login();

        $data['informacoes'] = array(
            'titleHeader' => 'Novo Produto - Painel Administrativo - Eletrônica Marquinho',
            'menuActive' => 'produtos'
        );

        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN);
        return $renderer->render($response, "produto/create.php", $data);
    }
    public function edit(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        
        Usuario::verifica_login();

        $produto =new Produto();

        $produtoSelecionado = $produto->selectProduto('*', array('id' => $args['id']));

        $data['informacoes'] = array(
            'titleHeader' => 'Editar Produto - Painel Administrativo - Eletrônica Marquinho',
            'menuActive' => 'produtos',
            'produto' => $produtoSelecionado,
        );

        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN);
        return $renderer->render($response, "produto/edit.php", $data);
    }
    public function delete(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        
        Usuario::verifica_login();

        $produto =new Produto();

        $produtoSelecionado = $produto->selectProduto('*', array('id' => $args['id']));

        if (isset($produtoSelecionado[0]['imagem_principal']) && $produtoSelecionado[0]['imagem_principal'] !== '') {
            unlink($produtoSelecionado[0]['imagem_principal']);
        }

        $produto->deleteProduto('id', $args['id']);

        $_SESSION['alerta_mensagem'] = array(
            'titulo' => 'Sucesso!',
            'mensagem' => 'O Produto foi deletado corretamente.',
            'classe' => ''
        );

        header('Location: '.URL_BASE.'admin-produtos');
        exit();
    }

    public function insert(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $posts = $request->getParsedBody();

        if($request->getUploadedFiles()['imagem_principal']){
            $imagem_principal = $request->getUploadedFiles()['imagem_principal'];
        }else{
            $imagem_principal = false;
        }

        $nome_imagem_principal = "";
        if ($imagem_principal) {
            if ($imagem_principal->getError() === UPLOAD_ERR_OK) {
                $extensao = pathinfo($imagem_principal->getClientFilename(), PATHINFO_EXTENSION);
                $nome = md5(uniqid(rand(), true)).pathinfo($imagem_principal->getClientFilename(), PATHINFO_FILENAME).".".$extensao;
                $nome_imagem_principal = "resources/imagens/produtos/" . $nome;
                $imagem_principal->moveTo($nome_imagem_principal);
            }
        }
     
        $campos = array(
            'titulo' => $posts['titulo'],
            'link_produto' => ($posts['link_produto']),
            'imagem_principal' => $nome_imagem_principal,
            'data_cadastro' => $posts['data'],
            'status' => $posts['ativo']
        );
     
        $produtos = new Produto();

        $produtos->insertProduto($campos);

        $_SESSION['alerta_mensagem'] = array(
            'titulo' => 'Sucesso!',
            'mensagem' => 'O Produto foi adicionado corretamente.',
            'classe' => ''
        );

        header('Location: '.URL_BASE.'admin-produtos');
        exit();
    }

    public function update(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $posts = $request->getParsedBody();

        if($request->getUploadedFiles()['imagem_principal']){
            $imagem_principal = $request->getUploadedFiles()['imagem_principal'];
        }else{
            $imagem_principal = false;
        }

        $nome_imagem_principal = "";

        if (
            (isset($posts['excluir_imagem_principal']) && $posts['excluir_imagem_principal'] !== "")
            || ($imagem_principal && $imagem_principal->getClientFilename() !== "")
        ) {
            if ($imagem_principal && $imagem_principal->getClientFilename() !== "") {
                if ($imagem_principal->getError() === UPLOAD_ERR_OK) {

                    $extensao = pathinfo($imagem_principal->getClientFilename(), PATHINFO_EXTENSION);
                    $nome = md5(uniqid(rand(), true)).pathinfo($imagem_principal->getClientFilename(), PATHINFO_FILENAME).".".$extensao;
                    $nome_imagem_principal = "resources/imagens/produtos/" . $nome;
                    $imagem_principal->moveTo($nome_imagem_principal);

                    if (isset($posts['excluir_imagem_principal']) && $posts['excluir_imagem_principal'] !== "") {
                        unlink($posts['excluir_imagem_principal']);
                    }else{
                        $produto =new Produto();

                        $produtoSelecionado = $produto->selectProduto('imagem_principal', array('id' => $args['id']));
                        unlink($produtoSelecionado[0]['imagem_principal']);
                    }
                    
                }else{
                    $_SESSION['alerta_mensagem'] = array(
                        'titulo' => 'Erro :(',
                        'mensagem' => 'Ops, não foi possivel atualizar o produto, porque você tentou excluir a imagem principal e a nova imagem que tentou enviar, aconteceu um erro. Por favor tente novamente com outra imagem!',
                        'classe' => 'erro'
                    );
                    header('Location: '.URL_BASE.'admin-produtos');
                    exit();  
                }
            }else{
                $_SESSION['alerta_mensagem'] = array(
                    'titulo' => 'Erro :(',
                    'mensagem' => 'Ops, não foi possivel atualizar o produto, porque você tentou excluir a imagem principal porém não enviou nenhuma nova imagem para ser exibida no site! Por favor tente novamente.',
                    'classe' => 'erro'
                );

                header('Location: '.URL_BASE.'admin-produtos');
                exit();  
            }
        }
     
        $valores = array(
            'titulo' => $posts['titulo'],
            'link_produto' => $posts['link_produto'],
            'data_cadastro' => $posts['data'],
            'status' => $posts['ativo']
        );

        if ($nome_imagem_principal !== "") {
            $valores['imagem_principal'] = $nome_imagem_principal;
        }

        $where = array(
            'id' => $args['id'],
        );

        $produtos = new Produto();
        $produtos->updateProduto($valores, $where);

        $_SESSION['alerta_mensagem'] = array(
            'titulo' => 'Sucesso!',
            'mensagem' => 'O Produto foi atualizado corretamente.',
            'classe' => ''
        );

        header('Location: '.URL_BASE.'admin-produtos');
        exit();
    }

}

