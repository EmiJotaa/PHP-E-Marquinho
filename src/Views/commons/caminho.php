<section class="caminho">
	<div class="container">
		<div class="conteudo">
			<h1><?=$data['informacoes']['title']?></h1>
			<ul>
				<li>
					<a href="<?=URL_BASE?>">Home</a>
				</li>
				<?php
				if( isset($data['informacoes']['caminho']) && count($data['informacoes']['caminho']) > 0)
				{
					foreach ($data['informacoes']['caminho'] as $value){?>
						<li>
							<a href="<?=URL_BASE?><?=$value['link']?>"><?=$value['nome']?></a>
						</li>	
				<?php }
				}
				?>
			</ul>
		</div>
	</div>
</section>
