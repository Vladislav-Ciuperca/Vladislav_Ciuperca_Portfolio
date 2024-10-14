@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">

            @foreach ($projects as $project)
                <a class="col-md-4" href="{{ url('/admin/projects',$project) }}">

                        <div class="card border">
                            <div class="card-header">{{ __('Dashboard') }}</div>

                            <div class="card-body">
                                questa e la pagiona dei progetti

                                <pre><h1>{{ $project->name }}</h1></pre>

                                <img class="w-100" src="{{ $project->img }}" alt="">

                                @foreach (json_decode($project->tecnologies) as $item)
                                    <pre>{{ $item }}</pre>
                                @endforeach
                            </div>
                        </div>

                </a>
            @endforeach
        </div>
    </div>
@endsection
