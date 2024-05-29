<?php 

/** Logo function */
function foodhut_logo(){

    $default_logo = get_template_directory_uri().'/assets/imgs/logo.svg';
    $header_logo = get_theme_mod('foodhut_logo', $default_logo);

    if(!empty($header_logo)){
        ?>
        <a class="navbar-brand m-auto" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url($header_logo); ?>" class="brand-img" alt="<?php echo get_bloginfo('name'); ?>">
            <span class="brand-txt"><?php echo get_bloginfo('name'); ?></span> 
        </a>
        <?php 
    }
}

function foodhut_header_button(){

    $button_switch = get_theme_mod( 'switch_button', 'on' );
    $button_text = get_theme_mod('button_text', __('Components', 'foodhut'));
    $button_url = get_theme_mod('button_url', __('#', 'foodhut'));

    if(true ==  $button_switch){
        ?>
        <div class="header-btn-area">
            <a href="<?php echo esc_url($button_url); ?>" class="btn btn-primary ml-xl-4"><?php echo esc_html($button_text);?></a>
        </div>
        <?php
    }  
}

