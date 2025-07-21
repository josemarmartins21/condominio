<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condominio</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
    <?php
    require '../vendor/autoload.php';

    use Dompdf\Dompdf;
    require_once 'conn.php';
    $data = [];

    $data = getData();
    

    ?>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Rua</th>
                <th>Nª da casa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $dado):?>
            <tr>
                <td><?= htmlentities($dado['nome'])?></td>
                <td><?= htmlentities($dado['rua'])?></td>
                <td><?= htmlentities($dado['numero_da_casa'])?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">Total de moradores</th>
                <td>25</td>
            </tr>
        </tfoot>
    </table>
    
        <p>
            
        </p>

   
    </main>
</body>
</html>
    