/*!
* Start Bootstrap - Grayscale v7.0.2 (https://startbootstrap.com/theme/grayscale)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
*/
//
// Scripts
// 

function calcula_precio() {
 
    //Cojo la cantidad introducida.  
     var valor = document.getElementById("valor").value;
      if(valor > 0){
        var valor
        }
          else{alert("Debes poner una valor");return false;  }
     var porcentaje = document.getElementById("porcentaje").value;
      if(porcentaje > 0){
        var porcentaje        }
          else{alert("Debes poner una porcentaje");return false;  }
     var iva = document.getElementById("iva").value;
      if(iva > 0){
        var iva
        }
          else{alert("Debes poner un valor de iva");return false;  }
     
     
    //Y aqui realizamos la ecuación.
    
        var ganancia = valor * (1 + (parseInt(porcentaje)/100)); 
        var precioConImpuestos = (1 + (parseInt(iva)/100)) * ganancia;
        document.getElementById("ganancia").value = ganancia - valor;
        document.getElementById("precio").value = precioConImpuestos;

    };
         
 
    function convertirtUnidades() {
		switch(origen_data) {
			case 'bits':
				switch(destino_data) {
					case 'bits':
						calculation = valor;
						break;
					case 'bytes':
						calculation = valor / 8;
						calculation = bytesToSize(calculation, 'byte')
						break;
					case 'kb':
						calculation = valor / 8;
						calculation = bytesToSize(calculation, 'kb');
						break;
					case 'mb':
						calculation = valor / 8;
						calculation = bytesToSize(calculation, 'mb');
						break;
					case 'gb':
						calculation = valor / 8;
						calculation = bytesToSize(calculation, 'gb');
						break;
					case 'tb':
						calculation = valor / 8;
						calculation = bytesToSize(calculation, 'tb');
						break;
				}
				break;
		}
		document.getElementById("data_value").value = valor + " " + origen_data + ' = ' + calculation + " " + destino_data;
	};


window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }
    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});