<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <title>Cadastro de pessoas</title>
</head>

<body>
    <h1>Dados do cadastro da pessoa</h1>

    <form method="POST" action="validar.php">
        
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome da pessoa" required>
        </div>

        <div>
            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" placeholder="Idade" required>
        </div>


        <div>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" placeholder="Endereço" required>
        </div>

        <div>
            <label>Gênero:</label>

            <div>
                <input type="radio" name="genero" id="feminino" value="F" required>
                <label for="feminino">Feminino</label>
            </div>

            <div>
                <input type="radio" name="genero" id="masculino" value="M" required>
                <label for="masculino">Masculino</label>
            </div>


            <div>
                <input type="radio" name="genero" id="naobinario" value="NB" required>
                <label for="naobinario">Não binário</label>
            </div>

            <div>
                <input type="radio" name="genero" id="semresposta" value="SR" required>
                <label for="semresposta">Prefiro não informar</label>
            </div>
        </div>

        <div>
            <label for="curso">Curso:</label>
            <input type="text" name="curso" id="curso" placeholder="Nome da pessoa" required>
        </div>

        <div>

            <label>Áreas de interesse:</label>

            <div>
                <input type="checkbox" name="area[0]" id="web" required>
                <label for="web">Sistemas Web</label>
            </div>

            <div>
                <input type="checkbox" name="area[1]" id="db" required>
                <label for="db">Banco de dados</label>
            </div>

            <div>
                <input type="checkbox" name="area[2]" id="redes" required>
                <label for="redes">Redes</label>
            </div>

        </div>

        <input type="submit" value="Cadastrar"> 
        <input type="reset" value="Limpar">

    </form>

    <a href="introducao.html">Voltar</a>

</body>

</html>