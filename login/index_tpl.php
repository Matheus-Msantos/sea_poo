<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>SEA - Star English Academy</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/secao-principal.css">
    <link rel="stylesheet" href="../css/login.css">
    <!-- JS, Popper.js, jQuery and fonts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4d52201842.js" crossorigin="anonymous"></script>

</head>

<body>
    <main>
        <div class="banner-login d-flex align-items-center justify-content-center">
            <form method="POST" action="index.php">
                <img class="icon" src="../imagens/capitao.png">
                <div class="d-block text-center h6"> 
                    <?php 
                        if ( isset($msg) ) echo $msg;
                    ?>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-text"><i class="fas fa-user 7x"></i></span>
                    </div>
                    <input type="text" name="login" placeholder="Login" size="45">
                </div>

                <div class="input-group">
                    <div class="input input-group-prepend">
                        <span class="input-text"><i class="fas fa-lock 7x"></i></span>
                    </div>
                    <input type="password" name="senha" placeholder="Senha" size="45">
                </div>
                <div class="text-center pt-3">
                    <input type="submit" name="entrar" value="Entrar">
                </div>
            </form>
        </div>
    </main>

</body>

</html>