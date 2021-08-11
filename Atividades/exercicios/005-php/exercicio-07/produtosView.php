<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    
    <a href="insert.php">Inserir</a>
    
        <table id="tabela" class="table table-bordered table-striped border-dark bg-white rounded">
            <thead class="table-secondary">
                <?php 
                    while($e = $produtos->fetch()) {
                        echo "<tr>";
                            echo '<td class="align-items-center">' . $e["nome"] . "</td>\n";
                            echo '<td class="align-items-center">' . $e["um"] . "</td>\n";
                        echo "</tr>";
                    }
                ?>
            </thead>
        </table>

        
</body>
</html>