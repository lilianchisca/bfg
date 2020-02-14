<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$latest_news = new FieldsBuilder('latest_news');

$latest_news
    ->addText('title');

return $latest_news;
