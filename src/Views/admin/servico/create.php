<?=$this->fetch('commons/header.php', $data)?>
<main>
	<section class="dashboard">
		<div class="container">
			<div class="conteudo">
				<h2 class="titulo">
					<i class="fas fa-wrench"></i>Serviços - Novo
				</h2>
				<div class="form">
					<form action="#" method="POST" enctype="multipart/form-data">
						<div class="campo title">
							<label>Título*</label>
							<input type="text" name="titulo" required>
						</div>
						<div class="campo data">
							<label>Data*</label>
							<input type="date" name="data" required>
						</div>
						<div class="campo">
							<label>Descrição*</label>
							<textarea name="descricao" id="descricao" required></textarea>
						</div>
						<div class="campo">
							<label>Imagem Principal*</label>
							<input type="file" name="imagem_principal" required accept="image/*">
						</div>
						<div class="campo">
							<label>Galeria de Imagens</label>
							<input type="file" name="galeria_imagens[]" multiple accept="image/*">
						</div>
						<div class="campo">
							<label>Ativo*</label>
							<select name="ativo" required>
								<option value="s">Sim</option>
								<option value="n">Não</option>
							</select>
						</div>
						<div class="campo">
							<input type="submit" value="Salvar" class="btn">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace('descricao')
</script>
<?=$this->fetch('commons/footer.php', $data)?>