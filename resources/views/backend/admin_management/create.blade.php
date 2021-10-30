@extends('backend.layouts.app')

@section('title' , 'Admin Create')

@section('page-title' , 'Admin Create')

@section('icon' , 'pe-7s-add-user')


@section('admin-user' , 'mm-active')

@section('content')

    <div class="admin-create">

        <div class="d-flex py-3">

            <span class="left-arrow"><i class="fa fa-arrow-left"></i></span>
        </div>

        <div class="card custom-card">
            <div class="card-body">
                <form action="{{ route('admin-user.store') }}" method="post" autocomplete="off" id="admin_create">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="text-muted">Name*</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="text-muted">Phone*</label>
                        <input type="number" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-muted">Password*</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button class="btn btn-secondary mt-2" type="submit" style="width:100%;">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
{!! JsValidator::formRequest('App\Http\Requests\AdminUserRequest' , '#admin_create') !!}
    <script>
        $(document).ready(function () {
            $(document).on('click', '.left-arrow', function (e) {
                e.preventDefault();

                window.history.back();
            });
        });
    </script>
@endsection
