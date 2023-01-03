const menuToggle = document.querySelector(".menu-toggle input");
const profileMenu = document.querySelector(".profile-menu");
const nav = document.querySelector(".collapse");

menuToggle.addEventListener("click", function () {
	nav.classList.toggle("slide");
});

// Script Upload file

// const hasilElement = document.getElementById("hasil");
// const delElement = document.getElementById("del");
// // const outputElement = document.getElementById("outputVideo");

// $(document).on("change", ".file_multi_video", function (evt) {
// 	var $source = $("#outputVideo");
// 	$source[0].src = URL.createObjectURL(this.files[0]);
// 	$source.parent()[0].load();
// 	hasilElement.style.display = "flex";
// 	delElement.style.display = "flex";
// });
// $(document).ready(function () {
// 	$("#del").on("click", function () {
// 		delElement.style.display = "none";
// 		$("#uploadVideo").val("");
// 		// $("#hasil").splice(0, 1);
// 		$("#hasil").remove();
// 		// $source.parent()[].load("");
// 		// delElement.style.display = "none";
// 		// hasilElement.style.display = "none";
// 	});
// });

// Script upload file 2
let uploadVideo = document.getElementById("uploadVideo");
const delElement = document.getElementById("del");
const bungkusElement = document.getElementById("bungkus");
let containerVideo = document.querySelector("#outputVideo");

uploadVideo.addEventListener("change", (e) => {
	console.log(e);
	let file = e.target.files[0];
	let blobURL = URL.createObjectURL(file);

	containerVideo.src = blobURL;
	containerVideo.style.display = "block";
	delElement.style.display = "block";
	bungkusElement.style.border = "none";
	bungkusElement.style.backgroundColor = "black";
});

let delVideo = (up, del) => {
	let inp = document.querySelector(up);
	let output = document.querySelector(del);
	console.log(inp, output);

	containerVideo.style.display = "none";
	inp.value = null;
	output.src = "";
	delElement.style.display = "none";
	output.style.display = "none";
	bungkusElement.style.border = "2px dashed #848484";
	bungkusElement.style.backgroundColor = "#dbdbdb";
};

// delVideo.addEventListener("click", (e) => {});

const flashData = $(".flash-data").data("flashdata");
if (flashData) {
	Swal.fire({
		icon: "error",
		title: "Video",
		text: "Gagal di unggah - pastikan ukuran dan format sesuai",
		button: "OK",
	});
}
