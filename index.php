<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Admission System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>
    <header class="header">
      <span class="logo"><i class="fas fa-home "></i></span>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#">About</a>
            <a href="contactus.php">Contact</a>

            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>
    <section class="section">
        <div class="content">
            <h1>Welcome to <br><span>Online Admission</span> <br>System</h1>
            <p class="par">An Online admission System is web-based application designed to steamline and automate the process os student admissions for educational institutions such as schools,colleges, and universities.</p>

                <button class="cn"><a href="/phpt/dir/Adform.php">Apply Now</a></button>
        </div>
        <div class="wrapper">
        <span class="icon-close"><i class="fas fa-x"></i></span>

            <div class="logreg-box">
                <!-- login form -->
                <div class="form-box login">
                    <div class="logreg-title">
                        <h2>Login</h2>
                       
                    </div>
                    <form action="register.php" method="POST">
                        <div class="input-box">
                            <span class="icon"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" required>
                            <label for="email"> Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class="fas fa-lock"></i></span>
                            <input type="password" name="passWord" required>
                            <label for="passWord"> Password </label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">Remember me</label>
                            <a href="#">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn" name="signIn">Login</button>

                        <div class="logreg-link">
                            <p>Don't have an account? <a href="#" class="register-link">Sing up</a></p>
                        </div>
                    </form>
                </div>

<!-- Registration form -->
                <div class="form-box register">
                    <div class="logreg-title">
                        <h2>Sign up</h2>
                        
                    </div>

                    <form action="register.php" method="POST">
                        <div class="input-box">
                            <span class="icon"><i class="fas fa-user"></i></span>
                            <input type="text" name="fullName" required>
                            <label for="fullName">Full name</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" required>
                            <label for="email"> Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class="fas fa-lock"></i></span>
                            <input type="password"  name="passWord" required>
                            <label for="passWord"> Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">I agree to terms & condition</label>
                            
                        </div>
                        <button type="submit" class="btn" name="signUp">Sign up</button>

                        <div class="logreg-link">
                            <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                        </div>
                    </form>
                </div>

            </div>
            
            <div class="media-options">
                <a href="#">
                    <i class="fab fa-google "></i>
                    <span>Login with Google</span>
                </a>
                <a href="#">
                    <i class="fab fa-facebook"></i>
                    <span>Login with Facebook</span>
                </a>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>
