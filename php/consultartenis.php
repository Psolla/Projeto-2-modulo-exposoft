<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>consulta Imagem</title>
<link rel="stylesheet" type="text/css">
    <style>
        body{
        background: linear-gradient(120deg, white, #8E0DED);
        }
        .centro{
            font-size: 20px;
        color:black;
        }
    
    </style>
</head>

<body>
    <div class="centro">
<center>CADASTRO DE PRODUTO</center></div>
    
<?php
$conexao=mysqli_connect("localhost","root","","meubanco");
$sql="select * from cadastrartenis";
$result=mysqli_query($conexao,$sql);
if(mysqli_num_rows($result)==0){
echo"<p align='center'>
Nenhum registro encontrado</p>";
}
else{
    while($linha=mysqli_fetch_array($result)){
echo"<table width='70%'>
<tr>
<td >Imagem</td>
<td >Nome</td>
<td >Valor</td>
<td >Parcela</td>
</tr>";
$cor1="pink";
$cor2="white";
$cor=$cor1;

echo"<tr bgcolor='white'>
<td  align='center' width='100'><img src='imagenstenis/".$linha['imagem']."' height='60'/></td>
<td >".$linha['nome']."</td>
<td >".$linha['valor']."</td>
<td >".$linha['parcela']."</td>
</tr>
</table>";
}}
?>
</body>