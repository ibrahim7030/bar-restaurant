@extends('layouts.admin')

@section('main-section')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">
                    Dashboard
                </a>
            </li>
            <li class="breadcrumb-item active">
                User details
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                <h4 class="text-light">
                    <i class="fas fa-users me-1"></i>
                    Manage user
                </h3>
                <button class="btn btn-primary shadow" data-bs-toggle="modal" data-bs-target="#addStatusModal">
                    <i class=" fa fa-plus-circle me-2"></i>
                Add new user
                </button>

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Name</th>
                            <th> E-mail</th>
                            <th colspan="2"> Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="#" id="" class="text-decoration-none text-success mx-1 editIcon" data-bs-toggle="modal"
                                        data-bs-target="#editTeacherModal">
                                        update
                                    </a>
                                </td>
                                <td>
                                    <a href="#" id="" class="text-decoration-none text-danger mx-1 deleteIcon">
                                    delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
@endsection
