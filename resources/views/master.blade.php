@include('slidbar')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <!-- order to reapiter start -->
        <div class="repeater">
            <div class="card p-3">
                <form action="{{ route('order.create') }}" method="POST">
                    @csrf

                    <h3>Order To</h3>

                    @foreach ($orderFatch as $item)
                        <div class="row" data-repeater-item>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ $item->name }}"
                                            class="form-control form-control-sm border-black" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="number" value="{{ $item->number }}"
                                            class="form-control form-control-sm border-black" placeholder="Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div data-repeater-list="category-group">
                        <div id="show_item">
                            <div class="row" data-repeater-item>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="category-group[][name]"
                                            class="form-control form-control-sm border-black" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Number</label>
                                        <input type="number" name="category-group[][number]"
                                            class="form-control form-control-sm border-black" placeholder="Number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <br>
                                        <div class="text-center mt-2">
                                            <button data-repeater-delete type="button"
                                                class="btn btn-danger add-item"><i class="ti ti-trash text-white"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button data-repeater-create type="button" class="btn btn-primary add-item"><i class="ti ti-plus text-white"></i></button>
                        <button type="submit" class="btn btn-success text-white me-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>



        <!-- customer reapiter start -->
        <div class="repeater">
            <div class="card p-3 mt-3">
                <form action="{{ route('customer.create') }}" method="POST">
                    @csrf
                    <h3>Customer</h3>
                    @foreach ($customerFatch as $item)
                        <div class="row" data-repeater-item>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ $item->name }}"
                                            class="form-control form-control-sm border-black" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" value="{{ $item->address }}"
                                            class="form-control form-control-sm border-black" placeholder="Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div data-repeater-list="category-group">
                        <div id="show_item">
                            <div class="row" data-repeater-item>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name"
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
                                                <button data-repeater-delete type="button"
                                                    class="btn btn-danger add-item"><i class="ti ti-trash text-white"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button data-repeater-create type="button" class="btn btn-primary add-item"><i class="ti ti-plus text-white"></i></i>
                        </button>
                        <button type="submit" class="btn btn-success text-white me-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- user reapiter strat -->

        <div class="repeater">
            <div class="card p-3 mt-3">
                <form action="{{ route('user.create') }}" method="POST">
                    @csrf
                    <h3>User</h3>
                    @foreach ($userFatch as $item)
                        <div class="row" data-repeater-item>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ $item->name }}"
                                            class="form-control form-control-sm border-black" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Office/Vender</label>
                                        <input type="text" name="Office_Vender" value="{{ $item->Office_Vender }}"
                                            class="form-control form-control-sm border-black"
                                            placeholder="Office/Vender">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div data-repeater-list="category-group">
                        <div id="show_item">
                            <div class="row" data-repeater-item>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name"
                                                class="form-control form-control-sm border-black" placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Office/Vender</label>
                                            <input type="text" name="Office_Vender"
                                                class="form-control form-control-sm border-black"
                                                placeholder="Office/Vender">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <br>
                                            <div class="text-center mt-2">
                                                <button data-repeater-delete type="button"
                                                    class="btn btn-danger add-item"><i class="ti ti-trash text-white"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button data-repeater-create type="button" class="btn btn-primary add-item"><i class="ti ti-plus text-white"></i></i>
                        </button>
                        <button type="submit" class="btn btn-success text-white me-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- uom eapiter strat -->

        <div class="repeater">
            <div class="card p-3 mt-3">
                <form action="{{ route('umo.create') }}" method="POST">
                    @csrf
                    <h3>UOM</h3>
                    @foreach ($uomFatch as $item)
                        <div class="row" data-repeater-item>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>UOM</label>
                                        <input type="text" name="uom" value="{{ $item->uom }}"
                                            class="form-control form-control-sm border-black" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div data-repeater-list="category-group">
                        <div id="show_item">
                            <div class="row" data-repeater-item>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>UOM</label>
                                            <input type="text" name="uom"
                                                class="form-control form-control-sm border-black" placeholder="Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <br>
                                            <div class="text-center mt-2">
                                                <button data-repeater-delete type="button"
                                                    class="btn btn-danger add-item"><i class="ti ti-trash text-white"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button data-repeater-create type="button" class="btn btn-primary add-item"><i class="ti ti-plus text-white"></i></i>
                        </button>
                        <button type="submit" class="btn btn-success text-white me-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('footer');

</body>

</html>
