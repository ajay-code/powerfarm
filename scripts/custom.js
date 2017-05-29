$(function () {
	var bootstrapValidator = $('#form').bootstrapValidator({
		feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        	name: {
        		message: 'Name is required',
        		validators: {
        			notEmpty: {
        				message: 'Please Provide an Name'
        			}
        		}
        	},
        	email: {

        	},
        	new: {
        		message: '',
        		required: {}
        	},
        	used: {
        		message: '',
        		required: {}

        	}

        }
	});
console.log('sdf')

/*END*/ 
})