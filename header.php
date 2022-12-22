<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lib.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<title><?php bloginfo( 'title' ); ?></title>
<?php wp_head();?>
</head>
<?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyrite'];
$size = 344;
$options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
$att_img = wp_get_attachment_image($logo, array($size, $size), false);
$logoSrc = wp_get_attachment_url($logo);
$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
?>
<body <?php body_class(); ?>>


    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="<?php echo site_url();?>"> <img src="<?php echo $logoSrc;?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="header-text">
                        <!-- <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> About </a></li>
                            <li><a href="#">Service </a></li>
                            <li><a href="#"> Faq</a></li>
                            <li><a class="t-btn" href="#"> Contact Us</a></li>
                        </ul> -->
                        <?php wp_nav_menu(array('menu'=>'Header Menu'));?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php if(is_front_page()||is_home()){ $home_page_banner = get_field('home_page_banner');?>

    <section class="banner-sec" style="background-image: url(<?php echo $home_page_banner['home_banner_image'];?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="text">
                        <h1><?php echo $home_page_banner['home_banner_headeing'];?></h1>
                        <a class="t-btn" href="<?php echo $home_page_banner['page_link'];?>"><?php echo $home_page_banner['button_title']?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>