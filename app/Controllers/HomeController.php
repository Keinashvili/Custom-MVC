<?php

namespace app\app\Controllers;

use app\app\core\Controller;
use app\models\Product;
use app\requests\ProductRequest;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return $this->view('index.php', compact('products'));
    }

    public function show($id)
    {
        $products = Product::findOrFail($id);
        return parent::view('show.php', compact('products')); // View function can only take one data and only with compact method
    }

    public function create()
    {
        return parent::view('create.php');
    }

    public function store()
    {
        Product::create([
            'title' => 'cus_title',
            'price' => 25,
            'list_price' => 23,
            'brand' => 'testBrand',
            'image' => 'image',
            'description' => 'test description'
        ]);

        header('Location: /');
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return parent::view('edit.php', compact('products'));
    }

    public function update($id)
    {
        // TODO  should make custom requests for the validation and data
    }

    public function destroy($id)
    {
        Product::delete($id);
        header('Location: /');
    }
}
