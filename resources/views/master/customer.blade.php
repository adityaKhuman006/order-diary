@include('slidbar')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- customer reapiter start -->
<div class="repeater">
    <div class="card p-3 mt-3">
        <form action="{{ route('create.customer') }}" method="POST">
            @csrf
            <h2 class="fw-bolder">Customer</h2>
            <div data-repeater-list="category-group">
                <div id="show_item">
                    <div class="row" data-repeater-item>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="item_name"
                                           class="form-control form-control-sm border-black" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address"
                                           class="form-control form-control-sm border-black" placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <br>
                                    <div class="text-center mt-2">
                                        <button data-repeater-delete type="button" class="btn btn-danger add-item"
                                                style="padding:12px 15px 12px 15px;"><i
                                                class="text-white fs-5 mdi mdi-delete"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <button data-repeater-create type="button" class="btn p-3 btn-primary add-item"><i
                        class="mdi mdi-plus"></i></i>
                </button>
                <button type="submit" class="btn p-3 btn-success text-white me-2">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@include('footer');

</body>

</html>
