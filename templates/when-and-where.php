<?php
/*
	Template Name: wpwt-when-and-where
*/
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<section class="col-xs-10 col-xs-offset-1 text-center">
		<?php the_content(); ?>
	</section>
<?php endwhile; ?>

<?php query_posts( 'post_type=wpwt_venue' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<section class="col-sm-10 col-sm-offset-1 venues-section">
		<div class="col-md-6">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		<div class="col-md-6">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
			<?php endif; ?>
		</div>
	</section>
<?php endwhile; ?>

<?php get_footer(); ?>