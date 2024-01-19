//Delete Pass
const pass4 = document.querySelector("#checkbox4");
var tipo4 = document.getElementById("password");

pass4.addEventListener("change", (el) => {
    if (pass4.checked) {
        tipo4.type = "text";
    }else{
        tipo4.type = "password";
    }
});