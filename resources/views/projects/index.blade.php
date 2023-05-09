

@extends('layout.app')

@section('content')

    <div class="row mt-5">

        <div class="col-md-10 offset-md-1">
            <h5 class="text-center mb-4">Project Management</h5>


            <div class="d-flex justify-content-end my-3">
                {{-- <button type="button" data-toggle="modal" data-target="#taskModal" class="btn btn-success"></button> --}}
                <a type="button" class="btn btn-success" href="{{ route('create-project') }}">
                    Create a new project
                </a>
            </div>


            <table id="table" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody id="tablecontents">
                    @foreach($projects as $item)
                    <tr class="row1" data-id="{{ $item->id }}">
                        <td>{{ $item->name }}</td>
                        <td>{{ date('d-m-Y ',strtotime($item->created_at)) }}</td>
                        <td>
                            <a href="{{ route('edit-project', $item->id) }}" class="btn btn-sm btn-outline-secondary">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                            <a onclick="return confirm('Are you sure?')" href="{{ route('delete-project', $item->id) }}" class="btn btn-sm btn-outline-danger">
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
@endsection


