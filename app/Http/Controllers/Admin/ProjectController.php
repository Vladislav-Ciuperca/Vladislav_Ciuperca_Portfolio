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
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new project();
        $newProject->name = $data['name'];
        $newProject->img = $data['img'];
        $newProject->description = $data['description'];
        $newProject->codeLink = $data['codeLink'];
        $newProject->technology_id = $data['technology_id'];

        $newProject->save();

        return redirect()->route('admin.projects.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        $data = [
            "singleProject" => $project,
        ];
        return view('admin.projects.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project)
    {
        $data = [
            "singleProject" => $project,
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
        $project->technology_id = $data['technology_id'];

        $project->save();

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
