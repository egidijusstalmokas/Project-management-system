@include('layouts.header')
<div class="content-wrapper p-3">
    <div class="card card-outline card-info">
    <div class="card-header">
        <h3 class="card-title">Users list</h3>
        <div class="card-tools">
            <a href="{{ route('users.create') }}"><button type="button" class="btn btn-outline-info"><i class="fa-solid fa-plus mr-2"></i>Add new</button></a>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    @include('messages.success')
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Lastname</th>
            <th scope="col">Position</th>
            <th scope="col">Email</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="user-table-row">
            <th scope="row"><a href="{{ route('users.edit', $user->id) }}" class="text-reset">{{ $loop->iteration }}</a></th>
            <td><a href="{{ route('users.edit', $user->id) }}" class="text-reset">{{ $user->name }}</a></th>
            <td><a href="{{ route('users.edit', $user->id) }}" class="text-reset">{{ $user->lastname }}</a></th>
            <td class="text-capitalize"><a href="{{ route('users.edit', $user->id) }}" class="text-reset">{{ $user->role }}</a></th>
            <td><a href="{{ route('users.edit', $user->id) }}" class="text-reset">{{ $user->email }}</a></th>
            <td><a href="{{ route('users.edit', $user->id) }}" class="text-reset"><i class="fa-solid fa-pen-to-square user-edit-icon"></i></a></th>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    </div>
    <!-- /.card-footer -->
    </div>
    <!-- /.card -->
</div>
@include('layouts.footer')