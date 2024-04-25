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

                            <li class="breadcrumb-item"><a href="#">{{ __('home.dashboard') }}</a> </li>
                        </ul>
                    </div>
                    <div class="row g-3 mb-3 row-deck">
                        <div class="col-md-12 col-lg-3 pl-0 pr-3 mt-0 dashboard_icon">
                            <div class="card ">
                                <div class="card-body red_bg">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-fill ms-4">
                                            <div class="">
                                                <h4>{{ __('home.total') }}</h4>
                                            </div>
                                            <h5 class="mb-0 ">{{ __('home.number') }}</h5>
                                        </div>
                                        <a href="#" title="view-members"
                                            class="btn btn-link text-decoration-none  rounded-1"><i
                                                class="icofont-hand-drawn-right fs-2 "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
