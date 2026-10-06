
const form = document.querySelector("form");
const message = document.querySelector("#message");

form.addEventListener("submit", function (event) {
  
  if (message.value.length < 10) {
    event.preventDefault(); 
    alert("Your message is too short");
  }
});
// avec l aide de ia