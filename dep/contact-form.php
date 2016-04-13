<!-- email form -->

<form id="contact-form" class="email-form validate-form" novalidate>
    <fieldset>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 col-md-offset-1 col-lg-offset-2 required-row">
                <input type="text" name="Name" class="form-control" placeholder="Name *">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 required-row">
                <input type="email" name="Email" class="form-control" placeholder="Email *">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2 required-row">
                            <textarea name="Outline" cols="30" class="form-control" rows="10"
                                      placeholder="Brief Outline *"></textarea>
            </div>
        </div>
        <div class="row">
            <div id="contact-form-recaptcha"></div>
        </div>
        <div class="row text-center">
            <div class="col-xs-12">
                <button id="submit" class="btn-submit" type="button" onclick="CONTACT_FORM.validate()">SUBMIT</button>
            </div>
        </div>
        <div class="row">
            <p id="contact-form-message"></p>
        </div>
    </fieldset>
</form>

<script>
    var CONTACT_FORM = {

        //Parameters to fill in
        form_id: 'contact-form',
        message_id: 'contact-form-message',
        handler_url: 'process/contact-form-handler.php',
        required_fields: {
            'Name': {required: true},
            'Email': {required: true, email: true},
            'Brief Outline': {required: true}
        },
        //End of parameters

        init_validation: function () {
            $('#' + this.form_id).validate({
                debug: false,
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
                    alert(data);
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
    var CaptchaCallback = function () {
        grecaptcha.render('contact-form-recaptcha', {
            'sitekey': '6LdzOxwTAAAAAHj2Wt_lB6Xh9yChpGW9oBwx9atP',
            'theme': 'light'
        });
    };

    //Initialize validation
    CONTACT_FORM.init_validation();
</script>

