@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="list-unstyled card p-3 mt-4">
            <li>
                <a href="{{ route('admin.project.index')}}" class="btn btn-sm btn-danger">Back</a>
                <h2 class="fs-4 text-secondary my-4">
                    {{ $project->project_name }}
                </h2>
            </li>
            <li>{{ $project->description }}</li>
            <li class="my-3">Creation Date : {{ $project->creation_date }}</li>
            <li class="my-3">Price : {{ $project->price }} €</li>
            <li class="my-3">Visibility : <span class="text-uppercase">{{ $project->visibility }}</span></li>
            @if ($project->done == 1)
                <li class="d-flex align-items-center gap-2">  
                    Done: <div class="circle done"></div>
                </li>
            @else
                <li class="d-flex align-items-center gap-2">
                    Done: <div class="circle work"></div>
                </li>
            @endif
        </ul>
    @endsection
