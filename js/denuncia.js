
function denuncia(){ 
	var descripcion = document.getElementById("textarea").value;

	if (descripcion.length == 0){
		alert("¡La descripción es importante!");
	}else{

		var denunciar = confirm("¿Quieres hacer una denuncia anónima en la PGJ DF?");

		if(denunciar == true){
			document.getElementById('fdenuncia').submit();
			alert("¡Gracias por sumarte a una denuncia colectiva!")
			location.href = "http://www.df.gob.mx/index.php/denuncia-anonima";
		}else{
			document.getElementById('fdenuncia').submit();
			alert("Gracias por sumarte a una denuncia colectiva");
		}
	}
}