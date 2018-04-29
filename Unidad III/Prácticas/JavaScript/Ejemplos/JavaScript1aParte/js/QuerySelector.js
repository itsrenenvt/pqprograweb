function hacerclic(){
	document.querySelector("#principal p").onclick=mostraralerta;
}

function mostraralerta(){
			alert('hizo clic!');
}
window.onload=hacerclic;
