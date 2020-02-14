<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$sections = new FieldsBuilder('sections');

$sections
    ->addFlexibleContent('sections', ['button_label' => 'Add Section'])
        ->addLayout(get_field_partial('sections.hero-section-center'))
        ->addLayout(get_field_partial('sections.hero-section-left'))
        ->addLayout(get_field_partial('sections.intro-section'))
        ->addLayout(get_field_partial('sections.featured-blocks'))
        ->addLayout(get_field_partial('sections.featured-content'))
        ->addLayout(get_field_partial('sections.latest-news'))
        ->addLayout(get_field_partial('sections.testimonials-slider'))
        ->addLayout(get_field_partial('sections.timeline'));

return $sections;
