window.onload = function() {
    // GLOBAL VAR
    var doc = document

    // FUNCTIONS DECLARATION
    function menu() {
        var menu = doc.getElementsByClassName('floater-menu')[0]
        var lines = doc.getElementsByClassName('line-menu')
        var close = doc.createElement('span')
        var wrapper = doc.getElementById('lines')
        close.textContent = 'x'
        wrapper.onclick = function() {
            close.classList.add('close-menu')
            menu.classList.add('expanded-menu')
            menu.appendChild(close)
            close.classList.add('show-close-btn')
            wrapper.setAttribute('style', 'display:none')
        }
        close.onclick = function() {
            if(menu.classList.contains('expanded-menu')) {
                menu.classList.remove('expanded-menu')
            }
            menu.removeChild(menu.children[1])
            wrapper.removeAttribute('style','display:none')
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