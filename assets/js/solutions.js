document.querySelectorAll(".solution-info").forEach((section) => {
  const arrBtn = section.querySelectorAll(".sol-blocks img");
  const slider = section.querySelector(".slider");
  const cardWidth = slider.querySelector(".sol-block1").offsetWidth + 40; //gap
  const sliderChild = [...slider.children];
  const sliderDot = section.querySelectorAll(".slider-nav .dot");
  const realCardCount = sliderDot.length;

  let isDragging = false,
    startX,
    startScrollLeft;

  let cardPerView = Math.round(slider.offsetWidth / cardWidth);

  sliderChild
    .slice(-cardPerView)
    .reverse()
    .forEach((block) => {
      slider.insertAdjacentHTML("afterbegin", block.outerHTML);
    });

  sliderChild.slice(0, cardPerView).forEach((block) => {
    slider.insertAdjacentHTML("beforeEnd", block.outerHTML);
  });

  slider.scrollLeft = slider.offsetWidth;

  arrBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
      slider.scrollLeft += btn.classList.contains("left")
        ? -cardWidth
        : cardWidth;
    });
  });

  const dragStart = (e) => {
    isDragging = true;
    slider.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = slider.scrollLeft;
  };

  const dragging = (e) => {
    if (!isDragging) return;
    slider.scrollLeft = startScrollLeft - (e.pageX - startX);
  };

  const dragStop = () => {
    isDragging = false;
    slider.classList.remove("dragging");
  };

  const infinite = () => {
    if (slider.scrollLeft === 0) {
      slider.classList.add("no-transition");
      slider.scrollLeft = slider.scrollWidth - 2 * slider.offsetWidth;
      slider.classList.remove("no-transition");
    } else if (
      Math.ceil(slider.scrollLeft) ===
      slider.scrollWidth - slider.offsetWidth
    ) {
      slider.classList.add("no-transition");
      slider.scrollLeft = slider.offsetWidth;
      slider.classList.remove("no-transition");
    }
  };

  slider.addEventListener("mousedown", dragStart);
  slider.addEventListener("mousemove", dragging);
  slider.addEventListener("mouseup", dragStop);
  slider.addEventListener("scroll", infinite);

  /* ---------- UPDATE ACTIVE DOT ---------- */
  function updateActiveDot() {
    const normalizedScroll = slider.scrollLeft - slider.offsetWidth;

    let index = Math.round(normalizedScroll / cardWidth);

    index = ((index % realCardCount) + realCardCount) % realCardCount;

    sliderDot.forEach((dot) => dot.classList.remove("active"));
    sliderDot[index]?.classList.add("active");
  }

  // ---------- DOT CLICK ----------
  sliderDot.forEach((dot) => {
    dot.addEventListener("click", () => {
      const index = Number(dot.dataset.index);

      slider.scrollTo({
        left: slider.offsetWidth + index * cardWidth,
        behavior: "smooth",
      });
    });
  });

  // ---------- SCROLL LISTENER ----------
  slider.addEventListener("scroll", () => {
    window.requestAnimationFrame(updateActiveDot);
  });
});
