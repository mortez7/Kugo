const modalButtons = document.querySelectorAll("[data-toggle=modal]");

const modal = document.querySelector(".modal");

const modalDialog = document.querySelector(".modal-dialog");

const modalClose = document.querySelector(".modal-close");

modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    modal.classList.add("is-open");
  });
});

modalClose.addEventListener("click", (event) => {
  modal.classList.remove("is-open");
});

modal.addEventListener("click", (event) => {
  if(!event.composedPath().includes(modalDialog)) {
    modal.classList.remove("is-open");
  }
});