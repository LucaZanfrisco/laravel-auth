@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-4">
            <h2 class="fs-4 text-secondary">
                Project List
            </h2>
            <a href="{{ route('admin.project.create') }}" class="btn btn-dark">Add Project</a>
        </div>

        @if (session('message'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3" id="message">
            <div class="toast show align-items-center my-bg-success border-0" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('message') }}
                    </div>
                    <button type="button" class="btn-close me-3 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif

        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
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
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->creation_date }}</td>
                        <td class="text-uppercase">{{ $project->visibility }}</td>
                        <td>{{ $project->price }}</td>
                        @if ($project->done == 1)
                            <td>
                                <div class="circle done"></div>
                            </td>
                        @else
                            <td>
                                <div class="circle work"></div>
                            </td>
                        @endif
                        <td>
                            <ul class="d-flex gap-1 list-unstyled">
                                <li><a href="{{ route('admin.project.show', $project) }}"
                                        class="btn btn-sm btn-success">Show</a></li>
                                <li><a href="{{ route('admin.project.edit', $project) }}"
                                        class="btn btn-sm btn-warning">Edit</a></li>
                                <li>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $project->id }}">
                                        Delete
                                    </button>
                                    <div class="modal fade" id="delete{{ $project->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>DELETE PROJECT: {{ $project->project_name }}</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('admin.project.destroy', $project) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-sm btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
