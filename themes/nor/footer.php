<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Northern_Hockey
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="grid-x site-info">
			<div class="cell large 4"><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nor' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'nor' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'nor' ), 'nor', '<a href="http://connortheriault.ca/">Connor Theriault</a>' );
				?></div>
				<div class="large-8"></div>
				<div class="footer-menu large-12"><ul>
				<?php
				wp_nav_menu( array( 
					'theme_location' => 'my-custom-menu', 
					'container_class' => 'custom-menu-class' ) ); 
				?>
				</ul></div>


				<?php
$args = array(  
  'post_type' => 'any',
  'post_status' => 'publish',
  'posts_per_page' => 3,
  'orderby' => 'date',
  'order'   => 'DESC',
);

$test_query = new WP_Query($args);

if($test_query->have_posts()) {
    while ($test_query->have_posts()) {
      $test_query->the_post();
      ?>
      <h3 id="post-content"><a href="<?php the_permalink(); ?>"><?php the_title(); ?>  </a></h3>

    
      
      
     <?php
      ?>

      <div class="post-content-text"> <?php the_excerpt(); ?> </div> <?php
    }
}
    ?>



		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
