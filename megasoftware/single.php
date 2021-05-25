<?php get_header(); ?>
	<div class="content">
		<div class="main-content">
			<?php if (have_posts() ) : while( have_posts() ) : the_post(); ?>
			<?php get_template_part('content', get_post_format() ); ?>
				<div class=" container author-share">
					<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%3A8888%2FDoan%2Fnews-detail.html&layout=button&size=large&width=87&height=28&appId" width="87" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
					<?php get_template_part('author-bio');?>
				</div>
				
				<div class="container">
					<div class="boder-comment">
						<?php comments_template(); ?>
					</div>
				</div>
				
			<?php endwhile ?>
			<?php else: ?>
				<?php get_template_part('content', 'none'); ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>