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

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'switch_button',
            'label'       => esc_html__( 'Button Switch', 'foodhut' ),
            'description' => esc_html__( 'Simple switch control for enable or disable the button', 'foodhut' ),
            'section'     => 'persona_header_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'foodhut' ),
                'off' => esc_html__( 'Disable', 'foodhut' ),
            ],  
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'button_text',
            'label'    => esc_html__( 'Button Text', 'foodhut' ),
            'section'  => 'persona_header_section',
            'default'  => esc_html__( 'Components', 'foodhut' ),
            'priority' => 10,
            'active_callback' => [
                [
                    'setting'  => 'switch_button',
                    'operator' => '==',
                    'value'    => true,
                ]
            ],
        ]
    );

    new \Kirki\Field\Text(
	[
		'settings' => 'button_url',
		'label'    => esc_html__( 'Button URL', 'foodhut' ),
		'section'  => 'persona_header_section',
		'default'  => '#',
		'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'switch_button',
                'operator' => '==',
                'value'    => true,
            ]
        ],
	]
);
}

foodhut_header_section();
