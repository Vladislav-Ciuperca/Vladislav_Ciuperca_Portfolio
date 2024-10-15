@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-8 ofset-2">
                <h1>Aggiungi un progetto</h1>
                <form action="post"
                
                    {{-- name --}}
                    <label for="basic-url" class="form-label">Nome Del Progetto</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    {{-- img --}}
                    <label for="basic-url" class="form-label">Immagine</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    {{-- descritpion --}}
                    <label for="basic-url" class="form-label">Descrizione</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>


                    {{-- GithubForm --}}
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Nome Della Repository</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">https://github.com/Vladislav-Ciuperca/</span>
                            <input type="text" class="form-control" id="basic-url"
                                aria-describedby="basic-addon3 basic-addon4">
                        </div>
                    </div>

                    {{-- category_id --}}
                    <label for="basic-url" class="form-label">Seleziona una tecnologia</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">CSS</option>
                            <option value="2">Bootstrap</option>
                            <option value="3">JavaScript</option>
                            <option value="3">Vuejs</option>
                            <option value="3">PHP</option>
                            <option value="3">Laravel</option>
                        </select>
                    </div>

                    <button class="btn btn-primary">Aggiungi</button>

                </form>
            </div>
        </div>
    </div>
@endsection
