<?php

namespace app\app\controllers;

use app\app\core\Controller;
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

    public function destroy($id)
    {
        Product::delete($id);
        header('Location: /');
    }
}