

 $(document).ready(function () {
     $("#product-add").validate({
    // alert('sdfgsfd');

    rules: {
        title: {
            required: true,
            number:true,
            minlength:10,
            maxlength:15

        },
        code: {
            required: true,
            // minlength: 6  // <-- removed underscore

        }

    },
    messages: {
        title: {
            required: "this field is required",
            number:"accept only number "
        },
        code: {
            required: "Enter recipient name",
            minlength: "Name should be at least {0} characters long" // <-- removed underscore
        }
    },
    submitHandler: function (form) { // for demo
        alert('valid form');  // for demo
        return true;  // for demo
    }
});

});
