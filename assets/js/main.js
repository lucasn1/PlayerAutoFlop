var $slider = $("#slider");
var $fill = $(".bar .fill");
audio = document.getElementById('stream');

function setBar() {
	$fill.css("width", $slider.val() + "%");
	stream.volume = ($slider.val() * 0.01);
}

function play(){
	stream.volume = 0.5;
}
 
function pause(){
	stream.volume = 0;
}

$slider.on("input", setBar);

setBar();
