/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




function validatePassword(){
var pass2=document.getElementById("Cpass").value;
var pass1=document.getElementById("Pass1").value;

if(pass1!=pass2)
	document.getElementById("Cpass").setCustomValidity("Passwords Don't Match");
else
	document.getElementById("Cpass").setCustomValidity('');	 
//empty string means no validation error
}