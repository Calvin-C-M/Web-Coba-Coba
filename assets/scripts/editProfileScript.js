const editPassword = document.getElementById("edit-password");
const openPasswordButton = document.getElementById("open-password");
const editData = document.getElementById("edit-data");
const openDataButton = document.getElementById("open-data");

openPasswordButton.addEventListener("click", () => {
    editData.style.display = "none"
    editPassword.style.display = "block"
});

openDataButton.addEventListener("click", () => {
    editPassword.style.display = "none"
    editData.style.display = "block"
});