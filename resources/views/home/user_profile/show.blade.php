@extends('home.layouts.app')
@section('content')
    {{-- <div class="row">
        <div class="col-8">
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Email :</b>
                {{ $user->email }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Phone
                    :</b>{{ isset($user->profile->phone) ? $user->profile->phone : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Country
                    :</b>{{ isset($user->profile->country) ? $user->profile->country : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">City :</b>
                {{ isset($user->profile->city) ? $user->profile->city : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Address :</b>
                {{ isset($user->profile->address) ? $user->profile->address : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Day Of Birth :</b>
                {{ isset($user->profile->day_of_birth) ? $user->profile->day_of_birth : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Gender :</b>
                {{ isset($user->profile->gender) ? $user->profile->gender : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Status :</b>
                {{ isset($user->profile->status) ? $user->profile->status : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Created At :</b>
                {{ isset($user->profile->created_at) ? $user->profile->created_at : null }}
            </p>
            <p class="d-flex justify-content-start"><b class="font-weight-bold">Updated At :</b>
                {{ isset($user->profile->updated_at) ? $user->profile->updated_at : null }}
            </p>
        </div>
        <div class="col-4">
            @if (!empty($user->profile->image))
                <img width="100%" src="<?php echo '/images/' . $user->profile->image; ?>" alt="">
            @else
                <img width="100%" src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png" alt="">
            @endif
        </div>
    </div> --}}
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            @if (!empty($user->profile->image))
                                <img class="rounded-circle img-fluid" style="width: 150px;" width="100%"
                                    src="<?php echo '/images/' . $user->profile->image; ?>" alt="">
                            @else
                                <img width="100%" src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png"
                                    alt="">
                            @endif

                            <h5 class="my-3"><?php echo $user->email; ?></h5>

                            <div class="d-flex justify-content-center mb-2">
                                {{-- <button type="button" class="btn btn-primary">Follow</button> --}}
                                <a class="btn btn-primary text-center" href="{{ route('user_profile.edit') }}">Edit</a>

                                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fas fa-globe fa-lg text-warning"></i>
                                    <p class="mb-0">https://mdbootstrap.com</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                    <p class="mb-0">mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                    <p class="mb-0">@mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                    <p class="mb-0">mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                    <p class="mb-0">mdbootstrap</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $user->email; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ isset($user->profile) ? $user->profile->phone : null }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">City</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ isset($user->profile) ? $user->profile->city : null }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Country</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ isset($user->profile) ? $user->profile->country : null }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ isset($user->profile) ? $user->profile->address : null }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Gender</p>
                                </div>
                                <div class="col-sm-9">
                                    @if(isset($user->profile) && $user->profile->gender == 1)
                                    <p class="text-muted mb-0">Nam</p>
                                    @else
                                    <p class="text-muted mb-0">Nu</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                            </p>
                            <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                            <div class="progress rounded mb-2" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                            </p>
                            <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                            <div class="progress rounded mb-2" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
