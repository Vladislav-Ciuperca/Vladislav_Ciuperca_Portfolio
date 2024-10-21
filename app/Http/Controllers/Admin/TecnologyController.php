<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tecnology;
use Illuminate\Http\Request;

class TecnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tecnologies = Tecnology::all();
        $data = [
            "tecnologies" => $tecnologies,
        ];

        return view('admin.tecnologies.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tecnologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> all();

        $newTecnology = new Tecnology();

        $newTecnology->name = $request['name'];
        $newTecnology->icon = $request['icon'];

        $newTecnology->save();

        return redirect()->route('admin.tecnologies.show',$newTecnology->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $singleTecnology = Tecnology::find($id);
        $data = [
            "singleTecnology" => $singleTecnology
        ];
        return view('admin.tecnologies.show', $data);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tecnology $tecnology)
    {
        $data=[
            'tecnology' => $tecnology
        ];
        return view('admin.tecnologies.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tecnology $tecnology)
    {
       $data = $request -> all();

       $tecnology->name = $data['name'];
       $tecnology->icon = $data['icon'];

       $tecnology->save();

       return redirect()->route('admin.tecnologies.show',$tecnology->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnology $tecnology)
    {
        $tecnology->delete();
        return redirect()->route('admin.tecnologies.index');
    }
}
