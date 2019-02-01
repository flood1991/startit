<?php get_header('main');?>

        <div class="main-wrapper">
            <section class="inner-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-8 main-content">
                            <div class="blog-list">
                                <article class="blog_post post-box">
                                    <div class="post_header">
                                        <h4 class="post_cat"><?php the_field('category'); ?><a href="blog-single.html#"><?php the_field('title_category'); ?></a></h4>
                                        <h2 class="post_title"><?php the_field('post_title'); ?></h2>
                                    </div>
                                    <div class="post_img">
                                        <img src="<?php the_field('post_image'); ?>" alt="img">
                                    </div>
                                    <div class="post_content">
                                        <div class="full_content">
                                            <p><?php the_field('post_content'); ?></p>
                                        </div>

                                        <div class="post_footer">
                                            <ul class="post_meta">
                                                <li><span class="author"><img src="<?php the_field('author_image'); ?>" alt="author"> By <a href="blog-single.html#"><?php the_field('author_name'); ?></a></span></li>
                                                <li><span class="date"><a href="blog-single.html#"><?php the_field('post_date'); ?></a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            
                            <div class="inner_posts">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="inner-post prev_post">
                                    <img src="<?php the_field('prev_image'); ?>" alt="img">
                                <div class="post_block">
                                    <a class="link_to" href="blog-single.html#"><?php the_field('prev_excerpt'); ?></a>
                                    <h4><a href="blog-single.html#"><?php the_field('prev_excerpt'); ?></a></h4>
                                </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="inner-post next_post">
                                    <img src="<?php the_field('next_image'); ?>" alt="img">
                                    <div class="post_block">
                                    <a class="link_to" href="blog-single.html#"><?php the_field('next_excerpt'); ?></a>
                                    <h4><a href="blog-single.html#"><?php the_field('next_excerpt'); ?></a></h4>
                                    </div>
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
                                <h4 class="widget_title"><span><?php the_field('title_recent'); ?></span></h4>
                                <div class="sidebar_recent_posts">
                                    <ul class="recent_posts_list">
                                        <?php 
                                if (have_rows('post_list')):
                                while ( have_rows('post_list') ) : the_row();?>
                                        <li>
                                            <img src="<?php the_sub_field('post_img');?>" alt="insta">
                                            <div class="post_content">
                                                <h6><a href="blog-single.html#"><?php the_sub_field('title_post');?></a></h6>
                                                <p class="date"><?php the_sub_field('date_post');?></p>
                                            </div>
                                        </li>
                                        <?php 
                                            endwhile;
                                            endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div id="archives-1" class="widget widget_archive">
                                <h4 class="widget_title"><span><?php the_field('title_archive');?></span></h4>
                                <div class="sidebar_archive">
                                    <ul class="archive_list">
                                        <?php 
                                if (have_rows('archive_list')):
                                while ( have_rows('archive_list') ) : the_row();?>
                                        <li><a href="blog-single.html#"><?php the_sub_field('archive_text');?></a></li>
                                        <?php 
                                            endwhile;
                                            endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div id="categories-2" class="widget widget_categories">
                                <h4 class="widget_title"><span><?php the_field('title_cat');?></span></h4>
                                <div class="sidebar_categories">
                                    <ul class="category_list">
                                        <?php 
                                if (have_rows('category_list')):
                                while ( have_rows('category_list') ) : the_row();?>
                                        <li><a href="blog-single.html#"><?php the_sub_field('text_category');?><span><?php the_sub_field('qty_category');?></span></a></li>
                                        <?php 
                                            endwhile;
                                            endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <?php get_footer();?>
    </body>
</html>
