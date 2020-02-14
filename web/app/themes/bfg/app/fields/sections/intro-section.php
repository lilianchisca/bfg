<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$intro_section = new FieldsBuilder('intro_section');

$intro_section
    ->addText('pretitle')
        ->setWidth('50')
    ->addTextarea('title', [
        'new_lines' => 'br',
    ])
        ->setWidth('50')
    ->addImage('background_image', [
        'return_format' => 'url',
    ])
        ->setWidth('50')
    ->addWysiwyg('description')
        ->setWidth('50')
    ->addLink('button_1', [
        'return_format' => 'array',
    ])
        ->setWidth('33')
    ->addLink('button_2', [
        'return_format' => 'array',
    ])
        ->setWidth('33')
    ->addLink('bottom_link', [
        'return_format' => 'array',
    ])
        ->setWidth('34');

return $intro_section;
