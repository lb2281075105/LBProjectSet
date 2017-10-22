(function () {
	

	var calc = function(){
		var docuElement = document.documentElement;
		var clientWidthValue = docuElement.clientWidth > 750 ? 750 :docuElement.clientWidth;
		docuElement.style.fontsize = 20 * (clientWidthValue / 375) + "px";
	}
	calc();
	window.addEventListener("resize",calc);
})();