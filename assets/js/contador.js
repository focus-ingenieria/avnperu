

const comentario = document.getElementById('txtComentario');
const contador = document.getElementById('contadorComentario');
    
comentario.addEventListener('input', function () {
    contador.textContent = comentario.value.length;
})