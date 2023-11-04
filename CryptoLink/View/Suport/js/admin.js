const body = document.querySelector("body"),
      siderbar = document.querySelector(".siderbar"),
      toggleIcon = document.querySelector(".toggle-icon"),
      searchBtn = document.querySelector(".search-box"),
      modeSwitch = document.querySelector(".toggle-switch"),
      modeText = document.querySelector(".mode-text");

toggleIcon.addEventListener("click", () => {
  siderbar.classList.toggle("close");
  toggleIcon.classList.toggle("rotated");
});

searchBtn.addEventListener("click", () => {
  siderbar.classList.remove("close");
});

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    modeText.innerText = "Light Mode";
  } else {
    modeText.innerText = "Dark Mode";
  }
});