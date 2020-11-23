const descripcion = document.getElementById('descripcion');
const contador = document.getElementById('contador');

descripcion.addEventListener('input', function(e) {
    const target = e.target;
    const longitudMax = target.getAttribute('maxlength');
    const longitudAct = target.value.length;
    contador.innerHTML = `${longitudAct}/${longitudMax}`;
});

function validar() {

    var titulo = document.getElementById('titulo');
    var descripcion = document.getElementById('descripcion');
    var caratula = document.getElementById('caratula');

    if (titulo.value.length < 3 || titulo.value.length > 30) {
        alert('Usted debe ingresar un Titulo que contenga entre 3 a 30 caracteres');
        return false;
    }

    if (descripcion.value.length < 5 || descripcion.value.length > 200) {
        alert('Usted debe ingresar una Descripcion que contenga entre 5 a 200 caracteres');
        return false;
    }

    return true;
}
document.agregar_pelicula.addEventListener("submit", validar);