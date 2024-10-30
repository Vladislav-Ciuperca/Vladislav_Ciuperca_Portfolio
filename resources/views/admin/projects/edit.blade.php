@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-8 ofset-2">
                <h1>Aggiungi un progetto</h1>
                <form method="POST" action="{{ route('admin.projects.update',$singleProject->id) }}">
                    @method('PATCH')
                    @csrf
                    {{-- name --}}
                    <label for="basic-url" class="form-label">Nome Del Progetto</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Default</span>
                        <input type="text" class="form-control" name="name" value="{{$singleProject->name}}">
                    </div>

                    {{-- img --}}
                    <label for="basic-url" class="form-label">Immagine</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Default</span>
                        <input type="text" class="form-control" name="img" value="{{$singleProject->img}}">
                    </div>

                    {{-- descritpion --}}
                    <label for="basic-url" class="form-label">Descrizione</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Default</span>
                        <input type="text" class="form-control" name="description" value="{{$singleProject->description}}">
                    </div>


                    {{-- GithubForm --}}
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Nome Della Repository</label>
                        <div class="input-group">
                            <span class="input-group-text">https://github.com/Vladislav-Ciuperca/</span>
                            <input type="text" class="form-control" name="codeLink" value="{{$singleProject->codeLink}}">
                        </div>
                    </div>

                    {{-- category_id --}}
                    <label for="basic-url" class="form-label">Seleziona una tecnologia</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text">Options</label>
                        <select class="form-select" name="category_id">
                            <option value="1">Back-End</option>
                            <option value="2">Front-End</option>
                            <option value="3">Design only</option>
                        </select>
                    </div>
                    {{-- <label for="basic-url" class="form-label">Seleziona una tecnologia</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text">Options</label>
                        <select class="form-select" name="category_id">
                            <option selected>{{$singleProject->id}}</option>
                            <option value="1">CSS</option>
                            <option value="2">Bootstrap</option>
                            <option value="3">JavaScript</option>
                            <option value="3">Vuejs</option>
                            <option value="3">PHP</option>
                            <option value="3">Laravel</option>
                        </select>
                    </div> --}}

                    <button class="btn btn-primary" type="submit">Modifica</button>

                </form>
            </div>
        </div>
    </div>
@endsection
