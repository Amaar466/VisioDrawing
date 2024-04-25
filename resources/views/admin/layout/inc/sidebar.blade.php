<div class="sidebar">
<div class="sidebar_left">
    <div class="close_sidebar">
        <i class="fa fa-close"></i>
    </div>
    <div class="inner_nav">
        <a href="#"><img src="{{ asset('images/logo-2.png') }}" alt=""></a>
    </div>
    <div class="nav_items">
        <ul>
            <li class="active_menu"><a href="{{ url('/dashboard') }}"><i class="feather icon-grid"></i>
                    {{ __('home.dashboard') }}</a></li>
            <li><a href="{{ url('/user') }}"><i class="feather icon-users"></i> {{ __('home.user') }}</a> </li>
            <li><a href="{{ url('/record') }}"><i class="feather icon-file-text"></i> {{ __('home.record') }}</a> </li>
            <li><a href="{{ url('/department') }}"><i class="feather icon-home"></i> {{ __('home.department') }}</a>
            </li>
            <li><a href="{{ url('/menu') }}"><i class="feather icon-grid"></i> {{ __('home.menu') }}</a> </li>
        </ul>
    </div>
</div>
</div>
