<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilologin.php">
    <title>Document</title>
    <style>
        body{
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
input{
    width: 100%;
    border: none ;
    border-radius: 10px;
    padding: 15px;
    background: #00ff88 ;
    margin: 10px;
    box-shadow: 0px 10px 5px #00ff8052;
    text-transform: uppercase ;
    font-weight: 800 ;
    letter-spacing: 3px ;
    color: #2b134b  ;
    cursor: pointer;
}

.legt-login-image{
    width: 25vw ;
}
    </style>
   
</head>
<body>
   <div class="main-login">
       <div class="left-login">
           <img src="menina.svg" class="left-login-image" alt="menina">
       </div>
       <div class="right-login">
         <div class="card-login">
         <h1>Login</h1>
         <br>
           <form action="tela-login2.php" method="post">
           <input  type="submit" value="Entrar">
           <form action="" method="post">
           <input type="submit" value="Cadastrar">
           </form>
          
           </form>
         </div>
       </div>
   </div>
</body>
</html>