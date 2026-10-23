document.addEventListener("DOMContentLoaded", () => {
  const menu = document.querySelector(".menu-btn"),
    links = document.querySelector(".navlinks");
  if (menu)
    menu.addEventListener("click", () => links.classList.toggle("open"));
  document.querySelectorAll(".wish").forEach((btn) =>
    btn.addEventListener("click", () => {
      btn.textContent = btn.textContent === "♡" ? "♥" : "♡";
      toast(
        btn.textContent === "♥" ? "Added to wishlist" : "Removed from wishlist",
      );
    }),
  );
  document
    .querySelectorAll("[data-toast]")
    .forEach((el) =>
      el.addEventListener("click", () => toast(el.dataset.toast)),
    );
});
function toast(message) {
  const t =
    document.querySelector(".toast") ||
    (() => {
      let x = document.createElement("div");
      x.className = "toast";
      document.body.appendChild(x);
      return x;
    })();
  t.textContent = message;
  t.classList.add("show");
  setTimeout(() => t.classList.remove("show"), 2200);
}
