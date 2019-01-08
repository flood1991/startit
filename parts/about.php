<section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="section-title">
            <h2><?php the_field('about_title'); ?></h2>
            <p><?php the_field('about_title2'); ?></p>
 </div>
                            <div class="about_content_box box-left">
                                <div class="about_txt_box">
                                    <p><?php the_field('about_text'); ?></p>
                                    </div>
                                <div class="about_img_box">
                                    <img src="<?php the_field('about_image'); ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about_content_box box-right">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_img_box">
                                            <img src="<?php the_field('about_image2'); ?>" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_img_box">
                                            <img src="<?php the_field('about_image3'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="about_txt_box">
                                    <p><?php the_field('about_text2'); ?></p>
                                    <p><?php the_field('about_text3'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
           