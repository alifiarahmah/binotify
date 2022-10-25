// add event listener to drawer icon
document.getElementById("drawer-icon").addEventListener("click", () => {
	console.log("click!");
	document.getElementById("drawer").style.display = "block";
});