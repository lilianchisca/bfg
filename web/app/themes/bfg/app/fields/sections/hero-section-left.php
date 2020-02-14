<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero_section_left = new FieldsBuilder('hero_section_left', ['label' => 'Hero Section (Left)']);

$hero_section_left
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
        ->setWidth('50')
    ->addLink('button_2', [
        'return_format' => 'array',
    ])
        ->setWidth('50')
    ->addText('callout_pretitle')
        ->setWidth('50')
    ->addText('callout_title')
        ->setWidth('50')
    ->addLink('callout_button', [
        'return_format' => 'array',
    ])
        ->setWidth('50')
    ->addWysiwyg('callout_description')
        ->setWidth('50');

return $hero_section_left;
