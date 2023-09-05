<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>  2 	</title>
   <link href="csstu/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body background="imagens/fundo.jpg">
	<?php
       session_start();
       $_SESSION["q1"]=$_POST["questao1"];
    ?>
  <form action="questao3.php" method="post">

    <br>
	<br>
	<br>
	
	



		<p class="fonte2">"Guernica" pintada por Pablo Picasso retrata:</p>
		
    <br>
	<br>
	<br>
		
		
		<div id="div1">
		  <img class="guernica" src="imagens/guernica.jpg" ><br>
		</div>
		
	<br>
	<br>
	<br>
	
		<div align="center" >
		 <input class="tamRadio" name="questao2" type="radio" value="A"> A felicidade 
		 <input class="tamRadio" name="questao2" type="radio" value="B"> O sofrimento do povo espanhol
		 <input class="tamRadio" name="questao2" type="radio" value="C"> A vida de Pablo Picasso
		
		</div>
		
		<div id="div1">
		   <input class="imagem2" type="image" src="imagens/seta.png" onClick="this.form.submit()">
		</div>
    </form>

	
  </body>
</html>