const dropdown = document.querySelector(".dropdown-content");

const menuBtn = document.querySelector(".menu-icon");

menuBtn.addEventListener("click", () => {
  dropdown.style.display = "block";
});

const closeBtn = document.querySelector(".close");

closeBtn.addEventListener("click", () => {
  dropdown.style.display = "none";
});
