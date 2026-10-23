document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("form[data-validate]").forEach((form) =>
    form.addEventListener("submit", (e) => {
      let ok = true;
      form.querySelectorAll("[required]").forEach((i) => {
        if (!i.value.trim() || (i.type === "checkbox" && !i.checked)) {
          i.style.borderColor = "#a44";
          ok = false;
        } else {
          i.style.borderColor = "";
        }
      });
      const pass = form.querySelector('[name="password"]'),
        confirm = form.querySelector('[name="confirm_password"]');
      if (pass && confirm && pass.value !== confirm.value) {
        ok = false;
        confirm.style.borderColor = "#a44";
        alert("Passwords do not match.");
      }
      if (!ok) {
        e.preventDefault();
        alert("Please complete the required fields.");
      }
    }),
  );
});
