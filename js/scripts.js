/**
 * En esta función para controlar el menú, primero recorremos el DOM buscando todos los botones (.menu-item-expand)
 * Luego, en cada uno, escuchamos el evento Click.
 * 
 * En el evento, buscamos el sub-menú que se encuentre dentro del menú donde hicimos click (.menu-item)
 * Si el sub-menú existe, agreguamos o quitamos la clase hidden según corresponda.
 * 
 */

document.querySelectorAll(".menu-item-expand").forEach(element => {
    element.addEventListener("click", event => {
        const submenu = event.target.closest(".menu-item").querySelector(".menu");
        if (submenu) submenu.classList.toggle("hidden");
    });
});
