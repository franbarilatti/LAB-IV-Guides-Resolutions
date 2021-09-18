<?php require_once "Config/Autoload.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Styles/style.css">
    <title>Special Greet</title>
</head>
<body>
    <form action="process.php" method="POST">
        <table align="center">
            <thead>Práctico N° 4.1</thead>
            <tr>
                <th>
                    <h3>Saludando</h3>
                </th>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione un idioma</b></p>
                    <input type="radio" name="language" value="spanish" > Argentino
                    <input type="radio" name="language" value="english"> Ingles
                    <input type="radio" name="language" value="portugues"> Portugues
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione una acción</b></p>
                    <input type="radio" name="greetOpt" value="greet"> Saludar
                    <input type="radio" name="greetOpt" value="goodBye"> Despedirse
                    <input type="radio" name="greetOpt" value="other"> Otro Mensaje
                    <textarea name="message" placeholder="Mensaje|Message|Mensagem"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Procesar</button>
                </td>
            </tr>
        </table>
        <?php 
            session_start();
            if(isset($_SESSION["error"])){
                echo $_SESSION["error"];
            }
        ?>
    </form>
</body>
</html>