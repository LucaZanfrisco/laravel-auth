@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.project.store')}}" method="POST" class="mt-3">
            @csrf
            <div>
                <label for="project_name" class="form-label">Name</label>
                <input type="text" class="form-control @error('project_name') is-invalid @enderror" id="project_name"
                    name="project_name" value="{{ old('project_name') }}">
                @error('project_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="4"
                    class="form-control @error('description') is-invalid @enderror">{{ old('description')}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="creation_date" class="form-label">Date</label>
                <input type="date" class="form-control @error('creation_date') is-invalid @enderror" id="creation_date"
                    name="creation_date" value="{{ old('creation_date') }}">
                @error('creation_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="done" class="form-label">Done</label>
                <select name="done" id="done" class="form-select @error('done') is-invalid @enderror">
                    <option value="1" {{ old('done') == 1 ? 'selected' : '' }}>Done</option>
                    <option value="0" {{ old('done') == 0 ? 'selected' : '' }}>Undone</option>
                </select>
                @error('done')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="visibility" class="form-label">Visibility</label>
                <select name="visibility" id="visibility" class="form-select @error('visibility') is-invalid @enderror">
                    <option value="public" {{ old('visibility') === 'public' ? 'selected' : null }}>
                        Public</option>
                    <option value="private"
                        {{ old('visibility') === 'private' ? 'selected' : null }}>Private</option>
                </select>
                @error('visibility')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price"
                    class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <a href="{{ route('admin.project.index') }}" class="btn btn-sm btn-dark">Cancel</a>
            <button type="submit" class="btn btn-sm btn-success">Edit</button>
        </form>
    </div>
@endsection