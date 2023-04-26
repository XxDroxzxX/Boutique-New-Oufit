let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});
const registerLink = document.getElementById('register-link');
const homeSection = document.querySelector('.home-section');

registerLink.addEventListener('click', (event) => {
  event.preventDefault(); 
  
  fetch('registroUsuario_vi.php')
    .then(response => response.text())
    .then(html => {
      homeSection.innerHTML = html;
    })
    .catch(error => console.error(error));
});