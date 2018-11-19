function calcular()
{
	var preci = 0;
	var canti = 0;
	var subto = 0;
	var total = 0;
	for (i = 1; i < 8; i++) {
		/*Invocar el Precio*/
		preci = parseFloat(document.getElementById("precio_"+i).innerHTML);

		/*Invocar La cantidad*/
		canti = parseFloat(document.getElementById("cant_"+i).value);

		/*Inicializar subto 0*/
		subto = 0;

		if(canti>0) /*Si la cantidad es mayor a 0*/
		{
			subto = preci*canti; /*Multiplica precio * Cantidad*/
			document.getElementById("subt_"+i).innerHTML = subto; /*Escribir el subtotal*/
		}
		total = total + subto;
	}
	/*Escribir el Total*/
	if(total>0)
	{
		document.getElementById("total").innerHTML = total;
		document.getElementById("hi_total").innerHTML = total;
	}
	else
	{
		alert("Ingresar al menos una Cantidad");
	}
}

function limpiar()
{
	var answer = confirm ("Desea Limpiar ?");
	if (answer){
		for (i = 1; i < 8; i++) {
			document.getElementById("subt_"+i).innerHTML = '';
			document.getElementById("cant_"+i).value = '';
			document.getElementById("total").innerHTML = '';
		}
	}
	else{
		return false;
	}
}

function comprar()
{
	var theForm = document.forms['formcompra']; // guardar en una variable el formulario
	// Ejecutar submit al formulario lo hago porque no tengo un boton dentro del formulario formcompra
	theForm.submit();
}