
//Load Web App JavaScript Dependencies/Plugins
define([
    "jquery",
    "modernizr",
    "underscore",
    "backbone",
    "bootstrap",
    "plugins",
    "ekko-lightbox.min"
], function($)
{
    $(function()
    {

        //do stuff
        console.log('required plugins loaded...');

        //jQuery Captcha Validation

        WEBAPP = {

            settings: {},
            cache: {},

            init: function() {

                //DOM cache
                this.cache.$form = $('#contactusForm');
                this.cache.$refreshCaptcha = $('#refresh-captcha');
                this.cache.$captchaImg = $('img#captcha');
                this.cache.$captchaInput = $(':input[name="captcha"]');

                this.eventHandlers();
                this.setupValidation();

            },

            eventHandlers: function() {

                //generate new captcha
                WEBAPP.cache.$refreshCaptcha.on('click', function(e)
                {
                    WEBAPP.cache.$captchaImg.attr("src","php/newCaptcha.php?rnd=" + Math.random());
                });
            },

            setupValidation: function()
            {

                WEBAPP.cache.$form.validate({
                   onkeyup: false,
                   rules: {
                        "captcha": {
                            "required": true,
                            "remote" :
                            {
                              url: 'php/checkCaptcha.php',
                              type: "post",
                              data:
                              {
                                  code: function()
                                  {
                                      return WEBAPP.cache.$captchaInput.val();
                                  }
                              }
                            }
                        }
                    },
                    messages: {
                        "captcha": {
                            "required": "Please enter the verifcation code.",
                            "remote": "Verication code incorrect, please try again."
                        }
                    },
                    submitHandler: function(form)
                    {
                        /* -------- AJAX SUBMIT ----------------------------------------------------- */
                        var formData = {
                                "firstName": $("[name=firstName]").val(),
                                "lastName": $("[name=lastName]").val(),
                                "email": $("[name=email]").val(),
                                "phone": $("[name=phone]").val(),
                                "address": $("[name=address]").val(),
                                "project": $("[name=project]").val()
                            };
                        var submitRequest = $.ajax({
                             type: "POST",
                             url: "php/handlecontactus.php",
                             data: formData
                        });

                        submitRequest.done(function(msg)
                        {
                            //success
                            $("#mainContent").html("<p class='lead'>Thank you for contacting us!</p><p>We will be in touch at our earliest opportunity.</p>")
                        });

                        submitRequest.fail(function(jqXHR, textStatus)
                        {
                            //fail
                           $("#mainContent").html("<p class='lead'>Uh oh, it didn't work....</p><p>Something went wrong with the form submission. Please try again or reach us through our contact info above.</p>")
                        });

                    }

                });

            }

        }

        WEBAPP.init();

    });
});