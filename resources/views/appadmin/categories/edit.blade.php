@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Category</h2>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Category Description:</label>
                <textarea name="description" class="form-control" required>{{ $category->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
@endsection
