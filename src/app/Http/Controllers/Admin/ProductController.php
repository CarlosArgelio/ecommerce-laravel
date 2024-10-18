<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('admin.productos.index', compact('products'));
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('admin.productos.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('admin.productos.index')->with('success', 'Producto actualizado correctamente');
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.productos.index')->with('success', 'Producto eliminado correctamente');
    }

    public function disable($id)
    {
        $product = Products::findOrFail($id);
        $product->status = 'disabled';
        $product->save();
        return redirect()->route('admin.productos.index')->with('success', 'Producto deshabilitado correctamente');
    }
}