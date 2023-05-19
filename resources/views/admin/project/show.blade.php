@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="list-unstyled card p-3 mt-4">
            <li>
                <a href="{{ route('admin.project.index')}}" class="btn btn-sm btn-danger">Back</a>
                <h2 class="fs-4 text-secondary my-4">
                    {{ $project->nome }}
                </h2>
            </li>
            <li>{{ $project->descrizione }}</li>
            <li class="my-3">Creation Date : {{ $project->data_di_creazione }}</li>
            @if ($project->completato == 1)
                <li class="d-flex align-items-center gap-2">  
                    Completato: <div class="circle done"></div>
                </li>
            @else
                <li class="d-flex align-items-center gap-2">
                    Completato: <div class="circle work"></div>
                </li>
            @endif
            @if ($project->riscosso == 1)
                <li class="d-flex align-items-center gap-2">  
                     Riscosso: <div class="circle done"></div>
                </li>
            @else
                <li class="d-flex align-items-center gap-2">
                    Riscosso: <div class="circle work"></div>
                </li>
            @endif
        </ul>
    @endsection
