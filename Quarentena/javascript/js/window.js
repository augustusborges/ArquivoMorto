const assinar = document.getElementById("Assign");
const recarregar = document.getElementById("Reload");
const recarregarServer = document.getElementById("ReloadTrue");
const sobrescrever = document.getElementById("Replace");
const paraString = document.getElementById("ToString");
const popup = document.getElementById("Popup");
const close = document.getElementById("Close");
let janPopup = null;


//Encaminha o usuario apra uma página definida
assinar.addEventListener('click', function(){

	window.location.assign("http://www.globo.com");
});

//Recarrega a página usando o cache
recarregar.addEventListener('click', function(){

	window.location.reload();
});

//Recarrega a página usando o servidor
recarregarServer.addEventListener('click', function(){

	window.location.reload(true);
});

//Carrega uma nova url
sobrescrever.addEventListener('click', function(){

	window.location.replace('http://www.msn.com.br');
});

//Carrega uma nova url
paraString.addEventListener('click', function(){

	console.log(window.location.toString());
});

//Abre uma nova janela
// popup.addEventListener('click', function(){
// 	janPopup = window.open('https://sitepoint.com','SitePoint','width=400,height=400,resizable=yes');
// }); 

//Abre uma nova janela
popup.addEventListener('click', function(){
	janPopup = window.open('','SitePoint','width=400,height=400,resizable=yes');
	janPopup.document.write("Esse é o meu garoto");
}); 


//fecha uma janela aberta
close.addEventListener('click', function(){
	janPopup.close();
});

//Recebendo dados do formulario 
const btnenviar = document.getElementById("enviar");
btnenviar.addEventListener('click', function(){
	
	let nome = document.getElementById("nome");
	let sobrenome = document.getElementById("sobrenome");

	alert("Seja muito bem vindo "+ nome.value +" "+ sobrenome.value);

}); 


