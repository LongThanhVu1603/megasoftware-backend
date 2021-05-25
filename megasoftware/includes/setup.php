<?php
if(!function_exists('mega_theme_setup')){
    function mega_theme_setup(){
        //Text Domain Translate
        $lang_folder = get_theme_file_path('/language' ); //khai báo địa chỉ folder dịch
        load_theme_textdomain('mega', $lang_folder);    //khai báo nơi cần dịch

        //Title Tag
        add_theme_support('title-tag' );
        add_theme_support(
            'html5',
            array('comment-list','comment-form','search-form','gallery','caption')
        );

        //Menu
        register_nav_menu( 'mega_primary-menu', __('Primary Menu', 'mage'));

        //Post Thumbnail (Ảnh Đại Diện Bài Viết)
        add_theme_support('post-thumbnails');

        // Link RSS
        add_theme_support('automatic-feed-link');

        //Img sizes
        add_image_size('grid_post_thumbnail', 350, 200, true);
        add_image_size('list_post_thumbnail', 660, 424, true);
        add_image_size('author_post_thumbnail', 75 , 75, true);
    }
}