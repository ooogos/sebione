<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class pagesController extends Controller
{
    public function index(){
        return view('auth.login');
    }


    public function employee()
    {
        $employees = Employee::paginate(10);
        return view('employees',compact('employees'));
    }

    public function createEmp(){

        return view('create.add_employee');
    }

    public function storeEmp(Request $request){




        $this->validate($request,[
            'firstname'=> 'required',
            'lastname'=> 'required',
            'deptID'=> 'required',
            'email'=> 'required',
            'contactNo'=> 'required',
            'empPicture'=>'image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=100,min_height=100',

        ]);

        $employee = new Employee;
        $empPictureName="";
        $empPicturePath = 'storage/app/public/';
        if($request->has('empPicture')){
            $empPicture = $request->file('empPicture');
            $empPictureName = time(). '.' .$empPicture->getClientOriginalExtension();
            $empPicturePath = 'storage/app/public/';

            echo $empPictureName;
            echo $empPicturePath;
            // echo $empPicture;

            $empPicture->move($empPicturePath, $empPictureName);

            // $employee->empFirstName = $request->firstname;
            // $employee->empLastName = $request->lastname;
            // $employee->deptID = $request->deptID;
            // $employee->empEmail = $request->email;
            // $employee->empContactNo = $request->contactNo;
            // $employee->empPicture = $empPictureName;
            // $employee->save();

            
        }
        $employee->empFirstName = $request->firstname;
        $employee->empLastName = $request->lastname;
        $employee->deptID = $request->deptID;
        $employee->empEmail = $request->email;
        $employee->empContactNo = $request->contactNo;
        $employee->empPicture =$empPictureName;

        $employee->save();
        // return redirect(route('employees'))->with('successMsg', 'Employee Added');
        
    }

    public function editEmp($id){

        $employee = Employee::find($id);

        return view('edit.edit_employee' , compact('employee'));
    }


    public function updateEmp(Request $request, $id){

        $this->validate($request,[
            'firstname'=> 'required',
            'lastname'=> 'required',
            'deptID'=> 'required',
            'email'=> 'required',
            'contactNo'=> 'required',

        ]);

        $employee = Employee::find($id);

        $empPictureName="";

        if($request->has('empPicture')){
            $empPicture = $request->file('empPicture');
            $empPictureName = time(). '.' .$empPicture->getClientOriginalExtension();
            $empPicturePath = 'storage/app/public/';


            $empPicture->move($empPicturePath, $empPictureName);

            // $employee->empFirstName = $request->firstname;
            // $employee->empLastName = $request->lastname;
            // $employee->deptID = $request->deptID;
            // $employee->empEmail = $request->email;
            // $employee->empContactNo = $request->contactNo;
            // $employee->empPicture = $empPictureName;
            // $employee->save();

            
        }
        $employee->empFirstName = $request->firstname;
        $employee->empLastName = $request->lastname;
        $employee->deptID = $request->deptID;
        $employee->empEmail = $request->email;
        $employee->empContactNo = $request->contactNo;
        $employee->empPicture = $empPictureName;

        $employee->save();
        return redirect(route('employees'))->with('successMsg', 'Employee '.'Data Updated');
        
        
    }

    public function deleteEmp($id){
        Employee::find($id)->delete();
        return redirect(route('employees'))->with('successMsg', 'Employee '. $id. ' Data Deleted');
    
    }
}
