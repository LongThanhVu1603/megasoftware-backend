<?php 
//Define
// define('THEM')
define('THEME_URL', get_stylesheet_directory( ));
define('THEME_URI', get_theme_file_uri( ));
define('THEME_PATH', get_theme_file_path( ));
define('CORE',THEME_URL ."/core");

//Require
    require_once(CORE ."/init.php");

//Include
    include('includes/enqueue.php');
    include('includes/setup.php');
    include('includes/class-mega-custom-nav-walker.php');

//Hook
    add_action('wp_enqueue_scripts', 'mega_enqueue');
    add_action('init','mega_theme_setup');

// Đưa về trình soạn thảo cũ của WP
    // add_filter('use_block_editor_for_post', '__return_false');

// Logo
    $logo_width  = 300;
    $logo_height = 100;

    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );

// Post Format 
    add_theme_support('post-formats', array(
        'image',
        'video',
        'gallery',
        'quote',
        'link'
    ) );

// Custom BackGround 
    $default_background = array(
        'default-color' => '#fff'
    );
    add_theme_support('custom-background', $default_background );
    
// Slide Bar 
    $sidebar = array(
        'name' => __('Main Sidebar', 'mega'),
        'id' => 'main-sidebar',
        'description' => __('Default sidebar'),
        'class' => 'main-sidebar',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    );
    register_sidebar($sidebar);

//Thiết Lập Chiều Rộng Nội Dung
    if(!isset($content_width)){
        $content_width = 620;
    }

//  Hien Thi Thumbnail Bai Viet (Ảnh Đại Diện Bài Viết)
    if(!function_exists('mega_thumbnail')){
        function mega_thumbnail($size){
            if(!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail($size);?></figure>
            <?php endif; ?>
            <?php }
        }

// Hiện Thị Tiêu Đề Bài Viết
    if(!function_exists('mega_entry_header')){
        function mega_entry_header(){
            ?> 
            <?php if(!is_single() ): ?>
                <h1 class="entry-title"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>" <?php the_title(); ?></a></h1>
            <?php else : ?>
                <h2 class="entry-title"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>" <?php the_title(); ?></a></h2>
            <?php endif; ?>
            <?php }
        }       

// Hiển Thị Tên Tác Giả lấy dữ liệu post
    if(!function_exists('mega_entry_meta')){
        function mega_entry_meta(){
            ?>
                <?php if(!is_page()) : ?>
                        <div class="entry-meta">
                        <?php 
                            printf(__('<span class="author"> Post By %1$s', 'mega'), get_the_author() );
                            printf(__('<span class="date-published"> at %1$s', 'mega'), get_the_date() );
                            printf(__('<span class="category"> in %1$s', 'mega'), get_the_category_list(',') );
                            if(comments_open() ):
                                    echo '<span class="meta-reply">';
                                    comments_popup_link(
                                        __('Leave A Comment', 'mega'),
                                        __('One Comment', 'mega'),
                                        __('% Comment', 'mega'),
                                        __('Read All Comment', 'mega')
                                    );
                                    echo '</span>';
                            endif;
                        ?>
                        </div>
                <?php endif; ?>
            <?php }
        }

//Hiển Thị Nội Dung Bài Viết 
if( !function_exists('mega_entry_content')) {
    function mega_entry_content(){
        if(!is_single() && !is_page() ){
            the_excerpt();
        } else {
            the_content();

            $link_pages = array(
                'before' => __('<p>Page: ', 'mega'),
                'after' => '</p>',
                'nextpagelink' => __('Next Page', 'mega'),
                'previouspagelink' => __('Previous Page', 'mega')
            );
            wp_link_pages($link_pages);
        }
    }
}

//Hiển Thị Tag
if( !function_exists('mega_entry_tag')){
    function mega_entry_tag(){
        if(has_tag() ) :
            echo '<div class="entry-tag">';
            printf( __('Tagged In %1$s', 'mega'), get_the_tag_list('', ',' ));
            echo '</div>';
        endif;
    }
}

///Readmore
function mega_readmore(){
    return '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' .__('...[Read More]', 'mega').'</a>';
}
add_filter('excerpt_more', 'mega_readmore');


// Pagination Phân Trang 

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

    if (empty($pagerange)) {
        $pagerange = 3;
    }

    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if(!$numpages) {
        $numpages = 1;
    }
    }

    $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
    );

    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
        echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
        echo $paginate_links;
    echo "</nav>";
    }

}

// Custom Img Page 
$args = array (
    'default-image' => get_template_directory_uri().'/assets/images/MaskGroup1.png',
    'default-text-color' => '000',
    'width' => 1920,
    'height' => 555,
    'flex-width' => true,
    'flex-height' => true,
);
    add_theme_support('custom-header', $args);