<?php
/**
 * The template for displaying front page
 *
 * This is the template that displays the front page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Northern_Hockey
 */

get_header();
?>

	<main id="primary " class="site-main">
	
	<img src="http://theriault100976473.local/wp-content/uploads/2022/02/Image-1.png" alt="">
  <?php


  ?>

<div class="large-12 cell"> <h2>Popular Departments</h2><hr> </div>

<div class="grid-container">
  <div class="grid-x grid-margin-x small-up-2 medium-up-3">
  <div class="cell">
      <div class="card" id="department-card">
        <img src="http://theriault100976473.local/wp-content/uploads/2022/02/stick1.jpg">
        <div class="card-section">
          <h4 class="department-card-header">Hockey Sticks</h4>
          
        </div>
      </div>
    </div>
    <div class="cell">
      <div class="card" id="department-card">
        <img src="http://theriault100976473.local/wp-content/uploads/2022/02/stick1.jpg">
        <div class="card-section">
          <h4 class="department-card-header">Hockey Sticks</h4>
          
        </div>
      </div>
    </div>
    <div class="cell">
      <div class="card" id="department-card">
        <img src="http://theriault100976473.local/wp-content/uploads/2022/02/stick1.jpg">
        <div class="card-section">
          <h4 class="department-card-header">Hockey Sticks</h4>
          
        </div>
      </div>
    </div>
  </div>
</div>
		

	</main><!-- #main -->

<?php

get_footer();
