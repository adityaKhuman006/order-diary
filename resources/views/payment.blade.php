@include('slidbar')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h3 class="text-center">Payment</h3>
                        </div>
                        <form class="forms-sample">
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
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Particular</label>
                                            <input type="text" name="" class="form-control form-control-sm border-black"
                                                placeholder="Particular">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Remark</label>
                                                    <input type="text" name=""
                                                        class="form-control form-control-sm border-black"
                                                        placeholder="Remark">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-success text-white me-2">Save</button>
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