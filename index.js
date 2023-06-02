const audioList = [
    "https://tdatdzcute.github.io/xxx.tdatcuti.repl.co/index.js",
    "https://tdatdzcute.github.io/xxx.tdatcuti.repl.co/index.js",
];
let index = parseInt(localStorage.getItem('currentAudioIndex')) || Math.floor(Math.random() * audioList.length);
const audio = new Audio(audioList[index]);
function ThanhDieuDieuAudio() {
  audio.play();
}
document.addEventListener('click', ThanhDieuDieuAudio);
audio.addEventListener("ended", function() {
  index = (index + 1) % audioList.length;
  localStorage.setItem('currentAudioIndex', index);
  audio.src = audioList[index];
  audio.play();
});

function ThanhDieuMusic() {
  audio.play();
}
swal("Here's the title!", "...and here's the text!");
