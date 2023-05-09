@extends('layout.app')
@section('content')
    <div class="container">
        <div class="main-content mt-5">
            <form action="{{ route('update-project') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $project->id }}">
                <div class="form-group">
                    <label for="task">Project Name</label>
                    <input type="text" value="{{ $project->name }}" name="name" class="form-control" id="task">
                </div>
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
@endsection
