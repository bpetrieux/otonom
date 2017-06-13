<?php get_header(); 

?>
<section class="container">
	<div class="single_projet mobile">
		<?php 
		if( get_adjacent_post(false, '', true) ) { 
			previous_post_link('%link', '<div class="arrow-left"></div>');
		} else { 
			$first = new WP_Query('posts_per_page=1&order=DESC'); $first->the_post();
			echo '<a href="' . get_permalink() . '"><div class="arrow-left"></div></a>';
			wp_reset_query();
		}; ?>
		<h1 class="mobile"><?php the_title(); ?></h1>
		<?php   
		if( get_adjacent_post(false, '', false) ) { 
			next_post_link('%link', '<div class="arrow-right"></div>');
		} else { 
			$last = new WP_Query('posts_per_page=1&order=ASC'); $last->the_post();
			echo '<a href="' . get_permalink() . '"><div class="arrow-right"></div></a>';
			wp_reset_query();
		}; ?>
	</div>
	<div class="single_wrap">
		<div class="single_text">
			<div class="single_projet desktop">
				<?php 
				if( get_adjacent_post(false, '', true) ) { 
					previous_post_link('%link', '<div class="arrow-left"></div>');
				} else { 
					$first = new WP_Query('posts_per_page=1&order=DESC'); $first->the_post();
					echo '<a href="' . get_permalink() . '"><div class="arrow-left"></div></a>';
					wp_reset_query();
				}; ?>
				<p>PROJET</p>
				<?php   
				if( get_adjacent_post(false, '', false) ) { 
					next_post_link('%link', '<div class="arrow-right"></div>');
				} else { 
					$last = new WP_Query('posts_per_page=1&order=ASC'); $last->the_post();
					echo '<a href="' . get_permalink() . '"><div class="arrow-right"></div></a>';
					wp_reset_query();
				}; ?>
			</div>
			<h1 class="desktop"><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<span class="btn back "><a href="<?php echo get_site_url(); ?>/portfolio">< RETOUR</a></span>
			
		</div>
		<div class="single_img">
<?php if( have_rows('autres_images') ): ?>



	<?php while( have_rows('autres_images') ): the_row(); 

		// vars
		$image = get_sub_field('image');


		?>



			<?php if( $image ): ?>
				
			<?php endif; ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

			
	<?php endwhile; ?>

	

<?php endif; ?>

			
			<?php
			$args = array(
	//'posts_per_page' => 4, // How many items to display
	'post__not_in'   => array( get_the_ID() ), // Exclude current post
	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
	);

			$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
			$cats_ids = array();  
			foreach( $cats as $wpex_related_cat ) {
				$cats_ids[] = $wpex_related_cat->term_id; 
			}
			if ( ! empty( $cats_ids ) ) {
				$args['category__in'] = $cats_ids;
			}

	

			
			$wpex_query = new wp_query( $args );
			

$categories = get_categories( $wpex_query );
$total = $wpex_query->posts ;

if (! empty ($total)){
			 ?><div class="container related desktop"> <?php }
			foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
			
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_post_thumbnail(); ?></a>
			<?php
			endforeach;

			wp_reset_postdata(); ?>

		</div>
	</div>
</div>

</section>

<?php get_footer(); ?>


