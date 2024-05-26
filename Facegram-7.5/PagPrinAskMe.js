function NombreAlAzar() {
    const prefijo="user";
    const numero_azar = Math.floor(Math.random()*10000000);
    const nombre_final = prefijo + numero_azar;
    document.getElementById("usuario-nuevo").value = nombre_final;
}

function Mostrar_Crear_Cuenta() {
    //Cambio de formuladrios
    document.getElementById("Iniciar-Sesion").style.display = "none";
    document.getElementById("Crear-Cuenta").style.display = "block";
    //Cambio del color de los botones para saber cual esta seleccionado aka bien fino
    document.getElementById("Iniciar").style.background = "#ff4500";
    document.getElementById("Crear").style.background = "#cc3700";

}

function Mostrar_Inicio_Sesion() {
    //Cambio de formuladrios
    document.getElementById("Iniciar-Sesion").style.display = "block";
    document.getElementById("Crear-Cuenta").style.display = "none";
    //Cambio del color de los botones para saber cual esta seleccionado aka bien fino
    document.getElementById("Iniciar").style.background = "#cc3700";
    document.getElementById("Crear").style.background = "#ff4500";
}

function AgregarHoverAInicio(){
    //Agregar Hover a inicio 
    document.getElementById("Iniciar").classList.add("hover");
    document.getElementById("Crear").classList.remove("hover");
}

function AgregarHoverACrear(){
    //Agregar Hover a los botones despues del click
    document.getElementById("Iniciar").classList.remove("hover");
    document.getElementById("Crear").classList.add("hover");
}

function Ver_Contraseña() {
    document.getElementById("Visible-Si").style.display ="none";
    document.getElementById("Visible-No").style.display ="block";
    document.getElementById("Contraseña").type ="text";
}

function Ocultar_Contraseña() {
    document.getElementById("Visible-Si").style.display ="block";
    document.getElementById("Visible-No").style.display ="none";
    document.getElementById("Contraseña").type ="password";
}
function Ver_Contraseña2() {
    document.getElementById("Visible-Si2").style.display ="none";
    document.getElementById("Visible-No2").style.display ="block";
    document.getElementById("Contraseña-nuevo").type ="text";

}

function Ocultar_Contraseña2() {
    document.getElementById("Visible-Si2").style.display ="block";
    document.getElementById("Visible-No2").style.display ="none";
    document.getElementById("Contraseña-nuevo").type ="password";

}
