    <?php get_header('main');?>

        <div class="main-wrapper">
            <section class="inner-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-8 main-content">
                            <div class="blog-list">
                                <?php
global $post;
$postslist = get_posts( array( 'posts_per_page' => 3, 'order'=> 'ASC', 'orderby' => 'title' ) );
foreach ( $postslist as $post ){
    setup_postdata($post);
    ?>
                                <article class="blog_post">
                                    <div class="post_header">
                                        <h4 class="post_cat">Category : <a href="blog.html#">Company</a></h4>
                                        <h2 class="post_title"><a href="blog.html#"><?php the_title()?></a></h2>
                                    </div>
                                    <div class="post_img">
                                        <a href="blog.html#"><?php the_post_thumbnail_url();?></a>
                                    </div>
                                    <div class="post_content">
                                        <div class="post_intro">
                                            <p><?php the_content()?></p>
                                        </div>

                                        <div class="post_footer">
                                            <ul class="post_meta">
                                                <li><span class="author"><img src="images/blog/author.jpg" alt="author"> By <a href="blog.html#"><?php the_author()?></a></span></li>
                                                <li><span class="date"><a href="blog.html#"><?php the_date()?></a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                 <?php
                            }
                        wp_reset_postdata();
                        ?>
                            </div>
<?php the_posts_pagination(array('mid_size' => 2, ));?>
                            <!--<div class="pagination-div">

                                <ul class="pagination">
                                    
                                    <li><a class="page-numbers current" href="blog.html#">1</a></li>
                                    <li><a class="page-numbers" href="blog.html#">2</a></li>
                                    <li><a class="page-numbers" href="blog.html#">3</a></li>
                                    <li><a class="page-numbers" href="blog.html#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>-->

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
