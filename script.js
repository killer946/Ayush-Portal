const navbarMenu = document.querySelector(".navbar .links");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");
const signupLoginLink = formPopup.querySelectorAll(".bottom-link a");
// Show mobile menu
hamburgerBtn.addEventListener("click", () => {
  navbarMenu.classList.toggle("show-menu");
});
38;
// Hide mobile menu
hideMenuBtn.addEventListener("click", () => hamburgerBtn.click());
// Show login popup
showPopupBtn.addEventListener("click", () => {
  document.body.classList.toggle("show-popup");
});
// Hide login popup
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());
// Show or hide signup form
signupLoginLink.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    formPopup.classList[link.id === "signup-link" ? "add" : "remove"](
      "show-signup"
    );
  });
});
let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");
// Get the Profile option and the Profile form element
const profileOption = document.getElementById('profileOption');
const profileForm = document.getElementById('profileForm');

// Add event listener to the Profile option
profileOption.addEventListener('click', function() {
    // Toggle the display style between 'none' and 'block'
    if (profileForm.style.display === 'none' || profileForm.style.display === '') {
        profileForm.style.display = 'block';
    } else {
        profileForm.style.display = 'none';
    }
});

menuicn.addEventListener("click", () => {
    nav.classList.toggle("navclose");
})

