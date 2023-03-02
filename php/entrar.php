<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-widht,initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a689f69e37.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/estiloform.css">
        <title>login</title>
    </head>
    <body>
        <div id="corpo-form">
        <h1>Login</h1>
        <form  action="../php/entrar.php"method="POST">
        <input type="email" name="email" placeholder="Digite seu Email">
        <input type="password" name="senha" placeholder="Digite sua senha">
            <input type="submit"  name="enviar"value="Entrar">
            <a href="../php/cadastro.php">Ainda não tem uma conta?<strong>Cadastre-se!</strong></a>
        </form>
        </div>
        
      <?php

include("../php/conexao.php");
     
   
    if (isset($_POST['enviar'])){
 
    $email=$_POST['email'];
    $senha=$_POST['senha'];
   
    $sql="SELECT*FROM cadastro WHERE email='$email'AND senha='$senha'";
       
    $result=mysqli_query($conexao,$sql);
    $numlinha=mysqli_num_rows($result);
    if($numlinha>0 && $numlinha == 1){
        header("Location:../html/index.html");
    } else { echo '<h2 class="erro">login não encontrado</h2>';
        
    
    }
    }
?>
</body>
</html>
    



