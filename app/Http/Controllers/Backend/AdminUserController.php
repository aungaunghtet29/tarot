<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminUserRequest;

class AdminUserController extends Controller
{
    public function index(){

        $admins = Admin::orderBy('created_at' ,'DESC')->get();

        return view('backend.admin_management.index' , compact('admins'));
    }

    public function create(){

        return view('backend.admin_management.create');
    }

    public function store(AdminUserRequest $request){
        $admin = new Admin();

        $admin->name = $request->name;
        $admin->phone = $request->phone;
        $admin->password = Hash::make($request->password);

        $admin->save();

        return redirect()->route('admin-user.index')->with(['create_admin'=>'Successfully Admin Created !']);


    }

    public function edit($id){
        $admin = Admin::findOrFail($id);

        return view('backend.admin_management.edit' , compact('admin'));
    }

    public function update($id , Request $request){

        $admin = Admin::findOrFail($id);
        $admin->name = $request->name;
        $admin->phone = $request->phone;
        $admin->password = $request->password ? Hash::make($request->password) : $admin->password;

        $admin->update();

        return redirect()->route('admin-user.index')->with(['update_admin' => 'Successfully Updated !']);
    }

    public function destroy($id){
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return 'success';
    }


}
