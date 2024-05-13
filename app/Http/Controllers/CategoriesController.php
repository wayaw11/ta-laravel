<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Category',
            'user' => Auth::user(),
            'category' => Categories::all()
        ];
        return view('categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Category',
            'user' => Auth::user(),
        ];
        return view('categories.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        Categories::create(['name' => $name, 'description' => $description]);
        return redirect()->route('categories.index')->with('success', "Kategori $name berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories, $id)
    {
        $data = [
            'title' => $categories->all()->find($id)->name,
            'data' => $categories->all()->find($id),
            'user' => Auth::user()
        ];
        return view('categories.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories, $id)
    {
        $data = [
            'data' => $categories->all()->find($id),
            'title' => 'Produk',
            'user' => Auth::user()
        ];
        return view('categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories, $id)
    {
        $name = $request->name;
        $description = $request->description;
        $category = Categories::find($id);
        $category->update(['name' => $name, 'description' => $description]);
        return redirect()->route('categories.index')->with('success', "Kategori $name berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories, $id)
    {
        $categories->destroy($id);
    }
}
