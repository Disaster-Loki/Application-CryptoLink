<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url('public/') ?>/css/style-login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <h2>LOGIN</h2>
        <form method="post" action="<?= base_url('login')?>">
            <input placeholder="Username" name="username" id="username" required />
            <br/>
            <input placeholder="Password" type="password" name="password" id="password" required/>
            <br/>
            <br/>
            <input type="submit" value="Login"/>
        </form>
    </div>
</body>
</html>