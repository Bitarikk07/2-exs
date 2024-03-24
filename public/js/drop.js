const dropArea = document.getElementById('drop-area');
const nft = document.getElementById('nft');
const imgView = document.getElementById('img-view');
const otherArea = document.getElementById('other-area');
const otherFiles = document.getElementById('other-files');
const otherView = document.getElementById('other-view');

nft.addEventListener("change", uploadImage);

function uploadImage() {
  let imgLink = URL.createObjectURL(nft.files[0]);
  imgView.style.backgroundImage = `url(${imgLink})`;
  imgView.textContent = "";

}
dropArea.addEventListener("dragover", function (e) {
  e.preventDefault();
})
dropArea.addEventListener("drop", function (e) {
  e.preventDefault();
  nft.files = e.dataTransfer.files;
  uploadImage();
})


otherFiles.addEventListener("change", iploadImage);

function iploadImage() {
  let imgLinki = URL.createObjectURL(otherFiles.files[0]);
  otherView.style.backgroundImage = `url(${imgLinki})`;
  otherView.textContent = "";
  otherView.style.borderStyle = none;
}
otherArea.addEventListener("dragover", function (e) {
  e.preventDefault();
})
otherArea.addEventListener("drop", function (e) {
  e.preventDefault();
  otherFiles.files = e.dataTransfer.files;
  iploadImage();
})



