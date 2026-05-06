document.addEventListener("DOMContentLoaded", function () {
    var toggle = document.querySelector(".menu-toggle");
    var menu = document.getElementById("mobile-menu");

    if (!toggle || !menu) {
        return;
    }

    toggle.addEventListener("click", function () {
        var isExpanded = toggle.getAttribute("aria-expanded") === "true";
        toggle.setAttribute("aria-expanded", String(!isExpanded));
        menu.setAttribute("aria-hidden", String(isExpanded));
        menu.classList.toggle("is-open");
    });

    menu.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function () {
            toggle.setAttribute("aria-expanded", "false");
            menu.setAttribute("aria-hidden", "true");
            menu.classList.remove("is-open");
        });
    });
});
