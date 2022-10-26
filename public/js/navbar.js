var searchIcon = document.getElementById("search-icon");
var closeSearch = document.getElementById("close-search");
var search = document.getElementById("search-bar-container");

function showSearch() {
	search.style.display = "block";
	searchIcon.style.display = "none";
	closeSearch.style.display = "block";
}

function hideSearch() {
	search.style.display = "none";
	searchIcon.style.display = "block";
	closeSearch.style.display = "none";
}