<?php get_header(); ?>
	<div class="content">
		<div class="main content">
			<?php 
                _e('<h2> 404 Not Found </h2>','mega');
                _e('<p> The article you were looking for was not found, but maybe try looking again !</p>', 'mega');
                get_search_form();

                _e('<h3> Content categories: </h3>', 'mega');
                echo '<div class="404-cat-list">';
                    wp_list_categories( array('title_li' =>'') );
                echo '</div>';

                _e('Tag Cloud', 'mega');
                wp_tag_cloud();
            ?>
		</div>
	</div>

<?php get_footer(); ?>