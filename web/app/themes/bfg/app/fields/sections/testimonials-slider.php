<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$testimonials_slider = new FieldsBuilder('testimonials_slider');

$testimonials_slider
    ->addPostObject('testimonials', [
        'post_type' => ['testimonial'],
        'allow_null' => 0,
        'multiple' => 1,
        'return_format' => 'id',
        'ui' => 1,
    ]);

return $testimonials_slider;
