<?php
/**
 * Template Name: Homepage Template
 *
 * Template for displaying a homepage.
 *
 * @package understrap
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body>
<div class="container frontpage">
	<div class="row frontpage-copy">
		<div class="col-12 text-center">
		<?php
			$args = array(
			'post_type'=> 'post',
			'orderby'    => 'ID',
			'post_status' => 'publish',
			'order'    => 'DESC',
			'posts_per_page' => -1 // this will retrive all the post that is published 
			);
			$result = new WP_Query( $args );
			if ( $result-> have_posts() ) : ?>
				<?php while ( $result->have_posts() ) : $result->the_post(); ?>
				<?php the_post_thumbnail(); ?>
				<?php the_content(); ?>   
				<?php endwhile; ?>
				<?php endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>
</body>
</html>
