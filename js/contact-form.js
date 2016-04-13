var CONTACT_FORM = {
    
    //Parameters to fill in
    form_id: 'contact-form',
    message_id: 'contact-form-message',
    handler_url: 'process/contact-form-handler.php',
    required_fields: {
        //list of validation methods can be found here:
        /*
         http://jqueryvalidation.org/category/methods/
         */
        'Name': {required: true},
        'Email': {required: true, email: true},
        'Brief Outline': {required: true}
    },
    //End of parameters

    init_validation: function () {
        $('#' + this.form_id).validate({
            debug: true,
            rules: this.required_fields
        });
    },

    validate: function(){
        "use strict";
        var form_valid = $('#'+this.form_id).valid();
        if (form_valid){
            this.send();
        }
    },
    
    send: function (){
        "use strict";
        $('#' + this.message_id).html('Sending');
        var form_id = this.form_id;
        var message_id = this.message_id;
        var url = this.handler_url;
        var formData = new FormData(document.getElementById(form_id));
        $.ajax({
            url: url,
            data: formData,
            type: 'POST',
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                var response = $.parseJSON(data);
                var message = response.message;
                var success = response.success;
                $('#' + message_id).html(message);
                if (success == 1) {
                    $('#' + form_id).trigger('reset');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#' + message_id).html('An error happened during communication with server. Error Type: ' + errorThrown + '. Please try again later');
            }
        })
    }
};