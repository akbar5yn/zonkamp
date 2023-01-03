const menuToggle = document.querySelector(".menu-toggle input");
const profileMenu = document.querySelector(".profile-menu");
const nav = document.querySelector(".collapse");

menuToggle.addEventListener("click", function () {
	nav.classList.toggle("slide");
});

let uploadImage = document.getElementById("image");
let firstImage = document.getElementById("image-1");
const delElement = document.getElementById("del");

uploadImage.addEventListener("change", (e) => {
	console.log(e);
	let file = e.target.files[0];

	let blobURL = URL.createObjectURL(file);
	let containerImage = document.querySelector("#outputImage");
	containerImage.src = blobURL;
	containerImage.style.display = "block";
	containerImage.style.display = "block";
	delElement.style.display = "block";
	delElement.style.top = 0;
	firstImage.style.display = "none";
});

let delImage = (up, del) => {
	let inp = document.querySelector(up);
	let output = document.querySelector(del);
	console.log(inp, output);

	inp.value = null;
	output.src = "";
	delElement.style.display = "none";
	output.style.display = "none";
	firstImage.style.display = "block";
};

$(document).ready(function () {
	$("#moto").keyup(function () {
		if (this.value.length > 50) {
			this.value = this.value.substring(0, 50);
		}
		$("#remaining").text("Karakter tersisa : " + (50 - this.value.length));
	});
});
