const toggleSpLogo = () => {
  const spLogo = document.querySelector(".js_spLogo");
  const currentSrcset = spLogo.getAttribute("srcset");
  const baseImageUrl = currentSrcset.substring(
    0,
    currentSrcset.lastIndexOf("/")
  );

  const srcSet = currentSrcset.includes("logo-sp.png")
    ? `${baseImageUrl}/logo-sp-active.png`
    : `${baseImageUrl}/logo-sp.png`;
  spLogo.setAttribute("srcset", srcSet);
};

const hamburgerButton = document.querySelector(".js_hamburgerButton");
const navigation = document.querySelector(".js_navigation");
const circleBackGround = document.querySelector(".js_circleBackground");
const navigationLinkAll = document.querySelectorAll(".js_navigation a");

hamburgerButton.addEventListener("click", () => {
  hamburgerButton.classList.toggle("active");
  navigation.classList.toggle("active");
  circleBackGround.classList.toggle("active");
  toggleSpLogo();
});

navigationLinkAll.forEach((navigationLink) => {
  navigationLink.addEventListener("click", () => {
    hamburgerButton.classList.remove("active");
    navigation.classList.remove("active");
    circleBackGround.classList.remove("active");
    toggleSpLogo();
  });
});
