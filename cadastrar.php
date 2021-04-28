<?php
require_once 'conex.php';

    if(isset($_POST['btn-confirmar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $empresa = mysqli_escape_string($connect, $_POST['empresa']);
        $celular = mysqli_escape_string($connect, $_POST['celular']);
        $comercial = mysqli_escape_string($connect, $_POST['comercial']);
        $hora = mysqli_escape_string($connect, $_POST['hora']);
        // $nome = mysqli_escape_string($connect, $_POST['nome']);
        $data_envio = date('d/m/Y H:i');
        $hora_envio = date('H:i:s');

        $sql = "INSERT INTO contatos (nome, email, empresa, celular, comercial, hora, data_envio, hora_envio) 
        VALUES ('$nome', '$email', '$empresa', '$celular', '$comercial', '$hora', '$data_envio', '$hora_envio')";

        if (mysqli_query($connect, $sql)):
            header('Location: ../mod-wind.php');
            
        else:
            header('Location: ../index.php?erro');

        endif;

            endif;
?>