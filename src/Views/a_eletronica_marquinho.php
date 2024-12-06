<?=$this->fetch('commons/header.php', $data)?>
<?=$this->fetch('commons/caminho.php', $data)?>
<section class="quem_somos_2">
	<div class="container">
		<div class="conteudo">
			<div class="texto">
				<h2 class="titulo">Quem somos</h2>
				<div class="descricao-visivel">
					<p>Desde 1989, a Eletrônica Marquinho é a referência em som automotivo em Brasília. Com mais de 30 anos de experiência no mercado, somos especializados em sistemas de áudio automotivo, oferecendo uma ampla variedade de serviços, desde a instalação de alto-falantes e amplificadores até ajustes completos de som e acessórios. Nosso compromisso é proporcionar qualidade e excelência em cada atendimento, garantindo que você desfrute de um som impecável enquanto dirige.</p>

					<p>Orgulhosamente, somos assistência técnica autorizada das marcas Wings e Roadstar, atendendo com exclusividade os equipamentos dessas marcas reconhecidas. Nossa equipe altamente treinada segue os mais rigorosos padrões de qualidade, usando peças originais e técnicas especializadas para garantir que o seu sistema de som automotivo funcione com o máximo desempenho e durabilidade. Com tecnologia de ponta e diagnósticos precisos, entregamos resultados que superam as expectativas dos nossos clientes.</p>

					<p>Na Eletrônica Marquinho, acreditamos que um bom sistema de som é essencial para o conforto e prazer de quem está ao volante. Nosso atendimento personalizado, aliado ao conhecimento profundo dos produtos e tendências do mercado, faz com que cada instalação seja única. Venha conhecer nossa loja e descubra como podemos transformar a experiência sonora do seu veículo com inovação e profissionalismo incomparáveis!</p>
				</div>
			</div>
			<div class="itens">
				<div class="item">
					<div class="img">
						<img src="<?=URL_BASE?>resources/imagens/missao.png">
					</div>
					<div class="info">
						<h3>Missão</h3>
						<p>Proporcionar experiências sonoras de alta qualidade, garantindo satisfação e excelência em serviços de som automotivo e assistência técnica especializada.</p>
					</div>
				</div>
				<div class="item">
					<div class="img">
						<img src="<?=URL_BASE?>resources/imagens/visao.png">
					</div>
					<div class="info">
						<h3>Visão</h3>
						<p>Ser a referência em som automotivo e assistência técnica em Brasília, oferecendo soluções inovadoras e confiáveis que superem as expectativas dos clientes.</p>
					</div>
				</div>
				<div class="item">
					<div class="img">
						<img src="<?=URL_BASE?>resources/imagens/valores.png">
					</div>
					<div class="info">
						<h3>Valores</h3>
						<p>Qualidade, Inovação, Confiança, Atendimento Personalizado e Sustentabilidade.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contador">
	<div class="container">
		<div class="conteudo">
			<div class="item">
				<div class="topo">
					<i class="fas fa-home"></i>
					<p class="counter">1245</p>
				</div>
				<div class="descricao">
					<p>Serviços Realizados</p>
				</div>
			</div>
			<div class="item">
				<div class="topo">
					<i class="fas fa-thumbs-up"></i>
					<p class="counter">1245</p>
				</div>
				<div class="descricao">
					<p>Clientes Felizes</p>
				</div>
			</div>
			<div class="item">
				<div class="topo">
					<i class="fas fa-users"></i>
					<p class="counter">1245</p>
				</div>
				<div class="descricao">
					<p>Projetos Completos</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?=$this->fetch('commons/avaliacoes.php', $data)?>
<?=$this->fetch('commons/footer.php', $data)?>