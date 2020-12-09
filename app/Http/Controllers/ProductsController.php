<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // haalt alle producten op
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

    // het doorsturen naar de create.blade
    public function create()
    {
        return view('backend.products.create');

    }

    // het plaatsen van de ingevulde gegevens en sturen naar de database
    public function store(Request $request)
    {
        // controleert of alles met required is ingevuld
        $request->validate([
            'ProductCategory' => 'required',
            'ProductName' => 'required',
            'ProductPrice' => 'required'
        ]);

        // nieuw product aangemaakt en waardes worden gevuld
        $product = new Product([
            'ProductName' => $request->get('ProductName'),
            'ProductCategory' => $request->get('ProductCategory'),
            'ProductPrice' => $request->get('ProductPrice'),
        ]);

        // opslaan van product in database
        $product->save();
        return redirect(route('products.index'))->with('Product toegevoegd!');
    }

    // edit pagina openen en met de gegevens van het product
    public function edit(Product $product)
    {
        return view('backend.products.edit', compact('product'));
    }

    // het updaten van het product
    public function update(Product $product)
    {
        request()->validate([
            'ProductCategory' => 'required',
            'ProductName' => 'required',
            'ProductPrice' => 'required'
        ]);

        // de waardes uit het formulier worden aan het product meegegeven
        $product->ProductName = request()->get('ProductName');
        $product->ProductCategory = request()->get('ProductCategory');
        $product->ProductPrice = request()->get('ProductPrice');

        // het product met de aangepaste waardes wordt in de database opgeslagen
        $product->save();
        return redirect(route('products.index'))->with('succes', 'Product gewijzigd!');
    }

    // het verwijderen van het product
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('products.index'))->with('succes', 'Product verwijderd!');


    }

    public function frontend(){
//       Alle producten ophalen
        return view('frontend.kantine', [
            'products' => Product::all()
        ]);
    }

}
