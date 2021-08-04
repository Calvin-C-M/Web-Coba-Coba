const input = document.getElementsByClassName("pw-input");
const seePwButton = document.getElementsByClassName("see-password");

for(let i = 0; i < seePwButton.length; i++) {
    seePwButton[i].addEventListener('click', () => {
        if(input[i].type === "password") {
            input[i].type = "text";
        } else {
            input[i].type = "password";
        }
    });
}