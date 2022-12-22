 <?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyright'];
$ftrlogo = site_url()."/wp-content/uploads/2022/11/footer-logo.png"
 ?>



<footer>
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="logo-footer">
               <a href="<?php echo site_url();?>"><img src="<?php echo $ftrlogo;?>" alt=""></a>
            </div>
            <div class="footer-text">
                 <?php wp_nav_menu(array('menu'=>'Footer Menu'));?>
               <!-- <ul>
                  <li><a href="#">Home </a></li>
                  <li><a href="#">About </a></li>
                  <li><a href="#"> Service </a></li>
                  <li><a href="#"> Faq </a></li>
                  <li><a href="#"> Contact </a></li>
               </ul> -->
            </div>
            <div class="footer-icon">
               <ul>
                  <li><a href="<?php echo $options['facebook'];?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>
                     </a>
                  </li>
                  <li class="bg-1"><a href="<?php echo $options['instagram'];?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>
                     </a>
                  </li>
                  <li class="bg-2"><a href="<?php echo $options['linkedin'];?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <hr>
      <div class="row">
         <div class="col-lg-6 col-md-12">
            <div class="copy">
               <p><?php echo $options['copyright'];?></p>
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="copy text-right">
               <p><?php echo $options['FooterAbout'];?></p>
            </div>
         </div>
      </div>
   </div>
</footer>
<?php wp_footer(); ?>
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow-animate.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>
    <script type="text/javascript">

        $(document).on('ready', function () {




            wow = new WOW(
                {
                    animateClass: 'animated',
                    offset: 100,
                    callback: function (box) {
                        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                    }
                }
            );

            wow.init();


        });


        // blogslider start
        $(".review-slider").slick({
            dots: false,
            autoplaySpeed: 1500,
            arrows: false,
            // autoplay: true,
            centerPadding: 0,
            centerMode: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });

        // blogslider start
        $(".skill-slider").slick({
            dots: false,
            arrows: true,
            autoplaySpeed: 1500,
            // autoplay: true,
            infinite: true,
            speed: 300,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 3,

                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                         arrows: false,
                    },
                },
            ],
        });
    </script>
    <script>
    $("li.con a").addClass("t-btn");
</script>

</body>
</html>
