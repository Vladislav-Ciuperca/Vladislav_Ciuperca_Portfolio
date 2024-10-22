@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">

            <a href="{{url('admin/projects/create')}}"><button class="btn btn-primary">Aggiungi un Progetto</button></a>

            @foreach ($projects as $project)
                <a class="col-md-4" href="{{ url('/admin/projects',$project) }}">

                        <div class="card border mt-5">
                            <div class="card-header">{{$project->name }} </div>

                            <div class="card-body">

                                <img class="w-100" src="{{ $project->img }}" alt="">

                                @foreach ($project->technologies as $technology)
                                    <pre>{{$technology->name}}</pre>
                                @endforeach

                                <h1>{{ $project->category->name}}</h1>


                            </div>
                        </div>

                </a>
            @endforeach
        </div>
    </div>
@endsection
