<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- bootstrap css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">

    <!-- font awesome css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<link rel="icon" href="{{ asset('image/icons8-dragon-100.png') }}">
<body id="login-bg">

    <!-- login form start  -->
    <div class="container-lg">
		<div class="login-content text-center">
			<div class="login-form">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h2 class="title">Welcome</h2>
                    <div class="input-div mt-4">
                        <div class="input-i"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <input type="email" placeholder="Email address" name="email" class="@error('email') is-invaild @enderror">
                        </div>
                    </div>
                    <small class="d-block w-75 text-start text-danger ms-2">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </small>
                    
                    <div class="input-div">
                        <div class="input-i"><i class="fas fa-lock"></i></div>
                        <div>
                            <input type="password" placeholder="Password" name="password" class="@error('password') is-invalid @enderror">
                        </div>
                    </div>
                    <small class="d-block w-100 text-start text-danger ms-2">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </small>

                    <!-- <a href="#">Forgot Password?</a> -->
                    <input type="submit" class="btn" value="Login">

                    <div class="register-link mt-4 text-center">
                        <p>
                            Not a member?
                            <a href="{{ route('auth#registerPage') }}" class="ms-2">Sign Up Here</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login form end  -->

</body>
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- js  -->
    <script src="{{ asset('js/script.js') }}"></script>
</html>
