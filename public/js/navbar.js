function showSearch() {
	var searchIcon = document.getElementById("search-icon");
	var search = document.getElementById("search-bar-container");
	if (search.style.display === "none") {
			search.style.display = "block";
	} else {
			search.style.display = "none";
	}
}