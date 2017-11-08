<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>


<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-main.png" class="img-fluid"></div>



<div class="container-fluid text-center pt-5">

<hr>
<div class="col-container ">
<div id="main" class="col pt-2">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">
				
				<?php the_content(); ?>
                
                <?php comments_template(); ?>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>
				
				<?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?>
			
				<?php posted_on(); ?>

			</div>
			
			<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>
			
		</article>



	<?php endwhile; endif; ?>

    </div>
    </div>
</div>

<?php get_footer(); ?>