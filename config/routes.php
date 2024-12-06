<?php
use Slim\App;
return function (App $app) {
    //ROTAS DO PAINEL ADMINISTRATIVO
    $app->get('/admin', '\App\Controller\AdminController:index');
    $app->get('/login', '\App\Controller\AdminController:login');
    $app->get('/logout', '\App\Controller\AdminController:logout');

    $app->post('/login', '\App\Controller\AdminController:verifica_login');


    //SERVIÇOS
    $app->get('/admin-servicos', '\App\Controller\ServicoController:index');
    $app->get('/admin-servicos-create', '\App\Controller\ServicoController:create');
    $app->get('/admin-servicos-edit/{id}', '\App\Controller\ServicoController:edit');
    $app->get('/admin-servicos-delete/{id}', '\App\Controller\ServicoController:delete');

    $app->post('/admin-servicos-create', '\App\Controller\ServicoController:insert');
    $app->post('/admin-servicos-edit/{id}', '\App\Controller\ServicoController:update');

    //PRODUTOS
    $app->get('/admin-produtos', '\App\Controller\ProdutoController:index');
    $app->get('/admin-produtos-create', '\App\Controller\ProdutoController:create');
    $app->get('/admin-produtos-edit/{id}', '\App\Controller\ProdutoController:edit');
    $app->get('/admin-produtos-delete/{id}', '\App\Controller\ProdutoController:delete');

    $app->post('/admin-produtos-create', '\App\Controller\ProdutoController:insert');
    $app->post('/admin-produtos-edit/{id}', '\App\Controller\ProdutoController:update');

    //ROTAS DO WEB SITE
    $app->get('/', '\App\Controller\HomeController:home');
    $app->get('/a-eletronica-marquinho', '\App\Controller\HomeController:a_eletronica_marquinho');
    $app->get('/produtos', '\App\Controller\HomeController:produtos');
    $app->get('/servicos', '\App\Controller\HomeController:servicos');
    $app->get('/blog', '\App\Controller\HomeController:blog');
    $app->get('/fale-conosco', '\App\Controller\HomeController:fale_conosco');
    $app->get('/blog/{any}', '\App\Controller\HomeController:blog_detalhe');
    $app->get('/{any}', '\App\Controller\HomeController:servico_detalhe');        
};
