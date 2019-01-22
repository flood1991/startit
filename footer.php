<section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="contact-info">
                                <div class="contact-info-details">
                                    <h4><?php the_field('title_phone', 'option'); ?></h4>
                                    <p><?php the_field('number_phone', 'option'); ?></p>
                                </div>
                                <div class="contact-info-details">
                                    <h4><?php the_field('title_address', 'option'); ?></h4>
                                    <p><?php the_field('text_address', 'option'); ?></p>
                                </div>
                                <div class="contact-info-details">
                                    <h4><?php the_field('title_email', 'option'); ?></h4>
                                    <p><?php the_field('email', 'option'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 offset-lg-1">
                            <div class="contact-form-two">
                                <div class="contact-title">
                                    <h3><?php the_field('title_form', 'option'); ?></h3>
                                    <form class="appoint-form-two" action="http://wpthemebooster.com/demo/themeforest/html/carrby/register.php" method="post">
                                        <div class="form-container">
                                            <div class="row">
                                            	<?php if( have_rows('form_repeater', 'option') ): ?>
                                            	<?php while( have_rows('form_repeater', 'option') ): the_row(); ?>
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="<?php the_sub_field('form'); ?>">
                                                    </div>
                                                    
                                                </div>
                                                <?php endwhile; ?>
                                                <?php endif; ?>
                                                <div class="col-md-6 col-lg-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" placeholder="<?php the_field('comment_form', 'option'); ?>"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="submit-btn">
                                                        <input type="submit" name="submit" class="btn" value="<?php the_field('confirm_form', 'option'); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                	
                                                    <ul class="top-social list-inline">
                                                    	<?php if( have_rows('social_repeater', 'option') ): ?>
                                                		<?php while( have_rows('social_repeater', 'option') ): the_row(); ?>
                                                        <li><a href= "<?php the_sub_field('social_link'); ?>"><i class="fa fa-<?php the_sub_field('social_list'); ?>"></i></a></li>
                                                        <?php endwhile; ?>
                                                    	<?php endif; ?>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<footer id="footer" class="footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <p> <?php the_field('text1_copy', 'option'); ?><a href="#"><?php the_field('link_copy', 'option'); ?></a><?php the_field('text2_copy', 'option'); ?></p>
                    </div>
                </div>
            </div>
        </footer>
<?php wp_footer(); ?>
</body>
</html>
