<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="MP Desenvolvimento">

    <title>Biossegurança - UFC</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="nav">
    <?php include "includes/nav.html";?>
    </div>

    <div id="content">
    <?php
    if(isset($_GET['pagina'])){
    	//verificar o valor, caso seja um desconhecido nada acontece
      //se for p1 vou incluir a pagina p1
    	if($_GET['pagina']=="epi"){
    		include "conteudo/epi.html";
    	}else if($_GET['pagina']=="epc"){
    		include "conteudo/epc.html";
      }else if($_GET['pagina']=="pop"){
        include "conteudo/pop.html";
      }else if($_GET['pagina']=="fispq"){
        include "conteudo/fispq.html";
      }else if($_GET['pagina']=="bpl"){
        include "conteudo/bpl.html";
      }else if($_GET['pagina']=="incendios"){
        include "conteudo/incendios.html";
      }else if($_GET['pagina']=="mapa_de_risco"){
        include "conteudo/mapa_de_risco.html";
      }else if($_GET['pagina']=="manual"){
        include "conteudo/manual/manual.html";

      }else if($_GET['pagina']=="quimico"){
        include "conteudo/quimico.html";
      }else if($_GET['pagina']=="biologico"){
        include "conteudo/biologico.html";
      }else if($_GET['pagina']=="fisico"){
        include "conteudo/fisico.html";
      }else if($_GET['pagina']=="acidente"){
        include "conteudo/acidente.html";
      }else if($_GET['pagina']=="ergonomico"){
        include "conteudo/ergonomico.html";
      }else if($_GET['pagina']=="about"){
        include "about.html";
      }else if($_GET['pagina']=="contact"){
        include "contact.html";
      }
    }else{
    	include "inicio.html";
    }
    ?>
    </div>

    <div id="footer">
    <?php include_once "includes/footer.html";?>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
