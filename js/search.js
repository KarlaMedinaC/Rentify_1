const lupa = document.querySelector('.lupa');
const menu2 = document.querySelector('.menu-navegacion2');

lupa.addEventListener('click', ()=>{
    menu2.classList.toggle("spread") /*seleccion clases cl y que agregue y quite spread (clase)*/
})

window.addEventListener('click', e=>{
    if (menu2.classList.contains('spread')
        && e.target != menu2 && e.target != lupa) {

            menu2.classList.toggle("spread")
    }
})


