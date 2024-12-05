(function($){
	jQuery(document).ready(function(){

		jQuery(".sendmessage").submit(function(){

			var message = jQuery(".message").val();

			$.ajax({
				'url' : 'chat.php',
				'type' : 'POST',
				'data' : {
					'chatupdate' : '',
					'message' : message
				},
				'success' : function(){
					jQuery('.message').val('');
				}
			});
			return false;
		})

		jQuery('.userlogin').submit(function(){
			var email = jQuery("input[name='email']").val();
			var password = jQuery("input[name='pass']").val();

			$.ajax({
				'url' : 'login.php',
				'type': 'POST',
				'data': {
					'login' : '',
					'email' : email,
					'password' : password
				},
				'success' : function(output){

					jQuery('.r-input').val('');
				}
			});
		})

		
		jQuery('.userregistration').submit(function(){

			var firstname = jQuery("input[name='fname']").val();
			var lastname = jQuery("input[name='lname']").val();
			var email = jQuery("input[name='email']").val();
			var password = jQuery("input[name='pass']").val();

			$.ajax({
				'url' : 'register.php',
				'type': 'POST',
				'data': {
					'register' : 'ase',
					'firstname' : firstname,
					'lastname' : lastname,
					'email' : email,
					'password' : password
				},
				'success' : function(output){
					jQuery('.success').html(output);

					jQuery('.r-input').val('');
				}
			});
			return false;
		})
	});	

	setInterval(function(){
		$.ajax({
			'url' : 'chat.php',
			'type': 'POST',
			'data': {
				'updatemessage' : ''
			},
			'success' : function(output){
				jQuery('.squarebox').html(output);
			}
		});
	}, 50);
}(jQuery))

