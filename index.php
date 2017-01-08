<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php
		if ( class_exists( 'Dynamic_Featured_Image' ) ) {
			global $dynamic_featured_image;
			$featured_images = $dynamic_featured_image->get_featured_images();
		}
	?>

	<?php if ( has_post_thumbnail() || ! empty( $featured_images ) ) : ?>

		<section class="col-xs-10 col-xs-offset-1">

			<?php if ( ! empty( $featured_images ) ) : ?>
				<div class="owl-carousel owl-theme">
			<?php endif; ?>

			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
			<?php endif; ?>

			<?php foreach ( $featured_images as $featured_image ) : ?>
				<div class="item"><img src="<?php echo $featured_image['full']; ?>" class="img-responsive"></div>
			<?php endforeach; ?>

			<?php if ( ! empty( $featured_images ) ) : ?>
				</div>
			<?php endif; ?>
		</section>

	<?php endif; ?>

	<section class="col-xs-10 col-xs-offset-1 text-center">
		<?php the_content(); ?>
	</section>

	<?php
		$accommodation_name = get_post_meta( get_the_ID(), 'wpwt_accommodation_name', true );
		$accommodation_map_url = get_post_meta( get_the_ID(), 'wpwt_accommodation_map_url', true );
	?>

	<?php if ( ! empty( $accommodation_name ) && ! empty( $accommodation_map_url ) ) : ?>
		<section class="col-xs-10 col-xs-offset-1 text-center">
			<h2 class="mb40"><?php echo $accommodation_name; ?></h2>
			<iframe src="<?php echo $accommodation_map_url; ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>
	<?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>