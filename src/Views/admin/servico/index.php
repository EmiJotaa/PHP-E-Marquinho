<?=$this->fetch('commons/header.php', $data)?>
<main>
	<section class="dashboard">
		<div class="container">
			<div class="conteudo">
				<h2 class="titulo">
					<i class="fas fa-wrench"></i>Serviços
				</h2>
				<div class="topo">
					<div class="botoes">
						<a href="<?=URL_BASE?>admin-servicos-create" class="btn">Cadastrar Novo</a>
					</div>
					<div class="pesquisa">
						<form action="#" method="GET">
							<input type="text" name="search" value="<?=(isset($_GET['search'])) ? $_GET['search'] : ''?>" placeholder="Titulo do item...">
							<input type="submit" value="Pesquisar" class="btn">
						</form>
					</div>
				</div>
				<div class="lista">
					<table>
						<thead>
							<tr>
								<td>ID</td>
								<td>AÇÕES</td>
								<td>TÍTULO</td>
								<td>DATA DE CADASTRO</td>
							</tr>
						</thead>
						<tbody>
							<?php						      
						    if($data['informacoes']['listagem']){
						        foreach ($data['informacoes']['listagem'] as $servico) { ?>
						        	<tr>
										<td><?=$servico['id']?></td>
										<td>
											<a href="<?=URL_BASE?>admin-servicos-edit/<?=$servico['id']?>"><i class="far fa-edit"></i></a>
											<a href="<?=URL_BASE?>admin-servicos-delete/<?=$servico['id']?>"><i class="fas fa-trash-alt"></i></a>
										</td>
										<td><?=$servico['titulo']?></td>
										<td><?= date('d/m/Y', strtotime($servico['data_cadastro']))?></td>
									</tr>		
						    <?php   }
						    }
							?>
						</tbody>
					</table>
				</div>
				<div class="paginacao">
					<?php if(isset($data['informacoes']['paginaAnterior']) && $data['informacoes']['paginaAnterior'] !== false){ ?>
						<a href="<?=$data['informacoes']['paginaAnterior']?>"><i class="fas fa-arrow-left"></i></a>
					<?php }?>
									
					<a><?=$data['informacoes']['paginaAtual']?></a>
				 
					<?php if(isset($data['informacoes']['proximaPagina']) && $data['informacoes']['proximaPagina'] !== false){ ?>
						<a href="<?=$data['informacoes']['proximaPagina']?>"><i class="fas fa-arrow-right"></i></a>
					<?php }?>
				</div>
			</div>
		</div>
	</section>
</main>
<?=$this->fetch('commons/footer.php', $data)?>