$(document).ready(function() {
	$("#form_register").validate({
		rules: {
			"fullname": {
				required: true,
				maxlength: 20
			},
            "email": {
				required: true,
				email: true
			},
            "username": {
                required: true,
                minlength: 5
            },
            "password": {
				required: true,
				minlength: 4
			},
            "phone_number": {
				required: true,
				minlength: 10
			},
            "address": {
				required: true,
				maxlength: 50
			},
		},
		messages: {
			"fullname": {
				required: "Bắt buộc nhập username",
				maxlength: "Hãy nhập tối đa 20 ký tự"
			},
            "email": {
				required: "Bắt buộc nhập email",
				maxlength: "Hãy nhập lại email"
			},
            "username": {
                required: "Bắt buộc nhập username",
                minlength: "Hãy nhập ít nhất 5 ký tự"
            },
            "password": {
                required: "Bắt buộc nhập password",
                minlength: "Hãy nhập ít nhất 4 ký tự"
            },
            "phone_number": {
				required: "Bắt buộc nhập phone_number",
				maxlength: "Hãy nhập tối thiểu 10 ký tự"
			},
            "address": {
				required: "Bắt buộc nhập address",
				maxlength: "Hãy nhập tối đa 30 ký tự"
			},
		}
	});

    $("#form_login").validate({
		rules: {
            "username": {
                required: true,
                minlength: 5
            },
            "password": {
				required: true,
				minlength: 4
            }
		},
		messages: {
            "username": {
                required: "Bắt buộc nhập username",
                minlength: "Hãy nhập ít nhất 5 ký tự"
            },
            "password": {
                required: "Bắt buộc nhập password",
                minlength: "Hãy nhập ít nhất 4 ký tự"
            }
		}
	});
});