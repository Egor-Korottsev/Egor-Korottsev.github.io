$(document).ready(function() {
	$('.favourite_pictures_slider').slick({
		infinite: true,
		arrows: false,
		dots: false,
		//slidesToShow: 1,
		//slidesToScroll: 1,
		adaptiveHeight: true,
		//speed: 2000, 300 по умолчанию.
		//autoplay: true, //false - по умолчанию.
		//autoplaySpeed: 100,
		//initialSlide: 1,
		draggable: true,
		//centerMode: true,
		variableWidth: true,
		responsive: [
    	{
	      breakpoint: 992,
	      settings: {
	        variableWidth: false, 
	        slidesToShow: 3,
      	}
    	},
    	{
	      breakpoint: 670,
	      settings: {
	        variableWidth: false, 
	        slidesToShow: 2,
      	}
    	},
    	/*{
	      breakpoint: 500,
	      settings: {
	        variableWidth: false, 
	        slidesToShow: 1,
      	}
    	},*/
    ]
	});
});

//.where_trip
// изменение цвета при наведении.
var tripMainElement = document.getElementById('where_trip_choices_regions');

var tripElement1 = document.getElementById('where_trip_choices_region-1');
var tripElement2 = document.getElementById('where_trip_choices_region-2');
var tripElement3 = document.getElementById('where_trip_choices_region-3');

const defaultColor = "#001e28";
const changedColor = "white";
const defaultBackground = "#d8f0f0";
const changedBackground = "orange"
const defaultBorderBottom = "0px";
const changedBorderBottom = "2px solid orange";
const defaultMarginBottom = "40px";
const changedMarginBottom = "37.8px";

function setSettingForElement_TripMainElement(s) {
	if(s == 'mouseover') {
		tripMainElement.style.borderBottom = '2px solid orange';
 		tripMainElement.style.paddingBottom = "0.2px";
 		tripMainElement.style.marginBottom = "37.8px";
	} else {
		tripMainElement.style.borderBottom = '0';
 		tripMainElement.style.marginBottom = "40px";
	}
}

/*Изменение цвета при наведении для 1-ого элемента.*/
tripElement1.addEventListener('mouseover', function (event) {
 	this.style.background = changedBackground;
 	this.style.color = changedColor;
 	setSettingForElement_TripMainElement(event.type);
});

tripElement1.addEventListener('mouseout', function (event) {
 	this.style.background = defaultBackground;
 	this.style.color = defaultColor;
 	setSettingForElement_TripMainElement(event.type);
});


tripElement2.addEventListener('mouseover', function (event) {
 	this.style.background = changedBackground;
 	this.style.color = changedColor;
 	setSettingForElement_TripMainElement(event.type);
});

tripElement2.addEventListener('mouseout', function (event) {
 	this.style.background = defaultBackground;
 	this.style.color = defaultColor;
 	setSettingForElement_TripMainElement(event.type);
});


tripElement3.addEventListener('mouseover', function (event) {
 	this.style.background = changedBackground;
 	this.style.color = changedColor; 
 	setSettingForElement_TripMainElement(event.type);
});

tripElement3.addEventListener('mouseout', function (event) {
 	this.style.background = defaultBackground;
 	this.style.color = defaultColor;
 	setSettingForElement_TripMainElement(event.type);
});