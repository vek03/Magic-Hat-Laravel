//Current Pass
const pass3 = document.querySelector("#checkbox3");
var tipo3 = document.getElementById("update_password_current_password");

pass3.addEventListener("change", (el) => {
    if (pass3.checked) {
        tipo3.type = "text";
    }else{
        tipo3.type = "password";
    }
});

pass3.dispatchEvent(new Event("change"));