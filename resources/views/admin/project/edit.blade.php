@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.project.update', $project->id)}}" method="POST" class="mt-3">
            @csrf
            @method('PATCH')
            <div>
                <label for="project_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="project_name" name="project_name" value="{{ old('project_name', $project->project_name)}}">
            </div>
            <div class="my-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{ old('description', $project->description )}}</textarea>
            </div>
            <div class="my-3">
                <label for="creation_date" class="form-label">Date</label>
                <input type="date" class="form-control" id="creation_date" name="creation_date" value="{{ old('creation_date', $project->creation_date)}}">
            </div>
            <div class="my-3">
                <label for="done" class="form-check-label">Done</label>
                <select type="checkbox" name="done" id="done" class="form-select">
                    <option value="1" {{old('done', $project->done) == 1 ? 'selected' : ''}}>Done</option>
                    <option value="0" {{old('done', $project->done) == 0 ? 'selected' : ''}}>Undone</option>
                </select>
            </div>
            <div class="my-3">
                <label for="visibility" class="form-label">Visibility</label>
                <select name="visibility" id="visibility" class="form-select">
                    <option value="public" {{ old('visibility', $project->visibility) === 'public' ? 'selected' : null}}>Public</option>
                    <option value="private" {{ old('visibility', $project->visibility) === 'private' ? 'selected' : null}}>Private</option>
                </select>
            </div>
            <div class="my-3">
                <label for="prive" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $project->price) }}">
            </div>

            <a href="{{ route('admin.project.index')}}" class="btn btn-sm btn-dark">Cancel</a>
            <button type="submit" class="btn btn-sm btn-success">Edit</button>
        </form>
    </div>
@endsection