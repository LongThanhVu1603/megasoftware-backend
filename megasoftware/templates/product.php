<?php
/*
Template Name: Product
 */
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Section 1 -->
    <div class="container-fluid bg-intro-section-one">
        <div class="intro-head">
            <h1> Sản Phẩm Của Chúng Tôi </h1>
            <h3> <a href="/megasoft">Trang chủ</a> / Sản Phẩm </h3>
        </div>
    </div>
    <!-- End Section 1 -->

    <!-- Section 2-->
    <div class="container-fluid bg-section-two">
        <div class="container">
            <div class="section-two-product-head">
                <h1 class="section-two-product-head_h1"> Sản Phẩm </h1>
                <h3 class="section-two-product-head_h3"> Các lĩnh vực hoạt động của MEGASOFT tập trung vào 3 nhóm sản phẩm chủ lực, mang đến cho người dùng những trải nghiệm phong phú và đơn giản hơn.</h3>
            </div>
            <div class="row pb-lg-5">
                <div class="col-lg-4 col-md-6">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2478.png" alt="" height="360px" width="360px" class="section-two-img">
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2479.png" alt="" height="360px" width="360px" class="section-two-img">
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2480.png" alt="" height="360px" width="360px" class="section-two-img">
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 2-->
</body>
</html>
<?php
get_footer();
?>