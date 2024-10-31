@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-8 ofset-2">
                <h1>Aggiungi un progetto</h1>
                <form method="POST" action="{{ route('admin.projects.update', $singleProject->id) }}">
                    @method('PATCH')
                    @csrf
                    {{-- name --}}
                    <label for="basic-url" class="form-label">Nome Del Progetto</label>
                    @error('name')
                    <label for="basic-url" class="error_message vibrate">
                        * il campo "nome" è obbligatorio *
                    </label>
                @enderror
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nome</span>
                        <input type="text" class="form-control" name="name" value="{{ $singleProject->name }}">
                    </div>

                    {{-- img --}}
                    <label for="basic-url" class="form-label">Immagine</label>
                    @error('img')
                        <label for="basic-url" class="error_message vibrate">
                            * il campo "immagine" è obbligatorio *
                        </label>
                    @enderror
                    <div class="input-group mb-3">
                        <span class="input-group-text">Default</span>
                        <input type="text" class="form-control" name="img" value="{{ $singleProject->img }}">
                    </div>

                    {{-- descritpion --}}
                    <label for="basic-url" class="form-label">Descrizione</label>
                    @error('description')
                        <label for="basic-url" class="error_message vibrate">
                            * il campo "Descrizione" è obbligatorio *
                        </label>
                    @enderror
                    <div class="input-group mb-3">
                        <span class="input-group-text">Descrizione</span>
                        <input type="text" class="form-control" name="description"
                            value="{{ $singleProject->description }}">
                    </div>


                    {{-- GithubForm --}}
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Nome Della Repository</label>
                        @error('codeLink')
                            <label for="basic-url" class="error_message vibrate">
                                * il campo "Nome Della Repository" è obbligatorio *
                            </label>
                        @enderror
                        <div class="input-group">
                            <span class="input-group-text">https://github.com/Vladislav-Ciuperca/</span>
                            <input type="text" class="form-control" name="codeLink"
                                value="{{ Str::after($singleProject->codeLink,'https://github.com/Vladislav-Ciuperca/') }}">
                                {{-- value="{{ $singleProject->codeLink }}"> --}}
                        </div>
                    </div>

                    {{-- category_id --}}
                    <label for="basic-url" class="form-label">Seleziona una categoria</label>
                    @error('category_id')
                        <label for="basic-url" class="error_message vibrate">
                            * il campo "categoria" è obbligatorio *
                        </label>
                    @enderror
                    <div class="input-group mb-3">
                        <label class="input-group-text">Options</label>
                        <select class="form-select" name="category_id">
                            <option value="1">Back-End</option>
                            <option value="2">Front-End</option>
                            <option value="3">Design only</option>
                        </select>
                    </div>


                    <button class="btn btn-primary" type="submit">Modifica</button>

                </form>
            </div>
        </div>
    </div>
@endsection
