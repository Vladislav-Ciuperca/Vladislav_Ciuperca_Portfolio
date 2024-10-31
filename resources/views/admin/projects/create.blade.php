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
                    @error('name')
                        <label for="basic-url" class="error_message vibrate">
                            * il campo "nome" è obbligatorio *
                        </label>
                    @enderror
                    <div class="input-group mb-3">
                        <span class="input-group-text">Default</span>
                        <input required type="text" class="form-control" name="name">
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
                        <input required type="text" class="form-control" name="img">
                    </div>

                    {{-- descritpion --}}
                    <label for="basic-url" class="form-label">Descrizione</label>
                    @error('description')
                        <label for="basic-url" class="error_message vibrate">
                            * il campo "descrizione" è obbligatorio *
                        </label>
                    @enderror
                    <div class="input-group mb-3">
                        <span class="input-group-text">Default</span>
                        <input required type="text" class="form-control" name="description">
                    </div>

                    {{-- GithubForm --}}
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Nome Della Repository</label>
                        @error('codeLink')
                            <label for="basic-url" class="error_message vibrate">
                                * il campo "Nome della Repository" è obbligatorio *
                            </label>
                        @enderror
                        <div class="input-group">
                            <span class="input-group-text">https://github.com/Vladislav-Ciuperca/</span>
                            <input required type="text" class="form-control" name="codeLink">
                        </div>
                    </div>

                    {{-- category_id --}}
                    <label for="basic-url" class="form-label">Seleziona una categoria</label>
                    @error('category_id')
                        <label for="basic-url" class="error_message vibrate">
                            {{ $message }}
                        </label>
                    @enderror
                    <div class="input-group mb-3">
                        <label class="input-group-text">Options</label>
                        <select class="form-select" name="category_id" palceholder="asd">
                            <option value="" disabled selected>Choose a category...</option>
                            @foreach ($categories as $index => $category)
                                <option value="{{ $index + 1 }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    {{-- technology_id --}}
                    <label for="technology_id" class="form-label">Seleziona Tecnologie</label>
                    @error('technology_id')
                        <label class="error_message vibrate">
                            * Devi selezionare almeno una tecnologia *
                        </label>
                    @enderror
                    <div class="mb-3 ">
                        @foreach ($technologies as $technology)
                            <div class="form-check btn-group">
                                <input class="btn-check" type="checkbox" autocomplete="off" name="technologies[]"
                                    value="{{ $technology->id }}" id="tech-{{ $technology->id }}">
                                <label class="btn btn-outline-primary" for="tech-{{ $technology->id }}">
                                    {{ $technology->name }}
                                </label>
                                
                            </div>
                        @endforeach
                    </div>

                    <button class="btn btn-primary" type="submit">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>
@endsection
