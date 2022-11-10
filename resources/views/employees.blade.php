@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                    <h3>Employees</h3>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col-5"></div>
                        <div class="col"><a type="button" class="btn btn-primary" href="{{ url('/create/employee')}}">Add Employee</a></div>
                    </div>
                </div>

                <div class="card-body" name="emp_section" id="emp_section">
                    @if (session('successMsg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('successMsg') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Profile Picture</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Department ID</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr>

                                <td scope="col">{{$employee->id}}</td>
                                <td scope="col"><img src="storage/app/public/{{ $employee->empPicture }}" alt="No Image Available" width="100" height="auto"></td>
                                <td scope="col">{{$employee->empFirstName}}</td>
                                <td scope="col">{{$employee->empLastName}}</td>
                                <td scope="col">{{$employee->deptID}}</td>
                                <td scope="col">{{$employee->empContactNo}}</td>
                                <td scope="col">{{$employee->empEmail}}</td>
                                <td scope="col">
                                    <a class="btn btn-success" href=" {{ route('editEmp', $employee->id)}} "><i class="bi bi-pencil-square"></i> Edit</a>
                                     
                                    <form method="POST" id="delete-form-{{ $employee->id }}" 
                                        action="{{ route('deleteEmp', $employee->id) }}" style="display:none">
                                       @csrf
                                        {{ method_field('delete') }}

                                    </form>
                                    <button onclick="if(confirm('Are you sure to delete the data of employee {{ $employee->id }}? ')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $employee->id }}').submit();
                                    }else{
                                        event.preventDefault();
                                    }
                                        "
                                     class="btn btn-danger" href="#"><i class="bi bi-trash"></i> Delete </td>
                                </button> </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>

                      {{$employees->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
