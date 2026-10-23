document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("[data-password-toggle]").forEach((btn) =>
    btn.addEventListener("click", () => {
      const input = document.getElementById(btn.dataset.passwordToggle);
      input.type = input.type === "password" ? "text" : "password";
      btn.textContent = input.type === "password" ? "Show" : "Hide";
    }),
  );
});
