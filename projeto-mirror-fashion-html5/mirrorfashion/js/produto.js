$(document).ready(function() {
    $('[name=tamanho]').on('input', function() {
        $('[name=valortamanho]').val(this.value)
    })
})