 <!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>1</title>
   <link href="csstu/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body background="imagens/fundo.jpg">
	<form action="questao2.php" method="post">

      <br>
	  
	  </br>



		<p class="fonte2"> Quem pintou Mona Lisa? </p>
		
		<br>
		
		</br>
		
		
		<div id="div1">
		  <img class="monalisa" src="imagens/mona lisa.jpg" ><br>
		</div>
		
		<br> 
		
		</br> 
		
		<div align="center" >
		 <input class="tamRadio" name="questao1" type="radio" value="A" > Justin Bieber 
		 <input class="tamRadio" name="questao1" type="radio" value="B"> Leonardo da Vinci
		 <input class="tamRadio" name="questao1" type="radio" value="C"> Caetano Veloso 
		
		</div>
		
		<div id="div1">
		   <input class="imagem2" type="image" src="imagens/seta.png" onClick="this.form.submit()">
		</div>
    </form>

	
  </body>
</html>