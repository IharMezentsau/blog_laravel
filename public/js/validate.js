// just for the demos, avoids form submit

jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});
$("#formReg").validate({
    onsubmit: false,
    submitHandler: function(form) {
        if ($(form).valid())
        {
            form.submit();
        }
        return false; // prevent normal form posting
    },
    rules: {
        passwordReg: "required",
        confirmPasswordReg: {
            equalTo: "#passwordReg"
        }
    }
});