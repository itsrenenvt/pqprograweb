function hacerclic(){

var lista=document.querySelectorAll("#principal p");
lista[1].onclick=mostraralerta;
}


function mostraralerta(){
alert('hizo clic!');
}
window.onload=hacerclic;
