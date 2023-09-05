<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>3	</title>
   <link href="csstu/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body background="imagens/fundo.jpg">
	 <?php
        session_start();
        $_SESSION["q2"]=$_POST["questao2"];
      ?>
   <form action="questao4.php" method="post">

		<br>
	<br>
	<br>
	



		<p class="fonte2">"A noite estrelada" retrata o quê?</p>
		
    <br>
	<br>
	<br>
		
		
		<div id="div1">
		  <img class="noite" src="imagens/noite estrelada.jpg" ><br>
		</div>
		
	<br>
	<br>
	<br>
	
		<div align="center" >
		 <input class="tamRadio" name="questao3" type="radio" value="A"> Uma viagem
		 <input class="tamRadio" name="questao3" type="radio" value="B"> A vista da janela de um asilo
		 <input class="tamRadio" name="questao3" type="radio" value="C"> Rosas amarelas
		
		</div>
		
		<div id="div1">
		   <input class="imagem2" type="image" src="imagens/seta.png" onClick="this.form.submit()">
		   
		</div>
    </form>

	
  </body>
</html>