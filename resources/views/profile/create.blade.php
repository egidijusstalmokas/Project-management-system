@include('layouts.header')
<div class="content-wrapper p-3">
    <div class="row">
       <div class="col-12">
        <div class="card card-outline card-primary p-3">
            <h4 class="text-muted">Please fill up all information</h4>
            <x-jet-validation-errors class="mb-4 text-danger" />
            <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <input class="mb-3 form-control" type="text" name="education" placeholder="Your education" required>
                <input class="mb-3 form-control" type="text" name="profession" placeholder="Your profession" required>
                <input class="mb-3 form-control" type="text" name="location" placeholder="Your location" required>
                <input class="mb-3 form-control" type="text" name="skills" placeholder="Your skills" required>
                <input class="mb-3 form-control" type="text" name="notes" placeholder="Your notes" required>
                <input class="mb-3 form-control" type="file" name="profile_img">
                <div class="row">
                    <div class="col-md-6">
                        <input class="mb-3 form-control" type="email" name="email" placeholder="Your work email" required>
                    </div>
                    <div class="col-md-6">
                        <input class="mb-3 form-control" type="text" name="phone" placeholder="Your work phone number" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update your profile</button>
            </form>
        </div>
       </div>
    </div>
</div>
@include('layouts.footer')