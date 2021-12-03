<?php
include "testeBD.php";

 $error = "";
  if (isset($_POST['cadastrar'])) {
     $nome = $_POST['usuario'];
     $email = $_POST['email'];
     $senha = $_POST['senha'];
     $confsenha = $_POST['conf-senha'];
     $apelido = $_POST['apelido'];

     $verify = mysql_query("SELECT * FROM LOGIN WHERE email = '$email'");
    
  if(strlen($nome) < 3){
      $error = "<h2>Erro ao inserir o nome, o nome deve ter mais doque 3 caracteres</h2>";
  }elseif(strlen($email) < 8){
      $error = "<h2>Email invalido</h2>";
  }elseif(strlen($senha) < 8){
      $error = "<h2>senha invalida, senha deve ter no minimo 8 caracteres</h2>";
  }elseif(strlen($confsenha) < 8 or !($senha)){
      $error = "<h2> Erro ao confirmar a senha, deve colocar a mesma senha que colocou acima </h2>";
  }elseif(strlen($apelido) < 3){
      $error = "<h2> Erro ao inserir o apelido, deve ter mais de 3 caracteres </h2>";
  }elseif(mysql_num_rows($verify) > 0){
      $error = "<h2> email já cadastrado </h2>";
  }else{
      mysql_query("INSERT into login (nome , email , senha , apelido ) VALUES ( '$nome' , '$email' , '$senha' , '$apelido')");
      $error = "<h2 style = color: #00ff88 > Registrado com sucesso </h2>";
  }


  }
  
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilologin.php">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100;1,300&display=swap');
        body{
    font-family: 'Roboto' ;
    margin: 0;
}

.main-login{
    width: 100vw;
    height: 100vh;
    background: #201b2c;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow-x: hidden;
    overflow-y: scroll;
}
.left-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.right-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.card-login{
 width: 100% ;
 height: 85%;
 display: flex ;
 justify-content: center;
 align-items: center;
 flex-direction: column;
 padding: 30px 35px;
 background: #2f2841;
 border-radius: 20px;
 box-shadow: 0px 10px 40px #00000056;
}
h1{
    color: #00ff88 ;
    font-weight: 800;
    margin: 0;
}
.textfield > input{
    width: 100%;
    border: none ;
    border-radius: 10px;
    padding: 15px;
    background: #514869 ;
    margin: 10px;
    font-size: 12pt;
    text-transform: uppercase ;
    font-weight: 800 ;
    letter-spacing: 3px ;
    color: #f0ffffde ;
    cursor: pointer;
    box-shadow: 0px 10px 40px #00000056;
    outline: none;
    box-sizing: border-box ;
}

.legt-login-image{
    width: 25vw ;
}
.textfield{
    display: flex;
    flex-direction: column ;
    align-items: flex-start ;
    justify-content: center ;
}
.textfield > label {
    color: #f0ffffde ;
    margin-bottom: 10px;
}
.textfield > input ::placeholder{
    color: #f0ffffde ;
}
.btn-login{
    width: 100% ;
    padding: 16px 0;
    margin: 25px;
    border: none;
    border-radius: 8px;
    text-transform: uppercase;
    font-weight: 800px;
    letter-spacing: 3px ;
    color: #2b134b ;
    background: #00ff88 ;
    box-shadow: 0px 10px 40px -12px #00ff8052;
    cursor: pointer;
}
    </style>
   
</head>


<body>

   <div class="main-login">
       <div class="left-login">
           <img src="menino.svg" class="left-login-image" alt="menina">
       </div>
       <div class="right-login">
         <div class="card-login">
         <h1>Cadastro</h1>
        <div class="textfield">
            <br>
            <label for="">Usuário</label>
            <td><input type="text" name="Nome" placeholder="Usuário"></td>
        </div>
        
        <div class="textfield">
            <label for="">Email</label>
         <td>  <input type="email" name="email" placeholder="email"></td>
        </div>
        
        <div class="textfield">
            <label for="">senha</label>
          <td> <input type="senha" name="senha" placeholder="Senha"></td>
        </div>
        
        <div class="textfield">
            <label for="">Confirmar senha</label>
          <td> <input type="senha" name="conf-senha" placeholder="Confirmar a senha"></td>
        </div>
        
        <div class="textfield">
            <label for="">Apelido</label>
           <td><input type="email" name="apelido" placeholder="Apelido"></td>
        </div>
     <form action="telaprincipal.php" method="post">
    <td><input type="submit" value="Cadastrar" class="btn-login" name="cadastrar" ></td>
       </form>
       </div>
   </div>
</body>
</html>