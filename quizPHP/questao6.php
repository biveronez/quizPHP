<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>6	</title>
   <link href="csstu/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body background="imagens/fundo.jpg">
	 <?php
        session_start();
        $_SESSION["q5"]=$_POST["questao5"];
      ?>
   <form action="questao7.php" method="post">

			<br>
	<br>
	


		<p class="fonte2">Qual o nome desta pintura?</p>
		
    <br>
	<br>
	<br>
		
		
		<div id="div1">
		  <img class="venus" src="imagens/venus.jpg" ><br>
		</div>
		
	<br>
	<br>
	
		<div align="center" >
		 <input class="tamRadio" name="questao6" type="radio" value="A"> A traição das imagens
		 <input class="tamRadio" name="questao6" type="radio" value="B"> Cabelos ao vento
		 <input class="tamRadio" name="questao6" type="radio" value="C"> O nascimento de Vênus
		
		</div>
		
		<div id="div1">
		   <input class="imagem2" type="image" src="imagens/seta.png" onClick="this.form.submit()">
		   
		</div>
    </form>

	
  </body>
</html>