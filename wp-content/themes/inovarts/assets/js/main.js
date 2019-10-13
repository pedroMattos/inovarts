window.onload = function() {
    // GLOBAL VAR
    var doc = document

    // FUNCTIONS DECLARATION
    function menu() {
        var menu = doc.getElementsByClassName('floater-menu')[0]
        var lines = doc.getElementsByClassName('line-menu')
        menu.onclick = function() {
            menu.setAttribute('style', 
            'width: 100vw; height: 100vh; transition-duration: .8s; border-radius: 0; background-color: #707070; cursor:default;')
            for(let i in lines) {
                lines[i].classList.add('hider-rotate')
            }
        }
    }

    function slider() {
        var arrowL = doc.createElement('div')
        var arrowR = doc.createElement('div')
        var slide = doc.getElementsByClassName('slide')
        for(let i = 0; i <= 1; i++) {
            arrowL.classList.add('arrow-left')
            arrowR.classList.add('arrow-right')
            slide[0].appendChild(arrowL)
            slide[0].appendChild(arrowR)
        }
        arrowL.onclick = function() {

        }
        arrowR.onclick = function() {

        }
    }



    //FUNCTION CALL
    menu()
    //slider()
}