<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>4	</title>
   <link href="csstu/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body background="imagens/fundo.jpg">
	 <?php
        session_start();
        $_SESSION["q3"]=$_POST["questao3"];
      ?>
   <form action="questao5.php" method="post">

			<br>
	<br>
	<br>
	



		<p class="fonte2">Complete o nome da pintura: "Ponte Sobre Uma Lagoa de - "</p>
		
    <br>
	<br>
	<br>
		
		
		<div id="div1">
		  <img class="lirios" src="imagens/lirios.jpg" ><br>
		</div>
		
	<br>
	<br>
	<br>
	
		<div align="center" >
		 <input class="tamRadio" name="questao4" type="radio" value="A"> Céu estrelado
		 <input class="tamRadio" name="questao4" type="radio" value="B"> Girassóis azuis
		 <input class="tamRadio" name="questao4" type="radio" value="C"> Lírios de água
		
		</div>
		
		<div id="div1">
		   <input class="imagem2" type="image" src="imagens/seta.png" onClick="this.form.submit()">
		   
		</div>
    </form>

	
  </body>
</html>