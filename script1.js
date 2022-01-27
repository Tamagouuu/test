const user = document.getElementById("username");
const nama = document.getElementById("nama");
const email = document.getElementById("email");
const telp = document.getElementById("telp");
const jabatan = document.getElementById("jabatan");
const btn = document.querySelector(".btn-submit");

btn.addEventListener("click", (e) => {
  if (user.value == 0 || nama.value == 0 || email.value == 0 || telp.value == 0 || jabatan.value == "kosong") {
    e.preventDefault();
    alert("Mohon mengisi seluruh persyaratan!");
  }
});
