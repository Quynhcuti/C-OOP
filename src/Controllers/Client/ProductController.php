<?php

namespace  Peach\COop\Controllers\Client;

use  Peach\COop\Commons\Controller;
use Peach\COop\Models\Product;

class ProductController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    public function index()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }
    public function detail($id)
    {
        $product = $this->product->findByID($id);

        $this->renderViewClient('product-detail', [
            'product'=> $product
        ]);
    }
}