@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        questa e la pagiona delle categorie

                        @foreach ($categoryes as $category)
                            <pre><h1>{{ $category->name }}</h1></pre>
                            <pre><h1>{{ $category->icon }}</h1></pre>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
