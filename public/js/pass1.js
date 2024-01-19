//Pass
const pass1 = document.querySelector("#checkbox1");
var tipo1 = document.getElementById("password");

pass1.addEventListener("change", (el) => {
    if (pass1.checked) {
        tipo1.type = "text";
    }else{
        tipo1.type = "password";
    }
});

pass1.dispatchEvent(new Event("change"));