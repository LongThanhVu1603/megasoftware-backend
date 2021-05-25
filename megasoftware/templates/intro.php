<?php
/*
Template Name: Intro
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
    <!-- Container -->

        <!-- Section 1 -->
        <div class="container-fluid bg-intro-section-one">
                    <div class="intro-head">
                        <h1> Giới Thiệu Về Chúng Tôi </h1>
                        <h3> <a href="/megasoft">Trang chủ</a> / Giới Thiệu </h3>
                    </div>
            </div>
        <!-- End Section 1 -->
        
        <!-- Section 2 -->
            <div class="container">
                <div class="intro-head-two">
                    <h1> Tại Sao Chọn Megasoft ???</h1>
                    <h4>Sứ mệnh của Megasoft là đem đến chất lượng, giá trị cho mọi khách hàng của Megasoft thông qua những sản phẩm với công nghệ đột phá.</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xypzmu5mMPY?erl=0" allowfullscreen ></iframe>
                    </div>
                    <h3 style="text-align: left;">Với đội ngũ lãnh đạo 15 năm kinh nghiệm trong lĩnh vực CNTT, từng phụ trách quản lý ở các tập đoàn lớn như Huawei, Ericsson, Viettel, Vietnam Airlines… Megasoft luôn khẳng định được chất lượng và uy tín trong từng dự án với khách hàng của mình. Khách hàng thường xuyên của Megasoft không chỉ là những tập đoàn lớn tại Vietnam như Mobifone, Viettel, Vietnamobile, TH Milk … mà còn có những khách hàng quốc tế ở Mỹ, Nhật Bản, Đức.
                        Bước sang lĩnh vực giáo dục Megasoft luôn lấy chữ tâm hàng đầu với tinh thần Make Great Things, mong muốn những phần mềm của Megasoft là sản phẩm của trí tuệ Việt, được công nhận và phục vụ hàng triệu trẻ em trên thế giới, đem đến sự an tâm cho mỗi gia đình nói riêng và xã hội nói chung, không chỉ góp sức cho sự phát triển của nền giáo dục nước nhà mà còn vươn xa ra thế giới.</h3>
                </div>
            </div>
        <!-- End Section 2 -->

        <!-- Section 5-->
        <div class="container">
            <div class="section-two-product-head">
                <h1 class="section-two-product-head_h1"> Đối Tác </h1>
            </div>
            <div class="row mt-lg-5 pb-lg-5">
                <div class="col-xl-3 col-md-6 ml-sm-auto text-center mt-sm-5 mt-md-5 col-sm-12">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2500.png" alt="" height="264px" width="264px" class="section-five-img">
                </div>
                <div class="col-xl-3 col-md-6 ml-sm-auto text-center mt-sm-5 mt-md-5 col-sm-12">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2501.png" alt="" height="264px" width="264px" class="section-five-img">
                </div>
                <div class="col-xl-3 col-md-6 ml-sm-auto text-center mt-sm-5 mt-md-5 col-sm-12">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2502.png" alt="" height="264px" width="264px" class="section-five-img">
                </div>
                <div class="col-xl-3 col-md-6 ml-sm-auto text-center mt-sm-5 mt-md-5 col-sm-12">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2503.png" alt="" height="264px" width="264px" class="section-five-img">
                </div>
            </div>
        </div>
</body>
</html>
<?php
get_footer();
?>