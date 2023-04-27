<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@1,600&display=swap" rel="stylesheet">

    <title>Street Fighter</title>
</head>
<body>

<nav class="navbar">
            
            <ul>
                <li><a class="active" href="/">Home</a></li>
                <li><a class="active" href="p1">Ryu</a></li>
                <li><a class="active" href="p2">Ken</a></li>
                <li><a class="active" href="p3">Akuma</a></li>
                <li><a class="active" href="p4">Blanka</a></li>
                <li><a class="active" href="p5">Sagat</a></li>
                <li><a class="active" href="p6">Honda</a></li>
            </ul>
    
        </nav>
    <img class="card-box"  src="streetFighter.jpg" width="800px" height="200px"></a>

<div class="center">        

    <h1>Street Fighter</h1>
<br>
     
</div>        
       
    <p>Street Fighter (ストリートファイター Sutorīto Faitā?), popularmente abreviado para SF, é <br>uma série de jogos de luta desenvolvida pela fabricante japonesa de jogos eletrônicos<br>Capcom
Nela, o jogador controla lutadores de diversas partes do mundo - cada um com <br>personalidade, estilo e golpes especiais distintos - que devem enfrentar uns aos outros <br> até um desafio final.</p> 
    
<p>Iniciada em 1987, a série conta com 6 títulos e diversos spin-offs e crossovers, bem como <br> aparições em outras mídias, sendo considerada como pioneira dos jogos de luta, 
        uma vez que <br> definiu muitos dos principais paradigmas do gênero que perduram até os dias atuais.</p>       
</body>


<style>

*{
    margin: 0;
    padding: 0;
}

body{
    background-color: #1C1C1C;
}

.navbar{
    width: 100%;
    height: 80px;
    background: #00FF7F;
}    

.navbar ul{
    float: left;
    margin-right: 30px;
    font-family: 'IBM Plex Mono', monospace;
}

.navbar ul li{
    list-style: none;
    margin: 0 9px;
    display: inline-block;
    line-height: 80px;
}

.navbar ul li a{
    text-decoration: none;
    color: white;
    font-size: 22px;
    padding: 9px 18px;
}

.navbar ul li a.active{
    background: #1C1C1C;
}

.center{
    margin-top: 17em;
    margin-left: 45em;
}

.center h1{
    font-size: 50px;
    color: white;
    font-family: 'IBM Plex Mono', monospace;
}

p{
    margin-top: 2em;
    margin-left: 13em;
    font-size: 25px;
    color: white;
    font-family: 'IBM Plex Mono', monospace;
}

.card-box{
    position: absolute;
    top: 13%;
    left: 28%;
    transition: 0.2s ease-in-out;
}

</style>
</html>