"use strict";

const togglePassword =document.querySelector("#togglePassword");
const password = document.querySelector("#inputPassword");

togglePassword.addEventListener("click",()=>{
    const type = password.getAttribute("type")==="password"? "text":"password";
    password.setAttribute("type",type);
    togglePassword.setAttribute("name", type === "text" ? "lock-closed" : "lock-closed-outline");

})