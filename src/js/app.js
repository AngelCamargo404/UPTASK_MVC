const mobileMenuBtn = document.querySelector('#mobile-menu');
const sideBar = document.querySelector('.sidebar');
const abrirMenuBtn = document.querySelector('.menu img');
const cerrarMenuBtn = document.querySelector('#cerrar-menu');


if(mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', function(){
        sideBar.classList.add('mostrar');
        abrirMenuBtn.classList.add('mostrar');
        document.body.style.overflow = "hidden";
    });
}

if(cerrarMenuBtn) {
    cerrarMenuBtn.addEventListener('click', function() {
        sideBar.classList.add('ocultar');
        abrirMenuBtn.classList.remove('mostrar');
        document.body.style.overflow = "scroll";

        setTimeout(() => {
            sideBar.classList.remove('mostrar');
            sideBar.classList.remove('ocultar');
        }, 300);
    });
}

// Elimina la clase de mostrar, en un tamaña de tablet y pc
window.addEventListener('resize', function() {
    const anchoPantalla = document.body.clientWidth;
    if(anchoPantalla >= 768) {
        sideBar.classList.remove('mostrar');
    }

    if(anchoPantalla <= 768){
        abrirMenuBtn.style.opacity = 1;
    }
    
});

