<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formsstyle.css">
    <script src="index.js"></script>
    <title>Formulário Padrão</title>
</head>
<header>
    <div class="cabecalho">
        <h1>Central de Atendimento ao Cliente</h1>
    </div>
</header>
<body>
    <form action="index.php" method="POST">
        <div class="box-perguntas">
        <fieldset>
            <legend>Olá cliente,</legend>
            <div id="error-messages">
                <?php
    if (isset($_SESSION['errors'])) {
        foreach ($_SESSION['errors'] as $error) {
            echo $error . "<br>";
        }
        unset($_SESSION['errors']); // Limpe os erros da sessão após exibi-los
    }
    ?>
            </div>

            <div class="input-padrao">
                <label for="nomesobrenome">Nome e Sobrenome*</label><br>
                <input type="text" id="nomesobrenome" name="nomesobrenome" class="input-padrao"  placeholder="Nome e Sobrenome"><br>

                <label for="email">Email*</label><br>
                <input type="email" id="E-Mail" name="email" class="input-padrao"  placeholder="seuemail@dominio.com"><br>

                <label for="telefone">Telefone*</label><br>
                <input type="tel" id="Telefone" name="telefone" class="input-padrao"  placeholder="(XX) XXXXX-XXXX"><br>

                <label for="datanascimento">Data de Nascimento</label><br>
                <input type="date" id="data" name="datanascimento" class="input-padrao"><br>

                <label for="opinion">Diga-nos no que podemos melhorar!</label><br>
                <textarea id="opinion" name="opinion" rows="15" cols="70"></textarea><br>

                <p>precisamos saber quanto você gastou para possível reembolso!</p>

                <label>Valor da conta (total):</label><br>
                <input type="number" name="valorconta" id="valorconta" value=""/><br>

                <label>Valor do Couvert:</label><br>
                <input type="number" name="valorcouvert" id="valorcouvert" value=""><br>

                Total: <output name="res" id="resultado"></output>
                <script src="index.js"></script>


            </div>
            

            <div class="option-select">
                <p>Antes de ir, conte como nos conheceu!</p>
                <select name="comonosconheceu">
                    <optgroup label="Redes Sociais">
                        <option>Facebook</option>
                        <option>Instagram</option>
                        <option>Orkut</option>
                        <option>Twitter</option>
                    </optgroup>
                    <optgroup label="TV/Rádio">
                        <option>Propaganda Televisão</option>
                        <option>Propaganda via Rádio</option>
                    </optgroup>
                </select>
            </div>

            <div class="botaozinho">
                <br><button id="botaozinho" class="botao-padrao">Enviar</button>
            </div>
        </div>
        </fieldset>
    </form>
    <footer>
        Desenvolvido por: <br>
        - Aluno 1 <br>
        - Aluno 2 <br>
        - Aluno 3 <br>
        - Aluno 4 <br>
        - Aluno 5 <br>
    </footer>
</body>
</html>
