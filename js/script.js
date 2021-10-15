$(document).ready(function(){
	$('.slider').slick({
		slidesToShow:1,
		autoplay:true,
		speed:1000,
		autoplaySpeed:800,
		responsive:[
			{
				breakpoint: 768,
				settings: {
					slidesToShow:2
				}
			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow:1
				}
			}
		]
	});
});


document.getElementById('close_feedback').onclick = function() {
	var reservation=document.querySelector('.feedback')
	reservation.style.display = "none";
	console.log('1')
}
function open_feedback()
{
	var feedback=document.querySelector('.feedback')
	feedback.style.display = "block";
}
function open_successfully()
{
	var feedback=document.querySelector('.feedback')
	feedback.style.display = "none";
	var successfully=document.querySelector('.successfully')
	successfully.style.display = "block";
}


function tabletime(){
	var bron_tabletime=document.querySelector('.bron_tabletime')
	bron_tabletime.style.display = "block";
}


document.getElementById('close_tabletime').onclick = function() {
	var bron_tabletime=document.querySelector('.bron_tabletime')
	bron_tabletime.style.display = "none";
	console.log('1')
}
