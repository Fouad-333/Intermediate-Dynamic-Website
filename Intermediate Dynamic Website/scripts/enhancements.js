/**
*Author: Fouad nazir Ahmad Saleemi
*Target: enquire.html, payment.html
*Purpose: The purpose of this file is to implement timer for 
          payment.html page.
*Created: 27/04/2020
*Last updated: 04/05/2020
*Credits: I used the lecture slides and demo project sent by the llecturer.
*/


"use strict";

var initialTime = 3;
var time = initialTime * 60;
 




function startTimer() /** To start the timer and show error message upon time-out and redirest to the home page.*/
{
	var minutes = 	Math.floor(time/60);
	var seconds = time % 60;
	 
	document.getElementById("timeout").innerHTML = `${minutes}: ${seconds}`;
	time--;
	
	if(minutes === 0 && seconds === 0)
	{
		alert("timeout");
		location.href="index.html";
	}
}

setInterval(startTimer, 1000); /** It calls setInterval method.*/
