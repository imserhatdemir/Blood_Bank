const addEventListener = document.getElementBy('btnScrollTop')
        .addEventListener('click',function(){
            window.scrollTo({
                top:0,
                left: 0,
                behavior: 'smooth'
            });
        }
        );