<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title> 5	</title>
   <link href="csstu/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body background="imagens/fundo.jpg">
	 <?php
        session_start();
        $_SESSION["q4"]=$_POST["questao4"];
      ?>
   <form action="questao6.php" method="post">

			<br>
	<br>
	


		<p class="fonte2">"O grito", por Edvard Munch, representa qual/quais sentimento/s?</p>
		
    <br>
	<br>
	<br>
		
		
		<div id="div1">
		  <img class="grito" src="imagens/o grito.gif" ><br>
		</div>
		
	<br>
	<br>
	
		<div align="center" >
		 <input class="tamRadio" name="questao5" type="radio" value="A"> A felicidade
		 <input class="tamRadio" name="questao5" type="radio" value="B"> Solidão, melancolia, medo
		 <input class="tamRadio" name="questao5" type="radio" value="C"> Paz
		
		</div>
		
		<div id="div1">
		   <input class="imagem2" type="image" src="imagens/seta.png" onClick="this.form.submit()">
		   
		</div>
    </form>

	
  </body>
</html>