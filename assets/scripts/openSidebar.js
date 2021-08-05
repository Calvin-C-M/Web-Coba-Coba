const sidebar = document.getElementById("sidebar");
const openButton = document.getElementById("buka-menu");
const closeButton = document.getElementById("tutup-menu");

openButton.addEventListener("click", () => {
    sidebar.style.display = "block";
    openButton.style.visibility = "none";
});

closeButton.addEventListener("click", () => {
    sidebar.style.display = "none";
    openButton.style.visibility = "visible";
})