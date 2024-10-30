@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h2> questa e la pagiona del Progetto numero {{ $singleProject->id }}</h2>

                        <h1>Nome</h1>
                        <h3>{{ $singleProject->name }}</h3>
                        <hr>

                        <h1>info category</h1>
                        <h3>{{ $singleProject->category->id}}</h3>
                        <h3>{{ $singleProject->category->name}}</h3>
                        <hr>

                        <img src="{{ $singleProject->img }}" alt="">
                        <h1>{{ $singleProject->description }}</h1>
                        <a href="{{ $singleProject->codeLink }}">Guarda questo progetto su GitHub</a>

                        <a href="{{ route('admin.projects.edit', $singleProject->id) }}">
                            <button class="btn btn-primary d-flex">Modifica</button>
                        </a>

                        <form action="{{ route('admin.projects.destroy',$singleProject->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit">Delete This Project</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
