
/*
showLoading();
toastSuccess(_return.message);
hideLoading();
toastError(_return.responseJSON.message);
hideLoading();
*/

function criarProduto() {
    showLoading();

    let nome = document.getElementById('nome').value;
    let valor = document.getElementById('valor').value;

    if (nome.length < 3) {
        toastError("O campo nome é muito pequeno");
        hideLoading();
        return;
    }

    if (valor < 0.01) {
        toastError("O campo valor não é valido");
        hideLoading();
        return;
    }

    document.getElementById('btSubmit').click();

}