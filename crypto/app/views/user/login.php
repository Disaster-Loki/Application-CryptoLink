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
        <form method="post" action="<?= base_url('login')?>" onsubmit="return loginUser()">
            <input placeholder="Username" name="username" id="username" required />
            <br/>
            <input placeholder="Password" type="password" name="password" id="password" required/>
            <br/>
            <br/>
            <input type="submit" value="Login"/>
        </form>
    </div>
    <!-- Adicionar função JavaScript para processar o formulário e exibir alerta -->
    <script>
        function loginUser() {
            // Obter valores dos campos de formulário
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            var xhr = new XMLHttpRequest();

            xhr.open("POST", "<?= base_url('login')?>", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        window.location.href = response.redirect;
                    } else {
                        alert(response.message);
                    }
                }
            };
            xhr.send("username=" + username + "&password=" + password);
            return false;
        }
    </script>
</body>
</html>