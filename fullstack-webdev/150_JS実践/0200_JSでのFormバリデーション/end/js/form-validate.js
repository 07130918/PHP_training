init();
function init() {
    const $input = document.querySelector('.validate-target');
    $input.addEventListener('input', function() {
        alert('あたいが変更されました。');
    });
    console.dir($input);
}