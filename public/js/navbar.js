var closeSearch = document.getElementById("close-search");
var search = document.getElementById("search-bar-container");

function showSearch() {
	if (window.innerWidth <= 768) {
		// mobile
		search.style.display = "block";
		closeSearch.style.display = "block";
	}
	search.getElementsByTagName("input")[0].focus();
}

function hideSearch() {
	search.style.display = "none";
	closeSearch.style.display = "none";
}