﻿<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Bis</title>
    <meta charset="utf-8">
	<link rel="shortcut icon"  href="img/img.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
	
	    .carousel-inner{
			height: 719px;
		    }
		 #titulo{
			font-family: Building;
			font-size: 85px;
			color: witch;
			text-align: justify-all;
			height: 130px;
			}
		#paragrafo{
			font-family:Quinon;
			font-size: 32px;
			color: witch;
			text-align: justify-all;
			height: 495px;
			}
		#botao{
		background-color:#0B243B;
		font-family: Summer;
		position: absolute;
		z-index:1;
		margin-left:565px; 
	    top:510px;
		border-radius:8em;
		color: white;
	    padding: 10px 70px 10px 70px;
        font-size: 23px;
		}
    </style>
</head>
<body>
	
    <nav class="navbar navbar-inverse  navbar-fixed-top" >
        <div class="container-fluid" >
            <div class="navbar-header">
                <a href="home.php"><img src="img/icon1.png" alt="BIS" id="icu" class="brand-logo" style="top:5px; margin-left:-3px;" width="135" height="49"></a>
            </div>
        <ul class="nav navbar-nav">
            <li><a href="home.php">HOME</a></li>
               <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">HARDWARE</a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Manutenção</a></li>
                        <li><a href="#">Suporte</a></li>
                     </ul>
                 <li><a href="cftv.php">CFTV</a></li>
            <li><a href="software.php">SOFTWARE</a></li> 
			<li><a href="solucaoemauto.php">SOLUÇÃO EM AUTOMAÇÃO</a></li>
            </li>
        </ul>
            <ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon"></span><i>(85) 9 4002-8922</i></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Cadastrar-se</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                
            </ul>
        </div>
    </nav>

<!-CODIGO DO ISLID-->
<div class="container-fluid1">

	<a href="hardware.php"<button type="button" id="botao" class="btn btn-warning">Cameras</button></a>
  <div id="myCarousel"  class="carousel" style="top:-20px;"  data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#myCarousel"  class="active"></li>
      <li data-target="#myCarousel"></li>
      <li data-target="#m"></li>
   </ol>
          <div class="carousel-inner">
             <div class="item active">
				<img src="img/foto1.png"  style="width:100%;">
				<div class="carousel-caption">
				<p id="titulo">CÂMERAS DE SEGURANÇA<p>
				<p id="paragrafo">Equipamentos de vídeo monitoramento para aseguar sua propriedade.</p>
             </div>
          </div>

          <div class="item">
				<img src="img/e2.jpg" style="width:100%;">
			  <div class="carousel-caption">
				<P id="titulo">Desenvolvimento</P>
				<p id="paragrafo">Progamarmos os sistemas de acordo com a sua preferencia.</p>
			  </div>
          </div>
    
          <div class="item">
            <img src="img/e4.jpg" style="width:100%;">
            <div class="carousel-caption">
            <P id="titulo">Suporte</P>
            <p id="paragrafo">Proporcionamos suporte, manutenção de computadores e etc.</p>
            </div>
          </div>
  
          </div> 
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only"></span>
            </a>
            </div>
          </div>

</div>	
</body>
</html>
