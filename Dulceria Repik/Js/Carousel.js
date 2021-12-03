const fila = document.querySelector('.contenedorcarousel');
const imagenes = document.querySelector('.imagenes');

const izquierda = document.getElementById('izquieda');
const derecha = document.getElementById('derecha');

derecha.addEventListener('click', () => {
    fila.scrollLeft += fila.offsetWidth;
});

izquieda.addEventListener('click', () => {
    fila.scrollLeft -= fila.offsetWidth;
});