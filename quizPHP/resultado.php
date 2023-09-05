<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Resultado! </title>
	<link href="csstu/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
 <body background="imagens/fundo.jpg">
   <?php
     session_start();
     $_SESSION["q8"]=$_POST["questao8"];
   
  
     $acertos=0;
	 $erros=0;
	 
	 if ($_SESSION["q1"]=="B") {
		 $acertos++;
	   }
	 if ($_SESSION["q2"]=="B") {
		 $acertos++;
	   }
	 if ($_SESSION["q3"]=="B") {
		 $acertos++;
	   }
	    if ($_SESSION["q4"]=="C") {
		 $acertos++;
	   }
	   
	   if ($_SESSION["q5"]=="B") {
		 $acertos++;
	   }
	   
	   if ($_SESSION["q6"]=="C") {
		 $acertos++;
	   }
	   if ($_SESSION["q7"]=="B") {
		 $acertos++;
	   }
	   if ($_SESSION["q8"]=="C") {
		 $acertos++;
	   }
	  
   
   
   
	  
	  
	  
	  
	  
	  if ($_SESSION["q1"]!="B") {
		 $erros++;
	   }
	 if ($_SESSION["q2"]!="B") {
		 $erros++;
	   }
	 if ($_SESSION["q3"]!="B") {
		 $erros++;
	   }
	    if ($_SESSION["q4"]!="C") {
		 $erros++;
	   }
	   
	   if ($_SESSION["q5"]!="B") {
		 $erros++;
	   }
	   
	   if ($_SESSION["q6"]!="C") {
		 $erros++;
	   }
	   if ($_SESSION["q7"]!="B") {
		 $erros++;
	   }
	   if ($_SESSION["q8"]!="C") {
		 $erros++;
		 
		 
	   }
	  
	 
   
   
   echo "<p class='fonte1'> 
   
   <br> 
   <br> 
  
  
	   Você teve $acertos acerto(s) e $erros erro(s)! </p>";
   
   

  if ($acertos >= 7){
	   
	   echo " <p align = 'center'> 
	   
   <br> 
   <br> 
   <br> 
   <br> 
   
   <br> 
  
    <img src=imagens/feliz.gif> </p> <br> <br> <br> <br> <p class='fonte1'> Parabéns! Você manja total. <3 <br> 
	<br>
	<br>
	
	<br>
	<br>"  ;
	   
	   
	  
	   
   }
   
   if ($acertos >= 5 && $acertos < 7){
	   
	  
	   
	    echo " <p align = 'center'> 
	   
   <br> 
   <br> 
   <br> 
   <br> 
   
   <br> 
  
    <img src=imagens/felizz.gif> </p> <br> <br> <br> <br> <p class='fonte1'> Até que você foi bem, não? <3 <br> 
	<br>
	<br>
	
	<br>
	<br>"  ;
	   
   }
   
   if ($acertos > 0 && $acertos <=4 ){
	   
	   
	   
	   
	     echo " <p align = 'center'> 
	   
   <br> 
   <br> 
   <br> 
   <br> 
   
   <br> 
  
    <img src=imagens/felizz.gif> </p> <br> <br> <br> <br> <p class='fonte1'> Tem que manjar mais, ein! <br> 
	<br>
	<br>
	
	<br>
	<br>" 
	;
	   
   }
   
   if ($acertos == 0){
	   
	
	   
	   echo " <p align = 'center'> 
	   
   <br> 
   <br> 
   <br> 
   
   
   <br> 
  
    <img src=imagens/ultimo.gif> </p> <br> <br> <br> <br> <p class='fonte1'> Puts! zerou. Não desista da arte! <3 </p> <br>
	<br>
	<br>
	
	<br>
	<br>
	";


	

	
	
	   
	   
   }
   
   
   
   echo 
   
   
   "<p class='fonte1'> Desenvolvido por: Bianca Veronez </p>" ;
	
	
	?>

 </body>
</html>