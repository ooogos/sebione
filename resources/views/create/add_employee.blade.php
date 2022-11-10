@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <h3> Add Employee</h3>
                </div>

                <div class="card-body">
                    @if (session('successMsg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('successMsg') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('storeEmp') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row align-items-center">
                            
                            <label for="firstname" class="col-form-label text-md-right">{{ __('First Name') }}</label>
                            {{-- <label for="name" class="col-md-4 col-form-label">{{ __('Name') }}</label> --}}

                            <div class="col-md-4">
                                <input id="firstname" placeholder="First Name" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname">

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="lastname" class="col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-3">
                                <input id="lastname" placeholder="Last Name" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="deptID" class="col-form-label text-md-right">{{ __('Department ID') }}</label>

                            <div class="col-md-2">
                                <input id="deptID" placeholder="Department ID" type="text" class="form-control @error('deptID') is-invalid @enderror" name="deptID" value="{{ old('deptID') }}" required autocomplete="deptID">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="contactNo" class="col-form-label text-md-right">{{ __('Contact Number') }}</label>

                            <div class="col-md-4">
                                <input id="contactNo" placeholder="Contact Number" type="text" class="form-control @error('password') is-invalid @enderror" name="contactNo" required autocomplete="contactNo">

                                @error('contactNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="email" class="col-md-1 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-4">
                                <input id="email" placeholder="Email address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="img" class="col-form-label text-md-right">Employee Photo</label>
                            <div class="col-md-4">
                            <input type="file" class="form-control" id="empPicture" placeholder="Image" name="empPicture">
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('empPicture') }}</span>
                            @endif
                        </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Employee') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
