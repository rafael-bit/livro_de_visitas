const ratingInputs = document.querySelectorAll('input[name="rating"]');
ratingInputs.forEach((input) => {
	input.addEventListener("change", (event) => {
		const selectedRating = event.target.value;
	});
});