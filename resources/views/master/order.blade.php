@include('slidbar')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css"/>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

<div class="card p-3">

    <table class="table table-hover tab-pane">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Number</th>
            <th>Action</th>
        </tr>
        @foreach($data as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td><input type="text" class="border-0 update-name" data-id='{{$item->id}}' value="{{ $item->name }}">
                </td>
                <td><input type="text" class="border-0 update-number" data-id='{{$item->id}}'
                           value=" {{ $item->number }}"></td>
                <td>`
                    <button type="button" class="btn btn-danger add-item"
                            style="padding:4px 5px 3px 5px;"><i
                            class="fs-5 text-white mdi mdi-delete"></i></button>
                </td>
            </tr>
        @endforeach
    </table>
    <!-- partial -->
    <div class="repeater">
        <form action="{{ route('create.order') }}" method="POST">
            @csrf
            <h2 class="fw-bolder">Order To</h2>
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
                                    <label>Number</label>
                                    <input type="number" name="number"
                                           class="form-control form-control-sm border-black" placeholder="Number">
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
                                                class="fs-5 text-white mdi mdi-delete"></i></button>
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
@include('footer');

<script>
    $(document).ready(function () {
        $(".update-name").focusout(function () {
            var name = $(this).val();
            var id = $(this).attr('data-id');
            $.ajax({
                url: '{{ route('update.order.name') }}',
                method: 'POST',
                data: {
                    id: id,
                    name: name
                }, success: function (response) {

                }, error: function (response) {
                    alert(response);
                }
            })
        })
    })
</script>
