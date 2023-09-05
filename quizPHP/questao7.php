<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>7	</title>
   <link href="csstu/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body background="imagens/fundo.jpg">
	 <?php
        session_start();
        $_SESSION["q6"]=$_POST["questao6"];
      ?>
   <form action="questao8.php" method="post">

			<br>
	<br>
	


		<p class="fonte2">A figura feminina segurando a bandeira simboliza o quê?</p>
		
    <br>
	<br>
	<br>
		
		
		<div id="div1">
		  <img class="liberdade" src="imagens/liberdade.jpg" ><br>
		</div>
		
	<br>
	<br>
	
		<div align="center" >
		 <input class="tamRadio" name="questao7" type="radio" value="A"> O orgulho
		 <input class="tamRadio" name="questao7" type="radio" value="B"> A liberdade
		 <input class="tamRadio" name="questao7" type="radio" value="C"> A repressão
		
		</div>
		
		<div id="div1">
		   <input class="imagem2" type="image" src="imagens/seta.png" onClick="this.form.submit()">
		   
		</div>
    </form>

	
  </body>
</html>