@extends('layout.dashboard')

@section('page')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Branch Page</h1>

            <a type="button" class="btn btn-primary" href="/dashboard/index">
                <div class="wrapper">
                    <i class="fa-solid fa-caret-left"></i>
                </div>
            </a>
            <a href="/branch/create" class="btn btn-primary mx-3">Add New</a>
        </div>

        <div class="row">
            <div class="col-12 table-responsive d-flex">
                <table class="table table-borderless md-auto">
                    <thead class="table-dark" align="center">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Total Member</th>
                        <th scope="col">Outstanding</th>
                        <th scope="col">PAR</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        @foreach ($branches ?? [] as $branch)
                        <tr>    
                        <th scope="row">{{ $loop->iteration }}</th>
                            <td class="col-2">{{ $branch->name }}</td>
                            <td class="col-2">{{ $branch->total_member }}</td>
                            <td class="col-2">@currency($branch->outstanding)</td>
                            <td class="col-2">{{ $branch->par }} %</td>
                            <td class="col-3">
                                <a href="/branch/edit/{{ $branch->id }}" class="btn btn-success mx-3">Edit</a>
                                <form class="d-inline" action="/branch/destroy/{{ $branch->id }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Delete This Branch?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
@endsection