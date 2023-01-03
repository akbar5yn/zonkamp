const menuToggle = document.querySelector(".menu-toggle input");
const profileMenu = document.querySelector(".profile-menu");
const nav = document.querySelector(".collapse");

menuToggle.addEventListener("click", function () {
	nav.classList.toggle("slide");
});

// Dapatkan elemen modal
const modal = document.querySelector(".modal");

// Dapatkan elemen tombol yang akan menutup modal
const closeAkbar = document.querySelector(".close-akbar");
const closeJindan = document.querySelector(".close-jindan");
const closeHabib = document.querySelector(".close-habib");
const closeSyawal = document.querySelector(".close-syawal");
const closeFooter = document.querySelector(".close-footer");

// Dapatkan elemen video
const videoA = document.querySelector("#v-akbar");
console.log(videoA);
$(".modal").on("hidden.bs.modal", function () {
	// Pause the video when the modal is closed
	videoA.pause();
});

const videoB = document.querySelector("#v-jindan");
console.log(videoB);
$(".modal").on("hidden.bs.modal", function () {
	// Pause the video when the modal is closed
	videoB.pause();
});

const videoC = document.querySelector("#v-habib");
console.log(videoC);
$(".modal").on("hidden.bs.modal", function () {
	// Pause the video when the modal is closed
	videoC.pause();
});

const videoD = document.querySelector("#v-syawal");
console.log(videoD);
$(".modal").on("hidden.bs.modal", function () {
	// Pause the video when the modal is closed
	videoD.pause();
});

const videoF = document.querySelector("#v-footer");
console.log(videoD);
$(".modal").on("hidden.bs.modal", function () {
	// Pause the video when the modal is closed
	videoF.pause();
});

// Ketika tombol ditekan, tutup modal
closeAkbar.addEventListener("click", function () {
	// modal.style.display = "none";
	videoA.pause(); // hentikan video
});

closeJindan.addEventListener("click", function () {
	// modal.style.display = "none";
	videoB.pause(); // hentikan video
});

closeHabib.addEventListener("click", function () {
	// modal.style.display = "none";
	videoC.pause(); // hentikan video
});

closeSyawal.addEventListener("click", function () {
	// modal.style.display = "none";
	videoD.pause(); // hentikan video
});
closeFooter.addEventListener("click", function () {
	// modal.style.display = "none";
	videoF.pause(); // hentikan video
});
