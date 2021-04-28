<?php
//Trás das pastas
require 'consulta_interessado.php';
require 'validacao.php';

//Leva para as pastas
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/interessado.css">
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
    <section class="banner-interessado">
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Estudou Ingles?</th>
                <th>Quanto tempo?</th>
                <th>Nota do teste</th>
                <th>imagem do teste</th>
                <th>Mensagem</th>
                <th>Registro</th>
                <th>Data</th>
            </tr>

            <?php
            
                if ( is_array($tabela) ){
                    foreach ($tabela as $id => $reg) {
                        echo"
                            <tr>
                                <td> $id </td>
                                <td> {$reg['nome']} </td>
                                <td> {$reg['telefone']} </td>
                                <td> {$reg['email']} </td>
                                <td> {$reg['estudouIngles']} </td>
                                <td> {$reg['quantoTempo']} </td>
                                <td> {$reg['nota']} </td>
                                <td> {$reg['imagem']} </td>
                                <td> {$reg['mensagem']} </td>
                                <td> {$reg['registro']} </td>
                                <td> {$reg['data']} </td>
                                <td> <a href='editar_interessado.php?id=$id'><i class='icon-editar fas fa-user-edit'></i></a> </td>
                                <td> <a href='apagar.php?id=$id'><i class='icon-apagar fas fa-trash-alt'></i></a> </td>
                            </tr>
                        ";
                    }
                }else {
                    echo"
                        <tr>
                            <td colspan='13'>Não há dados</td>
                        </tr> 
                    ";
                }
            ?>

        </table>
    </section>
</body>

</html>