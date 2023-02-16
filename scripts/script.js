var settingsMenu = document.querySelector(".settings-menu");
var darkBtn = document.getElementById("dark-btn");

let startBtn = document.querySelectorAll(".start-btn");

startBtn.onclick = function() {
	window.location.href = 'tariff.php';
}

function settingsMenuToggle() {
	settingsMenu.classList.toggle("settings-menu-height");
}

darkBtn.onclick = function() {
	darkBtn.classList.toggle("dark-btn-on");
	document.body.classList.toggle("dark-theme");
	logo = document.querySelector(".logo");

	if(localStorage.getItem("theme") == "light") {
		localStorage.setItem("theme","dark");
	} else {
		localStorage.setItem("theme","light");
	}

	if (document.getElementById("imgLogo").src == "images/Logo.svg"){
		document.getElementById("imgLogo").src = "images/LogoDark.svg";
	} else {
		document.getElementById("imgLogo").src = "images/Logo.svg";
	}
}

if(localStorage.getItem("theme") == "light") {
	darkBtn.classList.remove("dark-btn-on");
	document.body.classList.remove("dark-theme");
} else if(localStorage.getItem("theme") == "dark") {
	darkBtn.classList.add("dark-btn-on");
	document.body.classList.add("dark-theme");
} else {
	localStorage.setItem("theme","light");
}

// Under "carousel with interactive buttons"
const tabs = document.querySelectorAll(".tab");
const boxes = document.querySelectorAll(".box");
const tab1 = document.querySelector(".tab1");
const tab2 = document.querySelector(".tab2");
const tab3 = document.querySelector(".tab3");
const tab4 = document.querySelector(".tab4");
const tab5 = document.querySelector(".tab5");

const box1 = document.getElementById("box-1");
const box2 = document.getElementById("box-2");
const box3 = document.getElementById("box-3");
const box4 = document.getElementById("box-4");
const box5 = document.getElementById("box-5");

tab1.addEventListener("click", () => {
	box1.classList.add("show");
	box2.classList.remove("show");
	box3.classList.remove("show");
	box4.classList.remove("show");
	box5.classList.remove("show");
});
tab2.addEventListener("click", () => {
	box2.classList.add("show");
	box1.classList.remove("show");
	box3.classList.remove("show");
	box4.classList.remove("show");
	box5.classList.remove("show");
});
tab3.addEventListener("click", () => {
	box3.classList.add("show");
	box1.classList.remove("show");
	box2.classList.remove("show");
	box4.classList.remove("show");
	box5.classList.remove("show");
});
tab4.addEventListener("click", () => {
	box4.classList.add("show");
	box1.classList.remove("show");
	box2.classList.remove("show");
	box3.classList.remove("show");
	box5.classList.remove("show");
});
tab5.addEventListener("click", () => {
	box5.classList.add("show");
	box1.classList.remove("show");
	box2.classList.remove("show");
	box3.classList.remove("show");
	box4.classList.remove("show");
});

tabs.forEach((element) => {
  element.addEventListener("click", () => {
    const current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace("active", "");
    element.classList.add("active");
  });
});