@include('layouts.header')
<div class="content-wrapper p-3">
    <div class="card card-outline card-info">
    <div class="card-header">
        <h3 class="card-title">Create new</h3>
        <div class="card-tools">
        <span class="badge badge-primary">Users</span>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <form action="{{ route('users.store') }}" method="POST">
    @CSRF
    <div class="card-body">
        <x-jet-validation-errors class="mb-4 text-danger" />
        @include('messages.success')
        <div class="row">
            <div class="col-12 mb-3">
                <input type="text" name="name" placeholder="Name" class="form-control" required>
            </div>
            <div class="col-12 mb-3">
                <input type="text" name="lastname" placeholder="Lastname" class="form-control" required>
            </div>
            <div class="col-12 mb-3">
                <input type="email" name="email" placeholder="Email" class="form-control" required>
            </div>
            <div class="col-12 mb-3">
                <select class="form-control" name="role" required>
                    <option value="">Please select role</option>
                    <option value="admin">Administrator</option>
                    <option value="manager">Project manager</option>
                    <option value="developer">Developer</option>
                    <option value="designer">Designer</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    </form>
    <!-- /.card-footer -->
    </div>
    <!-- /.card -->
</div>
@include('layouts.footer')