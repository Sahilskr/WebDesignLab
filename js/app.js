$(function(){
	$('#rollno').on('blur',function(){
		if(!/(\d{2}((CO)|(DCO)|(EE)|(DEE)|(EX)|(DEX)|(ME)|(DME)|(CE)|(DCE)|(CES)|(DCES))\d{2,3})/i.test(this.value)){
			alert("Invalid Roll no");
			this.value="";
			$(this).focus();
		}
	});

	$('#sname').on('keypress',function(e){
		if(/[^a-zA-z ]/.test(e.key)){
			alert("Invalid Name. Only Alphabets and Spaces are allowed");
			this.value="";
			$(this).focus();
			e.stopPropagation();
			return false;
		}
	});

	$('#address').on('blur',function(){
		if(this.value.length<50 || this.value.length>150){
			alert("Invalid Address.Length must be between 50 to 150 characters");
			this.value="";
			$(this).focus();
		}
	});
});