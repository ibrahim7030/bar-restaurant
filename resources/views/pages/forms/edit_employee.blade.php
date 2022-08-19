@extends('layouts.admin')

@section('main-section')

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit form</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ url('/') }}">
                Dashboard
            </a>
        </li>
        <li class="breadcrumb-item active">
            Edit Employee
        </li>
    </ol>

    <body class="bg-light">

        <div class="row">
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card mb-1 bg-light">
                <div class="card-body">

                    <form method="POST" enctype="multipart/form-data" action="{{ url('/update-employee/'.$employee->id) }}">

                        @method('PUT')
                        @csrf

                            <div class="row g-3">
                                <div class="col-md-2 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-2">
                                        <img class="rounded-circle mt-2" width="100px"
                                            src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">

                                        {{--  <!--upload image-->  --}}
                                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" required>

                                    </div>
                                </div>

                                <div class="col-md-5 mt-2 border-right">

                                    <div class="row g-2">

                                        <div class="col-md-6">
                                            <label for="fname" class="col-md-12 col-form-label text-md-start">{{ __('First name') }}<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('fname') is-invalid @enderror"
                                            name="fname" value="{{$employee->first_name}}">

                                            @error('fname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lname" class="col-md-12 col-form-label text-md-start">{{ __('Last name') }}<span class="text-danger">*</span></label>
                                            <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror"
                                             name="lname" value="{{$employee->last_name}}" >

                                            @error('lname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label for="email" class="col-md-12 col-form-label text-md-start">{{ __('Email Address') }}<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{$employee->email}}">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label for="gender" class="col-form-label text-md-start">{{ __('Gender') }}<span class="text-danger">*</span></label>
                                            <select class="form-select @error('gender') is-invalid @enderror" name="gender">
                                                <option value="{{$employee->gender}}">{{$employee->gender}}</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label for="birthdate" class="col-md-12 col-form-label text-md-start">{{ __('Birth day') }}<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control @error('birthdate') is-invalid @enderror"
                                             name="birthdate" value="{{$employee->birthday}}">
                                            @error('birthdate')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label for="phone" class="col-md-12 col-form-label text-md-start">{{ __('Phone') }}<span class="text-danger">*</span></label>
                                            <input type="phone" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" value="{{$employee->phone}}">

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-5 mt-2 border-right">

                                    <div class="row g-2">

                                        <div class="col-md-12">
                                            <label for="name" class="col-md-12 col-form-label text-md-start">{{ __('Mother Name') }}<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('mother') is-invalid @enderror"
                                            name="mother" value="{{$employee->mother_name}}">

                                            @error('mother')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label for="father" class="col-md-12 col-form-label text-md-start">{{ __('Father') }}<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('father') is-invalid @enderror"
                                            name="father" value="{{$employee->father_name}}">

                                            @error('father')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label for="country" class="col-md-12 col-form-label text-md-start">{{ __('Country') }}<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('country') is-invalid @enderror"
                                            name="country" value="{{$employee->country}}">

                                            @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label for="city" class="col-md-12 col-form-label text-md-start">{{ __('City') }}<span class="text-danger">*</span></label>
                                            <input id="city" required type="text" class="form-control @error('city') is-invalid @enderror"
                                            name="city" value="{{$employee->city}}">

                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label for="address" class="col-md-12 col-form-label text-md-start">{{ __('Address') }}<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                            name="address" value="{{$employee->address}}">

                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                </div>

                                <div class="d-flex flex-column align-items-end p-3 py-2 ">
                                    <button type="submit"  class="btn btn-dark">
                                        {{ __('Update employee') }}
                                    </button>
                                </div>

                            </div>

                    </form>
                </div>
            </div>
        </div>

    </body>

</div>

@endsection
