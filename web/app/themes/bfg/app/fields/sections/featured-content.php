<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$featured_content = new FieldsBuilder('featured_content');

$featured_content
    ->addText('title')
    ->addWysiwyg('content');

return $featured_content;
