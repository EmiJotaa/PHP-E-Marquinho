<?=$this->fetch('commons/header.php', $data)?>
<main>
	<section class="dashboard">
		<div class="container">
			<div class="conteudo">
				<h2 class="titulo">
					<i class="fas fa-wrench"></i>Serviços - Editar
				</h2>
				<div class="form">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="campo title">
							<label>Título*</label>
							<input type="text" name="titulo" value="<?=$data['informacoes']['servico'][0]['titulo']?>" required>
						</div>
						<div class="campo data">
							<label>Data*</label>
							<input type="date" name="data" value="<?=explode(" ", $data['informacoes']['servico'][0]['data_cadastro'])[0]?>" required>
						</div>
						<div class="campo">
							<label>Descrição*</label>
							<textarea name="descricao" id="descricao" required><?=$data['informacoes']['servico'][0]['descricao']?></textarea>
						</div>
						<div class="campo">
							<label>Imagem Principal</label>
							<input type="file" name="imagem_principal" accept="image/*">
						</div>
						<div class="campo imagens">
							<div class="item">
								<img src="<?=URL_BASE?><?=$data['informacoes']['servico'][0]['imagem_principal']?>">
								<label>
									<input type="checkbox" name="excluir_imagem_principal" value="<?=$data['informacoes']['servico'][0]['imagem_principal']?>">
									Excluir Imagem
								</label>
							</div>
						</div>
						<div class="campo">
							<label>Galeria de Imagens</label>
							<input type="file" name="galeria_imagens[]" multiple accept="image/*">
						</div>
						<?php
						if ($data['informacoes']['galeria'] && count($data['informacoes']['galeria']) > 0) {?>
						<div class="campo imagens">
							<?php
							foreach ($data['informacoes']['galeria'] as $imagem) {?>
							<div class="item">
								<img src="<?=URL_BASE?><?=$imagem['caminho']?>">
								<label>
									<input type="checkbox" name="excluir_imagem_galeria[]" value="<?=$imagem['caminho']?>">
									Excluir Imagem
								</label>
							</div>
							<?php }?>
						</div>
						<?php }?>
						<div class="campo">
							<label>Ativo*</label>
							<select name="ativo" required>
								<option value="s" <?=($data['informacoes']['servico'][0]['status'] === 's') ? 'selected' : '' ?> >Sim</option>
								<option value="n" <?=($data['informacoes']['servico'][0]['status'] === 'n') ? 'selected' : '' ?> >Não</option>
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