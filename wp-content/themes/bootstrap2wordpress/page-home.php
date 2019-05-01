<?php
/*

Template Name: Home Page

 */

 // Custom Fields
 $prelaunch_price = get_post_meta( 7, 'prelaunch_price', true );
 $launch_price = get_post_meta( 7, 'launch_price', true );
 $final_price = get_post_meta( 7, 'final_price', true );
 $course_url = get_post_meta( 7, 'course_url', true);
 $button_text = get_post_meta( 7, 'button_text', true);
 $optin_text = get_post_meta( 7, 'optin_text', true);
 $optin_button_text = get_post_meta( 7, 'optin_button_text', true);


 //Advanced Custom Fields
 $income_feature_image = get_field('income_feature_image');
 $income_section_title = get_field('income_section_title');
 $income_section_description = get_field('income_section_description');
 $reason_1_title = get_field('reason_1_title');
 $reason_1_description = get_field('reason_1_description');
 $reason_2_title = get_field('reason_2_title');
 $reason_2_description = get_field('reason_2_description');


 $who_feature_image = get_field('who_feature_image');
 $who_section_title = get_field('who_section_title');
 $who_section_body = get_field('who_section_body');

 $features_section_image = get_field('features_section_image');
 $features_section_title = get_field('features_section_title');
 $features_section_body = get_field('features_section_body');


 $project_feature_title = get_field('project_feature_title');
 $project_feature_body = get_field('project_feature_body');

 $introduction_heading = get_field('introduction_heading');
 $intro_video_link = get_field('intro_video_link');

 $instructor_section_title = get_field('instructor_section_title');
 $instructor_name = get_field('instructor_name');
 $bio_excerpt = get_field('bio_excerpt');
 $full_bio = get_field('full_bio');


 $twitter_username = get_field('twitter_username');
 $facebook_username = get_field('facebook_username');
 $google_plus_username = get_field('google_plus_username');


 $num_students = get_field('num_students');
 $num_reviews = get_field('num_reviews');
 $num_courses = get_field('num_courses');



get_header(); ?>

            <?php get_template_part('template-parts/content','hero'); ?>

            <?php get_template_part('template-parts/content','optin'); ?>

            <?php get_template_part('template-parts/content','boost'); ?>

            <?php get_template_part('template-parts/content','benefits'); ?>

            <?php get_template_part('template-parts/content','cfeatures'); ?>

            <?php get_template_part('template-parts/content','pfeatures'); ?>


        

            <!--VIDEO FEATURETTE-->

                <section id="featurette">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2><?php echo $introduction_heading; ?></h2>
                                <iframe width="100%" height="415" src="<?php echo $intro_video_link ?>" frameborder="0" allowfullscreen></iframe>
                            </div><!-- end col -->
                        </div><!-- row -->			
                    </div><!-- container -->
                </section><!-- featurette -->



                <!--TESTMONIALS-->

                <!--INSTRUCTOR-->

        <section id="instructor">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-6">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
                                    </div><!-- end col -->
                                    <div class="col-lg-4">

                                    <?php if( !empty($twitter_username) ): ?>
                                        <a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>

                                        <?php endif; ?>

                                    <?php if( !empty($facebook_username) ): ?>

                                        <a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>

                                    <?php endif; ?>

                                    <?php if( !empty($google_plus_username) ): ?>


                                        <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>

                                    <?php endif; ?>
                                    </div><!-- end col -->
                                
                                </div><!-- row -->
                                
                                <p class="lead"><?php echo $bio_excerpt ?><p>
                                
                                <p><?php echo $full_bio; ?></p>
                                
                                <hr>
                                
                                <h3>The Numbers <small>They Don't Lie</small></h3>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="num">
                                            <div class="num-content">
                                                <?php echo $num_students ?><span>students</span>
                                            </div><!-- num-content -->
                                        </div><!-- num -->
                                    </div><!-- end col -->
                                    
                                    <div class="col-xs-4">
                                        <div class="num">
                                            <div class="num-content">
                                            <?php echo $num_reviews ?><span>reviews</span>
                                            </div><!-- num-content -->
                                        </div><!-- num -->
                                    </div><!-- end col -->
                                    
                                    <div class="col-xs-4">
                                        <div class="num">
                                            <div class="num-content">
                                            <?php echo $num_courses ?> <span>courses</span>
                                            </div><!-- num-content -->
                                        </div><!-- num -->
                                    </div><!-- end col -->
                                </div><!-- row -->
                                
                            </div><!-- end col -->
                        </div><!-- row -->
                    </div><!-- container -->
                </section>

            
                <?php get_template_part('template-parts/content','testimonials'); ?>


<?php get_footer(); ?>