<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>8	</title>
   <link href="csstu/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body background="imagens/fundo.jpg">
	 <?php
        session_start();
        $_SESSION["q7"]=$_POST["questao7"];
      ?>
   <form action="resultado.php" method="post">

			<br>
	<br>
	


		<p class="fonte2">Quem pintou "A Primavera" ou "Alegoria da Primavera"?</p>
		
    <br>
	<br>
	<br>
		
		
		<div id="div1">
		  <img class="primavera" src="imagens/primavera.jpg" ><br>
		</div>
		
	<br>
	<br>
	
		<div align="center" >
		 <input class="tamRadio" name="questao8" type="radio" value="A"> Pablo Picasso
		 <input class="tamRadio" name="questao8" type="radio" value="B"> Joan Miró
		 <input class="tamRadio" name="questao8" type="radio" value="C"> Sandro Botticceli
		
		</div>
		
		<div id="div1">
		   <input class="imagem2" type="image" src="imagens/seta.png" onClick="this.form.submit()">
		   
		</div>
    </form>

	
  </body>
</html>