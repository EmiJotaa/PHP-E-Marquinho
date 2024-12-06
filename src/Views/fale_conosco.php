<?=$this->fetch('commons/header.php', $data)?>
<?=$this->fetch('commons/caminho.php', $data)?>
<section class="fale-conosco">
	<div class="container">
		<div class=" conteudo">
			<div class="form">
				<h2 class="titulo">Nos envie uma mensagem...</h2>
				<p>Preencha o formulário e receba uma proposta personalizada para o seu projeto. Atendimento rápido, transparente e adaptado ao seu orçamento.</p>
				<form action="#" class="form-ajax" method="POST" enctype="multpart/form-data">
					<div class="campo nome">
						<input type="text" name="nome" placeholder="Nome" required>
					</div>
					<div class="campo telefone">
						<input type="text" name="telefone" placeholder="Telefone" required>
					</div>
					<div class="campo email">
						<input type="text" name="email" placeholder="E-mail" required>
					</div>
					<div class="campo assunto">
						<input type="text" name="assunto" placeholder="Assunto" required>
					</div>
					<div class="campo mensagem">
						<p>Descreva abaixo com detalhes:</p>
						<textarea placeholder="Mensagem" required></textarea>
					</div>
					<div class="campo botao">
						<button type="submit" class="btn">Solicitar Orçamento</button>
					</div>
				</form>
			</div>
			<div class="mapa">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d959.8955160166028!2d-47.88971723037101!3d-15.773233408448254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b1ea666eadd%3A0x6f1427f30078ce21!2sEletr%C3%B4nica%20Marquinho%20Asa%20Norte!5e0!3m2!1spt-BR!2sbr!4v1731522934953!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section>



<?=$this->fetch('commons/footer.php', $data)?>