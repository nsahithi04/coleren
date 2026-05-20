const dropdown = document.querySelector(".dropdown-content");
const menuBtn = document.querySelector(".menu-icon");

menuBtn.addEventListener("click", () => {
  dropdown.style.display = "block";
});

function handleResize() {
  if (window.innerWidth > 1024) {
    dropdown.style.display = "none";
  }
}

window.addEventListener("resize", handleResize);
handleResize();

const closeBtn = document.querySelector(".close");

closeBtn.addEventListener("click", () => {
  dropdown.style.display = "none";
});

const solBtns = document.querySelectorAll(".menu-sol");

solBtns.forEach((solBtn) => {
  const submenu = solBtn.querySelector(".sub-menu");

  solBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    submenu.classList.toggle("open");
  });
});

document.querySelectorAll(".menu-sol .sub-menu").forEach((submenu) => {
  submenu.addEventListener("click", (e) => {
    e.stopPropagation();
  });
});

window.addEventListener("click", () => {
  document.querySelectorAll(".menu-sol .sub-menu").forEach((submenu) => {
    submenu.classList.remove("open");
  });
});

document.querySelectorAll('a[href="#signup"]').forEach((link) => {
  link.addEventListener("click", (e) => {
    const signupSection = document.getElementById("signup");

    if (signupSection) {
      e.preventDefault();
      signupSection.scrollIntoView({ behavior: "smooth" });
    } else {
      window.location.href = "home/" + "#signup";
    }
  });
});
