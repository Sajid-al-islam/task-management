

@extends('layout.app')

@section('content')

    <div class="row mt-5">

        <div class="col-md-10 offset-md-1">
            <h3 class="text-center mb-4">Task Management</h3>

            <div class="row">
                <div class="col-md-6">
                    <label for="">Select a project</label>
                    <form action="{{ route('home') }}" method="get">
                        <select name="project_id" onchange="this.form.submit()" class="form-control" id="project_id">
                            <option value="">Select a project</option>
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>


            <div class="d-flex justify-content-end my-3">
                {{-- <button type="button" data-toggle="modal" data-target="#taskModal" class="btn btn-success"></button> --}}
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#taskModal">
                    Create a new task
                </button>
            </div>


            <table id="table" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="30px">#</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody id="tablecontents">
                    @foreach($sorting as $sort)
                    <tr class="row1" data-id="{{ $sort->id }}">
                        <td>
                            <div style="color:rgb(124,77,255); padding-left: 10px; float: left; font-size: 20px; cursor: pointer;"
                                title="change display order">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </div>
                        </td>
                        <td>{{ $sort->name }}</td>
                        <td>{{ date('d-m-Y ',strtotime($sort->created_at)) }}</td>
                        <td>
                            <a href="{{ route('edit-task', $sort->id) }}" class="btn btn-sm btn-outline-secondary">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                            <a onclick="return confirm('Are you sure?')" href="{{ route('delete-task', $sort->id) }}" class="btn btn-sm btn-outline-danger">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
        </div>
    </div>

    @include('tasks.create')
@endsection


