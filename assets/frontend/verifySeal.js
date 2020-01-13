window.onload = resize;

function resize() {
	if (!isIe() && !isChrome()) {
		var s = document.getElementById("seal-popin");
		var w = s.offsetWidth;
		var h = s.offsetHeight;
		window.resizeTo(w, h);
		w = (2 * w) - (typeof window.innerWidth == 'undefined' ? document.body.clientWidth : window.innerWidth) + 16;
		h = (2 * h) - (typeof window.innerHeight == 'undefined' ? document.body.clientHeight : window.innerHeight) + 16;
		window.resizeTo(w, h);
	}
	
	function isIe() {
		var result = typeof ie != 'undefined';
		return result;
	}
	
	function isChrome() {
		var result = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
		return result;
	}
}