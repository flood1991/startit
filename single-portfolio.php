<?php get_header('main');?>

        <div class="main-wrapper">
            <section class="inner-page">
                <div class="container">
                    <div class="singlepage-details-content">
                        <div class="portfolio-details-img">
                            <img src="<?php the_field('portfolio-details'); ?>" alt="img">
                        </div>
                        <div class="portfolio-details">
                            <div class="full_content">
                                <h6>Lorem ipsum dolor sit</h6>
                                <h2 class="project_title"><?php the_field('portfolio-title'); ?></h2>
                                <p><?php the_field('portfolio-text'); ?></p>
                            </div>
                            <div class="portfolio-content-img">
                                <img src="<?php the_field('portfolio-textimage'); ?>" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="video-banner">
                <div class="container">
                    <div class="video-content"><?php the_field('video-titleleft'); ?> <span class="video_btn"><a class="fancybox-media" href="<?php the_field('video-link'); ?>"><i class="ion-ios-play"></i></a></span><?php the_field('video-titleright'); ?></div>
                </div>
            </section>

            <section class="project_desc">
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field('title-project'); ?></h2>
                        <p><?php the_field('project-text'); ?></p>
                    </div>
                    <div class="project_desc_inner">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="desc_txt">
                                    <p><?php the_field('project-descriptionleft'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="desc_txt">
                                    <p><?php the_field('project-descriptionright'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project_desc_bottom">
                    <div class="container">
                        
                        <div class="project_info_grid">
                            <?php 
                                if (have_rows('project-info')):
                                while ( have_rows('project-info') ) : the_row();?>
                            <div class="info_grid">
                            
                                <h5><?php the_sub_field('title-info');?></h5>
                                <p><?php the_sub_field('text-info');?></p>
                            
                            </div>
                            <?php 
                                endwhile;
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </section>

            <section id="testimonials" class="testimonials testimonials1">
                <div class="container">
                    <div class="owl-carousel owl-theme testimonial_carousel">
                        <?php 
                            $testiwork = get_posts(
                            array(
                                  'post_type' => 'testimonials',
                                  'post_status' => 'private',
                                  'include' => '361,362,363'));
                            foreach( $testiwork as $post ){
                            setup_postdata($post);?>
                        <div class="item">
                            <div class="testibox">
                                <div class="testi-img">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="testi-content">
                                    <ul>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                    </ul>
                                    <p><?php the_content();?></p>
                                    <h4><?php the_field('author_testimonial');?></h4>
                                    <h6><?php the_field('position');?></h6>  
                                </div>   
                            </div>
                        </div>
                        <?php
                            }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </section>

            <?php get_footer();?>

    </body>
</html>
