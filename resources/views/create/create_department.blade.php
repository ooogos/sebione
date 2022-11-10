@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <h3>Create Department</h3>
                </div>

                <div class="card-body">
                    @if (session('successMsg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('successMsg') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('storeDept') }}">
                        @csrf

                        <div class="form-group row align-items-center">
                            
                            <label for="deptCode" class="col-md-2 col-form-label text-md-right">{{ __('Department Code') }}</label>
                            {{-- <label for="name" class="col-md-4 col-form-label">{{ __('Name') }}</label> --}}

                            <div class="col-md-4">
                                <input id="deptCode" placeholder="Department Code" type="text" class="form-control @error('deptCode') is-invalid @enderror" name="deptCode" value="{{ old('deptCode') }}" required autocomplete="deptCode">

                                @error('deptCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="deptName" class="col-form-label text-md-right">{{ __('Department Name') }}</label>

                            <div class="col-md-3">
                                <input id="deptName" placeholder="Department Name" type="text" class="form-control @error('deptName') is-invalid @enderror" name="deptName" value="{{ old('deptName') }}" required autocomplete="deptName">

                                @error('deptName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="deptContact" class="col-form-label text-md-right">{{ __('Contact Number') }}</label>

                            <div class="col-md-4">
                                <input id="deptContact" placeholder="Contact Number" type="text" class="form-control @error('password') is-invalid @enderror" name="deptContact" required autocomplete="deptContact">

                                @error('deptContact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="deptEmail" class="col-md-1 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-4">
                                <input id="deptEmail" placeholder="Email address" type="deptEmail" class="form-control @error('deptEmail') is-invalid @enderror" name="deptEmail" value="{{ old('deptEmail') }}" required autocomplete="deptEmail">

                                @error('deptEmail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Department') }}
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
