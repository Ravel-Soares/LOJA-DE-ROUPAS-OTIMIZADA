
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
 width: 60% ;
 display: flex ;
 justify-content: center;
 align-items: center;
 flex-direction: column;
 padding: 30px 35px;
 background: #2f2841;
 border-radius: 20px;
 box-shadow: 0px 10px 40px #00000056;
}
.card-login > h1{
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
         <h1>Login</h1>
         <br>
        <div class="textfield">
            <label for="">Usuário</label>
            <input type="text" name="Nome" placeholder="Usuário">
        </div>
        
        <div class="textfield">
            <label for="">Senha</label>
           <input type="password" name="Senha" placeholder="Senha">
        </div>
     <form action="telaprincipal.php" method="post">
    <input type="submit" value="Entrar" class="btn-login">
       </form>
       </div>
   </div>
</body>
</html>