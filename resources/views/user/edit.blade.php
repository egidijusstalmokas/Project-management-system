@include('layouts.header')
<div class="content-wrapper p-3">
    <div class="card card-outline card-info">
    <div class="card-header">
        <h3 class="card-title">{{ $user->fullName() }}</h3>
        <div class="card-tools">
        <span class="badge badge-primary">Users</span>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <form action="{{ route('users.update', $user->id) }}" method="POST">
    @CSRF
    @method('PUT')
    <div class="card-body">
        <x-jet-validation-errors class="mb-4 text-danger" />
        @include('messages.success')
        <div class="row">
            <div class="col-12 mb-3">
                <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
            </div>
            <div class="col-12 mb-3">
                <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control" required>
            </div>
            <div class="col-12 mb-3">
                <select class="form-control" name="role" required>
                    <option class="text-capitalize" value="{{ $user->role }}">{{ $user->role }}</option>
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
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
    </form>
    <!-- /.card-footer -->
    </div>
    <!-- /.card -->
    <div class="card card-outline card-danger">
        <div class="row p-3">
            <div class="col-12">
                <a class="d-inline pr-2" data-toggle="modal" data-target="#exampleModal"><button type="submit" class="btn btn-danger">Delete user</button></a>
                <p class="d-inline">This action is irreversible, all information related to the user will be removed!</p>
                @include('user.modals.delete')
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')