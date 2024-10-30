@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-8 ofset-2">
                <h1>Aggiungi un progetto</h1>
                <form method="POST" action="{{ route('admin.projects.store') }}">
                    @csrf

                    {{-- name --}}
                    <label for="basic-url" class="form-label">Nome Del Progetto</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Default</span>
                        <input type="text" class="form-control" name="img">
                    </div>

                    {{-- img --}}
                    <label for="basic-url" class="form-label">Immagine</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Default</span>
                        <input type="text" class="form-control" name="name">
                    </div>

                    {{-- descritpion --}}
                    <label for="basic-url" class="form-label">Descrizione</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Default</span>
                        <input type="text" class="form-control" name="description">
                    </div>

                    {{-- GithubForm --}}
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Nome Della Repository</label>
                        <div class="input-group">
                            <span class="input-group-text">https://github.com/Vladislav-Ciuperca/</span>
                            <input type="text" class="form-control" name="codeLink">
                        </div>
                    </div>

                    {{-- category_id --}}
                    {{-- <label for="basic-url" class="form-label">Seleziona una tecnologia</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text">Options</label>
                        <select class="form-select" name="technology_id">
                            <option selected>Choose...</option>
                            <option value="1">CSS</option>
                            <option value="2">Bootstrap</option>
                            <option value="3">JavaScript</option>
                            <option value="4">Vuejs</option>
                            <option value="5">PHP</option>
                            <option value="6">Laravel</option>
                        </select>
                    </div> --}}

                    <label for="basic-url" class="form-label">Seleziona una categoria</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text">Options</label>
                        <select class="form-select" name="category_id" palceholder="asd">
                            <option value="" disabled selected>Choose a category...</option>
                            <option value="1">Front-End</option>
                            <option value="2">Back-End</option>
                            <option value="3">Design only</option>
                        </select>
                    </div>
                    @error('category_id')
                        <div class="badje text-bg-danger">You must select a Category first</div>
                    @enderror

                    <button class="btn btn-primary" type="submit">Aggiungi</button>

                </form>
            </div>
        </div>
    </div>
@endsection
