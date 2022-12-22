<?php /* Template Name: Home - Page Template */ ?>
<?php get_header(); 
$section_1 =get_field('section_1');
$section_3 =get_field('section_3');
$section_4 = get_field('section_4');
?>




    <section class="home-sec-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="img-box">
                        <img src="<?php echo $section_1['image'];?>" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="text">
                        <h2><?php echo $section_1['title'];?></h2>
                        <p><?php echo $section_1['content'];?></p>
                        <a class="t-btn" href="<?php echo $section_1['page_link'];?>"><?php echo $section_1['button_title'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-sec-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="text">
                        <h2><?php echo get_field('service_heading');?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
            	<?php    $x=1;  $args = array( 'post_type' => 'service' , 'posts_per_page' => '3','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>

                <div class="col-lg-4 col-md-12">
                    <div class="box">
                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                        <h3><?php echo the_title();?></h3>
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <?php $x++; endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>

    <section class="home-sec-3" style="background-image:url(<?php echo $section_3['image'];?>);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="text">
                        <h2><?php echo $section_3['title'];?></h2>
                        <p><?php echo $section_3['content'];?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="home-sec-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text">
                        <h2><?php echo $section_4['title'];?></h2>
                    </div>
                </div>
            </div>
            <div class="row skill-slider">
            	<?php if( have_rows('section_4')) : while ( have_rows('section_4') ) : the_row(); ?>
            		<?php if( have_rows('section_4_repeater') ): while ( have_rows('section_4_repeater') ) : the_row(); ?>   
                <div class="col-lg-3 col-md-12">
                    <div class="skill-box">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="">
                        <div class="text-post">
                            <h5><?php echo get_sub_field('title'); ?></h5>
                        </div>
                    </div>
                </div>
                    <?php endwhile; endif; ?>
                <?php endwhile; endif; ?>

            </div>
        </div>
    </section>

    <section class="home-sec-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text">
                        <h2>ReviewS</h2>
                    </div>
                </div>
            </div>
            <div class="row review-slider">
            	<?php    $x=1;  $args = array( 'post_type' => 'review' , 'posts_per_page' => '3','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>

                <div class="col-lg-4 col-md-12">
                    <div class="review-box">
                        <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                        <h3><?php echo the_title();?></h3>
                        <p><?php echo wpautop(the_content());?>

                        </p>
                        <a href="#">Read full review</a>
                    </div>
                </div>
                <?php $x++; endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>
	

<?php get_footer(); ?>