@extends('backend.layouts.app')

@section('title' , 'Employee Edit')

@section('page-title' , 'Employee Edit')

@section('icon' , 'pe-7s-id')


@section('employee' , 'mm-active')

@section('content')

    <div class="employee-edit">

        <div class="d-flex py-3">

            <span class="left-arrow"><i class="fa fa-arrow-left"></i></span>
        </div>

        <div class="card custom-card">
            <div class="card-body">
                <form action="{{ route('employee-list.update' , $employee->id) }}" method="POST" autocomplete="off" id="update_employee">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="text-muted">Name*</label>
                        <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="text-muted">Phone*</label>
                        <input type="number" name="phone" class="form-control" value="{{ $employee->phone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-muted">Password*</label>
                        <input type="password" name="password" class="form-control" >
                    </div>

                    <button class="btn btn-secondary mt-2" type="submit" style="width:100%;">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
{!! JsValidator::formRequest('App\Http\Requests\UpdateEmployeeUserRequest' , '#update_employee') !!}
    <script>
        $(document).ready(function () {
            $(document).on('click', '.left-arrow', function (e) {
                e.preventDefault();

                window.history.back();
            });
        });
    </script>
@endsection
