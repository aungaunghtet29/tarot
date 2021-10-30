@extends('backend.employee_dashboard.layouts.app')

@section('title' , 'Approved Order')
@section('page-title', 'Approved Order')
@section('icon', 'pe-7s-cart')
@section('approved-order-emp' , 'mm-active')

@section('content')
    <div class="approved-order pt-3 py-4">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered" id="customer-order" style="width: 100%">
                    <thead>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Order Number</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
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
            var table = $('#customer-order').DataTable({
                "processing": false,
                "serverSide": true,
                "language" : {
                    searchPlaceholder: "Search by phone",
                },
                "ajax": "order-history/emp/approved",
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




                ]
            });
        });

        function reloadDatatable() {
            $('#customer-order').DataTable().ajax.reload();
        };
        setInterval(reloadDatatable, 5000);




    </script>
@endsection




