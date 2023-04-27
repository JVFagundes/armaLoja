<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@1,600&display=swap" rel="stylesheet">

    <title>Ryu</title>
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

        <a href="/"><img class="card-box"  src="pijas.png" width="300px" height="450px"></img></a>
<div class="center">      
        <h1>Nome: Ryu (リュウ /  隆)
    <br>
            Terra Natal: Japão
    <br>
            Data de Nasc.: 21/07/1964
    <br>
            Altura: 1,75 cm
    <br>
            Peso: 85 kg
    <br>
            Tipo Sanguíneo: A
    <br>
            Estilo de Luta: Técnicas com raízes do karatê Ansatsuken
    <br>
            Primeira Aparição: Street Fighter (1987)
    <br>
    </h1>
            <h2>Relativos:
    <br>
            Akuma (Rival/Inimigo) <br> Gouken (Mestre/Pai adotivo) <br> Ken Masters (Rival/Amigo) 
            Sagat (Rival) <br> Kage (Incorporação de seu Satsui no Hado,da qual Ryu preferiu se desfazer) <br> Chun-Li (Amiga)
            </h2>
</div>        
       
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
    color: white;
    font-family: 'IBM Plex Mono', monospace;
}

.center h1{
    font-size: 25px;
    margin-top: 10em;
    margin-left: 29em;
}

.center h2{
    font-size: 25px;
    margin-top: 5.5em;
    margin-left: 15em;
}

.card-box{
    position: absolute;
    top: 25%;
    left: 20%;
    transition: 0.2s ease-in-out;
}

.card-box:hover{
	transform: scale(1.2);
}

</style>
</html>