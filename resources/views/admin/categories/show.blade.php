@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h2> questa e la pagiona della singola categoris</h2>
                        
                        <pre><h1>{{ $singleCategory->name }}</h1></pre>
                        <h1><i class="{{ $singleCategory->icon }}"></i></h1>
                        <pre><h1>{{ $singleCategory->id }}</h1></pre>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
