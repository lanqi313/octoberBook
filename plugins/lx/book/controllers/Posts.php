<?php namespace Lx\Book\Controllers;


use Flash;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use ApplicationException;
use Lx\Book\Models\Post;

/**
 * Posts Back-end Controller
 */
class Posts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $bodyClass = 'compact-container';
    public $requiredPermissions = ['lx.book.access_other_posts', 'lx.book.access_posts'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Lx.Book', 'book', 'posts');
        $this->addCss('/plugins/lx/book/assets/css/rainlab.blog-preview.css');
        $this->addCss('/plugins/lx/book/assets/css/rainlab.blog-preview-theme-default.css');

        $this->addCss('/plugins/lx/book/assets/vendor/prettify/prettify.css');
        $this->addCss('/plugins/lx/book/assets/vendor/prettify/theme-desert.css');

        $this->addJs('/plugins/lx/book/assets/js/post-form.js');
        $this->addJs('/plugins/lx/book/assets/vendor/prettify/prettify.js');
    }


    public function index()
    {
        $this->vars['postsTotal'] = Post::count();
        $this->vars['postsPublished'] = Post::isPublished()->count();
        $this->vars['postsDrafts'] = $this->vars['postsTotal'] - $this->vars['postsPublished'];

        $this->asExtension('ListController')->index();
    }

    public function listExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['lx.book.access_other_posts'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function formExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['lx.book.access_other_posts'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function index_onDelete()
    {

        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if ((!$post = Post::find($postId)) || !$post->canEdit($this->user))
                    continue;
                $post->delete();
            }

            Flash::success("Successfully deleted those books.");
        }

        return $this->listRefresh();
    }
    public function index_onBack()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $postId) {
                if ((!$post = Post::find($postId)) || !$post->canEdit($this->user))
                    continue;
                    $post->user_name = "no";
                    $post->published = "0";
                    $post->published_at = NULL;
                    $post->save();
            }
            Flash::success("Successfully backed those books.");
        }
        return $this->listRefresh();
    }

    /**
     * {@inheritDoc}
     */
    public function listInjectRowClass($record, $definition = null)
    {
        if (!$record->published)
            return 'safe disabled';
    }

    public function formBeforeCreate($model)
    {
        $model->user_id = $this->user->id;
    }
    public function onRefreshPreview()
    {
        $data = post('Post');

        $previewHtml = Post::formatHtml($data['content'], true);

        return [
            'preview' => $previewHtml
        ];
    }
}