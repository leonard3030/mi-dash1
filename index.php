<?php require 'includes/variables.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi-Dash | Login</title>
    <link rel="stylesheet" href="<?=CSS?>/midash1.css">
</head>
<body>
    <div class="midash-widget">
        <section class="form-section">
            <form onsubmit="login(event)" action="admin/dashboard">
                <div class="form-avatar">
                    <img src="<?=IMG?>/avatar4.jpg" alt="">
                </div>
                <div class="form-header">Login</div>
                <div class="form-group">
                    <span class="fa fa-user user-icon"></span>
                    <input type="text" class="form-input" placeholder="phone...">
                    <p>Phone is required</p>
                </div>
                <div class="form-group">
                    <span class="fa fa-lock user-icon"></span>
                    <input type="password" class="form-input" placeholder="**********">
                    <p>Password is required</p>
                </div>
                <div class="form-group">
                    <input type="submit" class="login-submit" value="Login">
                </div>
                <p class="reminders"><a href="">Forgot Password?</a> |<a href="">Register</a></p>
            </form>
        </section>
    </div>

    <script src="<?=JS?>/midash1.js"></script>
</body>
</html>