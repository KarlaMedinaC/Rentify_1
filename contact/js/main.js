(function($) {
    "use strict";

    // Formulario
    var contactForm = function() {
        if ($('#contactForm').length > 0) {
            $("#contactForm").validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    subject: "required",
                    message: {
                        required: true,
                        minlength: 10
                    }
                },
                messages: {
                    name: "Escribe tu nombre",
                    email: {
                        required: "Escribe tu correo electrónico",
                        email: "Escribe un correo electrónico válido"
                    },
                    subject: "Selecciona un interés",
                    message: {
                        required: "Escribe tu mensaje",
                        minlength: "El mensaje debe tener al menos 10 caracteres"
                    }
                }
            });
        }
    };
    contactForm();

})(jQuery);
