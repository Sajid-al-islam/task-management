@extends('layout.app')
@section('content')
    <div class="container">
        <div class="main-content mt-5">
            <form action="{{ route('update-task') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $task->id }}">
                <div class="form-group">
                    <label for="task">Select a project</label>
                    <select name="project_id" class="form-control" id="project_id">
                        <option value="">Select a project</option>
                        @foreach ($projects as $project)
                            <option {{ $project->id == $task->project_id ? 'selected' : '' }} value="{{ $project->id }}">{{ $project->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="task">Task Name</label>
                    <input type="text" value="{{ $task->name }}" name="name" class="form-control" id="task">
                </div>
                <div class="form-group">
                    <label for="priority">Priority</label>
                    <input type="number" value="{{ $task->priority }}" name="priority" class="form-control" id="priority">
                </div>
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
@endsection
