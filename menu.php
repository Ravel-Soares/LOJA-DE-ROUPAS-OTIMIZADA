<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@500&family=Roboto:ital,wght@1,100;1,300&display=swap');
        body{
            background-color:  #201b2c ;
            margin: 0;
            font-family: 'Outfit', sans-serif;
        }
        .parallax{
            background-image: url("festinha.svg");
            height: max-content ;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover ;
        }
        .page-title{
            background:rgba(0,0,0,0.5);
            text-align: center;
            color: white;
            padding: 50px;
            font-variant: small-caps;
            font-size: 150px;
            letter-spacing: 20px;
            font-family: 'Outfit', sans-serif;
        }
        #sticky{
            position: fixed ;
            top: 0;
            width: 100%;
        }
        .menu {
          text-decoration: none ;
          color: #00ff88 ;
        }
        a{
            text-decoration: none ;
          color: #00ff88 ;
          font-size: 20px;
        }
        corcard{
            background-color: #201b2c;
        }

    </style>
</head>
<body>
<body>
    <div class="parallax">
        <div class="page-title">Veste Bem</div>
 
       <div class="menu" id="sticky">
       <nav class="navbar cor-fundo justify-content-between">
  <a href="">Inicio</a>
  <a href="">Blusas</a>
<a href="">Camisas</a>
<a href="">Calças</a>
<a href="">Tenis</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
      </nav>
       </div>
    </div>
</body>
</html>