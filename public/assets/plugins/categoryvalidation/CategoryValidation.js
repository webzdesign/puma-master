var validator = $('#categoryform').validate({
    rules: {
        name: {
            required: true,
            remote: {
                type: 'POST',
                url: pathsrc,
                data: {
                    name: function() {
                        return $("#name").val();
                    },
                },
            },
        },
        image: { required: true, extension: "jpg|jpeg|png|JPG|JPEG|PNG", },
        // is_subcategory: { required: true,},
        is_active: { required: true, },
    },
    messages: {
        name: { required: 'Cateogry Name Is Required.', remote: "Cateogry Already Exist." },
        image: { required: 'Image Is Required.', },
        // is_subcategory: { required: 'Status Is Required.', },
        is_active: { required: 'Status Is Required.', },
    },
    errorPlacement: function(error, element) {
        error.css('color', 'red').appendTo(element.parent("div"));
    },
    submitHandler: function(form) {

        var formdata = new FormData($("#categoryform")[0]);
        var url = imagesrc;
        $.ajax({
            async: true,
            type: "POST",
            url: url,
            data: formdata, // serializes the form's elements.
            contentType: false,
            processData: false,
            success: function(data) {
                if (data) {
                    $('.category_id').append($("<option value=" + data.id + ">" + data.value + "</option>"));
                    $('.model_category_id').append($("<option value=" + data.id + ">" + data.value + "</option>"));
                }
                $('#myModal').modal('toggle');
            },
            error: function(data) {
                alert('error');
            }
        });
    }
});

$("#addcategory").on('click', function() {
    $('#categoryform').trigger("reset");
    validator.resetForm();
});