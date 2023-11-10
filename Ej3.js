function validarFormulario(event) {
    const usuario = document.getElementById("user").value;
    const contra = document.getElementById("contra").value;
    const telefono = document.getElementById("tfno").value;

    if (usuario === "" || contra === "" || telefono === "") {
        alert("Rellena todos los campos");
        return false;
    } else if (contra.length >= 4){
        alert("La contraseña debe tener al menos cuatro caracteres")
        return false;
    } else if (isNaN(telefono)) {
        alert("El numero de telefono debe ser numerico");
        return false;
    } else if (telefono.length !== 9) {
        alert("El numero de telefono debe tener nueve digitos");
        return false;
    }


}