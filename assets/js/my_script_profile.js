const menuToggle = document.querySelector(".menu-toggle input");
const profileMenu = document.querySelector(".profile-menu");
const nav = document.querySelector(".collapse");

menuToggle.addEventListener("click", function () {
	nav.classList.toggle("slide");
});

// alert flashdata
const dataFlash = $(".modal-edit").data("modaledit");
if (dataFlash) {
	Swal.fire({
		icon: "success",
		title: "Video",
		text: "Berhasil di edit",
		showConfirmButton: false,
		timer: 2000,
		timerProgressBar: true,
		didOpen: (toast) => {
			toast.addEventListener("mouseenter", Swal.stopTimer);
			toast.addEventListener("mouseleave", Swal.resumeTimer);
		},
	});
}
const flashData = $(".modal-delete").data("modaldelete");
if (flashData) {
	Swal.fire({
		icon: "success",
		title: "Video",
		text: "Berhasil di hapus",
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
		var idContent = $(this).data("idcontent");
		// console.log(idContent);

		var delContent = $(this).data("delcontent");
		// console.log(delContent);

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
		$("#editlink").attr("href", idContent);
		$("#delcontent").attr("href", delContent);
		$("#avatar-modal").attr("src", avatar);
		$("#username").text(username);
		$("#date").text(date);
		$("#content-model").attr("src", content);
		$("#judul").text(judul);
		$("#desc").text(desc);
	});
});
