<?php
require_once(URL_MODEL . 'Product.php');
require_once(URL_MODEL . 'Category.php');

class ProductController extends Controller
{

    static function index()
    {
        $control = new static();

        $products = Product::all();
        // var_dump($products);
        $control->View('server/products/index', [
            'products' => $products
        ]);
    }

    static function CreateProduct()
    {
        $control = new static();
        $categories = Category::all();
        $control->View(
            'server/products/create',

            ['categories' => $categories]
        );
    }


     function StoreProduct()
    {
        // var_dump($_POST);die;
        $name = $_POST['name'];
        $price = $_POST['price'];
        $sale_price = $_POST['price_sale'];
        $category_id = $_POST['category_id'];
        $desc_slug = $_POST['slug_desc'];
        $text_desc = $_POST['text_desc'];
        $products = new  Product();
        $products->insert([
             'name' => $name,
             'price' => $price,
             'price_sale' => $sale_price,
             'category_id' => $category_id,
             'slug_desc' => $desc_slug, 
             'text_desc' => $text_desc, 
             'category_id' => $category_id,  
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
        ]);

        //  var_dump($products);

        if ($products) {
            header('Location:?admin&act=products');
        }
    }


    static  function editProduct()
    {
        $control = new static();
        $categories = Category::all();
        $product = Product::where('id', '=', $_GET['id'])->get();
        // var_dump($product);
        // die;

        $control->View(
            'server/products/update',
            [
                'categories' => $categories,
                'product' => $product
            ]
        );
    }

    static function UpdateProduct()
    {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $sale_price = $_POST['sale_price'];
        $category_id = $_POST['category_id'];
        $desc_slug = $_POST['desc_slug'];
        $text_desc = $_POST['text_desc'];

        $products = Product::rawQuery(' update products SET name="' . $name .'" ,price="' . $price . '",price_sale="'.$sale_price.'"
        ,category_id=' . $category_id . ',slug_desc ="' . $desc_slug . '",text_desc="' . $text_desc . '" where id=' . $id .' ');
   
        header('Location:?admin&act=products');
    
    }
}
