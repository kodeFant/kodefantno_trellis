export default {
  init() {
    // JavaScript to be fired on all pages

    /* navigation sub-menu display */

    const subMenus = document.querySelectorAll(".sub-menu");
    const mobileButton = document.querySelector(".mobile-button-container");
    const navPrimary = document.querySelector(".nav-primary");

    mobileButton.addEventListener("click", () => {
      navPrimary.classList.toggle('mobile-hidden');
    });

    subMenus.forEach(subMenu => {
      subMenu.classList.add("desktop-hidden");
      subMenu.parentElement.addEventListener("mouseover", () => {
        if (window.matchMedia("(min-width: 0)").matches === true) {
         subMenu.classList.remove("desktop-hidden");
        }
      });
      subMenu.parentElement.addEventListener("mouseout", () => {
        if (window.matchMedia("(min-width: 0)").matches === true) {
         subMenu.classList.add("desktop-hidden");
        }
      });
    });
  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector(".mobile-button-container").style.bottom = "0";
  } else {
    document.querySelector(".mobile-button-container").style.bottom = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
