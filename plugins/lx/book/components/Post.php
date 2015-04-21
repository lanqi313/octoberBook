<?php namespace Lx\Book\Components;

use Cms\Classes\ComponentBase;

class Post extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Post Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

}