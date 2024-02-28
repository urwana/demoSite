const swiper = new Swiper(".swiper", {
  direction: "horizontal",
  effect: "coverflow",
  reverse: true,
  navigation: {
    nextEl: false,
    prevEl: false,
  },
  speed: 2000,
  spaceBetween: 100,
  autoplay: {
    delay: 5000,
  },
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    768: {
      slidesPerView: 1,
      spaceBetween: 40,
    },
  },
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

const mainCopy = document.querySelector(".js_mainCopy");
gsap.to(mainCopy, {
  autoAlpha: 1,
  x: -18,
  duration: 2,
  ease: "power1.inOut",
  scrollTrigger: {
    trigger: ".js_mainCopy",
    start: "top bottom 30%",
  },
});

const workSectionTitle = document.querySelector(".js_worksSection__title");
const workSectionBody = document.querySelector(".js_workSection__body");

gsap.to(workSectionTitle, {
  autoAlpha: 1,
  x: "0%",
  duration: 2,
  scrollTrigger: {
    trigger: workSectionTitle,
    start: "center bottom 40%",
  },
});

gsap.to(workSectionBody, {
  autoAlpha: 1,
  y: "0%",
  duration: 2,
  scrollTrigger: {
    trigger: workSectionTitle,
    start: "center center",
  },
});
