<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryes = Category::all();
        $data = [
            "categoryes" => $categoryes,
        ];

        return view('admin.categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> all();

        $newCategory = new category();

        $newCategory->name = $request['name'];
        $newCategory->icon = $request['icon'];

        $newCategory->save();

        return redirect()->route('admin.categories.show',$newCategory->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $categoryes = Category::all();
        $singleCategory = Category::find($id);
        $data = [
            "singleCategory" => $singleCategory
            // "singleCategory" => $categoryes[$id],
        ];
        // dd($data);
        return view('admin.categories.show', $data);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $data=[
            'category' => $category
        ];
        return view('admin.categories.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
       $data = $request -> all();

       $category->name = $data['name'];
       $category->icon = $data['icon'];

       $category->save();

       return redirect()->route('admin.categories.show',$category->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
