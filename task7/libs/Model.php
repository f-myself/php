<?php 

class Model
{ 
   public function __construct()
   {

   }
   	
	public function getArray()
   {	    
		return array('%TITLE%'=>'Contact Form', '%STATUS%'=>'', '%ERRORS%'=>'', '%NAME%'=>'', '%EMAIL%'=>'', '%TEXT%'=>'', '%SELECTED%'=>'');	
   }

   public function getSelected($subject)
   {
   		if($subject == 'Problems with switching')
   		{
   			return '%SUB_SWITCH%';
   		}

   		if($subject == 'Problems with brain')
   		{
   			return '%SUB_BRAIN%';
   		}
   		return false;
   }
	
	public function checkForm($arr)
	{
		//print_r($arr);
		if(trim(strip_tags($arr['name'])) != trim($arr['name']) or 
						   !$arr['name'])
		{
			return ERR_BAD_NAME;
		}

		if (!filter_var($arr['email'], FILTER_VALIDATE_EMAIL))
		{
			return ERR_BAD_EMAIL;
		}

		if(!$arr['subject'])
		{
			return ERR_BAD_SUBJECT;
		}

		if(trim(strip_tags($arr['text'])) != trim($arr['text']) or
						   !$arr['text'])
		{
			return ERR_BAD_TEXT;
		}
		return true;
	}
   
	public function sendEmail($arr)
	{
		$currentDate = date("F j, Y, g:i a");
		$clientIp = $_SERVER['REMOTE_ADDR'];
		$msgContent = "
			Sended at {$currentDate} from {$clientIp}<hr>
			Name: {$arr['name']}<br>
			E-mail: {$arr['email']}<br>
			Text: {$arr['text']}
		";
		if(mail(SEND_TO,$arr['subject'],$msgContent,"Content-type:text/html; charset = utf-8\r\nFrom:{$arr['email']}"))
		{
			return OK_SENDED;
		}
		return ERR_NOT_SENDED;
	}		
}
