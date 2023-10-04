function continarPagina() {
   
    window.location.href="html.php"
    alert("Obrigado por responder o formulario!");
  }

  // Função para calcular o total
function calcularTotal() {
    // Obter os valores dos campos de entrada
    var valorConta = parseFloat(document.getElementById("valorconta").value) || 0;
    var valorCouvert = parseFloat(document.getElementById("valorcouvert").value) || 0;

    // Calcular o total
    var total = valorConta + valorCouvert;

    // Atualizar o conteúdo da saída
    document.getElementById("resultado").textContent = total.toFixed(2);
}

// Adicionar ouvintes de evento para chamar a função quando os campos de entrada mudarem
document.getElementById("valorconta").addEventListener("input", calcularTotal);
document.getElementById("valorcouvert").addEventListener("input", calcularTotal);

// Calcular o total inicial
calcularTotal();
