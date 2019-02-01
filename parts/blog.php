<section id="blog" <?php post_class('blog')?>>
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field('blog_title'); ?></h2>
                        <p><?php the_field('blog_titletext'); ?></p>
                    </div>
                    <div class="row">
                    <?php 
                        $blog = get_posts(
                            array('numberposts' => 3,
                            'orderby' => 'id',
                            'order' => 'ASC' ));    
                        foreach( $blog as $post ){
                        setup_postdata($post);?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="blog_post">
                                            <div class="post_img">
                                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('blog-images'); ?></a>
                                            </div>
                                        <div class="post_content">
                                            <div class="post_header">
                                                <h2 class="post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                                <div class="read_more"><a href="<?php the_permalink();?>"><?php the_content();?></a></div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                       <?php
                        } 
                    wp_reset_postdata();?>
                    </div>
                </div>
            </section>


         