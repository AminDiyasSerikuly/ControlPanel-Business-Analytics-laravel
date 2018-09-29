<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="headernav">
    <div class="container">
    <div id="logo"> A </div>
    <nav id="navbar"> B
        <a href="">asdasdasdasd</a>
        <a href="">asdasdasdasd</a>
    </nav>
    </div>
</div>
</body>
</html>
<style>
    #headernav{
        background:#0000FF;
        height: 60px;
        font-size: 0; //this added
    }

      #logo,#navbar{
          display: inline-block;
          vertical-align: top;
      }

    #logo{
        font-size: 1rem; //this added
    width: calc(100% - 700px); //this added

    background:red;
        height: 60px;
    }
    #navbar{
        font-size: 2rem;
    width:700px;
        margin: auto;
        height: 60px;
        background: cyan;
    }
</style>