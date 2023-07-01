const passwordInput = document.querySelector("[type='password']");
const showPaswordBtn = document.querySelector(".show-password");
const passwordContainer = document.querySelector(".password-container");

const showPasword = () => {
  showPaswordBtn.addEventListener("click", (e) => {
    e.preventDefault();
    if (passwordInput.getAttribute("type") == "password") {
      passwordInput.setAttribute("type", "text");
    } else {
      passwordInput.setAttribute("type", "password");
    }
  });
};
const hiddePassword = () => {
  passwordContainer.addEventListener("mouseleave", (e) => {
    setTimeout(() => {
      passwordInput.setAttribute("type", "password");
    }, 500);
  });
};
// hiddePassword();
// showPasword();
export { hiddePassword, showPasword };
