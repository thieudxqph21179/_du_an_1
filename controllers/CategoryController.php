<?php
require_once(URL_MODEL . 'Category.php');
class CategoryController extends Controller
{

    static function index()
    {
        $control = new static();

        $categories = Category::all();

        // var_dump($cate);die;

        // var_dump($categories);
        $control->View('server/categories/index', [
            'categories' => $categories 
        ]);
    }
}
