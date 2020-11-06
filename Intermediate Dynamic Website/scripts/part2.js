/**
*Author: Fouad nazir Ahmad Saleemi
*Target: enquire.html, payment.html
*Purpose: The purpose of this file is to validate form data, store date locally, 
          tranfer data from enquire page to payment page and send data to 
		  the server.
*Created: 27/04/2020
*Last updated: 04/05/2020
*Credits: I used the lecture slides and demo project sent by the llecturer.
*/




"use strict";
var debug = true;
function validate() /**To validate the enquire form data fields.*/
{
	var firstName = document.getElementById("firstname").value; 
	var lastName = document.getElementById("lasttname").value;
	var emailAdrress = document.getElementById("email").value;
	var phoneNumber = document.getElementById("phonenumber").value;
	var memberShipDuration = document.getElementById("membershipduration").value;
	var platinum = document.getElementById("platinum1").checked;
	var gold = document.getElementById("gold1").checked;
	var silver = document.getElementById("silver1").checked;
	var stateInfo = document.getElementById("state").value;
	var postCode = document.getElementById("postcode").value;
	var fullName = firstName + ""+ lastName; 
	var totalPrice = "";
	var Price = "";
	var Product = "";
	var regxM = /^[0-9]+$/;
    var result = true;
	var errorMessage = "";
	
	
	
	if(!debug)
	{
		if(memberShipDuration< 0)
	{
		errorMessage += "You have entered a negative number. Please enter a positive number.\n";
		var result = false;
	}
	
	if(regxM.test(memberShipDuration))
	{
		
		
	}
	else{
		errorMessage += "Please enter a digit. \n";
		var result = false;
	}
	if(memberShipDuration === "")
	{
		errorMessage += "Number of months cannot be left empty.\n";
		var result = false;
	}
	
	
	if(platinum == false && gold == false && silver == false)
	{
		errorMessage += "Please select a product\n";
		var result = false;
		
	}
	
	if(stateInfo === "ACT")
	{
		if(postCode.charAt(0) == 0)
		{
			
		}
		else{
			errorMessage += "You have selected ACT.Please enter postcode staring with 0.";
			var result = false;
		}
	}

    if(stateInfo === "VIC")
	{
		if(postCode.charAt(0) == 3 || postCode.charAt(0) == 8)
		{
			
		}
		else{
			errorMessage += "You have selected VIC. Please enter postcode staring with 3 or 8.";
			var result = false;
		}
	}
	
	if(stateInfo === "NSW")
	{
		if(postCode.charAt(0) == 1 || postCode.charAt(0) == 2)
		{
			
		}
		else{
			errorMessage += "You have selected NSW. Please enter postcode staring with 1 or 2.";
			var result = false;
		}
	}
	
	if(stateInfo === "QLD")
	{
		if(postCode.charAt(0) == 4 || postCode.charAt(0) == 9)
		{
			
		}
		else{
			errorMessage += "You have selected QLD. Please enter postcode staring with 4 or 9.";
			var result = false;
		}
	}
	
	if(stateInfo === "WA")
	{
		if(postCode.charAt(0) == 6 )
		{
			
		}
		else{
			errorMessage += "You have selected WA. Please enter postcode staring with 6.";
			var result = false;
		}
	}
	
	if(stateInfo === "NT")
	{
		if(postCode.charAt(0) == 0 )
		{
			
		}
		else{
			errorMessage += "You have selected NT. Please enter postcode staring with 0.";
			var result = false;
		}
	}
	
	if(stateInfo === "SA")
	{
		if(postCode.charAt(0) == 5 )
		{
			
		}
		else{
			errorMessage += "You have selected SA. Please enter postcode staring with 5.";
			var result = false;
		}
	}
	
	if(stateInfo === "TAS")
	{
		if(postCode.charAt(0) == 7 )
		{
			
		}
		else{
			errorMessage += "You have selected TAS. Please enter postcode staring with 7.";
			var result = false;
		}
	}
	
	
   
   
    
		
	}
	if(platinum == true)
	{
		totalPrice = 120 * memberShipDuration;
		Price = 120;
		Product = "Platinum";
		
	}
	
	if(gold == true)
	{
		totalPrice = 90 * memberShipDuration ;
		Price = 90;
		Product = "Gold";
		
	}
	
	if(silver == true)
	{
		totalPrice = 70 * memberShipDuration;
		Price =70
		Product = "Silver";
		
	}
	
    if(errorMessage !== "")
	{
		alert(errorMessage);
	}
    
   if(result)
   {
	   saveEnquireFormInformation (firstName, lastName, emailAdrress, phoneNumber, postCode, totalPrice, memberShipDuration, stateInfo, Product, fullName, Price);
   }



  return result;

}
/**----------------------------------------------------------------------------------------------------------------------------------------------------*/

