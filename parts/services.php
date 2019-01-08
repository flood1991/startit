<section id="services" class="services pt-10">
                <div class="container">
                    <div class="section-title">
                        <?php while ( have_posts() ) : the_post(); ?>
                        <h2><?php the_field('service_title'); ?></h2>
                        <p><?php the_field('service_text'); ?></p>
                        <?php endwhile; ?>
                    </div>
                    <div class="row">
                        <?php if( have_rows('service_repeat') ): ?>
                                        <?php while( have_rows('service_repeat') ): the_row();?> 
                        <div class="col-lg-4 col-md-6">
                            <div class="servicebox">
                                <div class="srv_desc">
                                    <h5 class="count"><?php the_sub_field('service_count');?></h5>
                                    <h4><a href="#"><?php the_sub_field('title_rpt');?></a></h4>
                                    <p><?php the_sub_field('text_rpt');?></p>      
                                </div>
                            </div>
                        </div>
                        <?php endwhile?>
                        <?php else:
                        endif?>
                    </div>
                </div>
 </section>