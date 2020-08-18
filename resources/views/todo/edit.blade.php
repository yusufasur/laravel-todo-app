@extends('todo.layout')

@section('content')
    <form action="{{ route('todos.update', $todo->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $todo->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5">{{ $todo->description }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Add Todo >></button>
        </div>
    </form>
@endsection
