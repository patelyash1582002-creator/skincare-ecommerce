const password = document.getElementById("password");
const toggleBtn = document.querySelector("#togglePassword");

toggleBtn.addEventListener("click", () => {
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
});