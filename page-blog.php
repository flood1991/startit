    <?php get_header('main');?>

        <div class="main-wrapper">
            <section class="inner-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-8 main-content">  
                            <div class="blog-list">
                                <?php $blogpost = get_posts();
                                        foreach( $blogpost as $post ){
                                        setup_postdata($post)?>
                                <article class="blog_post">
                                    <div class="post_header">
                                        <h4 class="post_cat"><a href="<?php the_permalink();?>"><?php the_tags('Category :');?></a></h4>
                                        <h2 class="post_title"><a href="<?php the_permalink();?>"><?php the_title()?></a></h2>
                                    </div>
                                    <div class="post_img">
                                        <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url();?>" alt="img"></a>
                                    </div>
                                    <div class="post_content">
                                        <div class="post_intro">
                                            <?php the_excerpt();?>
                                        </div>
                                        <div class="post_footer">
                                            <ul class="post_meta">
                                                <li><span class="author"><?php echo get_avatar('2'); ?> By <a href="<?php the_permalink();?>"><?php the_author()?></a></span></li>
                                                <li><span class="date"><a href="<?php the_permalink();?>"><?php the_time('j F, Y');?></a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <?php
                                 }
                                  wp_reset_postdata();
                                ?>
                            <div class="pagination-div">
                                <ul class="pagination">
                                   <?php $pagi =(array (
                                    'mid_size'     => 2,
                                    'prev_text'    => '«',
                                    'next_text'    => '»',
                                    'type'         => 'list',
                                    'before_page_number' => '<li>',
                                    'after_page_number'  => '</li>'));
                        echo paginate_links($pagi)
                    ?>
                                   <!-- <li><a class="page-numbers current" href="blog.html#">1</a></li>
                                    <li><a class="page-numbers" href="blog.html#">2</a></li>
                                    <li><a class="page-numbers" href="blog.html#">3</a></li>
                                    <li><a class="page-numbers" href="blog.html#"><i class="fa fa-angle-double-right"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-4 sidebar">
                            <div id="search-2" class="widget widget_search">
                                <div class="sidebar_search">
                                    <form class="sidebar_search_form" action="http://wpthemebooster.com/demo/themeforest/html/carrby/search.php">
                                        <input type="text" name="search" class="form-control" placeholder="Search">
                                        <button type="submit" class="form-control form-control-submit"><i class="ion-ios-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div id="recent-posts-2" class="widget widget_recent_posts">
                                <?php dynamic_sidebar('sidebar_resent')?>
                            </div>
                            <div id="archives-1" class="widget widget_archive">
                                <?php dynamic_sidebar('sidebar_archive')?> 
                            </div>
                            <div id="categories-2" class="widget widget_categories">
                                <?php dynamic_sidebar('sidebar_category')?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <?php get_footer();?>

    </body>
</html>