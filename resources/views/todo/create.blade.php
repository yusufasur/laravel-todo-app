@extends('todo.layout')

@section('content')
    <form action="{{ route('todos.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Add Todo >></button>
        </div>
    </form>
@endsection
