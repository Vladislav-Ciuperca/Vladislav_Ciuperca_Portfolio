@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        questa e la pagiona delle categorie

                        <a class="btn btn-primary" href="{{ route('admin.categories.create')}}">Aggiungi una nuova categoria</a>
                        {{-- $@dd($categories) --}}

                        @foreach ($categories as $category)
                        <a href="{{ route('admin.categories.show', $category->id) }}">
                            <pre><h1>{{ $category->name }}</h1></pre>
                            <h1><i class="{{ $category->icon }}"></i></h1>

                            <a href="{{ route('admin.categories.edit', $category->id) }}">
                                <button class="btn btn-primary d-flex">Modifica</button>
                            </a>

                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">Delete This Category</button>
                            </form>
                        @endforeach

                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
 