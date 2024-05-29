<?php

new \Kirki\Panel(
	'foodhut_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Foodhut Options', 'foodhut' ),
		'description' => esc_html__( 'Foodhut theme options panel', 'foodhut' ),
	]
);

/** Header section */
function foodhut_header_section(){
    new \Kirki\Section(
        'persona_header_section',
        [
            'title'       => esc_html__( 'Header Section', 'foodhut' ),
            'description' => esc_html__( 'Header Section options.', 'foodhut' ),
            'panel'       => 'foodhut_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'foodhut_logo',
            'label'       => esc_html__( 'Logo', 'foodhut' ),
            'description' => esc_html__( 'Please upload your logo here.', 'foodhut' ),
            'section'     => 'persona_header_section',
            'default'     => get_template_directory_uri().'/assets/imgs/logo.svg'
        ]
    );
}

foodhut_header_section();
