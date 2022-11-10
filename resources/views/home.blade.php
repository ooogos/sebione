@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
                    
                    <div class="row">
                        <h3>Departments</h3>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col-4"></div>
                        <div class="col"><a type="button" class="btn btn-primary" href=" {{ url('create/department')}} " >Create department</a></div>

                    </div>
                </div>

                <div class="card-body" name="dept_section">
                    @if (session('successMsg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('successMsg') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Department Code</th>
                            <th scope="col">Department Name</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($departments as $department)
                            <tr>
                                <td scope="col">{{ $department->id}}</td>
                                <td scope="col">{{$department->deptCode}}</td>
                                <td scope="col"> {{ $department->deptName}}</td>
                                <td scope="col">{{ $department->deptNo}}</td>
                                <td scope="col"> {{ $department->deptEmail}}</td>
                                <td scope="col">
                                    <a class="btn btn-success" href=" {{ route('editDept', $department->id)}} "><i class="bi bi-pencil-square"></i> Edit</a>
                                     

                                    <form method="POST" id="delete-form-{{ $department->id }}" 
                                        action="{{ route('deleteDept', $department->id) }}" style="display:none">
                                       @csrf
                                        {{ method_field('delete') }}

                                    </form>
                                    <button onclick="if(confirm('Are you sure to delete Department {{ $department->id }}? ')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $department->id }}').submit();
                                    }else{
                                        event.preventDefault();
                                    }
                                        "
                                     class="btn btn-danger" href="#"><i class="bi bi-trash"></i> Delete </td>
                                </button>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>

                      {{$departments->links()}}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
