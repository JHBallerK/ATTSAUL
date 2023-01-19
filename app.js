const btn = document.getElementById("btn");
const nav = document.getElementById("navl");

btn.addEventListener("click", () => {
    nav.classList.toggle("active");
    btn.classList.toggle("active");
    
});