let btnWhatsapp 		= document.querySelector(".btnWhatsapp");
let chatBot 			= document.querySelector(".div-chatbot");
let divNetwork 			= document.querySelector(".block-network");
let boxTextChatbot 		= document.querySelector(".box-text-chatbot");
let btnSendChatbot 		= document.querySelector(".btn-send-chatbot");
let btnPay1				= document.querySelector(".btnPay-1");
let btnPay2				= document.querySelector(".btnPay-2");
let btnPay3				= document.querySelector(".btnPay-3");
let btnPay4				= document.querySelector(".btnPay-4");
let btnPay5				= document.querySelector(".btnPay-5");
let btnPay6				= document.querySelector(".btnPay-6");
let divAbout            = document.querySelector(".div-about-image-text");
let divOurServices      = document.querySelector(".div-our-services");
let bodyChatbot         = document.querySelector(".body-chatbot");

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

btnPay1.onclick=function(){
    window.location.href="paypal1.html";
}


btnPay2.onclick=function(){
    window.location.href="paypal2.html";
}


btnPay3.onclick=function(){
    window.location.href="paypal3.html";
}


btnPay4.onclick=function(){
    window.location.href="paypal4.html";
}


btnPay5.onclick=function(){
    window.location.href="paypal5.html";
}


btnPay6.onclick=function(){
    window.location.href="paypal6.html";
}


window.addEventListener('scroll',function(){
    console.log("scrolling..............");
});


window.addEventListener('scroll', onscroll);

function onscroll(){
	let yPosition 	= window.pageYOffset;

	if(yPosition>550){
		divAbout.style="opacity:1;transition:2.5s";
        alert("oiiiiiiiiiiiii");
	}else if(yPosition<530){
        divAbout.style="opacity:0;transition:2s";
    }
   
    if(yPosition>1100){
        divOurServices.style="opacity:1;transition:3s";
    }
    
}
