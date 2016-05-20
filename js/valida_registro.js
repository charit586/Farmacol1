with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && nickname.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			nickname.focus();
		}
		if(ok && correoElectronico.value==""){
			ok=false;
			alert("Debe escribir su email");
			correoElectronico.focus();
		}
		if(ok && contrasena.value==""){
			ok=false;
			alert("Debe escribir su password");
			contrasena.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de password");
			confirm_password.focus();
		}

		if(ok && contrasena.value!= confirm_password.value){
			ok=false;
			alert("Los passwords no coinciden");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}
