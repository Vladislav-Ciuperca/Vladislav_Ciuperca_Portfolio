@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-8 ofset-2">
                <h1>Aggiungi una nupvav caegoria</h1>
                <form method="POST" action="{{ route('admin.technologies.update',$technology->id) }}">
                    @method('PUT')
                    @csrf
                    {{-- name --}}
                    <label for="basic-url" class="form-label">Nome Della tecnologia</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Default</span>
                        <input type="text" class="form-control" name="name" value="{{$technology->name}}">
                    </div>

                    {{-- icon --}}
                    <label for="basic-url" class="form-label">nome dell icona</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Default</span>
                        <input type="text" class="form-control" name="icon" value="{{$technology->icon}}">
                    </div>

                    <button class="btn btn-primary" type="submit">Aggiungi</button>

                </form>
            </div>
        </div>
    </div>
@endsection
