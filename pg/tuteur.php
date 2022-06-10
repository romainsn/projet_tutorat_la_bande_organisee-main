<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" contents="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tuteur</title>
        <style>
            td{
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        <h1>Liste des tuteur</h1>
        <?php
        require_once '../src/FonctionsUtiles.php';

        mysql_connect('localhost', 'root','')
        ?>
        <table>
            <tr>
                <td></td>
                <td>Nom du tuteur</td>
                <td>Prenom tuteur</td>
                <td>Mail du tuteur</td>
                <td>Nombre d'etudiant max 3 OLEN</td>
                <td>Nombre d'etudiant max 4 OLEN</td>
                <td>Nombre d'etudiant max 5 OLEN</td>
            </tr>
            <tr>
                <td>1</td>
                <td>jack</td>
                <td>sparrow</td>
                <td>j.sparrow@gmail.com</td>
                <td>7</td>
                <td>7</td>
                <td>8</td>
            </tr>
            <tr>

            </tr>
        </table>

    </body>
</html>