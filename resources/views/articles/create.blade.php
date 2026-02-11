@extends('layouts.app')

@section('title', 'Create Article')

@section('content')

<h2>Create a New Article</h2>
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <div class="mb-3 form-group">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3 form-group">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Article</button>

@endsection
       