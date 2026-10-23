document.addEventListener("DOMContentLoaded", () => {
  const sort = document.querySelector("#sort"),
    grid = document.querySelector("#productGrid");
  if (sort && grid)
    sort.addEventListener("change", () => {
      const cards = [...grid.children];
      cards.sort((a, b) =>
        sort.value === "price-low"
          ? +a.dataset.price - +b.dataset.price
          : sort.value === "price-high"
            ? +b.dataset.price - +a.dataset.price
            : 0,
      );
      cards.forEach((c) => grid.appendChild(c));
    });
});
