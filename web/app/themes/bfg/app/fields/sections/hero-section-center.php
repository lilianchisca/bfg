<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero_section_center = new FieldsBuilder('hero_section_center', ['label' => 'Hero Section (Center)']);

$hero_section_center
    ->addTextarea('title', [
        'new_lines' => 'br',
    ])
        ->setWidth('50')
    ->addWysiwyg('description')
        ->setWidth('50')
    ->addLink('button', [
        'return_format' => 'array',
    ])
        ->setWidth('50')
    ->addImage('background_image', [
        'return_format' => 'url',
    ])
        ->setWidth('50');

return $hero_section_center;
