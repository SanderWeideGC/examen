<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        dd('kantine index');

    }

    public function show($id)
    {
        $products = Products::find($id);

        return view('backend.products', ['products' => $products]);
    }

    public function create()
    {
    //        dd('create');
        return view('backend.products.create');
    }

    public function store()
    {

    }

    public function edit(Products $products)
    {

    }

    public function update(Request $request, Products $products)
    {

    }

    public function destroy()
    {

    }

}
