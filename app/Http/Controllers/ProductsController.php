<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backend.products.index', [
            'products' => $products
        ]);

    }

    public function show($id)
    {
//        $products = Products::find($id);
//
//        return view('backend.products', ['products' => $products]);$products
    }

    public function create()
    {
        return view('backend.products.create');

    }

    public function store(Request $request)
    {
        $request->validate([
        'ProductCategory' => 'required',
        'ProductName' => 'required',
        'ProductPrice' => 'required'
        ]);

        $product = new Product([
            'ProductName' => $request->get('ProductName'),
            'ProductCategory' => $request->get('ProductCategory'),
            'ProductPrice' => $request->get('ProductPrice'),
        ]);

        $product->save();
        return redirect(route('products.index'))->with('Product toegevoegd!');
    }

    public function edit(Product $products)
    {

    }

    public function update(Request $request, Product $products)
    {

    }

    public function destroy()
    {

    }

}
