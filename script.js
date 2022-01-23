const username = document.getElementById("username");
const pass = document.getElementById("password");
const btn = document.querySelector(".btn-submit");

btn.addEventListener("click", (e) => {
  if (username.value == 0 || password.value == 0) {
    console.log(e);
    e.preventDefault();
    alert("Nama atau Password Kosong");
  }
});
