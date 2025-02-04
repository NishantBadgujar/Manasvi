document.querySelector("form").addEventListener("submit", function (e) {
  const password = document.getElementById("s-password").value;
  const confirmPassword = document.getElementById("c-password").value;

  if (password !== confirmPassword) {
    e.preventDefault();
    alert("Passwords do not match!");
  }
});


const dropdownItems = document.querySelectorAll('.dropdown-item');
const cards = document.querySelectorAll('.card');

dropdownItems.forEach(item => {
    item.addEventListener('click', function (event) {
        event.preventDefault();

        const targetId = this.getAttribute('data-target');
        const targetCard = document.getElementById(targetId);

        cards.forEach(card => card.classList.remove('highlight'));

        targetCard.classList.add('highlight');

        targetCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
});



// function myFunction() {
//   var x = document.getElementById("myInput");
//   if (x.type === "password") {
//     x.type = "text";
//   } else {
//     x.type = "password";
//   }
// }
