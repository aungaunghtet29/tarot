@extends('backend.employee_dashboard.layouts.app')

@section('title' , 'Order Contact')

@section('page-title' , 'Order Contact')

@section('emp-order' , 'mm-active')

@section('icon' , 'pe-7s-note2')

@section('content')
    <div class="edit-order">

        <div class="d-flex py-3 pt-0">

            <span class="left-arrow"><i class="fa fa-arrow-left"></i></span>
        </div>

        <div class="card custom-card">
            <div class="card-body">

                <form action="{{ route('order-list.update' , $order->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="text-muted">Customer Name*</label>
                        <input type="text" name="customer_name" class="form-control" value="{{ $order->customer_name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="text-muted">Customer Phone*</label>
                        <input type="phone" name="customer_phone" class="form-control"  value="{{ $order->customer_phone }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name" class="text-muted">Customer Address*</label>
                        <textarea name="customer_address" class="form-control" required>{{ $order->customer_address }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="order" class="text-muted">Select Order*</label>
                        <select name="type" id="select_order" class="form-control" required>
                            <option value="0">Pending</option>
                            <option value="1">Order Confirm</option>
                            <option value="-1">Order Cancel</option>
                        </select>
                    </div>


                    <div class="form-group" id="comment_section">
                        <label for="cancel-why">Remark Order Cancel</label>
                        <textarea name="comment"  class="form-control"></textarea>
                    </div>


                    <button class="btn btn-secondary custom-btn mt-2" type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $(document).on('click', '.left-arrow', function (e) {
                e.preventDefault();

                window.history.back();
            });

            $('#comment_section').hide();


            $('#select_order').on('change', function () {
                if (this.value == '-1') {
                    $('#comment_section').show();
                }

                if(this.value == '1' || this.value == '0'){
                    $('#comment_section').hide();
                }
            });
        });
    </script>
@endsection

