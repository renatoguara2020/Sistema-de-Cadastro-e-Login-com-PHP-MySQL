<?php
    require_once 'classe.php';
    $u = new usuario();
?>

<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>

    <header>
        <nav>
            <h1>Sistema de cadastro e login com PHP e MYSQL</h1>
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="cadastro.html">Cadastro</a>
                </li>                
                <li>
                    <a href="login.html">Login</a>
                </li>
            </ul>
        </nav>
    </header>

    <div>
        <?php

            session_start();            
            if(!isset($_SESSION['ID'])){
                echo "Bem-Vindo, convidado <br>";
                echo "Essas informações <span id='naopode'>NÃO PODEM</span> ser acessadas por você";
                echo "<br><a href='login.html'><button>Faça Login</button></a> Para ler o conteúdo";
            }else{                
                echo "Bem-Vindo, ".$_SESSION['ID']." <br />";
                echo "Essas informações <span id='pode'>PODEM</span> ser acessadas por você";
                echo '<a href="http://www.jeferson.ml">* [Web Site]</a>
                <a href="https://github.com/jeferson0993">* [Github]</a>
                <a href="https://codepen.io/jeferson0993/">* [CodePen]</a>
                <a href="https://www.linkedin.com/in/jeferson-ferreira-4a036b143">* [Linkedin]</a>';
                echo "Email: jeferson@ferreirasilva.ml";
                echo "<a href='sair.php'><button>SAIR</button></a>";
            }
        
        ?>
    </div>

    <?php
        include 'footer.php'
    ?>

</body>
</html>