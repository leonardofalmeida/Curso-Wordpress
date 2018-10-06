<?php get_header(); ?>

<!--Imagem do header, o source é a imagem do uploado feito no wordpress, e é pego o height e o width dessa imagem-->
<?php get_template_part('image-header'); ?>

<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">
					<div class="404 col-md-9">
						<header>
							<h1>Página não encontrada</h1>
							<p>Infelizmente, a página que você encontrou não existe :(</p>
						</header>

						<div class="erro">
							<p>Que tal fazer uma pesquisa?</p>
							<?php get_search_form(); ?>
							<h2>Ultimos posts</h2>
							<p>Veja os ultimos conteudos</p>
							<?php the_widget('WP_Widget_Recent_Posts'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?php get_footer(); ?>
