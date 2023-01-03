const menuToggle = document.querySelector(".menu-toggle input");
const profileMenu = document.querySelector(".profile-menu");
const nav = document.querySelector(".collapse");

menuToggle.addEventListener("click", function () {
	nav.classList.toggle("slide");
});

// alert flashdata
const flashData = $(".flash-data").data("flashdata");
if (flashData) {
	Swal.fire({
		icon: "success",
		title: "Video",
		text: "Berhasil Di unggah",
		showConfirmButton: false,
		timer: 2000,
		timerProgressBar: true,
		didOpen: (toast) => {
			toast.addEventListener("mouseenter", Swal.stopTimer);
			toast.addEventListener("mouseleave", Swal.resumeTimer);
		},
	});
}

// Modal pop up
$(document).ready(function () {
	$(document).on("click", ".onmodal", function (e) {
		var avatar = $(this).data("avatar");
		// console.log(avatar);

		var username = $(this).data("username");
		// console.log(username);

		var date = $(this).data("date");
		// console.log(date);

		// var content = $("#content").attr("src");
		var content = $(this).data("content");
		// console.log(content);

		var judul = $(this).data("judul");
		// console.log(judul);

		var desc = $(this).data("desc");
		// console.log(desc);

		// get the variable to convert on html

		$("#avatar-modal").attr("src", avatar);
		$("#username").text(username);
		$("#date").text(date);
		$("#content-model").attr("src", content);
		$("#judul").text(judul);
		$("#desc").text(desc);
	});
});
