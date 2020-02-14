<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$featured_blocks = new FieldsBuilder('featured_blocks');

$featured_blocks
    ->addText('title')
    ->addRepeater('blocks', ['button_label' => 'Add Block'])
        ->addTextarea('title', [
            'new_lines' => 'br',
        ])
        ->addWysiwyg('description')
        ->addLink('button', [
            'return_format' => 'array',
        ])
        ->addImage('image', [
            'return_format' => 'url',
        ])
        ->endRepeater();

return $featured_blocks;
