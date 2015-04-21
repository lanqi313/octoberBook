<?php namespace Lx\Book\Controllers;

use Flash;
use BackendMenu;
use Backend\Classes\Controller;
use Lx\Book\Models\Category;

/**
 * Categories Back-end Controller
 */
class Categories extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $requiredPermissions = ['lx.book.access_categories'];
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Lx.Book', 'book', 'categories');
    }
    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if ((!$post = Category::find($postId)) || !$post->canEdit($this->user))
                    continue;

                $post->delete();
            }

            Flash::success('Successfully deleted those categories.');
        }

        return $this->listRefresh();
    }

}