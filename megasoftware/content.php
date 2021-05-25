<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
	
    <!-- Section 1 -->
			<div class="container-fluid bg-intro-section-one">
                    <div class="intro-head">
                        <h1> Tin Tức Từ Megasoft </h1>
                        <h3> <a href="/megasoft">Trang chủ</a> /<a href="/megasoft/tin-tuc/"> Tin Tức </a></h3>
                    </div>
            </div>
    <!-- End Section 1 -->
	
			<div class="container">
				<div class="entry-thumbnails">
					<?php mega_thumbnail('grid_post_thumbnail'); ?>
				</div>
				<div class="entry-header">
					<?php mega_entry_header(); ?>
					<?php mega_entry_meta(); ?>
				</div>
				<div class="entry-content">
					<?php mega_entry_content(); ?>
					<?php ( is_single() ? mega_entry_tag() : '' ); ?>
				</div>	
			</div>	
</article>
