$( document ).ready(function() {
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });

    
    $('a.enviarmsn').on('click', function(e) {
        e.prevenenviarmsntDefault();     //evitar el eventos del enlace normal
        var strAncla=$(this).attr('href'); //id del ancla
        $('body,html').stop(true,true).animate({                
                scrollTop: $(strAncla).offset().top
        },1000);        
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
            textareaMensaje: 
            {
                required:true
            }/*,
            checkServ:
            {
                required:true
            },
            idCheck:
            {
                required:"#radio1:checked",
                minlength:1
            } */              
        },
        messages: 
        {
            inputNombres: 
            {
                required: ""
            },
           inputApellidos: 
           {
               required: ""
           },
           inputCelular: 
           {
               required: "",
               number: "Solo numeros"
           },
           inputCorreo:
           {
                required: "",
                email: "Solo Correos"
            },
            inputDistrito:
            {
                required: ""
            },
            textareaMensaje:
            {
                required:""
            }/*,
            checkServ:
            {
                required: "Seleccione Servicio"
            },
            idCheck:
            {
                required:"Seleccione Universidad",
                minlength:"Marque uno"
            }*/
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
            { //console.log(element.parent('.input-group'));
                 error.insertAfter(element.parent());                
            } 
            else 
            {
                /*if (element.attr("type") == "checkbox") 
                {
                    error.insertAfter(element.closest('.check_radio').children('.error_check') );
                } 
                else 
                {
                    error.insertAfter(element.parent());
                }
                console.log(element.attr("type"));*/
                error.insertAfter(element.parent());
            }
        },
        submitHandler: function() {
            $.ajax({
                url: baseurl + 'informes/guardarinformacion',
                type: 'POST',
                data: $('#formInformes').serialize(),
                dataType: "json",
                beforeSend: function() {
                    //showLoader();
                },
                success: function(response) {
                    if (response.code==1) {
                        window.location.href = response.data;
                    } else {

                    }/**/
                },
                complete: function() {
                    //hideLoader();
                }
            });
        }
    });

    /*var radio1 = $("#radio1");
    var inicio = radio1.is(":checked"); console.log("Inicio->"+inicio);
    var idCheck = $("#universidad_elije")[inicio ? "removeClass" : "addClass"]("hide");
    var idCheckInput = idCheck.find("input").attr("disabled", !inicio);


    $('#divServicios input[type="checkbox"]').on('change', function() {
        inicio = false;
        if($(this).is(":checked")) 
        {
            $( '#divServicios input[type="checkbox"]' ).prop( "checked", false );
            $( '#'+$(this).attr("id") ).prop( "checked", true );
            inicio = $(this).attr("id")=="radio1" ? true : false;        
        }
        else
        {
            $( '#divServicios input[type="checkbox"]' ).prop( "checked", false );
        }
        idCheck = $("#universidad_elije")[inicio ? "removeClass" : "addClass"]("hide");
        idCheckInput = idCheck.find("input").attr("disabled", !inicio);
        if(!inicio)
        {
            $( '#universidad_elije input[type="checkbox"]' ).prop( "checked", false );
            $("#formInformes #contdivcheckuniv").html('');
        }
        
    });

    $('#divuniv input[type="checkbox"]').on('change', function() {
        if($(this).is(":checked"))  {
            $('#formInformes #contdivcheckuniv').append("<input id='todasuniv"+$(this).val()+"' type='hidden' value='"+$(this).val()+"' name='todasuniv[]' />");
        } else {
            $("#todasuniv"+$(this).val()).remove();
        }
        var select = $(this).is(":checked") ? "SI" : "NO";  
        console.log($(this).val() + '<-SELECCIONO->'+select);       
    });  
*/

});