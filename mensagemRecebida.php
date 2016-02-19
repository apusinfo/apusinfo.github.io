<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apus Soluções em TI">
    <meta name="author" content="Felipe Piorini">
    <title>Apus Soluções em TI</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo-apus4.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                      <!--  <li class="scroll active"><a href="#home">Home</a></li>
                         <li class="scroll"><a href="#features">Features</a></li> 
                        <li class="scroll"><a href="#services">Serviços</a></li>
                        <!--   <li class="scroll"><a href="#portfolio">Portifólio</a></li> 
                        <li class="scroll"><a href="#about">Sobre</a></li>
                      <!--   <li class="scroll"><a href="#meet-team">Team</a></li> 
                        <li class="scroll"><a href="#pricing">Pricing</a></li>
                        <li class="scroll"><a href="#blog">Blog</a></li> 
                        <li class="scroll"><a href="#get-in-touch">Contato</a></li>  -->                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->





<?php

include "conexao.php";

$nome=$_POST["nome"];
$email=$_POST["email"];
$assunto=$_POST["assunto"];
$mensagem=$_POST["mensagem"];
$data = date("d.m.Y") ; 



//echo " <br> <br> $nome $email $assunto $mensagem $data ";


$consulta=ibase_query("INSERT INTO TB_MENSAGENS VALUES(1,'$nome','$email','$assunto', '$mensagem', '$data')");

    if(ibase_affected_rows()>0){
        echo "
       <section id='about'>
        <div class='container'>

            <div class='section-header'>
                <h2 class='section-title text-center wow fadeInDown'>Mensagem Recebida</h2>
                <p class='text-center wow fadeInDown'>Responderemos o mais rápido possível</p>
            </div>
        </div>
    </section><!--/#about-->

    <div class='container' align='center'>
       <a class='btn btn-primary btn-block' href='index.html'>Voltar</a>
   </div>

   <br>
   <br>
";
    }else   {
        ibase_errcode();
        
    }



?>
    



   

   <section id="cta2">
    <div class="container">
        <div class="text-center">
            <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>EDUC Aluno</span> o App para consultas acadêmicas</h2>
            <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Uma ferramenta fácil e prática para consultas academicas.</p>
            <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="https://play.google.com/store/apps/details?id=br.tecsof.educ">Veja na Google Play</a></p>
            <img class="img-responsive wow fadeIn" src="images/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
        </div>
    </div>
</section>




<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2016 Apus Soluções em TI. 
            </div>
            <div class="col-sm-6">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                 <!--       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>