/* Description: Custom JS file */

/*****************************************
Table Of Contents:
- Navigation
- Card slider 
- Card Slider - Swiper
- Filter - Isotope
- Back To Top Button
- Form
- Cookies Advice
- Form Pop-Up
******************************************/

/********************************** Navigation **********************************/
// Collapse the navbar by adding the top-nav-collapse class
const 	$navBar = document.querySelector("#navbar"),
		$darkLogo = document.querySelector("#dark-logo"),
		$lightLogo = document.querySelector("#light-logo"),
		$navLinksContainer = document.querySelector(".navbar-nav"),
		$navLightLogo = document.querySelector("#light-logo img");

window.onscroll = function () {
	scrollFunction();
	scrollFunctionBTT(); // back to top button
};

window.onload = function () {
	scrollFunction();
};

function scrollFunction() {
	if (innerWidth < 992){ // Tablet Mobile screen
		$navBar.classList.add("top-nav-collapse");
		$navBar.classList.remove("top-nav-no-collapse");
		// $darkLogo.classList.add("hide");
		// $darkLogo.classList.remove("show");
		// $lightLogo.classList.add("show");
		// $lightLogo.classList.remove("hide");
	} else { // Desktop screen
		if (document.documentElement.scrollTop > 30) {
			$navBar.classList.add("top-nav-collapse");
			$navBar.classList.remove("top-nav-no-collapse");
			$navLinksContainer.classList.remove("bg-green");
			$navLightLogo.style.height = "60px"
			// $navLinksContainer.style.backgroundColor = "#f7f9fd";
			// $darkLogo.classList.add("hide");
			// $darkLogo.classList.remove("show");
			// $lightLogo.classList.add("show");
			// $lightLogo.classList.remove("hide");
		} else if ( document.documentElement.scrollTop < 30 ) {
			$navBar.classList.remove("top-nav-collapse");
			$navBar.classList.add("top-nav-no-collapse");
			$navLinksContainer.classList.add("bg-green");
			$navLightLogo.style.height = "120px";
			// $navLinksContainer.style.backgroundColor = "var(--buttons-icons)";
			// $lightLogo.classList.add("hide");
			// $lightLogo.classList.remove("show");
			// $darkLogo.classList.add("show");
			// $darkLogo.classList.remove("hide");
		}
	}
}

// Navbar on mobile
let elements = document.querySelectorAll(".nav-link:not(.dropdown-toggle)");

for (let i = 0; i < elements.length; i++) {
	elements[i].addEventListener("click", () => {
		document.querySelector(".offcanvas-collapse").classList.toggle("open");
	});
}

document.querySelector(".navbar-toggler").addEventListener("click", () => {
  	document.querySelector(".offcanvas-collapse").classList.toggle("open");
});

// Hover on desktop
function toggleDropdown(e) {
	const _d = e.target.closest(".dropdown");
	let _m = document.querySelector(".dropdown-menu", _d);

	setTimeout(
		function () {
		const shouldOpen = _d.matches(":hover");
		_m.classList.toggle("show", shouldOpen);
		_d.classList.toggle("show", shouldOpen);

		_d.setAttribute("aria-expanded", shouldOpen);
		},
		e.type === "mouseleave" ? 300 : 0
	);
}

// On hover
const dropdownCheck = document.querySelector('.dropdown');

if (dropdownCheck !== null) { 
	document.querySelector(".dropdown").addEventListener("mouseleave", toggleDropdown);
	document.querySelector(".dropdown").addEventListener("mouseover", toggleDropdown);

	// On click
	document.querySelector(".dropdown").addEventListener("click", (e) => {
		const _d = e.target.closest(".dropdown");
		let _m = document.querySelector(".dropdown-menu", _d);
		if (_d.classList.contains("show")) {
			_m.classList.remove("show");
			_d.classList.remove("show");
		} else {
			_m.classList.add("show");
			_d.classList.add("show");
		}
	});
}
  

/**************************** Card Slider - Swiper ****************************/
var cardSlider = new Swiper('.card-slider', {
	autoplay: {
		delay: 4000,
		disableOnInteraction: false
	},
	loop: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	}
});


/**************************** Filter - Isotope ****************************/
const gridCheck = document.querySelector('.grid');

