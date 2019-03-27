'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////




/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////
/*function add(){
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var date = document.getElementById("date").value;
	$.ajax({
		url:"../user/inscription/inscriptionController.class.php",
		datatype:"json",
		data:{name:name,email:email,phone:phone,password:password},
		success:function(data){
			alert(data);
		}


	})
}*/
function add(){
	var click = document.getElementById("click");
	click.classList.toggle("click");
}