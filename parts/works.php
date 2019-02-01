            <section id="works" class="works">
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field('work_title'); ?></h2>
                        <p><?php the_field('work_text');?></p>
                    </div>
         <ul id="filters" class="clearfix text-center">       
        <?php 
            $myworks = get_posts(
                array('numberposts' => 8,
                'orderby' => 'id',
                'category' => 'portfolio_category',
                'order' => 'ASC',
                'post_type' => 'portfolio',  ));   
            $terms = get_terms( 'portfolio_category' );
            if($terms) { foreach( $terms as $term ){
        ?>
    <li><span class="filter active" data-filter=".<?php echo "$term->slug"?>"><?php echo "$term->name";}} ?></span></li>
        </ul>
                    <div id="portfoliolist">
                        <div class="row">
                            <?php
                            foreach( $myworks as $post ){
                            setup_postdata($post);
                            $posttags = get_the_terms($post->ID,'portfolio_category');
                            ?>    
                            <div class="col-md-4 col-lg-3 portfolio 
                                <?php   if (is_array($posttags)) {
                                        foreach($posttags as $tag) {
                                        echo $tag->slug . ' '; 
                                } } ?>"> 
                                <div class="portfolio-wrapper">
                                    <div class="works-img">
                                        <?php the_post_thumbnail('portfolio-images'); ?>
                                        <a href="<?php the_post_thumbnail_url(); ?>" data-fancybox="images"></a>
                                    </div>
                                    <div class="works-info">
                                        <div class="label-text">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            wp_reset_postdata();
                            ?>
                        </div>  
                    </div>
                </div>
            </section>    
