console.log("aboutJs!!");

const slidePhotoLists = document.querySelector(".js_slidePhoto__lists");

console.log(slidePhotoLists);

gsap.to(slidePhotoLists, {
  autoAlpha: 1,
  x: "-125%",
  duration: 10,
  scrollTrigger: {
    trigger: slidePhotoLists,
    start: "top center",
    markers: true,
  },
});
