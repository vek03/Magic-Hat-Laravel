//Confirmation Pass
const pass2 = document.querySelector("#checkbox2");
var tipo2 = document.getElementById("password_confirmation");

pass2.addEventListener("change", (el) => {
    if (pass2.checked) {
        tipo2.type = "text";
    }else{
        tipo2.type = "password";
    }
});

pass2.dispatchEvent(new Event("change"));