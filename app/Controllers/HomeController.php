<?php

namespace app\app\Controllers;

use app\app\core\Controller;
use app\app\core\Request;
use app\models\Product;
use app\requests\ProductRequest;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return parent::view('index.php', compact('products'));
    }


    public function show($id)
    {
        $products = Product::findOrFail($id);
        if ($products['id'] != $id){
            http_response_code(404);
            exit();
        }
        return parent::view('show.php', compact('products'));
    }

    public function create()
    {
        return parent::view('create.php');
    }

    public function store(ProductRequest $request)
    {

        $request->validateData('/add');
        Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'list_price' => $request->list_price,
        ]);

        header('Location: /');
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        if ($products['id'] != $id){
            http_response_code(404);
            exit();
        }
        return parent::view('edit.php', compact('products'));
    }

    public function update(ProductRequest $request, $id)
    {
//        $product = Product::findOrFail($id);
//        $product->update(
//            'title' => $request->title,
//            'price' => $request->price,
//            'list_price' => $request->list_price,
//            'brand' => 'testBrand',
//            'image' => 'image',
//            'description' => 'test description'
//        );
        Product::update($id,[
            'title' => $request->title,
//            'price' => $request->price,
//            'list_price' => $request->list_price,
            ]);
        header("Location: /");
    }

    public function destroy($id)
    {
        Product::delete($id);
        header('Location: /');
    }
}
