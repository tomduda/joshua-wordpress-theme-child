<?php

# FUNCTION 1: replace the default "le.v. a rep.y" heading

function change_comment_title ($arg) {

  $arg['title_reply'] = __('Have your say' );

  return $arg;

}

add_filter('comment_form_defaults','change_comment_title');



# FUNCTION 2: replace the default "em.il add.ess is not pub.ish.d" text

function change_emailnote ($arg) {

  $arg['comment_notes_before'] = __('<p class="comment-notes">' . __( 'email address is not displayed.' ) . ( $req ? $required_text : '' ) . '</p>');

  return $arg;

}

add_filter('comment_form_defaults','change_emailnote');



/* 

 This is the functions file for the Joshua-Duda child theme

 */

function joshua_scripts(){

    if(is_front_page()){

        wp_enqueue_style('joshua-styles', get_stylesheet_directory_uri()  . '/joshua-style.css');

       
        wp_enqueue_script('joshua-script' , get_stylesheet_directory_uri()  . '/js/joshua_scripts.js', array('jquery'), '20150803');

       wp_enqueue_script("jquery");

    }

     

}


wp_enqueue_script('parallax_script' , get_stylesheet_directory_uri()  . '/js/parallax.js');


add_action('wp_enqueue_scripts', 'joshua_scripts');
add_image_size('testimonial-mug', 253,253,true);



function exclude_testimonials( $query){

    if(!$query->is_catagory('testimonials') && $query->is_main_query()){

        $query->set('cat','-15');

    }

}

add_action('pre_get_posts', 'exclude_testimonials');