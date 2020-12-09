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

    public function edit(Product $product)
    {
        return view('backend.products.edit', compact('product'));
    }

    public function update(Product $product)
    {
        request()->validate([
            'ProductCategory' => 'required',
            'ProductName' => 'required',
            'ProductPrice' => 'required'
        ]);

        $product->ProductName = request()->get('ProductName');
        $product->ProductCategory = request()->get('ProductCategory');
        $product->ProductPrice = request()->get('ProductPrice');
        $product->save();
        
        return redirect(route('products.index'))->with('succes', 'Product gewijzigd!');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect(route('products.index'))->with('succes', 'Product verwijderd!');
    }

}
