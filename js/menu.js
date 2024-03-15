const hamburgerButton = document.querySelector(".js_hamburgerButton");
const navigation = document.querySelector(".js_navigation");
const circleBackGround = document.querySelector(".js_circleBackground");
const navigationLinkAll = document.querySelectorAll(".js_navigation a");

hamburgerButton.addEventListener("click", () => {
  hamburgerButton.classList.toggle("active");
  navigation.classList.toggle("active");
  circleBackGround.classList.toggle("active");
});

navigationLinkAll.forEach((navigationLink) => {
  navigationLink.addEventListener("click", () => {
    hamburgerButton.classList.remove("active");
    navigation.classList.remove("active");
    circleBackGround.classList.remove("active");
  });
});

const identifyDevice = () => {
  const ua = navigator.userAgent;
  if (
    ua.indexOf("iPhone") > 0 ||
    ua.indexOf("iPod") > 0 ||
    (ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0)
  ) {
    return "sp";
  } else {
    return "pc";
  }
};

const header = document.querySelector(".js_header");
const logo = document.querySelector(".js_logo");
const kvElement = document.querySelector(".js_kv");
// TODO: 数値ベタ書き直す
const sliderHeight = kvElement ? kvElement.offsetHeight : 200;
const footer = document.querySelector(".js_footer");
const footerPosition = footer ? footer.getBoundingClientRect().top : 315;

const currentDevice = identifyDevice();

const toggleSpLogo = (scrollPosition) => {
  const spLogo = document.querySelector(".js_spLogo");
  const currentSrcset = spLogo.getAttribute("srcset");
  const baseImageUrl = currentSrcset.substring(
    0,
    currentSrcset.lastIndexOf("/")
  );

  if (scrollPosition > sliderHeight) {
    if (logo.classList.contains("normal")) {
      logo.classList.remove("normal");
    }
    if (spLogo.classList.contains("simple")) return;
    logo.classList.add("simple");
    spLogo.setAttribute("srcset", `${baseImageUrl}/logo-simple.png`);
  } else {
    if (logo.classList.contains("simple")) {
      logo.classList.remove("simple");
    }
    if (logo.classList.contains("normal")) return;
    logo.classList.add("normal");
    spLogo.setAttribute("srcset", `${baseImageUrl}/logo.png`);
  }
};

window.addEventListener("scroll", () => {
  if (currentDevice == "sp") {
    const scrollPosition = window.scrollY;

    toggleSpLogo(scrollPosition);

    if (scrollPosition > footerPosition) {
      header.classList.add("hidden");
    } else {
      header.classList.remove("hidden");
    }
  }
});

const arrow = document.querySelector(".js-scroll-fadein");
const bodyHeight = document.body.scrollHeight;
const visiblePosition =
  window.innerHeight ||
  document.documentElement.clientHeight ||
  document.body.clientHeight;

const getScrolled = () => {
  return window.scrollY;
};

window.onscroll = () => {
  getScrolled() > visiblePosition
    ? arrow.classList.add("is-fadein")
    : arrow.classList.remove("is-fadein");

  const footerPosition = footer ? footer.getBoundingClientRect().top : 315;
  getScrolled() > footerPosition
    ? arrow.classList.add("at-footer")
    : arrow.classList.remove("at-footer");
};

const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};

arrow.onclick = function() {
  scrollToTop();
};

document.querySelectorAll('.js_smoothScroll').forEach(function (anchor) {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const adjust = 50;
    let href = this.getAttribute("href");
    let target = document.querySelector(
      href === "#" || href === "" ? "html" : href
    );
    var position = target.offsetTop + adjust;
    window.scrollTo({
      top: position,
      behavior: "smooth",
    });
  });
});
