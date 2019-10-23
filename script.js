var list_forms = document.getElementsByClassName("update_list_form");
function edit_list_buttons_onclick(event, el) {
	// get closest element (edit form)
	el.parentElement.nextSibling.style.display = "block";
	event.preventDefault();
}


