	
	const fechaActual = new Date();
	const anoActual = parseInt(fechaActual.getFullYear());
	const anoMes = parseInt(fechaActual.getMonth());
	const anoDia = parseInt(fechaActual.getDay());
	const anoHora = parseInt(fechaActual.getHours());
	const anoMinutos = parseInt(fechaActual.getMinutes);




window.onload = () => {
	setTimeout(() => {
		document.getElementsByTagName('body')[0];
	}, 1000);
}

/*
let html = document.getElementById("tiempo");

setInterval(function(){
	tiempo = new Date();

	horas = tiempo.getHours();
	minutos = tiempo.getMinutes();
	segundos = tiempo.getSeconds();

	//evitar los 0 o numeros individuales
	if(horas<10)
		horas = "0"+horas;
	if(minutos<10)
		minutos = "0"+minutos;
	if(segundos<10)
		segundos = "0"+segundos;

	html.innerHTML = horas+" : "+minutos+" : "+segundos;
},1000);
*/
