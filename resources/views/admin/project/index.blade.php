@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Project List
    </h2>
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Visibility</th>
                <th scope="col">Price</th>
                <th scope="col">Done</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->creation_date }}</td>
                    <td>{{ $project->visibility }}</td>
                    <td>{{ $project->price }}</td>
                    @if ($project->on_work == 1)
                        <td><div class="circle work"></div></td>
                    @else
                        <td><div class="circle done"></div></td>
                    @endif
                    <td >
                        <ul class="d-flex gap-1 list-unstyled">
                            <li><a href="{{ route('admin.project.show', $project->id) }}" class="btn btn-sm btn-success">Show</a></li>
                            <li><a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a></li>
                            <li><a href="{{ route('admin.project.destroy', $project->id) }}" class="btn btn-sm btn-danger">Delete</a></li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection