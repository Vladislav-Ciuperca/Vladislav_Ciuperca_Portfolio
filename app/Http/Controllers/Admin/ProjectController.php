<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project;
use App\Models\Technology;
use App\Models\Category;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = Category::all();
        $technologies = Technology::all();
        $projects = project::all();

        $data = [
            "projects" => $projects,
            "technologies" => $technologies,
            "categories" => $categories,
        ];
        return view('admin.projects.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $technologies = Technology::all();
        $data = [
            'categories' => $categories,
            'technologies' => $technologies,
        ];
        return view('admin.projects.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'img' => ['required'],
            'description' => ['required'],
            'codeLink' => ['required'],
            'category_id' => ['required'],
            'technology_id' => ['array'],
        ]);

        $data = $request->all();

        // dd($data);

        $newProject = new project();
        $newProject->name = $data['name'];
        $newProject->img = $data['img'];
        $newProject->description = $data['description'];
        $newProject->codeLink = 'https://github.com/Vladislav-Ciuperca/' .  $data['codeLink'];
        $newProject->category_id = $data['category_id'];

        $newProject->save();

        
        $newProject->technologies()->attach($data['technologies']);

        return redirect()->route('admin.projects.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        // $categories = Category::all();
        // $technologies = Technology::all();
        $data = [
            "singleProject" => $project,
            // "categories" => $categories,
            // "technologies" => $technologies,
        ];
        return view('admin.projects.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project)
    {
        $categories = Category::all();
        $technologies = Technology::all();
        $data = [
            "singleProject" => $project,
            "categories" => $categories,
            "technologies" => $technologies,
        ];
        // dd($data);
        return view('admin.projects.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, project $project)
    {
        $data = $request->all();


        $project->name = $data['name'];
        $project->img = $data['img'];
        $project->description = $data['description'];
        $project->codeLink = $data['codeLink'];
        $project->category_id = $data['category_id'];

        $project->save();

        $project->technologies()->sync($data['technologies']);

        // dd($project);

        return redirect()->route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = project::findOrFail($id);
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
