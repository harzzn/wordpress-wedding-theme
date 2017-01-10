<?php
/*
	Template Name: wpwt-wedding-party
*/
?>

<?php get_header(); ?>

<?php

$categories = array(
	get_cat_ID( 'Maids of Honour' ),
	get_cat_ID( 'Best Men' ),
	get_cat_ID( 'Slave of Honour' ),
);

foreach ( $categories as $cat ) :

	if ( 0 === $cat ) {
		continue;
	}

	query_posts( "post_type=wpwt_member&cat=$cat" );

	if ( have_posts() ) : ?>

		<section class="col-lg-10 col-lg-offset-1 text-center">
			<div class="col-xs-12">
				<h2 class="mb20"><?php echo get_cat_name( $cat ); ?></h2>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					global $wp_query;
					$class = 'col-sm-4';

					// TODO: need to take into account more cases
					if ( 1 === $wp_query->post_count ) {
						$class .= ' col-sm-offset-4';
					}
				?>

				<div class="<?php echo $class; ?>">
					<h5><?php the_title(); ?></h5>

					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive center-block img-round maids-of-honour__avatar' ) ); ?>
					<?php endif; ?>

					<div class="maids-of-honour__description center-block">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>

		</section>

	<?php endif; ?>

<?php endforeach; ?>

<?php get_footer(); ?>