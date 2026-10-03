<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-shell">
        <div class="brand-panel">
            <div class="brand-badge">Welcome back</div>
            <div class="brand-content">
                <h2>Access your dashboard</h2>
                <p>Manage your account, stay productive, and keep your work moving forward with a secure and seamless login experience.</p>
            </div>
            <div class="mini-stats">
                <div class="item">
                    <strong>24/7</strong>
                    <span>Support</span>
                </div>
                <div class="item">
                    <strong>99.9%</strong>
                    <span>Uptime</span>
                </div>
            </div>
        </div>

        <div class="form-panel">
            <div class="form-box">
                <div class="form-header">
                    <h1>Login</h1>
                    <p>Enter your email and password to continue</p>
                </div>

                <?php
                    if (isset($_POST['submit'])) {
                        extract($_POST);
                        $password = md5($password);
                        include_once('dbconfiq.php');
                        $result = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

                        if ($result->num_rows === 1) {
                            session_start();
                            $_SESSION['email'] = $email;
                            header("Location: dashboard.php");
                            exit;
                        } else {
                            echo "<div class='alert'>Invalid email or password.</div>";
                        }
                    }
                ?>

                <form action="" method="post">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <div class="input-wrap">
                            <span class="icon">✉</span>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="password">Password</label>
                        <div class="input-wrap">
                            <span class="icon">🔒</span>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                            <button type="button" class="toggle-password" id="togglePassword">Show</button>
                        </div>
                    </div>

                    <div class="row">
                        <label class="checkbox">
                            <input type="checkbox" name="remember">
                            <span>Remember me</span>
                        </label>
                        <a href="#" class="forgot">Forgot password?</a>
                    </div>

                    <button type="submit" name="submit" class="login-btn">Login</button>
                </form>

                <div class="signup">
                    Don't have an account? <a href="#">Sign up</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            togglePassword.textContent = isPassword ? 'Hide' : 'Show';
        });
    </script>
</body>
</html>