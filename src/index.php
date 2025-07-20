<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condominio</title>
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
    <?php foreach($data as $dado):?>
        <p>
            <?= htmlentities($dado['nome'])?> ||
            <?= htmlentities($dado['rua'])?> || 
            <?= htmlentities($dado['numero_da_casa'])?>
        </p>

    <?php endforeach;?>
    </main>
</body>
</html>
    