@include('slidbar')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<div class="card p-3">
    <h3 class="fw-bolder m-3">Update User</h3>
    <!-- partial -->
    <div class="repeater mt-5">
        <form action="{{ route('users.update.data') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required value="{{ $user->name }}"
                            class="form-control form-control-sm border-black" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required value="{{ $user->email }}"
                            class="form-control form-control-sm border-black" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-select" required id="type" value="{{ $user->type }}" name="type"
                            aria-label="Default select example">
                            <option selected disabled>select</option>
                            <option value="{{ \App\Models\User::ADMIN }}">Admin</option>
                            <option value="{{ \App\Models\User::VENDOR }}">Vendor</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required
                            class="form-control form-control-sm border-black" placeholder="Password">
                        @error('password')
                            <div class="text-danger fw-bold mt-5">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            class="form-control form-control-sm border-black" placeholder="Confirm Password">
                        @error('password_confirmation')
                            <div class="text-danger fw-bold mt-5">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn p-3 btn-success text-white me-2">Submit</button>
            </div>
        </form>
    </div>
</div>
@include('footer')
</body>
</html>
