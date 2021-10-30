<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home(){
        return view('backend.home');
    }

    public function adminDetail(){


        return view('backend.admin_management.detail' );
    }

    public function employeeDetail(){
        return view('backend.employee_dashboard.employee_detail');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('admin/login');
    }
}
