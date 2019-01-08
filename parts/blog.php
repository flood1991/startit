<section id="blog" class="blog">
                <div class="container">

                    <div class="section-title">
                        <?php while ( have_posts() ) : the_post(); ?>
                        <h2><?php the_field('blog_title'); ?></h2>
                        <p><?php the_field('blog_titletext'); ?></p>
                        <?php endwhile; ?>
                    </div>
                    <div class="row">
                        <?php if( have_rows('blog_repeater') ):
while ( have_rows('blog_repeater') ) : the_row();
   $title = get_sub_field('blog_posttitle');
    $link = get_sub_field('blog_link');
    $image = get_sub_field('blog_image');  
?>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog_post">
                                <div class="post_img">
                                    <a href="#"><img src="<?php echo $image; ?>" alt="img"></a>
                                </div>
                                <div class="post_content">
                                    <div class="post_header">
                                        <h2 class="post_title"><a href="#"><?php echo $title; ?></a></h2>
                                        <div class="read_more"><a href="#"><?php echo $link; ?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php endwhile; ?>     
<?php else:
endif; ?>                 
                    </div>
                </div>
            </section>