<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestibular FATEC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            background-color: #FFFAFA
        }

        .wrapper {
            width: 450px;
            padding: 20px;
            margin: auto;
            margin-top: 50px;
        }

        .text-black {
            color: black !important;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .btn-right {
            float: right !important;
            margin-right: 10px;
            margin-top: 12px;
        }

        .reader {
            margin-left: 490px;
        }
    </style>
</head>

<body>
    <br>
    <hr>
    <div class="reader">
        <a style="margin-left:180px" href="listar.php" class="btn btn-info">ADMINISTRAR CANDIDATOS</a>
    </div>
    <br>
    <hr>

    <div class="wrapper">
        <h2>CADASTRO PARA CANDIDATO - VESTIBULAR FATEC</h2><br>

        <form action="insert.php" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="nome" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Rg/CPF:</label>
                    <input type="text" name="rgcpf" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Estudou em escola pública?</label>
                    <input class="form-check-input" type="radio" name="escola" id="escola1" value="sim" checked>
                    <label class="form-check-label" for="escola">
                        SIM
                    </label>
                    <input class="form-check-input" type="radio" name="escola" id="escola2" value="nao">
                    <label class="form-check-label" for="escola">
                        NÃO
                    </label>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Enviar DADOS">
            </div>
    </div>
    </form>
    </div>
    <br>
    <hr>
</body>

</html>