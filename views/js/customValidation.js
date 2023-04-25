const email = document.getElementById("inputEmail");

email.addEventListener("input", () => {
  email.setCustomValidity(isValidEmail(email.value) ? "" : "Ingresa un correo válido");
});

function isValidEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}
