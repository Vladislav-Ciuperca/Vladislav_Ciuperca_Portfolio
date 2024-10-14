@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h2> questa e la pagiona del singolo progetto</h2>

                        <pre><h1>{{ $singleProject->name }}</h1></pre>
                        <img src="{{ $singleProject->img }}" alt="">
                        <pre><h1>{{ $singleProject->description }}</h1></pre>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
