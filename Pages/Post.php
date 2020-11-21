<?php

namespace Pages;

require_once 'Fields/Fields.php';
require_once 'Fields/Text.php';

use Fields\Text;

class Post
{
    public static function fields()
    {
        return [
            Text::make('Example input label', 'title')
                ->placeholder('Example placeholder of the input')
                ->required(),

            Text::make('Example input label', 'description')
                ->placeholder('Example placeholder of the input')
        ];

    }
}