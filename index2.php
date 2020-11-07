<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 2</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body class="fundo">
    <center>
        <h1>Formulário para paciente</h1>
        <?php
        ?>
        <table border="2" class="cor">
        <form action= "recebe2.php" method= "POST">
       <tr>
                <td>Nome:</td> 
                <td><input type= "text" name="nome"></td>
       </tr>
       <tr>
                <td>Data da consulta:</td>
                <td><input type= "date" name="data"></td>
       <tr>
                <td>Médico:</td>
                <td><input type="text" name="med"></td>
       </tr>
       <tr>
                <td>Especialidade médica:</td>
                <td><select name="espmedico">
                 <option value="cardiologista">cardiologista</option>
                 <option value="nutricionista">nutricionista</option>
                 <option value="psiquiatra">psiquiatra</option>
                 <option value="dermatologista">dermatologista</option>
                 <option value="oftamologista">oftamologista</option>
                </td>
                 </select>
                 
       </tr>
       
        </table>
        <input type=submit value="Enviar" name="enviar">
</form>
               <h3>Lívian Pascoal - INF 161</h3>
    </center>
    </body>
</html>