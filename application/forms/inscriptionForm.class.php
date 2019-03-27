<?php 

class inscriptionForm extends Form{
	
	public function build(){
	 	 $this->addFormField('name');
	 	 $this->addFormField('email');
	 	 $this->addFormField('phone');
	 	 $this->addFormField('date');
	 	 $this->addFormField('image');
    

    }
}
 