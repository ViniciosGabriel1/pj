<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>

<body>
    <div class="container">
        <div class="container-login">
        <section class="sec">
            <div class="wrapper-login">
            <section class="sec2">
                <form action="processa_login.php" class="login-form">
                    <span class="form-title">Faça Login</span>

                    <div class="wrap-input margin-top-35 margin-bottom-35">
                        <input type="email" name="email" class="input-form" autocomplete="off">
                        <span class="focus-input-form" data-placeholder="E-mail"></span>
                    </div>

                    <div class="wrap-input margin-bottom-35">
                        <input type="password" name="password" class="input-form">
                        <span class="focus-input-form" data-placeholder="Senha"></span>
                    </div>

                    <div id="container-login-form-btn">
                        <button class="login-form-btn">Entrar</button><br>
                    </div>

                    <ul>
                        <li class="margin-top-8 margin-bottom-8">
                            <a href="#" class="text1">Esqueceu a senha?</a><br>
                        </li>

                        <li class="margin-top-8 margin-bottom-8">
                            <a href="#" class="text2">Não tem conta?</a>
                        </li>
                    </ul>
                </form>
                </section>
            </div>
            <img src="img/doutor.svg" alt="Login" width="500" height="500">
        </div>
        <script>
            let inputs = document.getElementsByClassName('input-form');

            for (let input of inputs) {
                input.addEventListener("input", function() {
                    if (input.value.trim() !== "") {
                        input.classList.add("has-val");
                    } else {
                        input.classList.remove("has-val");
                    }
                });
            }
        </script>

    </div>
    </section>

</body>

</html>