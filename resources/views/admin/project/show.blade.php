@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ $project->project_name }}
        </h2>
        <ul class="list-unstyled ">
            <li>{{ $project->creation_date }}</li>
            <li class="my-3">{{ $project->visibility }}</li>
            @if ($project->on_work == 1)
                <li>
                    <div class="circle work"></div>
                </li>
            @else
                <li>
                    <div class="circle done"></div>
                </li>
            @endif
        </ul>
    @endsection
