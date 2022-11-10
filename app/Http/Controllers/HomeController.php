<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $departments = Department::paginate(10);
        // $employees = Employee::paginate(10);

        return view('home', compact('departments'));
    }

    public function createDept(){

        return view('create.create_department');
    }

    public function storeDept(Request $request){

        $this->validate($request,[
            'deptCode'=> 'required',
            'deptName'=> 'required',
            'deptContact'=> 'required',
            'deptEmail'=> 'required',
        ]);

        $department = new Department;

        $department->deptCode = $request->deptCode;
        $department->deptName = $request->deptName;
        $department->deptNo = $request->deptContact;
        $department->deptEmail = $request->deptEmail;
        // $department->firstName = $request->firstname;
        $department->save();
        return redirect(route('createDept'))->with('successMsg', 'Department Added');
        
    }

    public function editDept($id){

        $department = Department::find($id);

        return view('edit.edit_department' , compact('department'));
    }


    public function updateDept(Request $request, $id){

        $this->validate($request,[
            'deptCode'=> 'required',
            'deptName'=> 'required',
            'deptContact'=> 'required',
            'deptEmail'=> 'required',
        ]);

        $department = Department::find($id);

        $department->deptCode = $request->deptCode;
        $department->deptName = $request->deptName;
        $department->deptNo = $request->deptContact;
        $department->deptEmail = $request->deptEmail;
        // $department->firstName = $request->firstname;
        $department->save();
        return redirect(route('home'))->with('successMsg', 'Department '. $id. ' Updated');
        
    }

public function deleteDept($id){
    Department::find($id)->delete();
    return redirect(route('home'))->with('successMsg', 'Department '. $id. ' Deleted');

}
}
