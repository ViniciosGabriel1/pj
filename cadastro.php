<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>login</title>
</head>

<body>

    <div class="container">
    
        <div class="container-cadastro">
        <section class="sec">
            <div class="wrapper-cadastro">
            <section class="sec2">
                <form action="processa_cadastro.php" class="cadastro-form">
                    <span class="form-title">Faça cadastro</span>

                    <div class="wrap-input margin-top-35 margin-bottom-35">
                        <input type="text" name="nome" class="input-form">
                        <span class="focus-input-form" data-placeholder="Nome"></span>
                    </div>

                    <div class="wrap-input margin-top-35 margin-bottom-35">
                        <input type="text" name="login" class="input-form">
                        <span class="focus-input-form" data-placeholder="Login"></span>
                    </div>

                    <div class="wrap-input margin-top-35 margin-bottom-35">
                        <input type="email" name="email" class="input-form">
                        <span class="focus-input-form" data-placeholder="E-mail"></span>
                    </div>

                    <div class="wrap-input margin-bottom-35">
                        <input type="password" name="password" class="input-form">
                        <span class="focus-input-form" data-placeholder="Senha"></span>
                    </div>

                    <div id="container-cadastro-form-btn">
                        <button class="cadastro-form-btn">Entrar</button><br>
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
            <img src="img/doutor.svg" alt="cadastro">
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