<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/util.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title">
					<span class="login100-form-title-1">
						Sign In
					</span>
            </div>

            <form class="login100-form validate-form" acttion="{{ route('admin.postLogin') }}}" method="POST">
                {{ csrf_field() }}
                <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required" >
                    <span class="label-input100">Email : </span>
                    <input class="input100" type="email" name="email" placeholder="Enter email" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Password : </span>
                    <input class="input100" type="password" name="password" placeholder="Enter password" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn" style="margin: 20px 0px;">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
