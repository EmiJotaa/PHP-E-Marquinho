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
<body class="painel-login">
    <section class="login">
       	<div class="container">
        	<div class="conteudo">
        		<div class="logo">
                    <a href="<?=URL_BASE?>">
                        <img src="<?=URL_BASE?>resources/imagens/logo.png">
                   	</a>
               	</div>
                <form action="<?=URL_BASE?>login" method="POST" class="form-ajax" enctype="multpart/form-data">
                	<legend>Faça login no painel</legend>
                	<div class="campo usuario">
						<input type="text" name="usuario" placeholder="Usuário" required>
					</div>
					<div class="campo senha">
						<input type="password" name="senha" placeholder="Senha" required>
					</div>
					<div class="campo botao">
						<button type="submit" class="btn">Entrar</button>
					</div>
                </form>
        	</div>
        </div>
    </section>

	<footer>
		<div class="copyright">
			<div class="container">
				<div class="conteudo">
					<p>Todos direitos reservados © <?=date('Y')?></p>
					<p>Desenvolvido por <a href="#">Marquin.Do.Som<i class="fab fa-instagram"></i></a></p>
				</div>
			</div>
		</div>
	</footer>
    <script src="<?=URL_BASE?>resources/js/jquery/jquery.min.js"></script>
	<script src="<?=URL_BASE?>resources/js/painel.js"></script>
</body>
</html>