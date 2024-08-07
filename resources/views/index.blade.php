@include('slidbar')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
                    <h3 class="p-2 fw-bolder">Order</h3>
                    {{-- <button type="button" class="btn p-3 btn-primary" id="addSectionBtn">
                        <i class="mdi mdi-plus"></i> Add Section
                    </button> --}}
                </div>
                <form class="forms-sample" action="{{ route('table.order') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- Accordion -->
                    <div class="accordion" id="orderAccordion">
                        <!-- Initial Accordion Item -->
                        <div class="accordion-item mt-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Order Details 1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#orderAccordion">
                                <div class="accordion-body">
                                    <!-- Order Details Form Section -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Customer Select</label>
                                                <select name="customer_name" id="customer-select"
                                                    class="form-select form-control-sm">
                                                    <option value=""></option>
                                                    @foreach ($customer as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" name="date"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Order Given By</label>
                                                <input type="text" name="order_given_by"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Select Order To</label>
                                                <select id="order-select" name="order_select"
                                                    class="form-select form-control-sm">
                                                    <option value=""></option>
                                                    @foreach ($order as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Order No</label>
                                                <input type="number" name="order_no"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Belt Select</label>
                                                <select id="belt-select" name="belt_select"
                                                    class="form-select form-control-sm">
                                                    <option value=""></option>
                                                    @foreach ($belt as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" name="quantity"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>UOM Select</label>
                                                <select name="uom_select" id="uom-select"
                                                    class="form-select form-control-sm">
                                                    <option value=""></option>
                                                    @foreach ($uom as $item)
                                                        <option value="{{ $item->id }}">{{ $item->uom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Rate</label>
                                                <input type="number" name="rate"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="number" name="amount"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Attach Document Company</label>
                                                <input type="file" name="attach_doc_file" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Remark For Vendor</label>
                                                <input type="text" name="remark_vender"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Order Priority</label>
                                                <input type="number" name="order_priority"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Weight Of Belt</label>
                                                <input type="number" name="wight_belt"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Packing Size Of Belt</label>
                                                <input type="number" name="packing_size_belt"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Packing Charges</label>
                                                <input type="number" name="packing_charges"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Transportation Charges</label>
                                                <input type="number" name="transportaion_charges"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Document Attached</label>
                                                <input type="file" name="doc_attached_file" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tentative Delivery Date</label>
                                                <input type="date" name="tentaive_delevery_date"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Delivery Date</label>
                                                <input type="date" name="delevery_date"
                                                    class="form-control form-control-sm border-black">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-success text-white me-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#customer-select').select2({
            placeholder: 'Select an option',
            allowClear: true
        });
    });
    $(document).ready(function() {
        $('#order-select').select2({
            placeholder: 'Select an option',
            allowClear: true
        });
    });
    $(document).ready(function() {
        $('#belt-select').select2({
            placeholder: 'Select an option',
            allowClear: true
        });
    });
    $(document).ready(function() {
        $('#uom-select').select2({
            placeholder: 'Select an option',
            allowClear: true
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date().toISOString().split('T')[0];
        var dateInput = document.getElementById('dateInput');
        dateInput.setAttribute('min', today);
        dateInput.value = today; // Set the default value to today's date
    });


    // let sectionCount = 1;

    // document.getElementById('addSectionBtn').addEventListener('click', function() {
    //     sectionCount++;
    //     const accordion = document.getElementById('orderAccordion');
    //     const newAccordionItem = document.createElement('div');
    //     newAccordionItem.classList.add('accordion-item');
    //     newAccordionItem.innerHTML = `
    //     <h2 class="accordion-header mt-3 border-top" id="heading${sectionCount}">
    //         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${sectionCount}" aria-expanded="false" aria-controls="collapse${sectionCount}">
    //             Order Details ${sectionCount}
    //         </button>
    //     </h2>
    //     <div id="collapse${sectionCount}" class="accordion-collapse collapse" aria-labelledby="heading${sectionCount}" data-bs-parent="#orderAccordion">
    //         <div class="accordion-body">
    //             <!-- Order Details Form Section -->
    //             <div class="row">
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Customer Select</label>
    //                                             <select name="customer_name" id="customer-select"
    //                                                 class="form-select form-control-sm">
    //                                                 <option value=""></option>
    //                                                 @foreach ($customer as $item)
    //                                                     <option value="{{ $item->id }}">{{ $item->name }}</option>
    //                                                 @endforeach
    //                                             </select>
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Date</label>
    //                         <input type="date" name="date" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Order Given By</label>
    //                         <input type="text" name="order_given_by" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //             </div>
    //             <div class="row">
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Select Order To</label>
    //                         <select name="order_select" class="form-select form-control-sm">
    //                             <option value=""></option>
    //                             @foreach ($order as $item)
    //                                 <option value="{{ $item->id }}">{{ $item->name }}</option>
    //                             @endforeach
    //                         </select>
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Order No</label>
    //                         <input type="number" name="order_no" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Belt Select</label>
    //                         <select name="belt_select" class="form-select form-control-sm">
    //                             <option value=""></option>
    //                             @foreach ($belt as $item)
    //                                 <option value="{{ $item->id }}">{{ $item->name }}</option>
    //                             @endforeach
    //                         </select>
    //                     </div>
    //                 </div>
    //             </div>
    //             <div class="row">
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Quantity</label>
    //                         <input type="number" name="quantity" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Description</label>
    //                         <textarea class="form-control" name="description" rows="3"></textarea>
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>UOM Select</label>
    //                         <select name="uom_select" class="form-select form-control-sm">
    //                             <option value=""></option>
    //                             @foreach ($uom as $item)
    //                                 <option value="{{ $item->id }}">{{ $item->uom }}</option>
    //                             @endforeach
    //                         </select>
    //                     </div>
    //                 </div>
    //             </div>
    //             <div class="row">
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Rate</label>
    //                         <input type="number" name="rate" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Amount</label>
    //                         <input type="number" name="amount" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Attach Document Company</label>
    //                         <input type="file" name="attach_doc_file" />
    //                     </div>
    //                 </div>
    //             </div>
    //             <div class="row">
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Remark For Vendor</label>
    //                         <input type="text" name="remark_vender" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Order Priority</label>
    //                         <input type="number" name="order_priority" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Weight Of Belt</label>
    //                         <input type="number" name="wight_belt" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //             </div>
    //             <div class="row">
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Packing Size Of Belt</label>
    //                         <input type="number" name="packing_size_belt" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Packing Charges</label>
    //                         <input type="number" name="packing_charges" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Transportation Charges</label>
    //                         <input type="number" name="transportaion_charges" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //             </div>
    //             <div class="row">
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Document Attached</label>
    //                         <input type="file" name="doc_attached_file" />
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Tentative Delivery Date</label>
    //                         <input type="date" name="tentaive_delevery_date" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //                 <div class="col-md-4">
    //                     <div class="form-group">
    //                         <label>Delivery Date</label>
    //                         <input type="date" name="delevery_date" class="form-control form-control-sm border-black">
    //                     </div>
    //                 </div>
    //             </div>
    //         </div>
    //     </div>
    // `;
    //     accordion.appendChild(newAccordionItem);
    // });
</script>
@include('footer');

</body>

</html>
