<?=$this->fetch('commons/header.php', $data)?>
<main>
	<section class="dashboard">
		<div class="container">
			<div class="conteudo">
				<h2 class="titulo">
					<i class="fas fa-gift"></i>Produtos - Novo
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
							<label>URL Produto</label>
							<input type="text" name="link_produto" required>
						</div>
						<div class="campo">
							<label>Imagem Principal*</label>
							<input type="file" name="imagem_principal" required accept="image/*">
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
<?=$this->fetch('commons/footer.php', $data)?>