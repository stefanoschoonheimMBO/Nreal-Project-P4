const openMobile = document.querySelector("nav div.mobile");
const closeMobile = document.querySelector("nav ul li.close");

const menu = document.querySelector("nav div:not(.mobile):not(.logo)");

const toggleMenu = () => {
    menu.classList.toggle("active");
};
openMobile.addEventListener("click", toggleMenu);
closeMobile.addEventListener("click", toggleMenu);