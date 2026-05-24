

window.addEventListener("DOMContentLoaded", () => {
    render(window.location.pathname);
});

window.addEventListener("popstate", () => {
    render(window.location.pathname);
});