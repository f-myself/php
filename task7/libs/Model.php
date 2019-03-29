<?php 

class Model
{ 
   public function __construct()
   {

   }
   	
	public function getArray()
   {	    
		return array('%TITLE%'=>'Contact Form', '%ERRORS%'=>'Empty field', '%NAME%'=>'', '%EMAIL%'=>'', '%TEXT%'=>'');	
   }
	
	public function checkForm()
	{
		return true;
	}
   
	public function sendEmail()
	{
		// return mail()
	}		
}
