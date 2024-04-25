@extends('admin.layout.admin')
@section('content')
    <div class="main_page">

        <div class="overlay_sidebar"></div>
        <div class="menubar">
            <img src="images/logo.png" alt="">
            <i class="fa fa-bars"></i>
        </div>
        <div class="main_wrapper">
            <div class="right_contents">

                <div class="main_sidegapp">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="dashboard.html"><i class="feather icon-home"></i></a>
                            </li>

                            <li class="breadcrumb-item"><a href="#">Profile</a> </li>
                        </ul>
                    </div>
                    <div class="row g-3 mb-3 row-deck">

                    </div>
                    @php
                        $user = auth()->user();

                    @endphp
                    <div class="row">
                        <div class="col-sm-12 infobox profile">
                            <div class="inner_infobox ">
                                <div class="card border-0 text-center m-auto" style="width: 18rem;">
                                    <img class="card-img-top profile-image"
                                        src="{{ asset('assets/upload/image/' . $user->image) }}"
                                        style="border-radius: 50%;height: 285px;width: 285px;object-fit: cover;">
                                    <label class="edit_image">
                                        <input type="file" class="d-none" onchange="display_image(this.files[0]);">
                                        <i class="feather icon-image edit_image_i"></i>
                                    </label>
                                    <div class="card-body">
                                        @php
                                            $user = auth()->user();
                                        @endphp
                                        <h5 class="card-title">{{ $user->name }}</h5>
                                        <p class="card-text">{{ $user->email }}</p>
                                        <p class="card-text"> <a href="" data-toggle="modal"
                                                data-target="#usersModalPass" class="text-info">Change Password</a></p>
                                        <a href="#" class="btn custom_b_btn text-white">Save Profile</a>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <script>
                        function display_image(file) {
                            let allowed = ['jpg', 'jpeg', 'png', 'webp'];
                            let ext = file.name.split(".").pop();
                            if (!allowed.includes(ext.toLowerCase())) {
                                alert('Only files of this type allowed: ' + allowed.toString(", "));
                                return;
                            }
                            document.querySelector(".profile-image").src = URL.createObjectURL(file);
                        }
                    </script>
                </div>
            </div>
        </div>

        <!-- Create Modal -->
        <div class="modal fade" id="usersModalPass" tabindex="-1" role="dialog" aria-labelledby="userschangePass"
            aria-hidden="true">
            <div class="modal-dialog" id="user_list_popup" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="userschangePass">Change Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 p-0 form_list_user">
                                <form action="{{ url('/change-password') }}" method="POST">
                                    @csrf
                                    <div class="form-group input_box mb-2">
                                        <input type="password" name="oldPassword" class="form-control"
                                            placeholder="Old Password">
                                    </div>
                                    <div class="form-group input_box mb-2">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="New Password">
                                    </div>
                                    <div class="form-group input_box mb-2">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Confirm New Password">
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn custom_b_btn btn-primary">Change Password</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    @endsection
