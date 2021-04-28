




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="jquery.maskedinput-1.1.4.pack.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   
    
    <script type="text/javascript" src="./js//janela.js"></script>
    <title>Mills Days</title>
</head>

<body>
<header class="header">
<h1>teste</h1>
    <div class="barra-banner">
    <img src="./assets//img//logo-topo.svg" alt="" srcset="">
    </div>


</header>

<section class="main">
    <div class="address">
        <div id="linha-vertical">

        </div>

        <div class="text-address">
        <p><b>Data: </b>19 de agosto</p>
        <p><b> Local: </b> Casa Panamericana</p>
        <p><b>Endereço: </b> Av. Prof. Fonseca Rodrigues 197<br>
            Alto Pinheiros, São Paulo
        </p>
        </div>
    </div>
    <form class="form" name="formulario" id="insert_form"  action="cadastrar.php" method="post">
        <h2>Confirme sua presença:</h2>
        <input type="text" name="nome" id="nome" placeholder="Nome">
        <input type="email" name="email" id="email" placeholder="E-mail">
        <input type="text" name="empresa" id="empresa" placeholder="Empresa">
        <input type="tel" name="celular" id="celular" placeholder="Celular">
        <input type="tel" name="comercial" id="comercial" placeholder="Comercial">



        <h2>Selecione uma das opções:</h2>

        <!-- <label for="radio" id="radio"><b>Manhã<b> -Apresentações</label> -->
        <div class="radio-text">
        <input type="radio" name="hora" value="manha" id="hora">
        <label for="text">
        <b>Manhã</b>
        </label>
        </div>

        <!-- <label for="radio" id= radio><b>Manhã e Tarde</b> -Apresentações + Visita Operacional<br>
        (Infraestrutura - Rodoanel Norte)</label> -->
        <div class="radio-text">

       <input type="radio" name="hora" value="tarde" id="hora">
        <label for="text">
        <b>Manhã e Tarde</b> -Apresentações + Visita Operacional<br>
        (Infraestrutura - Rodoanel Norte)
        </label>
        </div>

        <input type="submit" value="Confirmar" name="btn-confirmar" onclick="validar()" id="btn">

    </form>




</section>
<footer>

    <img src="/assets//img//logo-rodape.png" alt="logomarca-MillsDays" srcset="">
</footer>


<script>
    function validar() {
    // pegando o valor do nome pelos names
    var nome = document.getElementById("nome");
    var email = document.getElementById("email");
    var empresa = document.getElementById("empresa");
    var celular = document.getElementById("celular");
    var comercial = document.getElementById("comercial");
    var hora = document.getElementById("hora");

    // verificar se o nome está vazio
    if (nome.value == "") {
        alert("Nome não informado");

        nome.focus();
        return;
    }
    if (empresa.value == "") {
        alert("Empresa não informado");
        empresa.focus();
        return;
    }
    if (email.value == "") {
        alert("E-mail não informado");
        email.focus();
        return;
    }

    if (celular.value == "") {
        alert("Celular não informado");
        celular.focus();
        return;
    }
    if (comercial.value == "") {
        alert("Comercial não informado");
        comercial.focus();
        return;
    }
    if (hora.value == "") {
        alert("Hora não informado");
        hora.focus();
        return;
    }
 
};
</script>

    
  
  
    </body>
</html>