<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Northern_Hockey
 */

get_header();
?>

	<main id="primary" class="site-main">
	<div class="grid-container">
  <div class="grid-x grid-margin-x">
   
  

		<?php if ( have_posts() ) : ?>
			<div class="large-12 medium-12 small-12">
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );?>
				<hr>
				<?php the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			</div>
			<div class="large-12 medium-12 small-12">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
</div>
</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
