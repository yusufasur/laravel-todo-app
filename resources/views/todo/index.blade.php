@extends('todo.layout')

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('todos.create') }}" class="btn btn-success float-right">+ New Todo </a><br><br>
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
            @forelse($todos as $todo)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $todo->title }}</td>
                    <td>{{ $todo->description }}</td>
                    <td>
                        <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form style="display: inline" action="{{ route('todos.destroy', $todo->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                No Data Found!
            @endforelse
        </tbody>
    </table>
@endsection