if (gridCheck !== null) { 
	// init Isotope
	var iso = new Isotope( '.grid', {
		itemSelector: '.element-item',
		layoutMode: 'fitRows'
	});

	// bind filter button click
	var filtersElem = document.querySelector('.filters-button-group');
	filtersElem.addEventListener( 'click', function( event ) {
		// only work with buttons
		if ( !matchesSelector( event.target, 'button' ) )  {
			return;
		}
		var filterValue = event.target.getAttribute('data-filter');
		// use matching filter function
		iso.arrange({ filter: filterValue });
	});
	
	// change is-checked class on buttons
	var buttonGroups = document.querySelectorAll('.button-group');
	for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
		var buttonGroup = buttonGroups[i];
		radioButtonGroup( buttonGroup );
	}
	
	function radioButtonGroup( buttonGroup ) {
		buttonGroup.addEventListener( 'click', function( event ) {
			// only work with buttons
			if ( !matchesSelector( event.target, 'button' ) )  {
				return;
			}
			buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
			event.target.classList.add('is-checked');
		});
	}
}


/************************* Back To Top Button *************************/
// Get the button
myButton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
function scrollFunctionBTT() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		myButton.style.display = "block";
	} else {
		myButton.style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; // for Safari
	document.documentElement.scrollTop = 0; // for Chrome, Firefox, IE and Opera
}

//ONLY IN DEVELOP
// alert("Últimos cambios: \n Cambio de imágenes en home y nosotros \n Texto en Home \n Aviso de cookies \n Menú adaptable centrado \n Reducción tamaño logo móvil");

// ----------------------------------------------------------
// ------------------------- RECORDAR -----------------------
// -----------------quitar el .html de los enlaces-----------
// ----------------------------------------------------------



/******************************** Form *********************************/

const 	$form = document.querySelector("#contactForm"),
		$formAdvice = document.querySelector(".form-advice"),
		$formAdviceBtn = document.querySelector("#fa-btn");

$form.addEventListener("submit", async function (e){
	e.preventDefault();
	const formData = new FormData(this);

	const response = await fetch(this.action, {
		method: this.method,
		body: formData,
		headers: {
			'Accept':'application/json'
		}
	})
	if (response.ok) {
		this.reset();
		$formPopUp.classList.add("hide");
		$formPopUp.classList.remove("show");
		$formAdvice.classList.remove("hide");
		$formAdvice.classList.add("show")
		// alert ("funciono el envio de formulario");
	}
});

$formAdviceBtn.addEventListener("click", () => {
	$formAdvice.classList.add("hide");
	$formAdvice.classList.remove("show");
});



/******************************** Cookies Advice *********************************/

// const 	d = document,
// 		$cookiesAdvice = d.querySelector("#cookies-advice"),
// 		$cookiesBtn = d.querySelector("#cookiesBtn");


// // Evento del boton para aceptar cookies
// $cookiesBtn.addEventListener("click", handleCookies);

// checkCookies();

// function handleCookies(e){
// 	localStorage.setItem("cookiesAccepted", true);
// 	checkCookies();
// };

// function checkCookies (){
// 	// Cookies ya fueron aceptadas
// 	if (localStorage.getItem("cookiesAccepted")){ //Evita el despliegue del aviso
// 		$cookiesAdvice.classList.add("hide");
// 		console.log("cookies aceptadas");
// 		// Cookies rechazadas
// 	} else {
// 		$cookiesAdvice.classList.remove("hide");
// 		console.log("cookies no aceptadas");
// 	}
// }

/******************************** Form PopUp *********************************/


const 	$formPopUp = document.querySelector("#form-popup"),
		$propiedadBtn = document.querySelectorAll(".propiedadBtn"),
		$formMensaje = document.querySelector("#formMensaje"),
		$formPropiedad = document.querySelector("#formPropiedad"),
		$formExit = document.querySelector("#form-exit");

$formExit.addEventListener("click", function (){
	$formPopUp.classList.remove("show");
	$formPopUp.classList.add("hide");
});

$propiedadBtn.forEach(el => {
	// console.log(el);
	el.addEventListener("click", function () {
		$formPopUp.classList.add("show");
		$formPopUp.classList.remove("hide");
		$formPropiedad.value = `${el.dataset.propiedad}`;
		$formMensaje.value = `Hola, me gustaría recibir más información sobre "${el.dataset.propiedad}", gracias.`;
	});
});

// $propiedadBtn.addEventListener("click", function () {
// 	$formPopUp.classList.add("show");
// 	$formPopUp.classList.remove("hide");
// });


/******************************** Prueba Gallery LightBox *********************************/

// Open the Modal
function openModal() {
	document.getElementById("myModal").style.display = "block";
  }
  
  // Close the Modal
  function closeModal() {
	document.getElementById("myModal").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
	showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
	showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");
	var captionText = document.getElementById("caption");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
	  slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
	  dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
	captionText.innerHTML = dots[slideIndex-1].alt;
  }