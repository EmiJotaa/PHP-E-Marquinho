<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>

    <meta name="title" content="">
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="url" content="<?=URL_BASE?>" />
    
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=URL_BASE?>" />
    <meta property="og:image" content="" />
    <meta property="og:image:alt" content="" />

    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon" />

    <title><?=$data['informacoes']['titleHeader']?></title>

    <link href="<?=URL_BASE?>resources/css/painel.css?v=<?=time()?>" rel="stylesheet"/>
</head>
<body class="white">
    <header>
        <div class="container">
            <div class="conteudo">
                <div class="right">
                    <div class="usuario">
                        <p>Marco Júnior</p>
                        <i class="fas fa-caret-down"></i>
                        <div class="foto">
                            <img src="<?=URL_BASE?>resources/imagens/3por4.png">
                        </div>
                        <ul class="submenu">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Configurações</a></li>
                            <li><a href="<?=URL_BASE?>logout">Sair</a></li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn-nav">
                    <i class="fas fa-bars-staggered"></i>
                </a>
                <div class="nav">
                    <div class="top">
                        <div class="logo">
                            <img src="<?=URL_BASE?>resources/imagens/logo.png">
                        </div>
                        <ul>
                            <li class="<?=($data['informacoes']['menuActive'] === 'dashboard') ? 'active' : '' ?>"><a href="<?=URL_BASE?>admin"><i class="fas fa-chart-area"></i>Dashboard</a></li>
                        </ul>
                        <p>Conteúdo</p>
                        <ul>
                            <li class="<?=($data['informacoes']['menuActive'] === 'produtos') ? 'active' : '' ?>"><a href="<?=URL_BASE?>admin-produtos"><i class="fas fa-gift"></i>Produtos</a></li>
                            <li class="<?=($data['informacoes']['menuActive'] === 'servicos') ? 'active' : '' ?>"><a href="<?=URL_BASE?>admin-servicos"><i class="fas fa-wrench"></i>Serviços</a></li>
                            <li class="<?=($data['informacoes']['menuActive'] === 'blogs') ? 'active' : '' ?>"><a href="<?=URL_BASE?>admin-blogs"><i class="far fa-comments"></i>Blog's</a></li>
                            <li class="<?=($data['informacoes']['menuActive'] === 'recomendacoes') ? 'active' : '' ?>"><a href="<?=URL_BASE?>admin-recomendacoes"><i class="far fa-newspaper"></i>Recomendações</a></li>
                        </ul>
                        <p>Configurações</p>
                        <ul>
                            <li class="<?=($data['informacoes']['menuActive'] === 'usuario') ? 'active' : '' ?>"><a href="<?=URL_BASE?>"><i class="fas fa-user"></i>Usuário</a></li>
                            <li class="<?=($data['informacoes']['menuActive'] === 'site') ? 'active' : '' ?>"><a href="<?=URL_BASE?>"><i class="fas fa-gears"></i>Site</a></li>
                            <li><a href="<?=URL_BASE?>logout"><i class="fas fa-right-from-bracket"></i>Sair</a></li>
                        </ul>    
                    </div>
                    <div class="copy">
                        <p>Todos direitos reservados © <?=date('Y')?></p>
                        <p>Desenvolvido por <a href="#">Marquin.Do.Som<i class="fab fa-instagram"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>