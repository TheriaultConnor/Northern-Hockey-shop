<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
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

	<main id="primary" class="site-main">
	
<div class="grid-container">
<div class="grid-x grid-margin-x">

<div class="cell large-4"></div>
    <div class="cell large-4"><h1 class="h1-about" >Contact Us</h1></div>
	<div class="cell large-4"></div>
	<div class="cell large-12"><hr></div>

<div class="form-container">
<form>

<label for="fname">First Name</label>
<input type="text" id="fname" name="firstname" placeholder="Your name..">

<label for="lname">Last Name</label>
<input type="text" id="lname" name="lastname" placeholder="Your last name..">

<label for="lname">Email</label>
<input type="text" id="Email" name="lastname" placeholder="Your Email..">

<label for="subject">Subject</label>
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

<input type="submit" value="Submit">

</form>
</div>

	
</div>
</div>
	</main><!-- #main -->

<?php

get_footer();