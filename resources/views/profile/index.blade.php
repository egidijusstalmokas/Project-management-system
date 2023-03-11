@include('layouts.header')
<div class="content-wrapper p-3">
    @include('messages.success')
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-outline card-primary text-center p-4">
                <img class="img-circle profile-user-img img-fluid" src="{{ $user->profile_photo_path ?? false ? asset('profiles/' . $user->id . '/' . $user->profile_photo_path) : asset('profiles/default.png') }}" alt="">
                <h3 class="profile-username text-center">{{ $user->fullName() }}</h3>
                <p class="text-muted text-center">{{ $user->profile->profession }}</p>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About me</h3>
                </div>
                <div class="card-body">
                    <strong><i class="fas fa-book mr-2"></i>Education</strong>
                    <p class="text-muted">{{ $user->profile->education }}</p>
                    <hr>
                    <strong><i class="fas fa-map-marker-alt mr-2"></i>Location</strong>
                    <p class="text-muted">{{ $user->profile->location }}</p>
                    <hr>
                    <strong><i class="fas fa-pencil-alt mr-2"></i>Skills</strong>
                    <p class="text-muted">{{ $user->profile->skills }}</p>
                    <hr>
                    <strong><i class="fa-solid fa-envelope mr-2"></i>Email</strong>
                    <p class="text-muted">{{ $user->profile->email }}</p>
                    <hr>
                    <strong><i class="fa-solid fa-phone-volume mr-2"></i>Phone number</strong>
                    <p class="text-muted">{{ $user->profile->phone }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active profile-toggle-button">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link profile-toggle-button">Settings</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div id="timeline-block">...</div>
                    <div id="update-form" style="display:none">
                        <x-jet-validation-errors class="mb-4 text-danger" />
                        <form action="{{ route('profile.update', $user->profile) }}" method="post" enctype="multipart/form-data">
                            @CSRF
                            @method('PUT')
                            <input class="mb-3 form-control" type="text" name="education" value="{{ $user->profile->education }}" required>
                            <input class="mb-3 form-control" type="text" name="profession" value="{{ $user->profile->profession }}" required>
                            <input class="mb-3 form-control" type="text" name="location" value="{{ $user->profile->location }}" required>
                            <input class="mb-3 form-control" type="text" name="skills" value="{{ $user->profile->skills }}" required>
                            <input class="mb-3 form-control" type="text" name="notes" value="{{ $user->profile->notes }}" required>
                            <input class="mb-3 form-control" type="file" name="profile_img">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="mb-3 form-control" type="email" name="email" value="{{ $user->profile->email }}" required>
                                </div>
                                <div class="col-md-6">
                                    <input class="mb-3 form-control" type="text" name="phone" value="{{ $user->profile->phone }}" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update your profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
        $('.profile-toggle-button').click(function() {
            $('#timeline-block').toggle();
            $('#update-form').toggle();
            $('.profile-toggle-button').removeClass('active');
            $(this).addClass('active');
        });
        });
    </script>
</div>
@include('layouts.footer')
