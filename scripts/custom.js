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
        	},
        	// 'used': {
        	// 	message: ' ',
        	// 	validators: {
         //            callback: {
         //                message: ' ',
         //                callback: function(value, validator, $field){
         //                    console.log(value, validator, $field)
         //                    return true;
         //                }
         //            }
         //        }

        	// },
            

        }
	});

/*END*/ 
})