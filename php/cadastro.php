<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-widht,initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a689f69e37.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/estiloform.css">
        <title>Cadastrar</title>
    </head>
    <body>
        <div id="corpo-form-Cad">
        <h1>Cadastrar</h1>
        <form  action=""method="POST">
        <input type="text" name="nome" placeholder="Digite seu Nome">
        <input type="text"name="telefone" placeholder="Digite seu Telefone">
        <input type="email" name="email" placeholder="Digite seu Email">
        <input type="password"  name="senha"placeholder="Crie sua senha">
        <input type="password"  name="confirmar"placeholder="Confirmar senha">
   <input type="date" name="dt"  placeholder="data de nascimento">
        <input type="submit" name="enviar" value="Criar Conta">
          
        </form>
        </div>
    <?php
    
        
include("../php/conexao.php");
        
    if(isset($_POST['enviar'])){
        
        $nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$confirmar=$_POST['confirmar'];
$dt=$_POST['dt'];

      if($senha==$confirmar){
           $sql="INSERT INTO cadastro (nome,telefone,email,senha,dt)
           VALUES ('$nome','$telefone','$email','$senha','$dt')";
           
      $result=mysqli_query($conexao,$sql) ;
          
          echo "cadastrado com sucesso.";header("Location:../php/entrar.php");
      }
     else { echo '<h3 class="error">Senhas Incorretas</h3>';
        
    
    }
    }
     
           
?>    