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

</head>

<body>
    <div class="signin_login">


        <div class="signin_form">
            <div class="inner_signin">
                <h3>Reset Your Password</h3>
                <p>Strong passwords include numbers, letters, and punctuation marks.</p>
            </div>

            <form action="{{ url('/reset-password') }}" method="POST">
                @csrf
                <div class="form_box">
                    <img src="images/user_icon.png" alt="">
                    <input type="hidden" name="id">
                    <label>Email Address</label>
                    <input type="text" name="email">
                </div>

                <div class="form_box">
                    <img src="images/lock_icon.png" alt="">
                    <label>Enter new Password</label>
                    <input type="password" name="password">
                </div>

                <div class="form_box">
                    <img src="images/lock_icon.png" alt="">
                    <label>Confirm new Password</label>
                    <input type="password" name="password">
                </div>

                <div class="login_btn">
                    <a href="index.html"><button type="submit">Reset Password</button></a>
                </div>
            </form>
        </div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>


    </div>
</body>

</html>
