$(function)(){

	$("#cpass").on('change',function(e))
	{
		e.preventDefault();
		var cpass = $(this).val();
		var pass = $("#pass").val();
		if(pass != cpass)
		{
			$(this).val("");
			$("#cpasser").html("<span class='alert alert-danger'>Passwords do not match</span>");
		}
		else{
			
		}
	}
}
