let btnWhatsapp 		= document.querySelector(".btnWhatsapp");
let chatBot 			= document.querySelector(".div-chatbot");
let divNetwork 			= document.querySelector(".block-network");
let boxTextChatbot 		= document.querySelector(".box-text-chatbot");
let btnSendChatbot 		= document.querySelector(".btn-send-chatbot");
let btnPay1				= document.querySelectorAll(".btnPay-1");
let btnPay2				= document.querySelectorAll(".btnPay-2");
let btnPay3				= document.querySelectorAll(".btnPay-3");
let btnPay4				= document.querySelectorAll(".btnPay-4");
let btnPay5				= document.querySelectorAll(".btnPay-5");
let btnPay6				= document.querySelectorAll(".btnPay-6");

btnWhatsapp.onclick=function(){
	chatBot.classList.toggle("hide-chatbot");

	if (chatBot.style="display:none") {
		divNetwork.style="z-index:5";
		chatBot.style="z-index:0";
	}
}


btnSendChatbot.onclick=function(){
	if (boxTextChatbot.value.length==0) {
		alert("Type your text here.");
		window.location.href = "https://www.w3schools.com";
	}else {
		boxTextChatbot.innerHTML="";
	}
}

alert("oi");