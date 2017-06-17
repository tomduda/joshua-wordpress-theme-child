<?php



/* This is the front page for the Joshua-Duda child theme*/
/* This is the version for ThomasDuda.com */

get_header();
global $more;
?>


<!-- *******************************Website portfolio section or Services******************************* -->

<section id="services">

 <div class="indent clear">

    <?php 

    $query = new WP_Query( 'pagename=web-design-and-development' );

    $services_id = $query->queried_object->ID;

    // The Loop

    if ( $query->have_posts() ) :

        while ( $query->have_posts() ) :

            $query->the_post();
        ?>

        <h2 class="section-title"> <?php get_the_title() ?> </h2>
        <div class="entry-content"> <?php the_content('') ?></div>
        
        <?php

        

        endwhile;

        endif;

        /* Restore original Post Data */

        wp_reset_postdata();

        $args = array('posts_per_page' => 6,'orderby' => 'rand', 'post_type' => 'page','post_parent' => $services_id);

        $services_query = new WP_Query( $args );

        // The Loop

        if ( $services_query->have_posts() ) :

            ?>
        <ul class="services-list">
            <?php

            while ( $services_query->have_posts() ) :

                $services_query->the_post();
            ?>

            <li class="clear">
                <?php
                echo '<a href="' . get_permalink() . '" title="Learn more about ' . get_the_title() . '">';

                echo '<h3 class="services-title">' .  get_the_title() . '</h3>';
                ?>

            </a>

            <div class="services-lede">
                <?php

                the_content();
                ?>


            </div>

        </li>

        <?php

        endwhile;

        echo '</ul>';

        endif;

        /* Restore original Post Data */

        wp_reset_postdata();



        ?>

    </div><!-- .indent -->

</section> 

<!--****************************************************************** Portfolio overview Begin ************************************************************************* */ -->

<div id="par-box1" ><h2 class="hide">About Me</h2></div>

<div id="prlx_lyr_3"></div>

<section id="meet">

    <div class="indent clear">

        <?php 

        $args = array('posts_per_page' => 3,'orderby' => 'rand','category_name' => 'about_tom');

        $query = new WP_Query( $args );

            // The Loop
        
        if ( $query->have_posts() ) :

            echo '<ul class="about-tom">';
        // counter furnished to provide each class a unique id
        $i = 0;
        while ( $query->have_posts() ) :

            $query->the_post();

        
        ?>

        <div class="about-tom-text-<?php echo $i ?> " class= "hide"> 
         
            <h3 class="about-tom-name"><?php echo get_the_title() ?> </h3>
            <?php

            

            the_content('');

            

            echo '</div>';

            $i++;
            endwhile;

            endif;

            /* Restore original Post Data */

            wp_reset_postdata();

            ?>

        </div><!-- .indent -->


    </section><!-- #meet -->

    

    <!-- ***************************************************** Testimonials Begin ******************************************************************************** */ -->


    <div id="par-box2" ><h2 class="hide">Testimonials</h2></div>

    <div id="prlx_lyr_1"></div>

    <section id="testimonials">

        <div class="indent clear">


            <?php 

            $args = array('posts_per_page' => 3,'orderby' => 'rand','category_name' => 'testimonials');

            $query = new WP_Query( $args );

        // The Loop

            if ( $query->have_posts() ) :

                echo '<ul class="testimonials">';
            $i = 0;
            while ( $query->have_posts() ) :

                $query->the_post();

            $more = 0;
            ?>

            <li class="clear testimonial-box-<?php echo $i ?>">
                <figure class="testimonial-thumb">
                    <?php        
                    the_post_thumbnail('testimonial-mug');
                    ?>

                </figure>

                <aside class="testimonial-text">

                   <?php

                   echo '<h3 class="testimonial-name">' . get_the_title() . '</h3>';
                   ?>
                   <div class="testimonial-excerpt">

                    <?php

                    the_content('');

                    echo '</div>';

                    echo '</aside>';

                    echo '</li>';
                    // incriment counter to add to testimonial-box div
                    $i += 1;
                    endwhile;

                    echo '</ul>';

                    endif;

                    /* Restore original Post Data */

                    wp_reset_postdata();

                    ?>

                </div><!-- .indent -->

            </section><!-- #testimonials -->

            <!-- *******************************Resume section**************************************************************-->

            <div id="par-box3" ><h2 class="hide">Resume</h2></div>

            <div id="prlx_lyr_4"></div>

            <section id="contact">

                <div class="indent clear">

                    <?php 

                    $query = new WP_Query( 'pagename=resume' );

        // The Loop

                    if ( $query->have_posts() ) :

                        while ( $query->have_posts() ) :

                            $query->the_post();

                        echo '<h2 class="section-title">' . get_the_title() . '</h2>';

                        echo '<div class="entry-content">';

                        the_content();

                        echo '</div>';

                        endwhile;

                        endif;

                        /* Restore original Post Data */

                        wp_reset_postdata();

                        ?>

                    </div><!-- .indent -->


                </section><!-- #contact -->


                <!-- **************************************************************Contact information section************************************************************** -->

                <div id="primary" class="content-area joshua-page" >

                    <main id="main" class="site-main" role="main">


                        <div id="par-box4" ><h2 class="hide">Contact Information</h2></div>

                        <div id="prlx_lyr_2"></div>

                        

                        <section id="call-to-action" ><div class="image">

                            <div class='indent'>


                                <?php 

                                $query = new WP_query('pagename=contact');

    // The loop

                                if($query ->have_posts()):

                                    while($query->have_posts()):

                                        $query->the_post();

                                    echo '<div class="entry-content">';

                                    the_content();

                                    echo '</div>';

                                    endwhile;

                                    endif;

                                    wp_reset_postdata();

                                    ?>

                                    <div class="front-right"></div>

                                </div>
                            </div>

                        </section>
                    </main><!-- #main -->

                </div><!-- #primary -->

                <!-- **************************************************************Footer section begins************************************************************** -->

                <?php get_footer(); ?>



