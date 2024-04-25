<div class="js lang_box">
    <div class="language-picker js-language-picker" data-trigger-class="btn btn--subtle">
        <label for="language-picker-select"></label>
        <select onchange="changeLanguage()" id="language-picker-select">

            <option lang="en" value="en">
                <span class="flag-icon flag-en"></span> English
            </option>
            <option lang="ar" value="ar">
                <span class="flag-icon flag-ar"></span> Arabic
            </option>
        </select>
    </div>
</div>
@php
    $user = auth()->user();

@endphp
<div class="topbar">
    <div class="toggle_dropdown">
        <h3><img src="{{ asset('assets/upload/image/' . $user->image) }}" alt=""> <span>{{ $user->name }}</span>
            <i class="fa fa-angle-down"></i></h3>
    </div>
    <div class="dropdown_box">
        <ul>
            <li><a href="{{ url('/showuser') }}"><i class="feather icon-user"></i> {{ __('home.profile') }}</a></li>
            <!-- Make sure the logout form is correctly set up -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="feather icon-log-out"></i>{{ __('home.logout') }}</a></li>
        </ul>
    </div>
</div>

<script>
    window.addEventListener('load', function() {
        $('#language-picker-select').val('{{ Lang::locale() }}');

        var selectElement = document.getElementById('language-picker-select');

        selectElement.addEventListener('change', function(event) {
            var selectedOption = event.target.options[event.target.selectedIndex];

            if (selectedOption.lang === "en") {
                // Redirect to English page
                window.location.href = "/locale/en";
            } else if (selectedOption.lang === "ar") {

                window.location.href = "/locale/ar";
            }
        });
    });
    // Trigger the change event after setting the default language
    var event = new Event('change', {
        bubbles: true
    });
    selectElement.dispatchEvent(event);

    // Automatically set the default language based on user's preference
</script>
