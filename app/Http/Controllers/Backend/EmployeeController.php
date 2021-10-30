<?php

namespace App\Http\Controllers\Backend;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EmployeeUserRequest;

class EmployeeController extends Controller
{
    public function index(){

        $employees = Employee::orderBy('created_at' ,'DESC')->get();
        return view('backend.employee_management.index' , compact('employees'));
    }

    public function create(){

        return view('backend.employee_management.create');
    }

    public function store(EmployeeUserRequest $request){
        $employee = new Employee();

        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->password = Hash::make($request->password);

        $employee->save();

        return redirect()->route('employee-list.index')->with(['create_employee'=>'Successfully Employee Created !']);


    }

    public function edit($id){
        $employee = Employee::findOrFail($id);

        return view('backend.employee_management.edit' , compact('employee'));
    }

    public function update($id , Request $request){

        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->password = $request->password ? Hash::make($request->password) : $employee->password;

        $employee->update();

        return redirect()->route('employee-list.index')->with(['update_employee' => 'Successfully Updated !']);
    }

    public function destroy($id){
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return 'success';
    }


    public function logout(Request $request){
        Auth::logout();
        return redirect('emp/login');
    }
}
