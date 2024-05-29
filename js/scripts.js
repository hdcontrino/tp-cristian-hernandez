document.querySelectorAll(".menu-item-expand").forEach(element => {
    element.addEventListener("click", event => {
        const submenu = event.target.closest(".menu").querySelector(".menu");
        if (submenu) submenu.classList.toggle("hidden");
    });
});