<?php get_header('main');?>

        <div class="main-wrapper">
            <section class="inner-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-8 main-content">
                            <div class="blog-list">
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <article class="blog_post post-box">
                                    <div class="post_header">
                                        <h4 class="post_cat"><a href="<?php the_permalink();?>"><?php the_tags('Category :');?></a></h4>
                                        <h2 class="post_title"><?php the_title();?></h2>
                                    </div>
                                    <div class="post_img">
                                        <?php the_post_thumbnail('postimg');?>
                                    </div>
                                    <div class="post_content">
                                        <div class="full_content">
                                            <?php the_content();?>
                                        </div>

                                        <div class="post_footer">
                                            <ul class="post_meta">
                                                <li><span class="author"><?php echo get_avatar('2'); ?>By<a href="<?php the_permalink();?>"><?php the_author()?></a></span></li>
                                                <li><span class="date"><a href="<?php the_permalink();?>"><?php the_time('j F, Y');?></a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile;
                                  endif
                            ?>
                            </div>
                            
                            <div class="inner_posts">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="inner-post prev_post">
                                    <?php if ($prev_post = get_previous_post()):?>
                                    <?php echo get_the_post_thumbnail($prev_post,'prevnext')?>
                                <div class="post_block">
                                    <a class="link_to" href="<?php echo get_permalink($prev_post)?>">Previous post</a>
                                    <h4><a href="<?php echo get_permalink($prev_post)?>"><?php echo $prev_post->post_title ?></a></h4>
                                </div>
                            <?php endif ?>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="inner-post next_post">
                                    <?php if ($next_post = get_next_post()):?>
                                    <?php echo get_the_post_thumbnail($next_post,'prevnext')?>
                                    <div class="post_block">
                                    <a class="link_to" href="<?php echo get_permalink($next_post)?>">Next Post</a>
                                    <h4><a href="<?php echo get_permalink($next_post)?>"></a><?php echo $next_post->post_title ?></h4>
                                    </div>
                                <?php endif ?>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-4 sidebar">

                            <div id="search-2" class="widget widget_search">
                                <div class="sidebar_search">
                                    <form class="sidebar_search_form">
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
