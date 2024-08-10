@include('slidbar')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css"/>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

<link rel="stylesheet" href="{{ asset('assets/css/file.css') }}">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
<style>
    .accordion-button:focus {
        box-shadow: none;
    }
</style>
<!-- partial -->
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div style="display: flex; justify-content: space-between">
                    <h3 class="p-2 fw-bolder">Orders</h3>
                    <a class="btn btn-primary fw-bolder" href="{{ route('create.specific.order') }}">Add Order</a>
                </div>
                <!-- Accordion -->
                @foreach($orders as $order)
                    <div class="accordion" id="orderAccordion">
                        <form class="forms-sample orderUpdateForm" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $order->id }}">
                            <!-- Initial Accordion Item -->
                            <div class="accordion-item mt-3">
                                <h2 class="accordion-header" id="headingOne">
                                    <button
                                        style="background: #3ead65 !important; color: #FFFFFF !important; font-weight: bolder"
                                        class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne{{ $order->id }}" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Order priority {{ $order->order_priority }}
                                        <span class="ms-5">{{ $order->getBelt[0]->name }}</span>
                                    </button>
                                </h2>
                                <div id="collapseOne{{ $order->id }}"
                                     class="accordion-collapse collapse {{ $loop->first ? 'show': ''  }} "
                                     aria-labelledby="headingOne"
                                     data-bs-parent="#orderAccordion">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Customer Select</label>
                                                    <select name="customer_name" id="customer-select"
                                                            class="form-select form-control-sm customer-select">
                                                        <option value="" disabled selected>Select a customer</option>
                                                        @foreach ($customer as $item)
                                                            <option
                                                                {{ $item->id == $order->customer_name ? 'selected' : ''}} value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="date" name="date"
                                                           class="form-control form-control-sm border-black"
                                                           value="{{ $order->date ?? date('Y-m-d') }}"
                                                           placeholder="Select a date">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Order Given By</label>
                                                    <input type="text" name="order_given_by"
                                                           value="{{ $order->order_given_by }}"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Enter order given by">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Select Order To</label>
                                                    <select id="order-select" name="order_select"
                                                            class="form-select form-control-sm">
                                                        <option value="" disabled selected>Select an order</option>
                                                        @foreach ($orderMaster as $item)
                                                            <option data-number='{{ $item->number ?? '' }}'
                                                                    {{ $order->order_no ? 'selected': '' }}
                                                                    value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Order No</label>
                                                    <input type="number" name="order_no" id="orderNo"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Enter order number">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Belt Select</label>
                                                    <select id="belt-select" name="belt_select"
                                                            class="form-select form-control-sm">
                                                        <option value="" disabled selected>Select a belt</option>
                                                        @foreach ($belt as $item)
                                                            <option
                                                                {{ $item->id == $order->belt_select ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Quantity</label>
                                                    <input type="number" name="quantity" value="{{ $order->quantity }}"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Enter quantity">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" name="description" rows="3"
                                                              placeholder="Enter description">{{ $order->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>UOM Select</label>
                                                    <select name="uom_select" id="uom-select"
                                                            class="form-select form-control-sm">
                                                        <option value="" disabled selected>Select UOM</option>
                                                        @foreach ($uom as $item)
                                                            <option value="{{ $item->id }}">{{ $item->uom }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Order Priority</label>
                                                    <input type="number" name="order_priority"
                                                           value="{{ $order->order_priority }}"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Enter order priority">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Rate</label>
                                                    <input type="number" name="rate" value="{{ $order->rate }}"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Enter rate">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Amount</label>
                                                    <input type="number" name="amount" value="{{ $order->amount }}"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Enter amount">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Attach Document Company</label>
                                                    <input type="file" name="attach_doc_file"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Remark For Vendor</label>
                                                    <input type="text" name="remark_vender"
                                                           placeholder="Remark For Vendor"
                                                           value="{{ $order->remark_vender }}"
                                                           class="form-control form-control-sm border-black">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Weight Of Belt</label>
                                                    <input type="number" name="wight_belt"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Enter Weight Of Belt"
                                                           value="{{ $order->wight_belt }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Packing Size Of Belt</label>
                                                    <input type="number" name="packing_size_belt"
                                                           value="{{ $order->packing_size_belt }}"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Packing Size Of Belt">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Packing Charges</label>
                                                    <input type="number" name="packing_charges"
                                                           value="{{ $order->packing_charges }}"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Enter Packing Charges">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Transportation Charges</label>
                                                    <input type="number" name="transportaion_charges"
                                                           value="{{ $order->transportaion_charges }}"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Enter Transportation Charges">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Document Attached</label>
                                                    <input type="file" name="doc_attached_file"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Tentative Delivery Date</label>
                                                    <input type="date" name="tentaive_delevery_date"
                                                           value="{{ $order->tentaive_delevery_date }}"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Enter Tentative Delivery Date">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Delivery Date</label>
                                                    <input type="date" name="delevery_date"
                                                           value="{{ $order->delevery_date }}"
                                                           class="form-control form-control-sm border-black"
                                                           placeholder="Enter Delivery Date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="repeater border p-2 rounded-3">
                                            <h4>EXPENSES</h4>
                                            <table class="table table-hover tab-pane">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Particular</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                                @foreach($order->getExpenses as $key => $item)
                                                    <tr class="removeble-tr-{{ $item->id }}">
                                                        <td>{{ $key + 1 }}</td>
                                                        <td><input type="text" class="border-0 update-particular" data-id='{{$item->id}}' value="{{ $item->particular }}">
                                                        </td>
                                                        <td><input type="text" class="border-0 update-amount" data-id='{{$item->id}}'
                                                                   value=" {{ $item->amount }}"></td>
                                                        <td>
                                                            <button type="button" delete-id ='{{ $item->id }}' class="btn btn-danger add-item delete-items"
                                                                    style="padding:4px 5px 3px 5px;"><i
                                                                    class="fs-5 text-white mdi mdi-delete"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                            <div data-repeater-list="category-group" class="mt-3">
                                                <div id="show_item">
                                                    <div class="row" data-repeater-item>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Particular</label>
                                                                <input type="text" name="particular"
                                                                       class="form-control form-control-sm border-black"
                                                                       placeholder="Enter Particular">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label>Amount</label>
                                                                    <input type="number" name="amount"
                                                                           class="form-control form-control-sm border-black"
                                                                           placeholder="Enter Amount">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <br>
                                                                    <div class="text-start mt-2">
                                                                        <button data-repeater-delete type="button"
                                                                                class="btn btn-danger add-item"
                                                                                style="padding:12px 15px 12px 15px;"><i
                                                                                class="fs-5 text-white mdi mdi-delete"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="text-center">
                                                    <button data-repeater-create type="button"
                                                            class="btn p-3 btn-primary add-item"><i
                                                            class="mdi mdi-plus"></i></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end mt-3">
                                            <button type="submit" class="btn btn-success text-white me-2">Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                are you sure you want to delete?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Close</button>
                <button type="button" id="deleteItem" class="btn btn-danger text-white">Delete</button>
            </div>
        </div>
    </div>
</div>
@include('footer')
<script src="{{ asset('assets/js/notify.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#customer-select').select2({
            placeholder: 'Select an option',
            allowClear: true
        });
    });
    $(document).ready(function () {
        var selectedOption = $("#order-select").find(":selected");
        var dataNumber = selectedOption.data("number");
        $("#orderNo").val(dataNumber)
        $('#order-select').select2({
            placeholder: 'Select an option',
            allowClear: true
        }).change(function () {
            var selectedOption = $(this).find(":selected");
            var dataNumber = selectedOption.data("number");
            $("#orderNo").val(dataNumber)
        })
    });
    $(document).ready(function () {
        $('#belt-select').select2({
            placeholder: 'Select an option',
            allowClear: true
        });
    });
    $(document).ready(function () {
        $('#uom-select').select2({
            placeholder: 'Select an option',
            allowClear: true
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        var today = new Date().toISOString().split('T')[0];
        var dateInput = document.getElementById('dateInput');
        dateInput.setAttribute('min', today);
        dateInput.value = today; // Set the default value to today's date
    });

    $(document).ready(function () {
        $('.orderUpdateForm').each(function () {
            $(this).submit(function (e) {
                e.preventDefault();
                e.stopPropagation();

                $("#loader").show();

                // Create a FormData object from the current form
                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('update.order') }}',
                    method: 'POST',
                    data: formData,
                    contentType: false,  // Prevent jQuery from setting the content type header
                    processData: false,  // Prevent jQuery from processing the data
                    success: function (res) {
                        console.log(res);
                        $("#loader").hide();
                        // Handle success response
                    },
                    error: function (res) {
                        console.error(res);
                        // Handle error response
                    }
                });
            });
        });
    });
    $(document).ready(function () {
        $(".update-particular").change(function () {
            var name = $(this).val();
            var id = $(this).attr('data-id');
            $.ajax({
                url: '{{ route('update.expenses.particular') }}',
                method: 'POST',
                data: {
                    id: id,
                    particular: name,
                    _token : '{{ csrf_token() }}'
                }, success: function (response) {
                    $.notify("Name updated", "success");
                }, error: function (response) {
                    alert(response);
                }
            })
        })

        $(".update-amount").change(function () {
            var number = $(this).val();
            var id = $(this).attr('data-id');
            $.ajax({
                url: '{{ route('update.expenses.amount') }}',
                method: 'POST',
                data: {
                    id: id,
                    amount: number,
                    _token : '{{ csrf_token() }}'
                }, success: function (response) {
                    $.notify("Number updated", "success");
                }, error: function (response) {
                    alert(response);
                }
            })
        })
    })

    $("#deleteItem").click(function (){
        $("#loader").show();
        var id = $(this).attr('data-id');
        $.ajax({
            url: '{{ route('delete.expenses') }}',
            method: 'POST',
            data: {
                id: id,
                _token : '{{ csrf_token() }}'
            }, success: function (response) {
                $.notify("order deleted", "error");
                $("#loader").hide();
                $("#deleteModal").modal('hide');
                $(".removeble-tr-"+id).fadeOut();
            }, error: function (response) {
                alert(response);
            }
        })
    })


    $(".delete-items").click(function (){
        var id = $(this).attr('delete-id');
        $("#deleteItem").attr('data-id',id)
        $("#deleteModal").modal('show');
    })
</script>
