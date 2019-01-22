<section id="slider" class="slider_1" style="background-image:url('<?php the_field('home_backimage'); ?>')">
        <div class="slider">
            <div class="container">
                <div class="slide-content">
                    <h6 class="sub_heading"><?php the_field('home_title'); ?></h6>
                    <div class="typing_content">
                        <h2 class="heading">
                            <?php the_field('home_text1'); ?> <span class="typed-element"><?php the_field('home_text2'); ?></span>
                        </h2>
                        <div class="typed-strings">
                            <p><?php the_field('home_text3'); ?></p>
                            <p><?php the_field('home_text4'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll_btn"><a href="#about"><i class="fa fa-angle-down"></i></a></div>
            <div class="section-shape">
                <img alt src="<?php the_field('home_image'); ?>">
            </div>
        </div>
</section>