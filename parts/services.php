<section id="services" class="services pt-10">
        <div class="container">
            <div class="section-title">
                <h2><?php the_field('service_title'); ?></h2>
                <p><?php the_field('service_text'); ?></p>
            </div>
            <div class="row">
            <?php   $myservice = get_posts(
                    array('numberposts' => 3,
                    'orderby' => 'id',
                    'order' => 'ASC',
                    'post_type' => 'services',  ));
            foreach( $myservice as $post ) {
            setup_postdata($post);
                    $count = get_post_meta($post->ID,'incr_number',true);
            ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="servicebox">
                            <div class="srv_desc">
                                <h5 class="count"><?php echo wp_sprintf('%02d',$count) ; ?></h5>
                                <h4><a href="#"><?php the_title() ?></a></h4>
                                <p><?php the_excerpt();?></p>
                            </div>
                        </div>
                    </div>
            <?php
            }
            wp_reset_postdata()
            ?>
            </div>
        </div>
</section>





