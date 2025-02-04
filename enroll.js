function handleSubmit(event) {
  event.preventDefault();

  document.getElementById("thankYouPopup").style.display = "flex";

  document.getElementById("registrationForm").reset();
}

function closePopup() {
  document.getElementById("thankYouPopup").style.display = "none";
}

function getQueryParam(param) {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get(param);
}

window.onload = function () {
  const selectedDomain = getQueryParam("domain");
  const domainDropdown = document.getElementById("domain-dropdown");

  if (selectedDomain) {
    domainDropdown.value = selectedDomain;
    // domainDropdown.disabled = true;
  }
};
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".view-more").forEach((button) => {
    button.addEventListener("click", (e) => {
      const userId = e.target.closest("button").getAttribute("data-id");
      window.location.href = `manasvi.html?id= ${userId}`;
    });
  });
});
