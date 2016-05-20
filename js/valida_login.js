with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && nickname.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			nickname.focus();
		}
		if(ok && contrasena.value==""){
			ok=false;
			alert("Debe escribir su password");
			contrasena.focus();
		}
		if(ok){ submit(); }
	}
}
