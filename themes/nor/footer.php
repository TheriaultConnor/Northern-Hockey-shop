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
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
