function showDrawer() {
	var drawer = document.getElementById("drawer");
	if (drawer.style.display === "none"){
		drawer.style.display = "block";
	} else {
		drawer.style.display = "none";
	}
}

function closeDrawer() {
	var drawer = document.getElementById("drawer");
		drawer.style.display = "none";
}
