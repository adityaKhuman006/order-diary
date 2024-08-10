@include('slidbar')

<div style="display: flex; justify-content: end;" class="mb-4">
    <a href="{{ route('users.create') }}">
        <button type="button" class="btn btn-success text-white" style="width: 110px;">Add User</button>
    </a>
</div>

<div class="card p-3">
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Item as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        @if ($item->type == \App\Models\User::ADMIN)
                            <span>Admin</span>
                        @else
                            <span>Vendor</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('users.update', ['id' => $item->id]) }}">
                            <i class="mdi mdi-pencil fs-4"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('footer');

</body>

</html>
