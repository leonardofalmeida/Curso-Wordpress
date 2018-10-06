<?php 
/*
Template Name: Páginas Gerais
*/
?>

<?php get_header(); ?>

<!--Imagem do header, o source é a imagem do uploado feito no wordpress, e é pego o height e o width dessa imagem-->
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="conteudo-wrapper">
	<main>
		<div class="conteudo">
			<div class="container">
				<div id="<?php the_ID(); ?>" <?php post_class(array('post-formato-padrao')); ?>> 
					<?php 
						// Se houver algum post
						if(have_posts()) :
							// Enquanto houver algum post, chame o post de determinada maneira
							while (have_posts()) : the_post();
					?>
						<h1><?php the_title(); ?></h1>
						<p>Autor: <?php the_author(); ?></p>
						<p><?php the_content(); ?></p>
						<p>ESTOU SENDO USADO!!!!!!!!!!!</p>
					<?php 
					endwhile;
					else:
					 ?>
						<p>Nao tem nada ainda pra mostrar</p>
					<?php 
					endif;
					?>	
				</div>
			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>
?>