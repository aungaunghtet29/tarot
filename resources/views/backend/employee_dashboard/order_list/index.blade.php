@extends('backend.employee_dashboard.layouts.app')

@section('title', 'Order List')

@section('page-title', 'Order List')

@section('icon', 'pe-7s-shopbag')

@section('emp-order', 'mm-active')

@section('content')
    <div class="order-list pt-3 py-4">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered" id="order" style="width: 100%">
                    <thead>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Order Number</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                        <th>Action</th>
                        <th>Order Cancel Remark</th>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#order').DataTable({
                "processing": false,
                "serverSide": true,
                "language" : {
                    searchPlaceholder: "Search by phone",
                },
                "ajax": "order-list/emp/server",
                "columns": [{
                        data: 'customer_name',
                        name: 'customer_name',
                        sortable: false,
                        searchable: false,
                    },
                    {
                        data: 'customer_phone',
                        name: 'customer_phone',
                        sortable: false,

                    },
                    {
                        data: 'customer_address',
                        name: 'customer_address',
                        sortable: false,
                        searchable: false,
                    },
                    {
                        data: 'order_id',
                        name: 'order_id'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        searchable: false,
                    },
                    {
                        data: 'type',
                        name: 'type',
                        sortable: false,
                        searchable: false,
                    },

                    {
                        data: 'contact',
                        name: 'contact',
                        sortable: false,
                        searchable: false,
                    },

                    {
                        data : 'cancel_text',
                        name : 'cancel_text',
                        sortable: false,
                        searchable: false,
                    }


                ]
            });
        });

        function reloadDatatable() {
            $('#order').DataTable().ajax.reload();
        };
        setInterval(reloadDatatable, 5000);




    </script>
@endsection
