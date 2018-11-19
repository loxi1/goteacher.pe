$( document ).ready(function() {
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });

    $('#formInformes').validate({
        rules:
        {
            inputNombres:
            {
                required:true
            },
            inputApellidos:
            {
                required:true
            },
            inputCelular:
            {
                required:true,
                number: true
            },
            inputCorreo:
            {
                required:true,
                email: true
            },
            inputDistrito: 
            {
                required:true
            },
            idCurso:
            {
                required:true
            },
            textareaComentario: 
            {
                required:true
            },
            adjuntarCV:
            {
                required:true,
                extension: "pdf|doc|docx"
            }               
        },
        messages: {
            inputNombres: 
            {
                required: "Ingresar Nombre"
            },
           inputApellidos: 
           {
               required: "Ingrese Apellidos"
           },
           inputCelular: 
           {
               required: "Ingrese Celular",
               number: "Solo numeros"
           },
           inputCorreo:
           {
                required: "Ingrese Correo",
                email: "Solo Correos"
            },
            inputDistrito:
            {
                required: "Seleccione Distrito"
            },
            idCurso:
            {
                required: "Seleccione Curso"
            },
            textareaComentario:
            {
                required:"Escribir Comentario"
            },
            adjuntarCV:
            {
                required: "Adjuntar CV",
                extension: "Adjunte un formato correcto pdf, doc o docx"
            }
        },      

        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) 
        {
            if(element.parent('.input-group').length) 
            { 
                 error.insertAfter(element.parent());                
            } 
            else 
            {
                if (element.attr("type") == "checkbox") 
                {
                    error.insertAfter(element.closest('.check_radio').children('.error_check') );
                } 
                else 
                {
                    error.insertAfter(element.parent()); console.log(element.attr("type"));
                }
            }
        }
    });
});
