'use strict';

$(document).ready(() => {

    let formSignUp = $('#formSignUp');

    jQuery.extend(jQuery.validator.messages, {
        required: 'Este campo es requerido',
        email: 'Por favor ingresa un correo electrónico válido',
        minlength: jQuery.validator.format("Por favor ingresa al menos {0} caracteres")
    });

    $.validator.addMethod("regex", function (value, element, regexp) {
        return this.optional(element) || regexp.test(value);
    }, "El valor ingresado es incorrecto");

    $.validator.addMethod("letter", function (value, element) {
        return this.optional(element) || value.match(/[A-z]/);
    }, "La contraseña debe contener al menos una letra");

    $.validator.addMethod("capital", function (value, element) {
        return this.optional(element) || value.match(/[A-Z]/);
    }, "La contraseña debe contener al menos una letra mayúscula");

    $.validator.addMethod("number", function (value, element) {
        return this.optional(element) || value.match(/\d/);
    }, "La contraseña debe contener al menos un número");

    formSignUp.validate({
        errorClass: 'invalid-feedback', rules: {
            full_name: {required: true, regex: /^[A-zÀ-ú\s]+$/},
            username: {required: true, regex: /^[A-z0-9.\S]+$/},
            email: {required: true, email: true},
            password: {required: true, minlength: 8, letter: true, capital: true, number: true},
            valid_password: {required: true, equalTo: '#password'}
        }, messages: {
            valid_password: {
                equalTo: 'Las contraseñas son diferentes'
            }
        }, highlight: function (element) {
            $(element).addClass('error');
        }, unhighlight: function (element) {
            $(element).removeClass('error');
        }, errorPlacement: function (error, element) {
            error.insertAfter('#message-' + element.attr("name"));
        }
    });

    $(document).on('click', '.show-password', (e) => {
        const inputPWD = $('#password'), inputValidPWD = $('#valid_password');
        const showPWD = $('#show-pwd'), hiddenPWD = $('#hidden-pwd')
        const showValidatePWD = $('#show-valid-pwd'), hiddenValidatePWD = $('#hidden-valid-pwd');
        switch (e.target.id) {
            case 'show-pwd':
                inputPWD.attr('type', 'text');
                showPWD.removeClass('show-password').addClass('hidden-password');
                hiddenPWD.removeClass('hidden-password').addClass('show-password');
                break;
            case 'hidden-pwd':
                inputPWD.attr('type', 'password');
                hiddenPWD.removeClass('show-password').addClass('hidden-password');
                showPWD.removeClass('hidden-password').addClass('show-password');
                break;
            case 'show-valid-pwd':
                inputValidPWD.attr('type', 'text');
                showValidatePWD.removeClass('show-password').addClass('hidden-password');
                hiddenValidatePWD.removeClass('hidden-password').addClass('show-password');
                break;
            case 'hidden-valid-pwd':
                inputValidPWD.attr('type', 'password');
                hiddenValidatePWD.removeClass('show-password').addClass('hidden-password');
                showValidatePWD.removeClass('hidden-password').addClass('show-password');
                break;
        }
    });
});
