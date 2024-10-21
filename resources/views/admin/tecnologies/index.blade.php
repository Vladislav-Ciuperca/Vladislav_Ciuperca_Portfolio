@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        questa e la pagiona delle tecnologie

                        <a class="btn btn-primary" href="{{ route('admin.tecnologies.create')}}">Aggiungi una nuova tecnologia</a>

                        @foreach ($tecnologies as $tecnology)
                        <a href="{{ route('admin.tecnologies.show', $tecnology->id) }}">
                            <pre><h1>{{ $tecnology->name }}</h1></pre>
                            <h1><i class="{{ $tecnology->icon }}"></i></h1>

                            <a href="{{ route('admin.tecnologies.edit', $tecnology->id) }}">
                                <button class="btn btn-primary d-flex">Modifica</button>
                            </a>

                            <form action="{{ route('admin.tecnologies.destroy', $tecnology->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">Delete This Project</button>
                            </form>
                        @endforeach

                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
