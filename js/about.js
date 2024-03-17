const slidePhotoLists = document.querySelectorAll(".slidePhoto__list");
const slidePhotoList = document.querySelector(".slidePhoto__list");
const slideCount = slidePhotoLists.length;
const slideWidth = slidePhotoList.offsetWidth;
const slidePhotoListsWidth = slideWidth * (slideCount + 1);
const screenWidth = document.documentElement.clientWidth;
const overflowWidth = (slidePhotoListsWidth / screenWidth) * 100 - 80;

gsap.fromTo(
  slidePhotoLists,
  {
    autoAlpha: 0,
    x: "50%",
  },
  {
    autoAlpha: 1,
    x: `-${overflowWidth}%`,
    duration: 3,
    scrollTrigger: {
      trigger: slidePhotoLists,
      start: "top center",
    },
  }
);
