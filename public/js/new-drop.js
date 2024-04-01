const colectArea = document.getElementById('colect-area');
const colect = document.getElementById('colect');
const colectImg = document.getElementById('colect-img');
colect.addEventListener("change", iploadImage);
function iploadImage() {
  let imgLinkl = URL.createObjectURL(colect.files[0]);
  colectImg.style.backgroundImage = `url(${imgLinkl})`;
  colectImg.style.borderStyle = none;
}
colectArea.addEventListener("dragover", function (e) {
  e.preventDefault();
})
colectArea.addEventListener("drop", function (e) {
  e.preventDefault();
  colect.files = e.dataTransfer.files;
  iploadImage();
})