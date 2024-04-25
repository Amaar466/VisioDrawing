<!DOCTYPE html>
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Microsoft Visio </title>
    <!-- meta tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="distribution" content="global" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link id="favicon" rel="icon" type="images/favicon.png" href="images/favicon.png">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

    <div class="signin_login">
        <div class="signin_form">
            <div class="inner_signin">
                <h3>Sign in</h3>
                <p>Welcome back to your account.</p>
            </div>
            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="form_box">
                    <img src="images/user_icon.png" alt="">
                    <label>Email Address</label>
                    <input type="text" name="email">
                </div>
                <div class="form_box">
                    <img src="images/lock_icon.png" alt="">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>

                <div class="login_btn">
                    <a href="#"><button type="submit">login</button></a>
                    <p class="mt-3">Forgot your <a href="{{ url('/reset-password') }}" class="text-info">password?</a>
                    </p>
                </div>
            </form>
        </div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>



</body>

</html>
