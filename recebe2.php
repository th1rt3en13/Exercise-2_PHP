<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 2</title>
    </head>
    <body>
    <center>
        <h1>Formulário para paciente</h1>
        <?php
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $med = $_POST["med"];
        $espmedico = $_POST ["espmedico"];
        ?>
   <table border="1">
            <tr>
                <td> <?php echo "Nome:";?></td>
                <td><?php echo "$nome <br>"; ?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Data da Consulta: ";?></td>
                <td><?php echo "$data <br>";?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Nome do Médico:";?></td>
                <td><?php echo "$med <br>"; ?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Especialidade médica: ";?></td>
                <td><?php echo $_POST["espmedico"];?> </td>
                
            </tr>
            </table>

    </center>
    </body>
</html>