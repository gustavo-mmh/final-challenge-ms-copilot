<?php
// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter o nome do usuário
    $nome = htmlspecialchars($_POST["nome"]);
    echo "Olá, " . $nome . "! Seja bem-vindo!";
} else {
    // Exibir o formulário se não foi submetido
    echo '<form method="post" action="">
            Nome: <input type="text" name="nome">
            <input type="submit" value="Enviar">
          </form>';
}
?>
