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