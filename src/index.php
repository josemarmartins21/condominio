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
        <h1>Condominio da Sonangol</h1>
    <?php
    require '../vendor/autoload.php';

    use Dompdf\Dompdf;
    require_once 'conn.php';
    $data = [];

    $data = getData();
    

    ?>
    <div>
        <form action="" method="get">
            <input type="search" name="pesquisa" id="pesquisa" placeholder="Digite o nome...">
            <input type="submit" value="pesquisar">
        </form>
        <?php
            $nome = filter_input(INPUT_GET, 'pesquisa');
        ?>
    </div>
    <div id="container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Rua</th>
                    <th>Nª da casa</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($dado = buscarPorNome($nome) ):?>
                <tr>
                    <td><?= htmlspecialchars($dado['nome'])?></td>
                    <td><?= htmlspecialchars($dado['rua'])?></td>
                    <td><?= htmlspecialchars($dado['numero_da_casa'])?></td>

                    <?php break;?>
                </tr>
                <?php endwhile;?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total de moradores</th>
                    <td>3</td>
                </tr>
            </tfoot>
        </table>
    </div>
    </main>
</body>
</html>
    