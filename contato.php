
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="Magaywer Moreira de Paiva" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Geo Learn</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template 
    <link href="signin.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">GeoLearn</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="produtor.php">Novos Cadastros</a></li>
            <li><a href="dados.php">Dados anteriores</a></li>
            <li><a href="estimativa.php">Estimativa</a></li>
            <li><a href="sobrenos.php">Sobre nós</a></li>
            <li><a href="contato.php">Contato</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">

        <?php

      require("php/conectadb.php"); //chama o arquivo de conexão ao BD

        $consulta = "select f.id_fazenda, f.nome from fazenda f";

        $result = mysql_query($consulta);
        //echo $result;
        ?>

    <div class="container">
      <form class="form-signin" action="/php/create(recebe).php">
        <h2 class="form-signin-heading">Insira os dados</h2>
        <label>Fazenda</label>
        <select name="id_fazenda" class="form-control">
        <?php 
          while($fazenda = mysql_fetch_assoc($result)){ ?>            
            <option value="<?php echo $fazenda['id_fazenda']; ?>"><?php echo $fazenda['nome']; ?></option>
         <?php } ?>        
        </select>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
      </form>
      
      <?php
      //Fechar a conexao
        mysql_close($conn);
      ?>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
