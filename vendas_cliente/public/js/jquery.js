let host = window.location.hostname;
let GLOBAL_URL = "http://127.0.0.1:8000/";
const GLOBAL_URL_API = GLOBAL_URL;
const GLOBAL_DATATYPE_JSON = "json";
let modalLoading = $('#modal-overlay');

// ----------------- FUNÇÕES GERAIS -----------------

function goTo(url) {
    window.location.href = url;
}

function showLoading(id) {
    $('#modal-overlay').css("display", "block").css("opacity", "1");
}

function hideLoading(id) {
    $('#modal-overlay').css("display", "none").css("opacity", "0");
}

// -------------------------------- TOASTS -------------------------------- 

function getToast() {
    return Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
}

/**
 * Executa o toast
 * @param {string} title | string
 */
function toastSuccess(title) {
    let Toast = getToast();
    Toast.fire({
        icon: 'success',
        title: title
    });
}
function toastInfo(title) {
    let Toast = getToast();
    Toast.fire({
        icon: 'info',
        title: title
    });
}
function toastError(title) {
    let Toast = getToast();
    Toast.fire({
        icon: 'error',
        title: title
    });
}
function toastWarning(title) {
    let Toast = getToast();
    Toast.fire({
        icon: 'warning',
        title: title
    });
}
function toastQuestion(title) {
    let Toast = getToast();
    Toast.fire({
        icon: 'question',
        title: title
    });
}