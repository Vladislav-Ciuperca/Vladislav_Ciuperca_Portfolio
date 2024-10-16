@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h2> questa e la pagiona del singolo progetto</h2>

                        <h1>{{ $singleProject->name }}</h1>
                        <h1>{{ $singleProject->id }}</h1>
                        <img src="{{ $singleProject->img }}" alt="">
                        <h1>{{ $singleProject->description }}</h1>
                        <a href="{{$singleProject->codeLink}}">Guarda questo progetto su GitHub</a>

                        <a href="{{route('admin.projects.edit', $singleProject->id)}}">
                            <button class="btn btn-primary d-flex">Modifica</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
