@extends('layout.app')
@section('content')
    <div class="container">
        <div class="main-content mt-5">
            <h3 class="mb-3">Create Project</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('save-project') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="task">Project Name</label>
                            <input type="text" name="name" class="form-control" id="task" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">save</button>
            </form>
        </div>
    </div>
@endsection
