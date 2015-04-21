<?php namespace Lx\Book;

use Backend;
use Controller;
use System\Classes\PluginBase;
use Lx\Book\Classes\TagProcessor;
use Lx\Book\Models\Category;
use Event;

/**
 * Book Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Book',
            'description' => 'No description provided yet...',
            'author'      => 'Lx',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Lx\Book\Components\Post'       => 'blogPost',
            'Lx\Book\Components\Posts'      => 'blogPosts',
            'Lx\Book\Components\Categories' => 'blogCategories'
        ];
    }

    public function registerPermissions()
    {
        return [
            'lx.book.access_posts'       => ['tab' => 'Book', 'label' => 'lx.book::lang.blog.access_posts'],
            'lx.book.access_categories'  => ['tab' => 'Book', 'label' => 'lx.book::lang.blog.access_categories'],
            'lx.book.access_other_posts' => ['tab' => 'Book', 'label' => 'lx.book::lang.blog.access_other_posts']
        ];
    }

    public function registerNavigation()
    {
        return [
            'book' => [
                'label'       => 'Book',
                'url'         => Backend::url('lx/book/posts'),
                'icon'        => 'icon-book',
                'permissions' => ['lx.book.*'],
                'order'       => 500,

                'sideMenu' => [
                    'posts' => [
                        'label'       => 'Books',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('lx/book/posts'),
                        'permissions' => ['acme.blog.access_posts'],
                    ],
                    'categories' => [
                        'label'       => 'Categories',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('lx/book/categories'),
                        'permissions' => ['acme.blog.access_categories']
                    ],
                ]

            ]
        ];
    }
    public function registerFormWidgets()
    {
        return [
            'Lx\Book\FormWidgets\Preview' => [
                'label' => 'Preview',
                'code'  => 'preview'
            ]
        ];
    }
    public function register()
    {
        /*
         * Register the image tag processing callback
         */
        TagProcessor::instance()->registerCallback(function($input, $preview){
            if (!$preview) return $input;

            return preg_replace('|\<img src="image" alt="([0-9]+)"([^>]*)\/>|m',
                '<span class="image-placeholder" data-index="$1">
                    <span class="upload-dropzone">
                        <span class="label">Click or drop an image...</span>
                        <span class="indicator"></span>
                    </span>
                </span>',
            $input);
        });
    }

    public function boot()
    {
        /*
         * Register menu items for the RainLab.Pages plugin
         */
        Event::listen('pages.menuitem.listTypes', function() {
            return [
                'blog-category' => 'Blog category',
                'all-blog-categories' => 'All blog categories'
            ];
        });

        Event::listen('pages.menuitem.getTypeInfo', function($type) {
            if ($type == 'blog-category' || $type == 'all-blog-categories')
                return Category::getMenuTypeInfo($type);
        });

        Event::listen('pages.menuitem.resolveItem', function($type, $item, $url, $theme) {
            if ($type == 'blog-category' || $type == 'all-blog-categories')
                return Category::resolveMenuItem($item, $url, $theme);
        });
    }

}
