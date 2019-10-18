$(document).ready(function(){
	$("form").submit(function(e){
		var correo = $("#correo").val();
		var q = $("#pregunta").val();
		var c = $("#correcta").val();
		var i1 = $("#incorrecta1").val();
		var i2 = $("#incorrecta2").val();
		var i3 = $("#incorrecta3").val();
		var r = $("#complejidad").val();

		var correoIkasle = /([a-z]+[0-9]{3}@+(ikasle\.ehu\.eus|ikasle\.ehu\.es))/;
		var correoProfesor = /[a-z]+(\.?)+[a-z]@+(ehu\.es|ehu\.eus)/;

		if(correoIkasle.test(correo)==false&&correoProfesor.test(correo)==false){
			e.preventDefault();
			alert("Correo electrónico erróneo");
			return false;
		}

		if(q.length==0||c.length == 0||i1.length == 0||i2.length == 0||i3.length == 0){
			e.preventDefault();
			alert("Hay campos obligatorios vacíos");
			return false;
		}
		if(q.length<10){
			e.preventDefault();
			alert("La pregunta debe tener al menos 10 caracteres");
			return false;
		}

		alert("Datos verificados con éxito\n\nPregunta creada correctamente");
		return true;
	});
});