<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionária - DevMenthors</title>
    <link rel="stylesheet" href="/src/styles/style.css">
</head>

<body>
    <nav class="navbar container">
        <div class="nav">
            <div class="logo">
                <img src="/src/assets/carro.png" alt="logo-concessionaria" class="img-logo">
                <div class="titles">
                    <h1>Concessionária</h1>
                    <h2>DevMenthors</h2>
                </div>
            </div>
            <button type="button" class="btn btn-light">
                <p>Ver Carros</p>
            </button>
        </div>
    </nav>
    <main class="container">
        <h3>Informações do Veículo</h3>
        <p>
            Preencha os dados básicos do carro que deseja cadastrar
        </p>
        <form action="" method="post" autocomplete="off" class="form-container">
            <div class="row">
                <div class="col-6">
                    <div class="input-group">
                        <label for="name">Nome do carro *</label>
                        <input type="text" name="name" id="name" required placeholder="Ex: Civiv 2023">
                    </div>
                    <div class="input-group">
                        <label for="chassi">Chassi *</label>
                        <input type="text" name="chassi" id="chassi" required placeholder="Ex: 98W3325353253235">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <label for="montadora">Montadora *</label>
                        <select name="montadora" id="montadora">
                            <option value="1">Montadora 1</option>
                            <option value="2">Montadora 2</option>
                            <option value="3">Montadora 3</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="placa">Placa *</label>
                        <input type="text" name="placa" id="placa" required placeholder="Ex: ABC-1234">
                    </div>
                </div>
            </div>
            <div class="input-group">
                <label for="url">URL da Imagem *</label>
                <input type="text" name="url" id="url" required placeholder="https://exemplo.com/imagem-do-carro.jpg">
                <span>
                    Opcional: Cole o link de uma imagem do carro
                </span>
            </div>
            <div class="align-end">
                <button type="button" class="btn btn-light">
                    <p>Cancelar</p>
                </button>
                <button type="submit" class="btn btn-primary">
                    <p>Cadastrar Carro</p>
                </button>
            </div>
        </form>
    </main>
</body>

</html>