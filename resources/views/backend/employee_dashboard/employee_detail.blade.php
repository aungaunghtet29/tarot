@extends('backend.employee_dashboard.layouts.app')

@section('title', 'Employee Profile')

@section('page-title', 'Employee Profile')

@section('icon', 'pe-7s-user')


@section('content')
    <div class="employee-detail" style="margin-top: 30px;">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">

                <div class="card custom-card">
                    <div class="card-body">
                        <div class="justify-content-center text-center">
                            <img
                                src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=0D8ABC&color=fff&rounded=true">
                            <h5 class="mt-3">{{ Str::upper(Auth::user()->name) }}</h5>
                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <span>Name</span>
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>Phone</span>
                            <span>{{ Auth::user()->phone }}</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>Created Date</span>
                            <span>{{ \Carbon\Carbon::parse(Auth::user()->from_date)->format('d/m/Y') }}</span>
                        </div>

                        <div class="d-flex justify-content-center mt-5" >
                            <a href="{{ route('emp.logout') }}"
                             style="padding : 10px 30px; width:100%" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="btn btn-danger">Logout</a>
                        <form id="logout-form" action="{{ route('emp.logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection
