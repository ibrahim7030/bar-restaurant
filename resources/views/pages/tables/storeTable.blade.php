
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
                Store details
            </li>
        </ol>
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
        <div class="card mb-4">
            <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                <h4 class="text-light">
                    <i class="fas fa-store me-1"></i>
                    Manage Store
                </h3>


                    <a href="{{ route('store.create') }}" class="btn btn-primary shadow">
                        <i class=" fa fa-plus-circle me-2"></i>
                        Add new store
                    </a>

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Status</th>
                            <th> Date</th>
                            <th colspan="2"> Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stores as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>

                                @if ( $item->status === 1)
                                    <td>Active</td>
                                @elseif ($item->status === 2 )
                                    <td>Disactive</td>
                                @else
                                    <td>On way</td>
                                @endif
                                {{--  <td>{{ $item->status }}</td>  --}}
                                <td>{{ $item->created_at}}</td>
                                <td>
                                    <a href="{{ url('/edit-store/'.$item->id) }}" class="text-decoration-none text-success mx-1">
                                        update
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ url('/delete-store/'.$item->id) }}" class="text-decoration-none text-danger mx-1">
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
