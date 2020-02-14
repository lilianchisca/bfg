<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

acf_add_options_page([
    'page_title' => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme-options',
    'capability' => 'edit_theme_options',
    'position'   => '999',
    'autoload'   => true,
    'show_in_graphql' => true
]);

$theme_options = new FieldsBuilder('theme_options');

$theme_options
    ->setLocation('options_page', '==', 'theme-options');

$theme_options
    ->addTab('footer_options', ['placement' => 'left'])
        ->addLink('british_business_bank_twitter_link', [
            'return_format' => 'array',
        ])
        ->addLink('icaew_twitter_link', [
            'label' => 'ICAEW Twitter Link',
            'return_format' => 'array',
        ])
        ->addLink('british_business_bank_linkedin_link', [
            'return_format' => 'array',
        ])
        ->addLink('icaew_linkedin_link', [
            'label' => 'ICAEW Linkedin Link',
            'return_format' => 'array',
        ])
        ->addLink('british_business_bank_website', [
            'return_format' => 'array',
        ])
        ->addLink('icaew_website', [
            'label' => 'ICAEW Website',
            'return_format' => 'array',
        ])
        ->addText('newsletter_title')
        ->addTextarea('newsletter_description', [
            'new_lines' => 'br',
        ])
        ->addWysiwyg('bottom_notice');

return $theme_options;
