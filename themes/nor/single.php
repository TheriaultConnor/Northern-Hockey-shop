<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Northern_Hockey
 */

get_header(); ?>
  
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <div class="grid-container">
  <div class="grid-x grid-margin-x">

  
  <div class="cell large-12 medium-12 small-12"><h1>	<?php echo get_the_title(  );  ?></h1></div>
  <div class="cell large-12 medium-12 small-12"><hr></div>
  <div class="cell large-8"></div>  <div class="cell large-4"><?php echo get_the_date(); echo the_modified_author()?></div>
  

	<div class="cell large-12">	<?php echo get_the_content();  ?></div>

    
    <div class="cell large-12"><hr></div>
  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
  
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( 'template-parts/content.php', get_post_type() );
  
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
  
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
  
        // End the loop.
        endwhile;
        ?>
        </div>
        </div>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
  
<?php get_footer(); ?>


