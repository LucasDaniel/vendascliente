
function criarCliente() {
    showLoading();

    let nome = document.getElementById('nome').value;

    if (nome.length < 3) {
        toastError("O campo nome é muito pequeno");
        hideLoading();
        return;
    }

    document.getElementById('btSubmit').click();

}