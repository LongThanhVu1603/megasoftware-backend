<?php get_header(); ?>
	<div class="container news">
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<?php get_template_part('templates/test', get_post_format()); ?>

				<?php endwhile ?>
				<?php mega_pagination();?>
				<?php else: ?>
					<?php get_template_part('content', 'none'); ?>
				<?php endif; ?>
	</div>
	

<?php get_footer(); ?> 