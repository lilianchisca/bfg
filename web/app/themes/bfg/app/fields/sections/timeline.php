<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$timeline = new FieldsBuilder('timeline');

$timeline
    ->addText('section_title')
        ->setWidth('50')
    ->addText('pretitle')
        ->setWidth('50')
    ->addText('title')
        ->setWidth('50')
    ->addLink('button', [
        'return_format' => 'array',
    ])
        ->setWidth('50')
    ->addRepeater('items', ['button_label' => 'Add Item'])
        ->addText('date')
        ->addText('title')
        ->addWysiwyg('description')
        ->endRepeater();

return $timeline;
