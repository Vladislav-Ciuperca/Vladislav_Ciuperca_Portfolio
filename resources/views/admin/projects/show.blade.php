@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border">
                    <div class="card-header">{{ $singleProject->name }}</div>

                    <div class="card-body">


                        <img src="{{ $singleProject->img }}" alt="">
                        <h1>{{ $singleProject->description }}</h1>


                        <h3>{{ $singleProject->category->name }}</h3>

                        @foreach ($singleProject->technologies as $technology)
                            <pre>{{ $technology->name }}</pre>
                        @endforeach

                            <hr>

                            <a href="https://github.com/Vladislav-Ciuperca/{{ $singleProject->codeLink }}" target="_blank">Guarda questo progetto su GitHub</a>
                            <a href="{{ route('admin.projects.edit', $singleProject->id) }}">
                                <button class="btn btn-primary d-flex">Modifica</button>
                            </a>

                            <form action="{{ route('admin.projects.destroy', $singleProject->id) }}" method="POST">
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
