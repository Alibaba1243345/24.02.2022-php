<?php
class light{
	private $place;
	public function _construct($place){
		$this->place = $place;
	}
	public function on (){
		echo "Включи свет в".$this->place."<br>";
	}
	public function off(){
		echo "Включить свет в ".$this->place."<br>";
}


}


 ?>
