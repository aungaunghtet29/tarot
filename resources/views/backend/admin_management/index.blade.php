@extends('backend.layouts.app')

@section('title', 'Admin List')

@section('page-title', 'Admin Users')

@section('icon', 'pe-7s-users')


@section('admin-user', 'mm-active')

@section('content')

    <div class="admin-list">

        <div class="d-flex">
            <a href="{{ route('admin-user.create') }}" class="btn btn-outline-primary"> <i class="fa fa-plus-circle"></i>
                Add Admin Users</a>
        </div>

        <div class="admin-list pt-3 py-4">
            <div class="card custom-card">
                <div class="card-body">
                    <table class="table table-bordered" id="admin-table" style="width: 100%">
                        <thead>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Login at</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </thead>
                        @foreach ($admins as $admin)
                            <tbody>
                                <th>{{ $admin->name }}</th>
                                <th>{{ $admin->phone }}</th>
                                <th>{{ date('d-m-Y g:i a', strtotime($admin->login_at)) }}</th>
                                <th>{{ date('d-m-Y', strtotime($admin->created_at)) }}</th>
                                <th>
                                    <a href="{{ route('admin-user.edit', $admin->id) }}" class="mr-3 "> <i
                                            class="fa fa-pen"></i> Edit</a>
                                    <a href="" data-id="{{ $admin->id }}" class="text-danger delete"><i
                                            class="fa fa-trash"></i> Delete</a>
                                </th>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            $('.delete').on('click', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Are you sure to delete this?',
                    showCancelButton: true,
                    confirmButtonText: `Confirm`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/admin-user/'+  $(this).data('id'),
                            type : 'delete',
                            success: function() {
                                window.location.reload();
                            }
                        });
                    }
                })
            });


        });
    </script>
@endsection
