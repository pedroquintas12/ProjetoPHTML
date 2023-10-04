<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os valores dos campos do formulário
    $nomeSobrenome = $_POST["nomesobrenome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $dataNascimento = $_POST["datanascimento"];
    $opinion = $_POST["opinion"];
    $valorConta = $_POST["valorconta"];
    $valorCouvert = $_POST["valorcouvert"];
    $comoNosConheceu = $_POST["comonosconheceu"];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validar o nome e sobrenome
    $nomeSobrenome = $_POST['nomesobrenome'];
    if (empty($nomeSobrenome)) {
        $errors[] = "Por favor, preencha o campo Nome e Sobrenome.";
    }

    // Validar o email
    $email = $_POST['email'];
    if (empty($email)) {
        $errors[] = "Por favor, preencha o campo Email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Formato de email inválido.";
    }

    // Validar o telefone
    $telefone = $_POST['telefone'];
    if (empty($telefone)) {
        $errors[] = "Por favor, preencha o campo Telefone.";
    } elseif (!preg_match("/^\d{2}\ \d{5}\d{4}$/", $telefone)) {
        $errors[] = "Formato de telefone inválido. Use XX XXXXXXXXX.";
    }
}
if (empty($errors)) {
    echo'<script src="index.js"></script>';
    echo '<link rel="stylesheet" href="formsstyle.css">';
    echo '<div class="box-resultados">';
    echo '<div class="resultado" >';
    echo 'Olá, '. $nomeSobrenome.' preciso que você confirme alguns dados!';
    echo '</div>';
    echo '<div class="resultados">';
    echo 'Seu email: '. $email. '<br>';
    echo 'Seu número: '. $telefone. '<br>';
    echo 'Sua data de nascimento: '. $dataNascimento;
    echo'<div class="botaoConfirma"><br><button id="botaozinho" class="botao-padrao" onclick="continarPagina()">Enviar</button></div>';
    echo '</div>';
    echo '</div>';
} else{
    foreach ($errors as $error) {
        echo $error . "<br>";
    }

} 
}
?>
