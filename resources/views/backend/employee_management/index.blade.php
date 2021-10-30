@extends('backend.layouts.app')

@section('title', 'Employee List')

@section('page-title', 'Employee Users')

@section('icon', 'pe-7s-users')


@section('employee', 'mm-active')

@section('content')

    <div class="employee-list">

        <div class="d-flex">
            <a href="{{ route('employee-list.create') }}" class="btn btn-outline-primary"> <i class="fa fa-plus-circle"></i>
                Add Employee </a>
        </div>

        <div class="employee-list pt-3 py-4">
            <div class="card custom-card">
                <div class="card-body">
                    <table class="table table-bordered" id="employee-table" style="width: 100%">
                        <thead>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Login at</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </thead>
                        @foreach ($employees as $employee)
                            <tbody>
                                <th>{{ $employee->name }}</th>
                                <th>{{ $employee->phone }}</th>
                                <th>{{ date('d-m-Y g:i a', strtotime($employee->login_at)) }}</th>
                                <th>{{ date('d-m-Y', strtotime($employee->created_at)) }}</th>
                                <th>
                                    <a href="{{ route('employee-list.edit', $employee->id) }}" class="mr-3 "> <i
                                            class="fa fa-pen"></i> Edit</a>
                                    <a href="" data-id="{{ $employee->id }}" class="text-danger delete"><i
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
                            url: '/admin/employee-list/'+  $(this).data('id'),
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
