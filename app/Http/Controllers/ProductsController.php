<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'products' => Products::all(),
            'user' => Auth::user(),
            'title' => 'Produk'
        ];
        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Produk',
            'user' => Auth::user()
        ];
        return view('products.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $photo = $request->file('photo') ? $request->file('photo')->store('public/products-img') : 'default.jpg';
        Products::create(['name' => $name, 'price' => $price, 'img' => str_replace('public/products-img/', '', $photo), 'description' => $description]);
        return redirect()->route('products.index')->with('success', "Produk $name berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products, $id)
    {
        $data = [
            'title' => $products->all()->find($id)->name,
            'data' => $products->all()->find($id),
            'user' => Auth::user()
        ];
        return view('products.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products, $id)
    {
        $data = [
            'data' => $products->all()->find($id),
            'title' => 'Produk',
            'user' => Auth::user()
        ];
        return view('products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products, $id)
    {
        $name = $request->name;
        $oldImg = $request->oldImg;
        $price = $request->price;
        $description = $request->description;
        $product = Products::find($id);
        if ($request->file('photo')) {
            if ($oldImg !== 'default.jpg') {
                Storage::delete('public/products-img/' . $oldImg);
            }
            $photo = $request->file('photo')->store('public/products-img');
            $data = ['name' => $name, 'price' => $price, 'img' => str_replace('public/products-img/', '', $photo), 'description' => $description];
            $product->update($data);
        } else {
            $product->update(['name' => $name, 'price' => $price, 'img' => $oldImg, 'description' => $description]);
        }
        return redirect()->route('products.index')->with('success', "Produk $name berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products, $id)
    {
        $img = $products->all()->find($id)->img;
        if ($img !== 'default.jpg') {
            Storage::delete('public/products-img/' . $img);
        }
        $products->destroy($id);
        // return redirect()->route('products.index')->with('success', "Produk berhasil dihapus");
    }
    public function check(Request $request)
    {
        $form = $request->keys()[0];
        $args = $form == 'name' ? 'required' : 'required|integer';
        $validate = $request->validate([
            $form => $args
        ]);
        return response()->json(['success' => true]);
    }
    public function checkfile(Request $request)
    {
        $form = $request->file;
        $rules = [
            'file' => 'required|file|mimes:jpeg,png,jpg,gif|max:1024',
        ];
        // $args = $form == 'name' ? 'required' : 'required|integer';
        $validate = $request->validate($rules);
        return response()->json(['success' => true]);
    }
}
