<?php

class Controller
{
		private $model;
		private $view;

		public function __construct()
		{		
		    $this->model = new Model();
			$this->view = new View(TEMPLATE);	
				
			if(isset($_POST['email']))
			{	
				
				$this->pageSendMail();
			}
			else
			{
				$this->pageDefault();	
			}
			
			$this->view->templateRender();			
	    }	
		
		private function pageSendMail()
		{
			$checkResult = $this->model->checkForm($_POST);
			if($checkResult === true)
			{
				$status = $this->model->sendEmail($_POST);
				$mArray = $this->model->getArray();
				$mArray['%STATUS%'] = $status;
				$this->view->addToReplace($mArray);	
				return true;
			}
				$subject = $this->model->getSelected($_POST['subject']);
				$mArray = $this->model->getArray();	
				$mArray['%NAME%'] = $_POST['name'];
				$mArray['%EMAIL%'] = $_POST['email'];
				$mArray['%TEXT%'] = $_POST['text'];
				if ($subject)
				{
					$mArray[$subject] = 'selected';
				} 
				$mArray['%ERRORS%'] = $checkResult;
		        $this->view->addToReplace($mArray);
	        return false;	
		}	
			    
		private function pageDefault()
		{   
		   $mArray = $this->model->getArray();		
	       $this->view->addToReplace($mArray);			   
		}				
}
