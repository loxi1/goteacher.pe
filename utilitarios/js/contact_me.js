/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function() {

    $("#contactFrom input,#envioMensaje textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // something to have when submit produces an error ?
            // Not decided if I need it yet
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var nombrecompleto = $("input#nombrecompleto").val();
            var celular = $("input#celular").val();
            var correo = $("input#correo").val();
            var mensage = $("textarea#mensage").val();
            var firstName = nombrecompleto; // For Success/Failure mensage
            // Check for white space in name for Success/Fail mensage
            if (firstName.indexOf(' ') >= 0) {
                firstName = nombrecompleto.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "./bin/contact_me.php",
                type: "POST",
                data: {
                    name: nombrecompleto,
                    celular: celular,
                    correo: correo,
                    mensage: mensage
                },
                cache: false,
                success: function() {
                    // Success mensage
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your mensage has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#envioMensaje').trigger("reset");
                },
                error: function() {
                    // Fail mensage
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + " it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com;>me@example.com</a> ? Sorry for the inconvenience!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#envioMensaje').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
