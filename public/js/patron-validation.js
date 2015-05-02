$(document).ready(function() {

    //Not needed, there is server side validation for the fields

	/*$('#first_name').on('click', function() {
		var input=$(this);
		console.log('#first_name');
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
		
		if (is_name.length < 1) {
			input.addClass("invalid")
		} else {
			input.addClass("valid")
		}
		
	});
	
	$('#student_id').on('click', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
		
			if (is_name.length < 1) {
			addClass("invalid")
		} else {
			addClass("valid")
		}
		
	});
	
	$('#email').on('input', function() {
		var input=$(this);
		var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		var is_email=re.test(input.val());
		if(is_email){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
	
		if (is_email.length < 1) {
			addClass("invalid")
		} else {
			addClass("valid")
		}
		
	});
	
	$('#last_name').on('click', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
		
		if (is_name.length < 1) {
			addClass("invalid")
		} else {
			addClass("valid")
		}
		
	});
	
	$('#phone').on('click', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
		
		if (is_name.length < 1) {
			addClass("invalid")
		} else {
			addClass("valid")
		}
		
	});
	
	$('#title').on('click', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
		
		if (is_name.length < 1) {
			addClass("invalid")
		} else {
			addClass("valid")
		}
		
	});
	
	$('#date_requested').on('click', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
		
		if (is_name.length < 1) {
			addClass("invalid")
		} else {
			addClass("valid")
		}
		
	});
	
	$('#special_instr').on('click', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
		
		if (is_name.length < 1) {
			addClass("invalid")
		} else {
			addClass("valid")
		}
		
	});
	
		$('#author').on('click', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
		
		if (is_name.length < 1) {
			addClass("invalid")
		} else {
			addClass("valid")
		}
		
	});
	
		$('#call_number').on('click', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name){input.removeClass("invalid").addClass("valid");}
		else{input.removeClass("valid").addClass("invalid");}
		
		if (is_name.length < 1) {
			addClass("invalid")
		} else {
			addClass("valid")
		}
		
	});*/
	
	$("#submit").click(function(event){
		var form_data=$("#patron").serializeArray();
		console.log(form_data);
		var error_free=true;
		for (var input in form_data){
			var element=$("#patron"+form_data[input]['name']);
			console.log(element);
			var valid=element.hasClass("valid");
			var error_element=$("span", element.parent());
			if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
				else{error_element.removeClass("error_show").addClass("error");}
		}
		
		if (element.val() == null) {
			error_element.removeClass("error").addClass("error_show")
		} else {
			alert('No errors: Form will be submitted');
		}
		
		if (!error_free){
			event.preventDefault();
		}
		else{
			alert('No errors: Form will be submitted');
		}
		console.log("#submit");
	});


	$("#itemB").hide();
	$("#itemC").hide();

	$("#addItem").on("click", function() {


		if (document.getElementById('itemB').style.display == 'block')
		{
		  $("#itemC").slideDown(750);
		}		
		
		if (document.getElementById('itemB').style.display == 'none')
		{
		  $("#itemB").slideDown(750);
		  document.getElementById('itemB').style.display = "block";
		}		


	});

	$("#B_remove").on("click", function() {

		document.getElementById('title_2').value = "";
		document.getElementById('date_requested_2').value = "";
		document.getElementById('author_2').value = "";
		document.getElementById('special_instr_2').value = "";
		document.getElementById('call_number_2').value = "";
		
		$("#itemB").slideUp(750);
	});	

	$("#C_remove").on("click", function() {

		document.getElementById('title_3').value = "";
		document.getElementById('date_requested_3').value = "";
		document.getElementById('author_3').value = "";
		document.getElementById('special_instr_3').value = "";
		document.getElementById('call_number_3').value = "";

		$("#itemC").slideUp(750);
	});		

	$(function() {
    $( "#date_requested" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });  
  });

	$(function() {
    $( "#date_requested_2" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });  
  });

	$(function() {
    $( "#date_requested_3" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });  
  });

});

