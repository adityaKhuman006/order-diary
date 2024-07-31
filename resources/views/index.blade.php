@include('slidbar')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('assets/css/file.css') }}">

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper" style="z-index: 1;">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h3 class="p-2 fw-bolder">Order</h3>
                        </div>
                        <form class="forms-sample">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Customer Name</label>
                                            <input type="text" name="" class="form-control form-control-sm border-black"
                                                placeholder="Customer Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" name="" class="form-control form-control-sm border-black"
                                                placeholder="Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Order Given By</label>
                                            <input type="text" name="" class="form-control form-control-sm border-black"
                                                placeholder="Order Given By">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect3">Order To</label>
                                            <select class="form-select form-control-sm" id="exampleFormControlSelect3">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Ordedr No</label>
                                            <input type="number" name=""
                                                class="form-control form-control-sm border-black"
                                                placeholder="Order No">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect3">Belt Name</label>
                                            <select class="form-select form-control-sm" id="exampleFormControlSelect3">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" name=""
                                                class="form-control form-control-sm border-black"
                                                placeholder="Quantity">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>UOM</label>
                                            <input type="text" name="" class="form-control form-control-sm border-black"
                                                placeholder="UOM">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Rate</label>
                                            <input type="number" name=""
                                                class="form-control form-control-sm border-black" placeholder="Rate">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Amount</label>
                                            <input type="number" name=""
                                                class="form-control form-control-sm border-black" placeholder="Amount">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Attach Document Company</label>
                                            <input type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Remark For Vender</label>
                                            <input type="text" name="" class="form-control form-control-sm border-black"
                                                placeholder="Remark For Vender">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Order Priority</label>
                                            <input type="number" name=""
                                                class="form-control form-control-sm border-black"
                                                placeholder="Order Priority">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Wight Of Belt</label>
                                            <input type="number" name=""
                                                class="form-control form-control-sm border-black"
                                                placeholder="Wight Of Belt">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Packing Size Of Belt</label>
                                            <input type="number" name=""
                                                class="form-control form-control-sm border-black"
                                                placeholder="Packing Size Of Belt">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Packing Charges</label>
                                            <input type="number" name=""
                                                class="form-control form-control-sm border-black"
                                                placeholder="Packing Charges">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Transportaion Charges</label>
                                            <input type="number" name=""
                                                class="form-control form-control-sm border-black"
                                                placeholder="Transportaion Charges">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Document Attached</label>
                                            <input type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Tentaive Delevery Date</label>
                                            <input type="date" name="" class="form-control form-control-sm border-black"
                                                placeholder="Tentaive Delevery Date">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Delevery Date</label>
                                            <input type="date" name="" class="form-control form-control-sm border-black"
                                                placeholder="Delevery Date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-success text-white me-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer');

</body>

</html>