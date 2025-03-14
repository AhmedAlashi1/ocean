var mixer = mixitup(".portfolio_image");

document.addEventListener("scroll", function () {
  const button = document.getElementById("whatsappButton");
  const scrollTop = window.scrollY || document.documentElement.scrollTop;
  button.style.top = `${scrollTop + window.innerHeight / 2}px`;
});
