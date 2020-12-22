document.querySelector('#form-busca').onsubmit = function() {
    if (document.querySelector('#q').value == '') {
        document.querySelector('#form-busca').style.background = 'red'
        return false
    }
}
function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 2
    document.querySelector('#muda').src = banners[bannerAtual]
    
}

var banners = ["img/destaque-home.jpg", "img/destaque-home-2.jpg"]
var bannerAtual = 0

var timer = setInterval(() => {
    trocaBanner()
}, 4000);
var controle = document.querySelector('.pause')

controle.onclick = function() {
    if (controle.className == 'pause') {
        clearInterval(timer)
        controle.className = 'play'
    } else {
        timer = setInterval(() => {
            trocaBanner()
        }, 4000);
        controle.className = 'pause'
    }
    return false
}

$(document).ready(function(){
    $('.novidades, .mais-vendidos').addClass('painel-compacto')
    $('.novidades button').click(function(){
        $('.novidades').removeClass('painel-compacto')
    })
    $('.mais-vendidos button').click(function(){
        $('.mais-vendidos').removeClass('painel-compacto')
    })
})