
function mudouQuantidade() {
    let quantidadeElement = document.getElementById('quantidade');
    let valor_produtoElement = document.getElementById('valor_produto');
    let valorElement = document.getElementById('valor');
    let valor = (quantidadeElement.value * valor_produtoElement.value).toFixed(2);
    valorElement.value = valor;
}

function mudouProduto() {
    jQuery(function($) {
        let produto = $('#produto');
        document.getElementById('valor_produto').value = produto[0].selectedOptions[0].title;
        document.getElementById('quantidade').value = 1;
        mudouQuantidade();
    });
    
}

function criarVenda() {
    showLoading();

    let quantidade = document.getElementById('quantidade').value;

    if (quantidade < 1) {
        toastError("A quantidade precisa ser maior que 1");
        hideLoading();
        return;
    }

    document.getElementById('btSubmit').click();

}
