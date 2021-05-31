<?php
/*
Template Name: test
 */
?>

<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
<!-- Section 1 -->
<div class="container-fluid bg-intro-section-one">
    <div class="intro-head">
        <h1> Tin Tức Từ Megasoft </h1>
        <h3> <a href="/megasoft">Trang chủ</a> /<a href="/megasoft/tin-tuc/"> Tin Tức </a></h3>
    </div>

<?php 
    $args = array(
        'post_type' => array( 'post' ),
        'posts_per_page' => 3,
        'paged' => $paged,
        'page' => $paged
        ); 
        // The Query
        $the_query = new WP_Query( $args );
        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<a>'. mega_thumbnail('medium') . '</a>';
                echo mega_entry_header();
                echo '<h1>'. get_the_title() . '</h1>';
                the_excerpt();
            }
            /* Restore original Post Data */
            wp_reset_postdata();
    } else {
            // no posts found
    }
?>         
</div>
</article>
<?php
						if (function_exists('custom_pagination')) {
							custom_pagination($the_query->max_num_pages,"",$paged);
						}
?>
    <!-- End Section 1 -->
