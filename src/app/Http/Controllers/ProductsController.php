<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('productos.index', compact('products'));
    }

    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('productos.show', compact('product'));
    }
}