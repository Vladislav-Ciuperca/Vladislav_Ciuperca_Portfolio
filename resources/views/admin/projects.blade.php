@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        questa e la pagiona dei progetti

                        @foreach ($projects as $project)
                            <pre><h1>{{ $project->name }}</h1></pre>

                            <img src="{{$project->img}}" alt="">

                            @foreach (json_decode($project->tecnologies) as $item)
                                <pre>{{$item}}</pre>
                            @endforeach

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
