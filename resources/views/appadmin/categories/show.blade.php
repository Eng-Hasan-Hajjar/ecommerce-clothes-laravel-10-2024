@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Category Details</h2>
        <table class="table">
            <tr>
                <th>Name</th>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $category->description }}</td>
            </tr>
        </table>
        <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to Categories</a>
    </div>
@endsection
