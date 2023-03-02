<html><head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/estiloo.css">
<title>Imagem</title>
    </head>
 <body>
  <form name="imagem"  action="" method="post" enctype="multipart/form-data">
     
      produto<input type="text" name="nome"><br>
      Imagem<input type="file" name="imagem"><br>
      Valor<input type="text" name="valor"><br>
       parcelas<input type="text" name="parcela"><br> 
        
      <br>
      <input type="submit" value="enviar" name="enviar">
      <br>
      <img src="imagens">
     </form>
   
    </body>  
   
</html>
<?php
If (isset($_POST['enviar'])){
   
$conexao=mysqli_connect("localhost","root","","meubanco") ;

   
   
 
    $nome=$_POST['nome'];
    $imagem=$_POST['imagem'];
    $valor=$_POST['valor'];
    $parcela=$_POST['parcela'];
   
    $sql="INSERT INTO cadastrartenis (nome,imagem,valor,parcela)
    VALUES ('$nome','$imagem','$valor','$parcela')";
   
    $teste= mysqli_query($conexao,$sql);
}
?>