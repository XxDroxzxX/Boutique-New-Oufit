"use strict";

//se declaran las constantes que almacenaran las propiedades de los id's correspondientes.
const togglePassword =document.querySelector("#togglePassword");
const password = document.querySelector("#inputPassword");

/*
Por medio de un addEventListener sabemos si el usuario pulso el icono del candado y si esto es asi se captura
el tipo actual con el que cuenta el campo haciendo posible que por medio de un operador ternario cambiemos al otro estado que queremos
y de la misma forma con operador termario cambiamos la apariencia del icono dependiendo del atributo type que tengo el input.
*/

togglePassword.addEventListener("click",()=>{
    const type = password.getAttribute("type")==="password"? "text":"password";
    password.setAttribute("type",type);
    togglePassword.setAttribute("name", type === "text" ? "lock-closed" : "lock-closed-outline");

})