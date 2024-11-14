// Função para alterar o texto
function alterarTexto() {
    document.getElementById("meuParagrafo").innerHTML = 
        "Você clicou no botão!";
}

// Evento de clique no botão
document.getElementById("meuBotao").onclick = alterarTexto;
