<!DOCTYPE html>
<html lang="pt=br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/editar_interessado.css">
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

<body class="banner-gravar">

    <header class="p-3">
        <a href="interessado.php"><i class="fa-lg fas fa-chevron-circle-left"></i></a>
    </header>

    <main>
        <section>
            <div class="text-center h2 p-4">
                <?php
                    if ( isset($msg) ) echo $msg;
                ?>
            </div>

        
            <div>
                <form class="mx-auto" method="POST" action="editar_interessado.php">
                    <div class="col-10 py-2">
                        <span class="d-block pb-2">Nome</span>
                        <input type="text" id="nome" name="nome" placeholder="Nome completo" size="40" value="<?php echo $interessado['nome'] ?>">
                    </div>

                    <div class="col-10 py-2">
                        <span class="d-block pb-2">Telefone</span>
                        <input type="text" id="telefone" name="telefone" placeholder="(DD) 1111-11111" size="40" value=" <?php echo $interessado['telefone'] ?>">
                    </div>

                    <div class="col-10 py-2">
                        <span class="d-block pb-2">Email</span>
                        <input type="text" id="email" name="email" placeholder="Usuario@email.com" size="40" value="<?php echo $interessado['email'] ?>">
                    </div>

                    <div class="col-10 py-2">
                        <span class="d-block pb-2">Já estudou inglês?</span>
                        <select id="estudouIngles" name="estudouIngles" value="<?php echo $interessado['estudouIngles'] ?>">
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>


                    <div class="col-10 py-2">
                        <span class="d-block pb-2">Nota do teste de nivel</span>
                        <input type="text" id="nota" name="nota" placeholder=" 7" size="40" value="<?php echo $interessado['nota'] ?>">
                    </div>

                    <div class="col-10 py-2">
                        <span class="d-block pb-2">Anexar arquivo (Teste de nivel)</span>
                        <input type="file" id="imagemTeste" name="MAX_FILE_SIZE" value="4194304" size="40" value="<?php echo $interessado['MAX_FILE_SIZE'] ?>">
                    </div>

                    <div class="col-10 py-2">
                        <span class="d-block pb-2">Mensagem</span>
                        <input type="textarea" id="mensagem" name="mensagem" placeholder="Mande uma mensagem para nós"
                            size="65" value="<?php echo $interessado['mensagem'] ?>">
                    </div>

                    
                    <div class="col-10 py-2">
                        <span class="d-block pb-2">Registro</span>
                        <input type="text" id="registro" name="registro" placeholder="Ativo/Inativo" size="65" value="<?php echo $interessado['registro'] ?>">
                    </div>

                    <div class="col-10 py-2">
                        <span class="d-block pb-2">Data</span>
                        <input type="text" id="data" name="data" placeholder="YYYY/MM/DD" size="40" value="<?php echo $interessado['data'] ?>">
                    </div>

                    <div class="col-11 d-flex justify-content-end pt-4">
                        <input type="hidden" name="id" value="<?php echo $interessado['id'] ?>" >
                    </div>
                    
                    <div class=" col-11 d-flex justify-content-end pt-4">
                        <input class="btn" type="submit" value="Gravar">
                    </div>

                </form>
            </div>
        </section>
    </main>
</body>

</html>