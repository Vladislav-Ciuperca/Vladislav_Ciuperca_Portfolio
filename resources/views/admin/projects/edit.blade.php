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
                                value="{{ Str::after($singleProject->codeLink, 'https://github.com/Vladislav-Ciuperca/') }}">
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
                        <select class="form-select" name="category_id" palceholder="asd">
                            <option value="" disabled>Choose a category...</option>
                            @foreach ($categories as $index => $category)
                                <option value="{{ $index + 1 }}" @if ($singleProject->category->id == $index + 1) selected @endif>
                                    {{ $category->name }}</option>
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
                        @foreach ($technologies as $index => $technology)
                            <div class="form-check btn-group">
                                <input class="btn-check" type="checkbox"
                                    @foreach ($singleProject->technologies as $item)
                                    @if ($item->id == $index+1)
                                        checked
                                    @endif @endforeach
                                    autocomplete="off" name="technologies[]" value="{{ $technology->id }}"
                                    id="tech-{{ $technology->id }}">
                                <label class="btn btn-outline-primary" for="tech-{{ $technology->id }}">
                                    {{ $technology->name }}
                                </label>

                            </div>
                        @endforeach
                    </div>


                    <button class="btn btn-primary" type="submit">Modifica</button>

                </form>
            </div>
        </div>
    </div>
@endsection
