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
******************************************/

/********************************** Navigation **********************************/
// Collapse the navbar by adding the top-nav-collapse class
window.onscroll = function () {
	scrollFunction();
	scrollFunctionBTT(); // back to top button
};

window.onload = function () {
	scrollFunction();
};

function scrollFunction() {
	if (document.documentElement.scrollTop > 30) {
		document.getElementById("navbar").classList.add("top-nav-collapse");
	} else if ( document.documentElement.scrollTop < 30 ) {
		document.getElementById("navbar").classList.remove("top-nav-collapse");
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
alert("Últimos cambios: \n Cambio de imágenes en home y nosotros \n Texto en Home \n Aviso de cookies \n Menú adaptable centrado \n Reducción tamaño logo móvil");

// ----------------------------------------------------------
// ------------------------- RECORDAR -----------------------
// ----------------Eliminar el alert del formulario----------
// -----------------quitar el .html de los enlaces----------
// ----------------------------------------------------------



/******************************** Form *********************************/

const $form = document.querySelector("#contactForm");

$form.addEventListener("submit", handleSubmit);

async function handleSubmit (e){
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
		alert ("funciono el envio de formulario");
	}
}



/******************************** Cookies Advice *********************************/

const 	d = document,
		$cookiesAdvice = d.querySelector("#cookies-advice"),
		$cookiesBtn = d.querySelector("#cookiesBtn");


// Evento del boton para aceptar cookies
$cookiesBtn.addEventListener("click", handleCookies);

checkCookies();

function handleCookies(e){
	localStorage.setItem("cookiesAccepted", true);
	checkCookies();
};

function checkCookies (){
	// Cookies ya fueron aceptadas
	if (localStorage.getItem("cookiesAccepted")){ //Evita el despliegue del aviso
		$cookiesAdvice.classList.add("hide");
		console.log("cookies aceptadas");
		// Cookies rechazadas
	} else {
		$cookiesAdvice.classList.remove("hide");
		console.log("cookies no aceptadas");
	}
}

