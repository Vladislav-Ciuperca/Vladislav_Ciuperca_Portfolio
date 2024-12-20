<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
// use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $data = [
            "categories" => $categories,
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
        $request ->all();

        $newCategory = new Category();

        $newCategory->name = $request["name"];
        $newCategory->icon = $request["icon"];
        
        $newCategory->save();

        return redirect()->route('admin.categories.show', $newCategory->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $singleCategory = Category::find($category->id);

        $data = [
            "singleCategory" => $singleCategory
        ];
        return view('admin.categories.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        $data =[
            'category'=> $category
        ];
        return view('admin.categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request -> all();

        $category->name= $data['name'];
        $category->icon= $data['icon'];
        
        $category->save();

        return redirect()->route('admin.categories.show', $category->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return Redirect()->route('admin.categories.index');
    }
}
