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
    
        var ganancia = valor * (parseInt(porcentaje)/100); 
        var precioConImpuestos = valor * (parseInt(iva)/100);
        var precioventa = parseInt(valor) + parseInt(ganancia) + parseInt(precioConImpuestos);
        document.getElementById("ganancia").value = ganancia;
        document.getElementById("precio").value = precioventa;

    };
         
 
    function convertirUnidades() {
        

            var data = document.getElementById("data").value;
            var origen_data = document.getElementById("origen_data").value;
            var destino_data = document.getElementById("destino_data").value;
            var calculation = "";
            var value_modifier = 1024;

            switch(origen_data) {
                case "bytes":
                    switch(destino_data) {
                        case "bytes":
                            calculation = data;
                            break;
                        case "kb":
                            calculation = calculation_replicator(data, value_modifier, 1)
                            break;
                        case "mb":
                            calculation = calculation_replicator(data, value_modifier, 2)
                            break;
                        case "gb":
                            calculation = calculation_replicator(data, value_modifier, 3)
                            break;
                        case "tb":
                            calculation = calculation_replicator(data, value_modifier, 4)
                            break;
                    }
                    break;
                case "kb":
                    switch(destino_data) {
                        case "bytes":
                            calculation = calculation_replicate_partwo(data, value_modifier, 1);
                            break;
                        case "kb":
                            calculation = data;
                            break;
                        case "mb":
                            calculation = calculation_replicator(data, value_modifier, 1)
                            break;
                        case "gb":
                            calculation = calculation_replicator(data, value_modifier, 2)
                            break;
                        case "tb":
                            calculation = calculation_replicator(data, value_modifier, 3)
                            break;
                    }
                    break;
                case "mb":
                    switch(destino_data) {
                        case "bytes":
                            calculation = calculation_replicate_partwo(data, value_modifier, 2);
                            break;
                        case "kb":
                            calculation = calculation_replicate_partwo(data, value_modifier, 1);
                            break;
                        case "mb":
                            calculation = data;
                            break;
                        case "gb":
                            calculation = calculation_replicator(data, value_modifier, 1)
                            break;
                        case "tb":
                            calculation = calculation_replicator(data, value_modifier, 2)
                            break;
                    }
                    break;
                case "gb":
                    switch(destino_data) {
                        case "bytes":
                            calculation = calculation_replicate_partwo(data, value_modifier, 3);
                            break;
                        case "kb":
                            calculation = calculation_replicate_partwo(data, value_modifier, 2);
                            break;
                        case "mb":
                            calculation = calculation_replicate_partwo(data, value_modifier, 1);
                            break;
                        case "gb":
                            calculation = data;
                            break;
                        case "tb":
                            calculation = calculation_replicator(data, value_modifier, 1)
                            break;
                    }
                    break;
                case "tb":
                    switch(destino_data) {
                        case "bytes":
                            calculation = calculation_replicate_partwo(data, value_modifier, 4);
                            break;
                        case "kb":
                            calculation = calculation_replicate_partwo(data, value_modifier, 3);
                            break;
                        case "mb":
                            calculation = calculation_replicate_partwo(data, value_modifier, 2);
                            break;
                        case "gb":
                            calculation = calculation_replicate_partwo(data, value_modifier, 1);
                            break;
                        case "tb":
                            calculation = data;
                            break;
                    }
                    break;
            }
            document.getElementById("valor_convertido").value = calculation + " " + destino_data;
        }
        function calculation_replicator(calculation, value_modifier, number_of_times) {
            for (var x = 0; x <= number_of_times-1; x++) {
                calculation = calculation / value_modifier;
            }
            return calculation;
        }
        function calculation_replicate_partwo(calculation, value_modifier, number_of_times) {
            for (var x = 0; x <= number_of_times-1; x++) {
                calculation = calculation * value_modifier;
            }
            return calculation;
        };

window.addEventListener("DOMContentLoaded", event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector("#mainNav");
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove("navbar-shrink")
        } else {
            navbarCollapsible.classList.add("navbar-shrink")
        }
    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener("scroll", navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector("#mainNav");
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: "#mainNav",
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector(".navbar-toggler");
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll("#navbarResponsive .nav-link")
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener("click", () => {
            if (window.getComputedStyle(navbarToggler).display !== "none") {
                navbarToggler.click();
            }
        });
    });

});