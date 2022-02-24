<?php

require_once 'Comand.php';

class LightOnCommand implements Command {
	private $light;

	public function _construct($light){
		$this->light = $light;
}

	public function execute(){
		$this->light->on();
	}

}

?>
