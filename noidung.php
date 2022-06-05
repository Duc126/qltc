<!DOCTYPE html>
<html lang="en">

<head>
    <title>NHÓM 2</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" href="css/css.css">
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!--//fonts-->
</head>
<style>
header{

    /* background-image:url('images/1.jpg'); */
    background: beige;
}
body{
    color:black
}
    </style>
<body>
    <!-- header -->

    </style>
    <div class="banner-top">
        <div class="social-bnr-agileits">
            <ul class="social-icons3">
                <li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
                <li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
                <li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li>
            </ul>
        </div>
        <div class="contact-bnr-w3-agile">
            <ul>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">nhom2@gmail.com</a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>0123456789</li>
                <li class="s-bar">
                    <div class="search">
                        <input class="search_box" type="checkbox" id="search_box">
                        <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                        <div class="search_form">
                            <form action="#" method="post">
                                <input type="search" name="Search" placeholder=" " required=" " />
                                <input type="submit" value="Search">
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="w3_navigation">
        <div class="container" style="display: contents;">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.php" style="margin-left: 130px;">Nhóm <span>2</span>
                            <p class="logo_w3l_agile_caption">Quản Lý Tiệc Cưới</p>
                        </a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--iris">
                        <ul class="nav navbar-nav menu__list" style="margin-right: 60px;">
                            <li class="menu__item menu__item--current"><a href="" class="menu__link">Trang Chủ</a></li>
                            <li class="menu__item"><a href="#about" class="menu__link scroll">Giới Thiệu</a></li>
                            <li class="menu__item"><a href="noidung.php" class="menu__link scroll">Tin Tức</a></li>
                            <li class="menu__item"><a href="#team" class="menu__link scroll">Nhóm 2</a></li>
                            <li class="menu__item"><a href="#gallery" class="menu__link scroll">Khuyến Mãi</a></li>
                            <li class="menu__item"><a href="#rooms" class="menu__link scroll">Các Sảnh</a></li>
                            <li class="menu__item"><a href="#contact" class="menu__link scroll">Liên Hệ Chúng Tôi</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>

        </div>
    </div>
    <header class="masthead">
   
            <div class="container-fluid mt-3 pt-2">
                <h1 class="text-center text-white">Tin Tức</h1>
                <div class="row-items">
                <div class="col-lg-12">
                    <div class="row">
                    <?php
                                      include('db.php');
                $rtl ='rtl';
                $ci= 0;
                $venue = $con->query("SELECT * from new order by id");
                while($row = $venue->fetch_assoc()):
                   
                    $ci++;
                    if($ci < 3){
                        $rtl = '';
                    }else{
                        $rtl = 'rtl';
                    }
                    if($ci == 4){
                        $ci = 0;
                    }
                ?>
                    <div class="col-md-6">
                <div class="card venue-list <?php echo $rtl ?>" data-id="<?php echo $row['id'] ?>">

                        <div id="imagesCarousel_<?php echo $row['id'] ?> card-img-top " class="carousel slide" data-ride="carousel">
                            <?php ?>
                              <div class="carousel-inner">
                              
                          
                                         <div class="carousel-item <?php echo $active ?>">
                                          <img class="d-block w-100" src="<?php echo $fpath.'/'.$v ?>" alt="">
                                        </div>
                                   
                                     <a class="carousel-control-prev" href="#imagesCarousel_<?php echo $row['id'] ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#imagesCarousel_<?php echo $row['id'] ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                        </div>
                                    </div>
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <div>
                                    <h3><b class="filter-txt"><?php echo ucwords($row['fname']) ?></b></h3>
                                    <small><i><?php echo $row['noidung'] ?></i></small>
                                </div>
                                <div>
                                <span class="truncate" style="font-size: inherit;"><small><?php echo ucwords($row['thongtin']) ?></small></span>
                                    <br>
                                <button class="btn btn-primary book-venue align-self-end" type="button" data-id='<?php echo $row['id'] ?>'> <a href ="admin/reservation.php"></a>Book</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <br>
                </div>
                <?php endwhile; ?>
                </div>
                </div>
                </div>
            </div>


<script>
    // $('.card.venue-list').click(function(){
    //     location.href = "index.php?page=view_venue&id="+$(this).attr('data-id')
    // })
    $('.book-venue').click(function(){
        uni_modal("Submit Booking Request","booking.php?venue_id="+$(this).attr('data-id'))
    })
    $('.venue-list .carousel img').click(function(){
        viewer_modal($(this).attr('src'))
    })

</script>

<section class="contact-w3ls" id="contact">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
                <div class="contact-agileits">
                    <h4>LIÊN HỆ CHÚNG TÔI</h4>
                    <p class="contact-agile2">ĐĂNG KÝ ĐỂ NHẬN ĐƯỢC TIN TỨC TỪ CHÚNG TÔI</p>
                    <form method="post" name="sentMessage" id="contactForm">
                        <div class="control-group form-group">

                            <label class="contact-p1">Họ Và Tên:</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                            <p class="help-block"></p>

                        </div>
                        <div class="control-group form-group">

                            <label class="contact-p1">Số Điện Thoại:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required>
                            <p class="help-block"></p>

                        </div>
                        <div class="control-group form-group">

                            <label class="contact-p1">Địa chỉ Email:</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <p class="help-block"></p>

                        </div>


                        <input type="submit" name="sub" value="Gửi ngay" class="btn btn-primary">
                    </form>
                    <?php
                    if (isset($_POST['sub'])) {
                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $approval = "Not Allowed";
                        $sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')";


                        if (mysqli_query($con, $sql))
                            echo "OK";
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
                <h4>KẾT NỐI VỚI CHÚNG TÔI</h4>
                <p class="contact-agile1"><strong>Số Điện Thoại :</strong>0123456789</p>
                <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">nhom2@gmail.com</a></p>
                <p class="contact-agile1"><strong>Địa Chỉ :</strong> Lê Duẩn,Thành Phố Vinh, Nghệ An</p>

                <div class="social-bnr-agileits footer-icons-agileinfo">
                    <ul class="social-icons3">
                        <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                        <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                        <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

                    </ul>
                </div>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662" ></iframe> -->
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- /contact -->
    <div class="copy">
        <p>© Nhóm 2 | Thiết Kế <a href="index.php">Nhóm 2</a> </p>
    </div>
    <!--/footer -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- contact form -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- /contact form -->
    <!-- Calendar -->
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
        });
    </script>
    <!-- //Calendar -->
    <!-- gallery popup -->
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>
    <!-- //gallery popup -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- flexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function() {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>

    <script src="js/main.js"></script>

    <script src="js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default',
                width: 'auto',
                fit: true,
                closed: 'accordion',
                activate: function(event) {
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!--//tabs-->
    <!-- smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {

            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>

    <div class="arr-w3ls">
        <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
    <!-- //smooth scrolling -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>
