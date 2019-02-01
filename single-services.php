<?php get_header('main');?>

        <div class="main-wrapper">
            <section class="inner-page">
                <div class="container">
                    <div class="singlepage-details-content">
                        <div class="service-details-img">
                            <img src="<?php the_field('service_image'); ?>" alt="img">
                        </div>
                        <div class="service-details">
                            <div class="full_content">
                                <h6><?php the_field('text_service'); ?></h6>
                                <h2 class="project_title"><?php the_field('title_service'); ?></h2>
                                <p><?php the_field('content_service'); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="service_post-inner">
                        <h2 class="project_title"><?php the_field('project_service'); ?></h2>
                        <div class="service_post-list">
                           <?php 
                                if (have_rows('service_list')):
                                while ( have_rows('service_list') ) : the_row();?>
                            <div class="service_post">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="service_post-img">
                                            <img src="<?php the_sub_field('service_img');?>" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="service_post-content">
                                            <div class="service_post-header">
                                                <h4><?php the_sub_field('service_head');?></h4>
                                            </div>
                                            <div class="service_post-text">
                                                <p><?php the_sub_field('service_text');?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                endwhile;
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </section>

            <section id="team" class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <?php 
                                if (have_rows('team_list')):
                                while ( have_rows('team_list') ) : the_row();?>
                                <div class="col-lg-6">
                                    <div class="team_member">
                                        <img src="<?php the_sub_field('team_img');?>" alt="img">
                                        <div class="team_member_inner">
                                            <h4><?php the_sub_field('team_member');?></h4>
                                            <h6><?php the_sub_field('team_pos');?></h6>
                                            <p><?php the_sub_field('team_text');?> </p>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                endwhile;
                                endif;
                            ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="section-title">
                                <h2><?php the_field('title_team'); ?></h2>
                                <p><?php the_field('content_team'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="testimonials" class="testimonials testimonials2">
                <div class="container">
                    <div class="section-title">
                        <h2>Service Testimonial</h2>
                        <p>Lorem ipsum dolor sit, consectet ipsum dolor sit</p>
                    </div>
                    <div class="owl-carousel owl-theme testimonial_carousel2">
                        <div class="item">
                            <div class="testibox">
                                <div class="testi-img">
                                    <img src="images/testimonial/reviewer-1.png" alt="">
                                </div>
                                <div class="testi-content">
                                    <ul>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                    </ul>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit eaque ipsa ab illo inventore veritatis et quasi architecto  voluptatem quia.Sed ut perspiciatis</p>
                                    <h4>Jeny Doe</h4>
                                    <h6>CEO, Advertising Corp</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testibox">
                                <div class="testi-img">
                                    <img src="images/testimonial/reviewer-2.png" alt="">
                                </div>
                                <div class="testi-content">
                                    <ul>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star-half"></i></li>
                                    </ul>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit eaque ipsa ab illo inventore veritatis et quasi architecto  voluptatem quia.Sed ut perspiciatis</p>
                                    <h4>Jeny Doe</h4>
                                    <h6>CEO, Advertising Corp</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testibox">
                                <div class="testi-img">
                                    <img src="images/testimonial/reviewer-1.png" alt="">
                                </div>
                                <div class="testi-content">
                                    <ul>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star"></i></li>
                                        <li><i class="ion-ios-star-half"></i></li>
                                        <li><i class="ion-ios-star-outline"></i></li>
                                    </ul>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit eaque ipsa ab illo inventore veritatis et quasi architecto  voluptatem quia.Sed ut perspiciatis</p>
                                    <h4>Jeny Doe</h4>
                                    <h6>CEO, Advertising Corp</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_footer();?>

    </body>
</html>
