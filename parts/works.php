 <section id="works" class="works">
                <div class="container">
                    <div class="section-title">
                        <?php while ( have_posts() ) : the_post(); ?>
                        <h2><?php the_field('work_title'); ?></h2>
                        <p><?php the_field('work_text');?></p>
                    </div>

                    <ul id="filters" class="clearfix text-center">
<?php if( have_rows('work_repeatfilter') ):
 while ( have_rows('work_repeatfilter') ) : the_row();?>
                        <li><span class="filter active" data-filter="<?php the_sub_field('work_filter');?>"><?php the_sub_field('work_filtertitle');?></span></li>
<?php endwhile ?>
<?php else:
endif; ?>
                    </ul>
<?php endwhile ?>
                    <div id="portfoliolist">
                        <div class="row">
<?php if( have_rows('work_repeat') ):
while ( have_rows('work_repeat') ) : the_row();
$title = get_sub_field('image_title');
$filter = get_sub_field('work_filter');
$image = get_sub_field('work_image'); ?>
                            <div class="col-md-4 col-lg-3 portfolio <?php echo $filter; ?>">
                                <div class="portfolio-wrapper"> 
                                    <div class="works-img">
                                        <a href="<?php echo $image; ?>" data-fancybox="images">
                                            <img src="<?php echo $image; ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="works-info">
                                        <div class="label-text">
                                            <h4><?php echo $title; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endwhile; ?>     
<?php else:
endif; ?> 
                        </div>
                    </div>
                </div>
            </section>