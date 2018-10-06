<?php get_header(); ?>

<!--Imagem do header, o source é a imagem do uploado feito no wordpress, e é pego o height e o width dessa imagem-->
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="conteudo">
	<main>
		<section class="meio container">
			<div class="row">
				<div class="noticias col-md-9">
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
		</section>
	</main>
</div>
<?php get_footer(); ?>
