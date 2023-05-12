<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VESTIBULAR FATEC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            background-color: #FFFAFA
        }

        .wrapper {
            width: 800px;
            padding: 20px;
            margin: auto;
            margin-top: 10px;
        }

        .wrapper2 {
            width: 800px;
            padding: 20px;
            margin: auto;
            margin-top: 10px;
            border-STYLE:
        }

        .text-black {
            color: black !important;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .btn-right {
            float: right !important;
            margin-right: 10px;
            margin-top: 10px;
        }

        .cad {
            border-style: solid;
            border-color: green;
        }

        .reader {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <br>
    <hr>
    <div class="reader">
        <a style="margin-left:180px" href="index.php" class="btn btn-info">VOLTAR PAGINA PRINCIPAL</a>
    </div>
    <br>
    <hr>
    <div class="wrapper">
        <h2>ALTERAR CANDIDATO</h2><br>

        <form action="update.php" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label>ID DO PARTICIPANTE:</label>
                    <input type="number" name="id" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="cad">
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
                </div><br>
                <div class="form-group">
                    <input type="submit" class="btn btn-warning" value="ENVIAR DADOS">
                </div>
            </div>
    </div>
    </form>
    <br>
    <hr>
    <div class="wrapper2">
        <h2>DELETAR CANDIDATO</h2><br>
        <form action="delete.php" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label>ID do CANDIDATO?</label>
                    <input type="text" name="id" class="form-control" value="">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-danger" value="DELETAR">
                </div>
            </div>
            <br>
            <hr>
            <center>
                <div class="wrapper">
                    <h2>CANDIDATOS CADASTRADOS</h2><br>
                    <div class="cad">
                        <section style="text-align:center">
                            <?php
                             require_once('select.php');
                            ?>
                        </section>
                    </div>
                </div>
            </center><br>
            <hr>
</body>

</html>