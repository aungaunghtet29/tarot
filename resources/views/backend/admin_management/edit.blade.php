@extends('backend.layouts.app')

@section('title' , 'Admin Edit')

@section('page-title' , 'Admin Edit')

@section('icon' , 'pe-7s-id')


@section('admin-user' , 'mm-active')

@section('content')

    <div class="admin-edit">

        <div class="d-flex py-3">

            <span class="left-arrow"><i class="fa fa-arrow-left"></i></span>
        </div>

        <div class="card custom-card">
            <div class="card-body">
                <form action="{{ route('admin-user.update' , $admin->id) }}" method="POST" autocomplete="off" id="update_admin">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="text-muted">Name*</label>
                        <input type="text" name="name" class="form-control" value="{{ $admin->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="text-muted">Phone*</label>
                        <input type="number" name="phone" class="form-control" value="{{ $admin->phone }}" required>
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
{!! JsValidator::formRequest('App\Http\Requests\UpdateAdminUserRequest' , '#update_admin') !!}

    <script>
        $(document).ready(function () {
            $(document).on('click', '.left-arrow', function (e) {
                e.preventDefault();

                window.history.back();
            });
        });
    </script>
@endsection
