<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('builder');

$page
    ->setGroupConfig('hide_on_screen', [
        'the_content',
        'featured_image',
        'slug',
        'author'
    ]);

$page
    ->setLocation('post_type', '==', 'page');

$page
    ->addFields(get_field_partial('partials.sections'));

return $page;
