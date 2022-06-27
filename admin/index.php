<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alice Bookstore | Admin Panel</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <div class="login-wrapper">
            <div class="left">
                <img src="../assets/images/logo-white.png" alt="Alice Bookstore Logo">
            </div>
            <div class="right">
                <h3>Login to Admin Dashboard</h3>
                <form>
                    <p class="form-label"></p>
                    <div class="input-group__label">
                        <label>Email Address</label>
                        <input type="text" id="admin-email">
                        <p class="error-label">Error Label</p>
                    </div>

                    <div class="input-group__label">
                        <label>Password</label>
                        <input type="password" id="admin-password">
                        <p class="error-label">Error Label</p>
                    </div>
                    <button class="button__primary" id="admin_login">Login</button>
                </form>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/admin/users.js"></script>
</body>
</html>