function validateForm() /**To validate the payment form data fields.*/
{
	
	var visaCard = document.getElementById("visa").checked;
	var masterCard = document.getElementById("mastercard").checked;
	var americanExpress = document.getElementById("americanexpress").checked;
	var cardName = document.getElementById("cardname").value;
	var cardNumber = document.getElementById("cardnumber").value;
	var cardExpiryDate = document.getElementById("cardexpirydate").value;
	var cardValidationNumber = document.getElementById("cardverificationnumber").value;
    var result = true;
	var errorMessage = "";
	var regxCardName = /^[a-zA-Z \s]{1,40}$/;
	var regxExpiryDate = /^[0-9]{2}-[0-9]{2}$/;
	var regxCardNumber = /^[0-9]{15,16}$/;
	var regxForVisa = /^[0-9]{16}$/;
	var regxForMastercard = /^(?:5[1-5][0-9]{14})$/;
	var regxForAmricanexpress = /^(?:3[47][0-9]{13})$/;
	var regxForValidationVisaMastercard = /^[0-9]{3}$/;
	var regxForValidationAmericanexpress = /^[0-9]{4}$/;
	var res = cardExpiryDate.substring(0, 2);
	var res1 = cardExpiryDate.substring(3, 5);
	var date = "04";
	var year = 20;
	
	if(!debug)
	{
		if(cardName === "")
	{
		errorMessage += "Name on the card cannot be left empty.\n";
	    var result = false;
	}
	
	else if(regxCardName.test(cardName))
	{
		
		
	}
	else{
		errorMessage += "Please enter card name in correct format. \n";
		var result = false;
	}
	
	
	if(cardExpiryDate === "")
	{
		errorMessage += "Expiry date of the card cannot be left empty.\n";
		var result = false;
	}
	
	else if(res < date  || res1 < year)
	{
		errorMessage += "Incorrect expiry date. Please enter a valid expiry date.\n";
		var result = false;
	}
	else if(regxExpiryDate.test(cardExpiryDate))
	{
		if(res < '01' || res > 12)
		{
			errorMessage += "Please enter a valid expiry month. \n";
			
			var result = false;
		}
		
	}
	
	else{
		errorMessage += "Please enter expiry date in correct format. \n";
		var result = false;
	}
	
   
  
    if(cardNumber === "")
	{
		errorMessage += "Card number cannot be left empty. \n";
		var result = false;
	}
	
	else if(regxCardNumber.test(cardNumber))
	{
		if(visaCard == true )
		{
			if(regxForVisa.test(cardNumber) && cardNumber.charAt(0) == 4)
			{
				
			}
			else{
				errorMessage += "Your card number doesnot match with visa card. \n";
				var result = false;
	        }
			
		}
		
		if(masterCard == true )
		{
			if(regxForMastercard.test(cardNumber))
			{
				
			}
			else{
				errorMessage += "Your card number doesnot match with mastercard. \n";
				var result = false;
	        }
			
		}
		
		if(americanExpress == true )
		{
			if(regxForAmricanexpress.test(cardNumber))
			{
				
			}
			else{
				errorMessage += "Your card number doesnot match with Americanxpress. \n";
				var result = false;
	        }
			
		}
		
		
	}
	
	
	else{
		errorMessage += "Please enter a valid card number. \n";
		var result = false;
	}
	
	
	
    if(cardValidationNumber === "")
			{
				errorMessage += "Card verification number (CVV) cannot be left empty.\n";
				var result = false;
			}
	
	else if(visaCard == true || masterCard == true )
		{
			 if(regxForValidationVisaMastercard.test(cardValidationNumber))
			{
				
			}
			else{
				errorMessage += "Visa or Master cards CVV only contains 3 digits. \n";
				var result = false;
	        }
			
		}
	
	else if(americanExpress == true  )
		{
			 if(regxForValidationAmericanexpress.test(cardValidationNumber))
			{
				
			}
			else{
				errorMessage += "Americanexpress CVV only contains 4 digits. \n";
				var result = false;
	        }
			
		}
	
	
     if(visaCard == false && masterCard == false && americanExpress == false)
	{
		errorMessage += "Please select a card type.\n";
		var result = false;
		
	}
		
	}
	
	
	
	
	if(errorMessage !== "")
	{
		alert(errorMessage);
	}

    
  return result;
}

