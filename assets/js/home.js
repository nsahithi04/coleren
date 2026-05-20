const sec2Block4 = document.querySelector(".sec2-block4");
const sec2block4Text = document.querySelector(".sec2-block4 p");

sec2Block4.addEventListener("click", () => {
  sec2Block4.classList.toggle("active");
});

const sec3block4Sales = document.querySelector(".sec3-block4.sales");
const sec3block4Prod = document.querySelector(".sec3-block4.prod");
const salesBtn = document.querySelector(".salesTeam");
const prodBtn = document.querySelector(".productTeam");

salesBtn.classList.add("activeBtn");

salesBtn.addEventListener("click", () => {
  sec3block4Sales.style.display = "grid";
  sec3block4Prod.style.display = "none";
  salesBtn.classList.add("activeBtn");
  prodBtn.classList.remove("activeBtn");
});

prodBtn.addEventListener("click", () => {
  sec3block4Prod.style.display = "grid";
  sec3block4Sales.style.display = "none";
  prodBtn.classList.add("activeBtn");
  salesBtn.classList.remove("activeBtn");
});

const sec4Block3 = document.querySelector(".sec4-block3");
const sec4box1 = document.querySelector(".sec4-block3-box1");
const sec4box2 = document.querySelector(".sec4-block3-box2");
const sec4box1desc = document.querySelector(".box1-description");
const sec4box2desc = document.querySelector(".box2-description");

sec4box1.classList.add("clicked");

sec4box1.addEventListener("click", () => {
  sec4box1desc.style.display = "block";
  sec4box2desc.style.display = "none";
  sec4box1.classList.add("clicked");
  sec4box2.classList.remove("clicked");
});

sec4box2.addEventListener("click", () => {
  sec4box1desc.style.display = "none";
  sec4box2desc.style.display = "block";
  sec4box2.classList.add("clicked");
  sec4box1.classList.remove("clicked");
});

document.addEventListener("DOMContentLoaded", function () {
  const email = document.querySelector("#wpcf7-f506-o1 .wpcf7-email");
  const submit = document.querySelector("#wpcf7-f506-o1 .wpcf7-submit");

  if (email && submit) {
    // Hover
    email.addEventListener("mouseenter", () => {
      submit.style.backgroundColor = "#199A60";
    });

    email.addEventListener("mouseleave", () => {
      submit.style.backgroundColor = "#19ba59";
    });

    email.addEventListener("focus", () => {
      submit.style.backgroundColor = "#053539";
    });

    email.addEventListener("mousedown", () => {
      submit.style.backgroundColor = "#053539";
    });

    email.addEventListener("mouseup", () => {
      submit.style.backgroundColor = "#199A60";
    });
  }
});
