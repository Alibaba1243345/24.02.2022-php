<?php
require_once "Commanand.php";

class LightOffCommand implements Command{
	private $light;
	public  function _construct($light){
		$this->light = $light;
	}
	public function execute() {
		$this->light->off();
	}

}


?>
