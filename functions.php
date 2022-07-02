<?php
    $version = wp_get_theme()->get('Version');
    function reshailkhan_register_styles(){
        wp_enqueue_style('reshailkhan-style', get_template_directory_uri() ."/style.css", array(), '1.0', 'all');
        wp_enqueue_style('reshailkhan-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
        wp_enqueue_style('reshailkhan-fontawesome', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh', array(), '1.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'reshailkhan_register_styles' );

?>