/**------------------------------------------------------------------------------------------------------------------------------------------------*/

function saveEnquireFormInformation (firstName, lastName, emailAdrress, phoneNumber, postCode, totalPrice, memberShipDuration, stateInfo, Product, fullName, Price) /**To save the enquire form data on browser storage..*/
{
	localStorage.setItem("firstName", firstName);
	localStorage.setItem("lastName", lastName);
	localStorage.setItem("emailAdrress", emailAdrress);
	localStorage.setItem("phoneNumber", phoneNumber);
	localStorage.setItem("postCode", postCode);
	localStorage.setItem("totalPrice", totalPrice);
	localStorage.setItem("memberShipDuration", memberShipDuration);
	localStorage.setItem("stateInfo", stateInfo);
	localStorage.setItem("Product", Product);
	localStorage.setItem("fullName", fullName);
	localStorage.setItem("Price", Price);
}	

/**----------------------------------------------------------------------------------------------------------------------------------------------------------*/


function getInfo(){ /**To get stored data from browser and shown in the payment form.*/
	if (typeof(Storage)!=="undefined"){
		if (localStorage.getItem("firstName") !== null){ 
		
			document.getElementById("firstname").value = localStorage.getItem("firstName");	
		 }
		 
		if (localStorage.getItem("lastName") !== null){  
			
			document.getElementById("lasttname").value = localStorage.getItem("lastName");	
		 }
		 
		 
		 if (localStorage.getItem("emailAdrress") !== null){ 
			
			document.getElementById("email").value = localStorage.getItem("emailAdrress");	
		 }
		 
		 if (localStorage.getItem("phoneNumber") !== null){
			
			document.getElementById("phonenumber").value = localStorage.getItem("phoneNumber");	
		 }
		 
		 if (localStorage.getItem("postCode") !== null){
			
			document.getElementById("postcode").value = localStorage.getItem("postCode");	
		 }
		
		 if (localStorage.getItem("totalPrice") !== null){
			
			document.getElementById("totalprice").value = localStorage.getItem("totalPrice");	
		 }
		 
		 if (localStorage.getItem("memberShipDuration") !== null){ 
			
			document.getElementById("membershipduration").value = localStorage.getItem("memberShipDuration");	
		 }
		 
	     if (localStorage.getItem("stateInfo") !== null){
			
			document.getElementById("state").value = localStorage.getItem("stateInfo");	
		 }
		 
		 if (localStorage.getItem("Product") !== null){
			
			document.getElementById("product").value = localStorage.getItem("Product");	
		 }
		 	
		 if (localStorage.getItem("fullName") !== null){
			
			document.getElementById("cardname").value = localStorage.getItem("fullName");	
		 }
		 if (localStorage.getItem("Price") !== null){
			
			document.getElementById("price").value = localStorage.getItem("Price");	
		 }


	}
}
	
/**------------------------------------------------------------------------------------------------------------------------------------*/


function cancelOrder() /**To erase the stored data from browser and redirect to the index page..*/
{
	localStorage.clear();
	location.href="index.html";
}

/**------------------------------------------------------------------------------------------------------------------------------------*/

function init() { /**To listen events of the forms and call th functins to save and get information.*/
	if (document.getElementById("enquireform")!=null) {  
		document.getElementById("enquireform").onsubmit = validate;
		
	}
	else if (document.getElementById("paymentform")!=null) { 
		 getInfo();
		document.getElementById("paymentform").onsubmit = validateForm;
		document.getElementById("cancelorder").onclick = cancelOrder;
		
		
	}
}


/**----------------------------------------------------------------------------------------------------------------------------------*/


window.addEventListener("load",init); /**To load both enquire and payment forms*/



