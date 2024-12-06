    





    <?php
        if (isset($_SESSION) && isset($_SESSION['alerta_mensagem']) && $_SESSION['alerta_mensagem'] !== NULL) {
    ?>

    <section class="alerta <?=$_SESSION['alerta_mensagem']['classe']?>">
        <div class="container">
            <div class="conteudo">
                <h3><?=$_SESSION['alerta_mensagem']['titulo']?></h3>
                <p><?=$_SESSION['alerta_mensagem']['mensagem']?></p>
                <a class="btn fechar">OK</a>
            </div>
        </div>
    </section>

    <?php
        $_SESSION['alerta_mensagem'] = NULL;
        unset($_SESSION['alerta_mensagem']);
        }
    ?>


  <script src="<?=URL_BASE?>resources/js/jquery/jquery.min.js"></script>
  <script src="<?=URL_BASE?>resources/js/painel.js"></script>
</body>
</html>