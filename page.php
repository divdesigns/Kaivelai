<?php
get_header();
?>
<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-main.png" class="img-fluid"></div>
<div class="container-fluid text-center pt-2">
<hr>
<div class="col-container ">
<div id="main" class="col">

<?php

 if (have_posts()) :
		while (have_posts()) : the_post(); ?>

<section>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			<?php the_content(); ?><hr>
</section>

		<?php endwhile;
	else :
		echo   '<p>No content found</p>';
	endif;

?>

</div>



</div>
</div>
<?php
get_footer();
?>
