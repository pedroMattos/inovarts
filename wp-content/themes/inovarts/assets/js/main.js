function menu() {
    var menu = document.getElementsByClassName('floater-menu')[0]
    menu.onclick = function() {
        menu.setAttribute('style', 
        'width: 100vw; height: 100vh; transition-duration: .8s; border-radius: 0; background-color: #707070; cursor:default;')
    }
}
function slider() {
    var img_1 = document.getElementById('img-1')
    var img_2 = document.getElementById('img-2')
    var img_3 = document.getElementById('img-3')
}
window.onload = function() {
    menu()
    slider()
}