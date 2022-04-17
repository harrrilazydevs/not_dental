

// const sign_in_btn = document.querySelector("#sign-in-btn");
// const sign_up_btn = document.querySelector("#sign-up-btn");
// const container = document.querySelector(".container");

// sign_up_btn.addEventListener("click", () => {
//   container.classList.add("sign-up-mode");
// });

// sign_in_btn.addEventListener("click", () => {
//   container.classList.remove("sign-up-mode");
// });




// // <-------TEXT TYPING HOME SECTION--------->//
var i = 0,
  dental_text;
dental_text = 'DIAGNOSTIC LABORATORY, X-RAY AND MEDICAL CLINIC';
function typing() {
  if (i < dental_text.length) {
    document.getElementById('dental_text').innerHTML += dental_text.charAt(i);
    i++;
    setTimeout(typing, 70);
  }
}
typing();
// // <-------TEXT TYPING HOME SECTION--------->//