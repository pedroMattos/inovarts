window.onload = function() {
    // GLOBAL VAR
    var doc = document

    // FUNCTIONS DECLARATION
    function menu() {
        var menu = doc.getElementsByClassName('floater-menu')[0]
        var lines = doc.getElementsByClassName('line-menu')
        var close = doc.createElement('span')
        var wrapper = doc.getElementById('lines')
        var content = doc.getElementById('content-text');
        var item = doc.getElementsByClassName('item')
        close.textContent = 'x'
        wrapper.onclick = function() {
            content.style.display = 'block';
            close.classList.add('close-menu')
            menu.classList.add('expanded-menu')
            menu.appendChild(close)
            close.classList.add('show-close-btn')
            wrapper.setAttribute('style', 'display:none')
            setTimeout(function() {
                try{
                    for(var i = 0; i <= item.length; i++) {
                        item[i].setAttribute('style', 'transform: translateY(-45%); transition-duration: .5s;')
                    }
                } catch(e) {
                    console.warn(e);
                }
            }, 700)
        }
        close.onclick = function() {
            try{
                for(var i = 0; i <= item.length; i++) {
                    item[i].removeAttribute('style')
                }
            } catch(e) {
                console.warn(e);
            }
            setTimeout(function() {
                if(menu.classList.contains('expanded-menu')) {
                    menu.classList.remove('expanded-menu')
                }
                content.style.display = 'none';
                menu.removeChild(menu.children[2])
                wrapper.removeAttribute('style','display:none')
            }, 600)
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

    function floater() {
        var search = doc.getElementById('search-site')
        var box = doc.getElementById('search-in-site')
        search.onclick = function() {
            box.setAttribute('style', 'left:-100%');
            setTimeout(function() {
                box.removeAttribute('style', 'left:-100%');
            }, 10000);
        }
    }

    // PARALLAX MATERIALIZE
    $('.parallax').parallax();
    // SELECT INIT
    $('select').formSelect();


    //FUNCTION CALL
    menu()
    floater()
    //slider()
}